<?php
$lines = file('C:/Users/AIO/Downloads/combined_fixed_clean_final.md'); 
$start = 0; 
foreach($lines as $i => $line) { 
    if (strpos($line, 'الإرهاق المهني') !== false) { 
        $start = $i; 
    } 
    if ($start > 0 && $i > $start && strpos($line, 'تفسير') !== false) {
        echo "Found TAFSEER at $i: " . $lines[$i] . "\n";
    }
    if ($start > 0 && $i > $start + 200) break;
}
