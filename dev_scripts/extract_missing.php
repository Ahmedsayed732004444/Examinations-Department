<?php
$lines = file('extracted_docx_text.txt');

// Extract VARK
$vark = "";
$found_vark = false;
foreach($lines as $line) {
    if (str_contains($line, 'مقياس الأنماط الإدراكية')) {
        $found_vark = true;
    }
    if ($found_vark) {
        $vark .= $line;
        if (str_contains($line, 'ثانيًا: مقاييس الكفاءة الشخصية')) {
            break;
        }
    }
}
file_put_contents('extracted_vark.txt', $vark);

// Extract Audience
$audience = "";
$found_aud = false;
foreach($lines as $line) {
    if (str_contains($line, 'الاستعداد الشخصي للتعامل مع الجمهور')) {
        $found_aud = true;
    }
    if ($found_aud) {
        $audience .= $line;
        if (str_contains($line, 'ثالثًا: مقاييس الاتصال والعلاقات المهنية')) {
            break;
        }
    }
}
file_put_contents('extracted_audience.txt', $audience);

echo "Extracted missing assessments to text files.\n";
