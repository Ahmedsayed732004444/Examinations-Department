<?php
$lines = file('C:/Users/AIO/Downloads/combined_fixed_clean_final.md'); 
foreach($lines as $i => $line) { 
    if (strpos($line, 'الإدارة والقيادة') !== false) { 
        echo "\nMATCH AT LINE $i:\n"; 
        for ($j = max(0, $i-3); $j <= min(count($lines)-1, $i+3); $j++) 
            echo $lines[$j]; 
    } 
}
