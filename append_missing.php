<?php
$file = 'database/seeders/data/combined_fixed_clean_final.md';
$content = file_get_contents($file);
$missing = file_get_contents('missing_md.txt');
file_put_contents($file, $content . "\n" . $missing);
echo "Appended missing_md.txt to $file\n";
