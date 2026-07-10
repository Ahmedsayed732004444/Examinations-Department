<?php
$content = file_get_contents('database/seeders/data/combined_fixed_clean_final.md');
$files = explode('## File: ', $content);
array_shift($files);
foreach($files as $file) {
    if (str_contains($file, 'مقياس_معرفة_الذات.md')) {
        $lines = explode("\n", $file);
        $questionsText = '';
        $currentSection = '';
        foreach($lines as $line) {
            $trimLine = trim($line);
            if (str_starts_with($trimLine, '## ')) {
                $sectionTitle = trim(substr($trimLine, 3));
                if (preg_match('/عبارات المقياس/ui', $sectionTitle)) {
                    $currentSection = 'questions';
                } else {
                    $currentSection = 'other';
                }
            } elseif ($currentSection === 'questions') {
                $questionsText .= $line . "\n";
            }
        }
        echo "Length of questionsText: " . strlen($questionsText) . "\n";
        echo "Snippet: " . substr($questionsText, 0, 100) . "\n";
        
        $qLines = explode("\n", $questionsText);
        $count = 0;
        foreach ($qLines as $line) {
            $line = trim($line);
            if (empty($line)) continue;
            if (preg_match('/^\d+\.\s+(.+)$/', $line, $qMatch)) {
                $count++;
            }
        }
        echo "Questions matched: $count\n";
        break;
    }
}
