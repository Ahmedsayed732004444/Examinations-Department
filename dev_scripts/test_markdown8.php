<?php
$lines = file('C:/Users/AIO/Downloads/combined_fixed_clean_final.md'); 
$val = trim($lines[3030]);
var_dump($val);
$title = preg_replace('/^##\s+/', '', $val);
var_dump($title);
