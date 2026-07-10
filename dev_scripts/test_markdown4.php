<?php
$lines = file('C:/Users/AIO/Downloads/combined_fixed_clean_final.md'); 
$start = 0; 
foreach($lines as $i => $line) { 
    if (strpos($line, 'الذكاء العاطفي') !== false) { 
        echo "\nMATCH AT LINE $i: " . trim($line) . "\n";
    } 
}
