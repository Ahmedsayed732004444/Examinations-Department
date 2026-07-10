<?php

function textToMarkdown($filename, $title, $category) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $md = "## File: $category/$title.md\n```markdown\n# $title\n\n## الهدف من المقياس\n";
    $state = 'intro';
    
    foreach($lines as $line) {
        $trimLine = trim($line);
        if ($trimLine === 'م') continue;
        if ($trimLine === 'العبارات') continue;
        if ($trimLine === $title || $trimLine === "مقياس $title" || $trimLine === "مقياس $title ") continue;
        
        // Options headers
        if ($trimLine === 'نعم') { $state = 'options'; continue; }
        if ($trimLine === '(2)') continue;
        if ($trimLine === 'إلى حد ما') continue;
        if ($trimLine === '(1)') continue;
        if ($trimLine === 'لا') continue;
        if ($trimLine === '(0)') {
            $md .= "## مقياس الإجابة\n| الإجابة | الدرجة |\n|---|---|\n| نعم | 2 |\n| إلى حد ما | 1 |\n| لا | 0 |\n\n## عبارات المقياس\n\n";
            $state = 'questions';
            continue;
        }

        if (preg_match('/^(أولاً|ثانياً|ثالثاً|رابعاً|خامساً|سادساً): (.*)/ui', $trimLine, $m)) {
            $md .= "### " . $m[2] . "\n";
            continue;
        }
        if (preg_match('/^(البعد الأول|البعد الثاني|البعد الثالث|البعد الرابع|البعد الخامس|البعد السادس): (.*)/ui', $trimLine, $m)) {
            $md .= "### " . $trimLine . "\n";
            continue;
        }

        if (is_numeric($trimLine) && $state === 'questions') {
            $md .= "$trimLine. ";
            continue;
        }

        if ($state === 'questions' && !is_numeric($trimLine) && !preg_match('/^تفسير/ui', $trimLine) && !preg_match('/^مستوى/ui', $trimLine) && !preg_match('/^المجموع/ui', $trimLine)) {
            // It's a question text or a continuation
            if (preg_match('/^\d+\.\s/', $md)) {
                // We just wrote a number, so append text
                $md .= "$trimLine\n";
            } elseif (preg_match('/^[^0-9]/', $trimLine)) {
                // If it's something else like a new section
                if (preg_match('/تفسير النتائج|طريقة حساب الدرجات|التوصيات/ui', $trimLine)) {
                    $state = 'other';
                    $md .= "\n## $trimLine\n";
                } else {
                    $md .= "$trimLine\n";
                }
            }
            continue;
        }

        if (preg_match('/^مستوى (مرتفع|متوسط|منخفض|جيد جداً|ضعيف)/ui', $trimLine) || preg_match('/^يقع مستوى/ui', $trimLine) || preg_match('/^إذا حصل/ui', $trimLine)) {
            $md .= "### $trimLine\n";
            continue;
        }

        if (preg_match('/^التوصيات|البرامج التدريبية/ui', $trimLine)) {
            $md .= "**$trimLine:**\n";
            continue;
        }

        // Just regular text
        $md .= "$trimLine\n";
    }
    $md .= "```\n\n";
    return $md;
}

$varkMd = textToMarkdown('extracted_vark.txt', 'الأنماط الإدراكية', 'الذات والشحصيه');

// For audience
file_put_contents('extracted_audience2.txt', "");
$lines = file('extracted_docx_text.txt');
$found = false;
$audienceText = "";
foreach($lines as $line) {
    if (str_contains($line, 'مقياس الاستعداد الشخصي للتعامل مع الجمهور')) {
        $found = true;
    }
    if ($found) {
        $audienceText .= $line;
        if (str_contains($line, 'ثالثًا: مقاييس الاتصال والعلاقات المهنية')) {
            break;
        }
    }
}
file_put_contents('extracted_audience2.txt', $audienceText);
$audMd = textToMarkdown('extracted_audience2.txt', 'الاستعداد الشخصي للتعامل مع الجمهور', 'الكفاءة الشخصية والنجاح المهني');

file_put_contents('missing_md.txt', $varkMd . $audMd);
echo "Markdown generated to missing_md.txt\n";
