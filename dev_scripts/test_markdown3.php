<?php
$lines = file('C:/Users/AIO/Downloads/combined_fixed_clean_final.md'); 
$start = 0; 
foreach($lines as $i => $line) { 
    if (strpos($line, 'الذكاء العاطفي') !== false && strpos($line, 'تفسير') !== false) { 
        echo "\nMATCH AT LINE $i:\n";
        for ($j = max(0, $i-2); $j <= min(count($lines)-1, $i+10); $j++) 
            echo $lines[$j]; 
    } 
}
