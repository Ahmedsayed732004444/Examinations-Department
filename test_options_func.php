<?php

// A function to extract options from a markdown file's text BEFORE the 'عبارات المقياس' section.
function extractOptions($lines) {
    $options = [];
    $parsingOptions = false;
    foreach($lines as $line) {
        $trimLine = trim($line);
        if (str_starts_with($trimLine, '## عبارات')) {
            break; // Stop when questions start
        }
        if (preg_match('/\|\s*(الإجابة|الاستجابة|الخيارات|الخيار|نطاق العبارات)\s*\|\s*(الدرجة|النقاط|نعم|دائماً)\s*\|/ui', $trimLine) || preg_match('/\|.*نعم.*إلى حد ما.*لا.*/ui', $trimLine)) {
            $parsingOptions = true;
            continue;
        }
        if ($parsingOptions && preg_match('/\|[\s\-]+\|[\s\-]+\|/', $trimLine)) {
            continue;
        }
        if ($parsingOptions && preg_match('/\|\s*(.+?)\s*\|\s*(\d+)\s*\|/', $trimLine, $optMatch)) {
            $label = trim($optMatch[1]);
            $score = (int)trim($optMatch[2]);
            $options[] = ['label' => $label, 'score' => $score];
        } elseif ($parsingOptions && !empty($trimLine) && !str_starts_with($trimLine, '|')) {
            $parsingOptions = false;
        }
    }
    return $options;
}

$content = file_get_contents('database/seeders/data/combined_fixed_clean_final.md');
$files = explode('## File: ', $content);
array_shift($files);
foreach($files as $file) {
    $lines = explode("\n", $file);
    $path = trim(array_shift($lines));
    $opts = extractOptions($lines);
    if (empty($opts)) {
        echo "NO OPTIONS FOUND: $path\n";
    } else {
        echo "OPTIONS for $path: ";
        foreach($opts as $o) echo $o['label'].'('.$o['score'].') ';
        echo "\n";
    }
}
