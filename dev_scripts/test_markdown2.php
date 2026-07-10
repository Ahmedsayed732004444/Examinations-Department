<?php
$lines = file('C:/Users/AIO/Downloads/combined_fixed_clean_final.md'); 
$start = 0; 
foreach($lines as $i => $line) { 
    if (strpos($line, '## تفسير النتيجة التفصيلية للأبعاد') !== false && $start == 0) { 
        $start = $i; 
    } 
} 
if ($start > 0) { 
    for ($j = $start; $j <= min(count($lines)-1, $start+50); $j++) 
        echo $lines[$j]; 
}
