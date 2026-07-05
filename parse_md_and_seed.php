<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\Recommendation;
use App\Models\DimensionInterpretation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

echo "Starting Markdown Parser (Line by Line)...\n";

$filePath = 'C:/Users/AIO/Downloads/combined_fixed_clean_final.md';
if (!file_exists($filePath)) {
    die("File not found: $filePath\n");
}

$content = file_get_contents($filePath);
$files = explode('## File: ', $content);
array_shift($files); // Remove header part


echo "Deleting dimension_scores...\n";
DB::table('dimension_scores')->delete();
echo "Deleting results...\n";
DB::table('results')->delete();
echo "Deleting user_answers...\n";
DB::table('user_answers')->delete();
echo "Deleting exam_sessions...\n";
DB::table('exam_sessions')->delete();
echo "Deleting DimensionInterpretation...\n";
DimensionInterpretation::query()->delete();
echo "Deleting Recommendation...\n";
Recommendation::query()->delete();
echo "Deleting AnswerOption...\n";
AnswerOption::query()->delete();
echo "Deleting Question...\n";
Question::query()->delete();
echo "Deleting Dimension...\n";
Dimension::query()->delete();
echo "Deleting Assessment...\n";
Assessment::query()->delete();


echo "Cleared old data.\n";

foreach ($files as $fileData) {
    $lines = explode("\n", $fileData);
    $pathLine = trim(array_shift($lines));
    $pathParts = explode('/', $pathLine);
    $category = trim($pathParts[0]);
    
    if ($category === 'path' || empty($category)) {
        continue;
    }
    
    $title = 'Unknown Scale';
    $intro = '';
    $options = [];
    $questionsText = '';
    $overallText = '';
    $dimInterpText = '';
    
    $currentSection = '';
    
    // Line by line state machine
    foreach ($lines as $line) {
        $trimLine = trim($line);
        if (str_starts_with($trimLine, '# ')) {
            $title = trim(substr($trimLine, 2));
            continue;
        }
        
        if (str_starts_with($trimLine, '## ')) {
            $sectionTitle = trim(substr($trimLine, 3));
            if (str_contains($sectionTitle, 'الهدف من المقياس')) {
                $currentSection = 'intro';
            } elseif (str_contains($sectionTitle, 'مقياس الإجابة')) {
                $currentSection = 'options';
            } elseif (str_contains($sectionTitle, 'عبارات المقياس')) {
                $currentSection = 'questions';
            } elseif (str_contains($sectionTitle, 'تفسير النتيجة الكلية')) {
                $currentSection = 'overall';
            } elseif (str_contains($sectionTitle, 'تفسير المحاور') || str_contains($sectionTitle, 'تفسير كل نمط')) {
                $currentSection = 'dimInterp';
            } else {
                $currentSection = 'other';
            }
            continue;
        }
        
        if ($currentSection === 'intro') {
            $intro .= $line . "\n";
        } elseif ($currentSection === 'options') {
            if (preg_match('/\|\s*(.+?)\s*\|\s*(\d+)\s*\|/', $trimLine, $optMatch)) {
                $label = trim($optMatch[1]);
                $score = (int)trim($optMatch[2]);
                if ($label !== 'الإجابة' && !str_contains($label, '---')) {
                    $options[] = ['label' => $label, 'score' => $score];
                }
            }
        } elseif ($currentSection === 'questions') {
            $questionsText .= $line . "\n";
        } elseif ($currentSection === 'overall') {
            $overallText .= $line . "\n";
        } elseif ($currentSection === 'dimInterp') {
            $dimInterpText .= $line . "\n";
        }
    }
    
    echo "Processing: $title [$category]\n";
    
    if (empty($options)) {
        $options = [
            ['label' => 'نعم', 'score' => 2],
            ['label' => 'إلى حد ما', 'score' => 1],
            ['label' => 'لا', 'score' => 0]
        ];
    }
    
    $user = \App\Models\User::first();
    $userId = $user ? $user->id : null;
    
    $scoring_type = 'overall_score';
    if (empty(trim($overallText)) && !empty(trim($dimInterpText))) {
        if (str_contains($title, 'نمط') || str_contains($title, 'أنماط')) {
            $scoring_type = 'highest_dimension';
        } else {
            $scoring_type = 'dimension_only';
        }
    }
    
    $assessment = Assessment::create([
        'category' => $category,
        'title_ar' => $title,
        'description_ar' => trim($intro),
        'scoring_type' => $scoring_type,
        'time_limit_min' => 15,
        'is_active' => true,
        'created_by' => $userId,
    ]);
    
    $currentDimension = null;
    $orderIndex = 0;
    $dimOrderIndex = 0;
    
    $qLines = explode("\n", $questionsText);
    foreach ($qLines as $line) {
        $line = trim($line);
        if (empty($line)) continue;
        
        if (preg_match('/^###\s+(.+)$/', $line, $dimMatch)) {
            $dimName = preg_replace('/^(أولًا|ثانيًا|ثالثًا|رابعًا|خامسًا|سادسًا|سابعًا|ثامنًا|تاسعًا|عاشرًا|أولاً|ثانياً|ثالثاً):?\s*/ui', '', trim($dimMatch[1]));
            $currentDimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => trim($dimName),
                'max_score' => 0,
                'order_index' => $dimOrderIndex++
            ]);
        }
        elseif (preg_match('/^\d+\.\s+(.+)$/', $line, $qMatch)) {
            $qText = trim($qMatch[1]);
            $isReversed = false;
            if (Str::contains($qText, '(معكوس)') || Str::contains($qText, '(عكسي)')) {
                $isReversed = true;
                $qText = str_replace(['(معكوس)', '(عكسي)'], '', $qText);
            }
            
            if (!$currentDimension) {
                $currentDimension = Dimension::create([
                    'assessment_id' => $assessment->id,
                    'name_ar' => 'عام',
                    'max_score' => 0,
                    'order_index' => $dimOrderIndex++
                ]);
            }
            
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => $currentDimension->id,
                'text_ar' => trim($qText),
                'is_reversed' => $isReversed,
                'order_index' => $orderIndex++
            ]);
            
            $maxOptScore = 0;
            foreach ($options as $opt) {
                AnswerOption::create([
                    'question_id' => $question->id,
                    'label_ar' => $opt['label'],
                    'score_value' => $opt['score']
                ]);
                $maxOptScore = max($maxOptScore, $opt['score']);
            }
            
            $currentDimension->increment('max_score', $maxOptScore);
        }
    }
    
    // Overall
    if (!empty(trim($overallText))) {
        // Split by ### مستوى or ### المستوى
        $levelBlocks = preg_split('/###\s*(?:مستوى|المستوى)\s+/u', $overallText, -1, PREG_SPLIT_NO_EMPTY);
        
        foreach ($levelBlocks as $block) {
            $lines = explode("\n", trim($block));
            $header = trim(array_shift($lines));
            
            if (empty($header)) continue;
            
            $cleanHeader = trim(strip_tags(str_replace(['###', '**'], '', $header)));
            
            $levelKey = $cleanHeader;
            if (strpos($header, 'مرتفع') !== false) $levelKey = 'high';
            elseif (strpos($header, 'متوسط') !== false) $levelKey = 'medium';
            elseif (strpos($header, 'منخفض') !== false) $levelKey = 'low';
            
            preg_match_all('/\d+/', $header, $matches);
            $numbers = $matches[0];
            
            $low_threshold = null;
            $high_threshold = null;
            
            if (count($numbers) >= 2) {
                $low_threshold = min((int)$numbers[0], (int)$numbers[1]);
                $high_threshold = max((int)$numbers[0], (int)$numbers[1]);
            } elseif (count($numbers) == 1) {
                $val = (int)$numbers[0];
                if ($levelKey === 'high') {
                    $low_threshold = $val;
                    $high_threshold = 999;
                } elseif ($levelKey === 'low') {
                    $low_threshold = 0;
                    $high_threshold = $val;
                }
            }
            
            $descLines = [];
            $progLines = [];
            $inPrograms = false;
            
            foreach ($lines as $line) {
                $trimmed = trim($line);
                if (empty($trimmed)) continue;
                
                if (strpos($trimmed, '**التوصيات:**') !== false || strpos($trimmed, 'تحتاج إلى برامج') !== false || strpos($trimmed, 'ننصحك ب') !== false || strpos($trimmed, 'التوصيات المقترحة') !== false || strpos($trimmed, 'البرامج المقترحة') !== false) {
                    $inPrograms = true;
                    // Skip adding the "التوصيات" header word itself to programs if it's alone
                    if (strpos($trimmed, '**التوصيات:**') !== false && strlen($trimmed) < 20) {
                        continue; 
                    }
                }
                
                if (preg_match('/^(?:-|\d+\.)\s+(.+)/', $trimmed, $listMatch)) {
                    $progLines[] = $listMatch[1];
                    $inPrograms = true;
                } else {
                    if ($inPrograms && !empty($progLines)) {
                        $progLines[] = $trimmed;
                    } else {
                        $descLines[] = $trimmed;
                    }
                }
            }
            
            Recommendation::updateOrCreate(
                [
                    'assessment_id' => $assessment->id,
                    'level' => $levelKey,
                ],
                [
                    'description_ar' => implode("\n", $descLines),
                    'programs_ar' => count($progLines) > 0 ? implode("\n", $progLines) : 'لا يوجد برامج مسجلة.',
                    'high_threshold' => $high_threshold,
                    'low_threshold' => $low_threshold
                ]
            );
        }
    }
    
    // Dim Interpretations
    if (!empty(trim($dimInterpText))) {
        $dimBlocks = preg_split('/###\s+/u', $dimInterpText, -1, PREG_SPLIT_NO_EMPTY);
        
        foreach ($dimBlocks as $block) {
            $blockLines = explode("\n", trim($block));
            $dimNameRaw = array_shift($blockLines);
            $dimName = preg_replace('/^(محور|القيادة|البعد.*?:)\s+/u', '', trim($dimNameRaw));
            
            // Try to match the dimension name
            $searchWord = explode(' ', trim($dimName))[0];
            $dbDim = Dimension::where('assessment_id', $assessment->id)
                ->where('name_ar', 'LIKE', '%' . $searchWord . '%')
                ->first();
                
            if ($dbDim) {
                $blockContent = implode("\n", $blockLines);
                $levelBlocks = preg_split('/(?=\*\*.*?(?:مستوى|المستوى)\s*(?:مرتفع|متوسط|منخفض).*?\*\*)/u', $blockContent, -1, PREG_SPLIT_NO_EMPTY);
                
                foreach ($levelBlocks as $lvlBlock) {
                    $lvlLines = explode("\n", trim($lvlBlock));
                    $header = trim(array_shift($lvlLines));
                    $cleanHeader = strip_tags(str_replace('**', '', $header));
                    
                    if (empty($cleanHeader)) {
                        continue;
                    }
                    
                    $levelKey = trim($cleanHeader);
                    if (strpos($cleanHeader, 'مرتفع') !== false) $levelKey = 'high';
                    elseif (strpos($cleanHeader, 'متوسط') !== false) $levelKey = 'medium';
                    elseif (strpos($cleanHeader, 'منخفض') !== false) $levelKey = 'low';
                    
                    preg_match_all('/\d+/', $cleanHeader, $matches);
                    $numbers = $matches[0];
                    
                    $low_threshold = null;
                    $high_threshold = null;
                    
                    if (count($numbers) >= 2) {
                        $low_threshold = min((int)$numbers[0], (int)$numbers[1]);
                        $high_threshold = max((int)$numbers[0], (int)$numbers[1]);
                    } elseif (count($numbers) == 1) {
                        $val = (int)$numbers[0];
                        if ($levelKey === 'high') {
                            $low_threshold = $val;
                            $high_threshold = 999;
                        } elseif ($levelKey === 'low') {
                            $low_threshold = 0;
                            $high_threshold = $val;
                        }
                    }
                    
                    $text = trim(implode("\n", $lvlLines));
                    if (empty($text)) {
                        $text = $cleanHeader; // fallback
                    }
                    
                    DimensionInterpretation::updateOrCreate(
                        [
                            'dimension_id' => $dbDim->id,
                            'level' => $levelKey,
                        ],
                        [
                            'interpretation_text_ar' => $text,
                            'high_threshold' => $high_threshold,
                            'low_threshold' => $low_threshold
                        ]
                    );
                }
            }
        }
    }
}

echo "Done.\n";
