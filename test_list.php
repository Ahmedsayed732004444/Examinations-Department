<?php
$content = file_get_contents('database/seeders/data/combined_fixed_clean_final.md');
$files = explode('## File: ', $content);
array_shift($files);
foreach($files as $file) {
    $lines = explode("\n", $file);
    echo trim(array_shift($lines)) . "\n";
}
