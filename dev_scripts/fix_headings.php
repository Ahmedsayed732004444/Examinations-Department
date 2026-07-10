<?php
$file = 'database/seeders/data/combined_fixed_clean_final.md';
$content = file_get_contents($file);
$content = str_replace("\nتفسير النتائج العامة\n", "\n## تفسير النتائج العامة\n", $content);
$content = str_replace("\nتفسير للمقياس بشكل عام (النتيجة الكلية) من (60 درجة)\n", "\n## تفسير للمقياس بشكل عام (النتيجة الكلية) من (60 درجة)\n", $content);
$content = str_replace("\nتفسير النمط الأحادي:\n", "\n## تفسير النمط الأحادي:\n", $content);
$content = str_replace("\nتفسير النمط المتوازن\n", "\n## تفسير النمط المتوازن\n", $content);
$content = str_replace("\nتفسير النمط المزدوج:\n", "\n## تفسير النمط المزدوج:\n", $content);
$content = str_replace("\nنتائج تفصيلية للمحاور الثلاثة كل محور على حدة:\n", "\n## نتائج تفصيلية للمحاور الثلاثة كل محور على حدة:\n", $content);

file_put_contents($file, $content);
echo "Fixed headings.\n";
