<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$mdFilePath = 'C:\Users\AIO\Downloads\marketing_404_questions.md';
$phpUnitsPath = base_path('database/data/graded_exams/marketing_ibta/units');

if (!file_exists($mdFilePath)) {
    die("Markdown file not found.\n");
}

// 1. Parse MD file
$mdContent = file_get_contents($mdFilePath);
$mdQuestions = [];

$blocks = explode('### سؤال ', $mdContent);
array_shift($blocks); // remove intro

foreach ($blocks as $block) {
    $lines = explode("\n", $block);
    $qNum = trim($lines[0]);
    
    $qText = '';
    $correctOptions = [];
    $allOptions = [];
    $inOptions = false;
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (str_starts_with($line, '- **نص السؤال:**')) {
            $qText = trim(str_replace('- **نص السؤال:**', '', $line));
        } elseif (str_starts_with($line, '- **الخيارات:**')) {
            $inOptions = true;
        } elseif ($inOptions && str_starts_with($line, '- ')) {
            $optText = trim(substr($line, 2));
            $isCorrect = false;
            if (str_ends_with($optText, '✅')) {
                $isCorrect = true;
                $optText = trim(str_replace('✅', '', $optText));
            }
            $allOptions[] = $optText;
            if ($isCorrect) {
                $correctOptions[] = $optText;
            }
        } elseif ($inOptions && str_starts_with($line, '- **الإجابة الصحيحة')) {
            $inOptions = false;
        }
    }
    
    $mdQuestions[] = [
        'num' => $qNum,
        'text' => $qText,
        'options' => $allOptions,
        'correct' => $correctOptions
    ];
}

echo "Parsed " . count($mdQuestions) . " questions from MD file.\n\n";

// Helper function to normalize text
function normalize($text) {
    // Remove spaces, punctuation, special chars, normalize alef/ya/taa marboota
    $text = mb_strtolower($text);
    $text = preg_replace('/[^\p{L}\p{N}]/u', '', $text); // Keep only letters and numbers
    $text = str_replace(['أ','إ','آ','ا'], 'ا', $text);
    $text = str_replace(['ة','ه'], 'ه', $text);
    $text = str_replace(['ي','ى'], 'ي', $text);
    return $text;
}

// 2. Load PHP questions
$phpQuestions = [];
for ($i = 1; $i <= 13; $i++) {
    $unitNum = str_pad($i, 2, '0', STR_PAD_LEFT);
    $file = $phpUnitsPath . "/unit_{$unitNum}.php";
    if (file_exists($file)) {
        $unitData = require $file;
        if (isset($unitData['questions'])) {
            foreach ($unitData['questions'] as $q) {
                $phpQuestions[] = [
                    'unit' => $i,
                    'text' => $q['text_ar'],
                    'options' => $q['options'],
                    'original' => $q
                ];
            }
        }
    }
}

echo "Loaded " . count($phpQuestions) . " questions from PHP files.\n\n";

// 3. Find duplicates in PHP files
echo "--- Duplicates in PHP Files ---\n";
$seenText = [];
$duplicatesFound = 0;
foreach ($phpQuestions as $idx => $phpQ) {
    $normText = normalize($phpQ['text']);
    if (isset($seenText[$normText])) {
        echo "- Question duplicate found:\n";
        echo "  1) Unit " . $seenText[$normText]['unit'] . ": " . $seenText[$normText]['text'] . "\n";
        echo "  2) Unit " . $phpQ['unit'] . ": " . $phpQ['text'] . "\n";
        $duplicatesFound++;
    } else {
        $seenText[$normText] = ['unit' => $phpQ['unit'], 'text' => $phpQ['text']];
    }
}
if ($duplicatesFound === 0) echo "No duplicates found.\n";
echo "\n";

// 4. Compare answers between PHP and MD
echo "--- Answer Mismatches ---\n";
$mismatches = 0;
foreach ($phpQuestions as $phpQ) {
    $normPhpQ = normalize($phpQ['text']);
    
    // Find matching question in MD
    $matchedMd = null;
    foreach ($mdQuestions as $mdQ) {
        if (normalize($mdQ['text']) === $normPhpQ || strpos($normPhpQ, normalize($mdQ['text'])) !== false || strpos(normalize($mdQ['text']), $normPhpQ) !== false) {
            $matchedMd = $mdQ;
            break;
        }
    }
    
    if ($matchedMd) {
        // Compare options
        $phpCorrectNorm = [];
        foreach ($phpQ['options'] as $opt) {
            if ($opt['is_correct']) {
                $phpCorrectNorm[] = normalize($opt['option_text_ar']);
            }
        }
        
        $mdCorrectNorm = [];
        foreach ($matchedMd['correct'] as $c) {
            $mdCorrectNorm[] = normalize($c);
        }
        
        // If they don't match, report it
        $diff1 = array_diff($phpCorrectNorm, $mdCorrectNorm);
        $diff2 = array_diff($mdCorrectNorm, $phpCorrectNorm);
        
        if (!empty($diff1) || !empty($diff2)) {
            // Wait, maybe the options are written slightly differently? E.g. "أ) ..." vs "...".
            // Let's strip standard prefixes like "أ) ", "ب) ", "a)", "b)", etc. before diffing, or our normalize function already removes punctuation! 
            // Normalize removed all punctuation, so "أ) الخيار" becomes "االخيار".
            // Let's check if they still differ.
            // Often, PHP file has "أ) الإجابة" while MD has "الإجابة". Our normalize removes punctuation but keeps "أ".
            // Let's do a more careful check: see if the core text matches.
            $isRealMismatch = false;
            $phpCorrectRaw = array_filter($phpQ['options'], fn($o) => $o['is_correct']);
            $phpCorrectRawTexts = array_column($phpCorrectRaw, 'option_text_ar');
            
            // To avoid false positives from prefixes like "أ) ", we can check if the MD correct option is a substring of the PHP correct option or vice versa.
            $matchedCount = 0;
            foreach ($phpCorrectNorm as $pC) {
                foreach ($mdCorrectNorm as $mC) {
                    if (strpos($pC, $mC) !== false || strpos($mC, $pC) !== false) {
                        $matchedCount++;
                        break;
                    }
                }
            }
            
            if ($matchedCount !== max(count($phpCorrectNorm), count($mdCorrectNorm))) {
                echo "- Mismatch found for question:\n";
                echo "  Text: " . $phpQ['text'] . "\n";
                echo "  MD  Correct: " . implode(' | ', $matchedMd['correct']) . "\n";
                echo "  PHP Correct: " . implode(' | ', $phpCorrectRawTexts) . "\n\n";
                $mismatches++;
            }
        }
    } else {
        // echo "Could not find MD match for PHP question: " . $phpQ['text'] . "\n";
    }
}
if ($mismatches === 0) echo "No answer mismatches found.\n";

echo "Done.\n";
