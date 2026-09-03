<?php
$files = glob('database/data/graded_exams/marketing_ibta/units/unit_*.php');
$targets = [
    'أي من التالي يُعد من عناصر تحليل السوق الثمانية',
    'يتضمن العناصر الأربعة الرئيسية لخطة', // Catch both variants in Unit 3
    'الطرق الأكثر شيوعا التي تستخدم في تصنيف العملاء',
    'ما هو تمركز العلامة التجارية؟',
    'أي مما يلي لا يجب فعله في التواصل؟'
];
foreach($files as $f){
    $u = require $f;
    foreach($u['questions'] as $q){
        foreach($targets as $t){
            if(strpos($q['text_ar'], $t) !== false){
                echo "\n### السؤال: " . $q['text_ar'] . "\n";
                foreach($q['options'] as $o){
                    echo ($o['is_correct'] ? '✅ ' : '❌ ') . $o['option_text_ar'] . "\n";
                }
            }
        }
    }
}
