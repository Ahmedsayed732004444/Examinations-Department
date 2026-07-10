<?php
$text = 'لديك مستوى متميز في اعرف نمطك القيادي. يظهر قدرتك على التخطيط واتخاذ القرار. نوصيك بالتركيز على تطوير بعض المهارات لتحقيق أداء أكثر توازناً وفاعلية.';
$adviseKeywords = [
    'لذلك، ننصح', 'لذلك ننصح', 'لذلك، نوصي', 'لذلك نوصي', 'لذلك، احرص', 'لذلك احرص',
    'احرص على', 'يُنصح', 'ينصح', 'نوصي', 'ننصح', 'ولتحسين', 'للتطوير', 'ولتعزيز',
    'تحتاج', 'المطلوب', 'عليك', 'يجب', 'من المهم', 'من الضروري', 'نقترح',
    'يتطلب', 'يتوجب', 'الهدف التدريبي', 'التدريب على', 'ينبغي', 'لذا'
];
$improvementPoints=[];
foreach($adviseKeywords as $kw) {
    if (mb_strpos($text, $kw) !== false) {
        $parts = explode($kw, $text, 2);
        $text = trim($parts[0]);
        $text = preg_replace('/(\s*لذلك\s*[,،]?\s*|\s*ولهذا\s*[,،]?\s*)$/u', '', $text);
        $impText = $kw . $parts[1];
        $sentences = preg_split('/[.\n]+|،\s+/', $impText);
        foreach($sentences as $s) {
            $s = trim($s);
            $s = ltrim($s, '-*• ');
            if (str_contains($s, 'البرامج التدريبية') || str_contains($s, 'الدورات المقترحة') || str_contains($s, 'البرامج المقترحة')) {
                continue;
            }
            if (mb_strlen($s) > 10) {
                $improvementPoints[] = $s;
            }
        }
        break;
    }
}
echo "Parsed Text: " . $text . "\n";
print_r($improvementPoints);
