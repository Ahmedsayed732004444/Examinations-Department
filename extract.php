<?php

$data = require 'C:/Users/AIO/Downloads/antigravity-exam-system/antigravity/database/seeders/assessments_data.php';
foreach ($data as $assessment) {
    echo $assessment['title']."\n";
}
