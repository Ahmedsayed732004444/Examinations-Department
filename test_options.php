<?php
$content = file_get_contents('database/seeders/data/combined_fixed_clean_final.md');
$files = explode('## File: ', $content);
array_shift($files);
foreach($files as $file) {
    $lines = explode("\n", $file);
    $path = trim(array_shift($lines));
    $options = [];
    $parsingOptions = false;
    
    foreach($lines as $line) {
        $trimLine = trim($line);
        
        // Stop looking for options once we reach the questions
        if (str_starts_with($trimLine, '## عبارات')) {
            break;
        }

        // Detect table header for options
        if (preg_match('/\|\s*(الإجابة|الاستجابة|الخيارات|الخيار)\s*\|\s*(الدرجة|النقاط)\s*\|/ui', $trimLine)) {
            $parsingOptions = true;
            continue;
        }

        // Skip separator line
        if ($parsingOptions && preg_match('/\|[\s\-]+\|[\s\-]+\|/', $trimLine)) {
            continue;
        }

        // Parse option rows
        if ($parsingOptions && preg_match('/\|\s*(.+?)\s*\|\s*(\d+)\s*\|/', $trimLine, $optMatch)) {
            $label = trim($optMatch[1]);
            $score = (int)trim($optMatch[2]);
            $options[] = ['label' => $label, 'score' => $score];
        } elseif ($parsingOptions && !empty($trimLine) && !str_starts_with($trimLine, '|')) {
            // End of table
            $parsingOptions = false;
        }
    }
    
    if (empty($options)) {
        echo "NO OPTIONS FOUND for: $path\n";
    } else {
        echo "OPTIONS for $path: ";
        foreach($options as $o) echo $o['label'].'('.$o['score'].') ';
        echo "\n";
    }
}
