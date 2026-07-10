<?php

$text = <<<EOD
## تفسير المحاور الفرعية

### محور التأثير القائم على القدوة (الكاريزما)
مجموع درجات المحور: 20
- **مستوى مرتفع (6-10 درجات):** تشير النتيجة...
ننصحك بالبرامج التالية:
1. برنامج أ
- **مستوى متوسط (3 - 5 درجات):** أنت في مستوى...

### القيادة الأوتوقراطية (التسلطية)
هي أسلوب قيادي يعتمد فيه القائد بشكل كامل...
EOD;

$dimBlocks = preg_split('/###\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
array_shift($dimBlocks); 

foreach ($dimBlocks as $block) {
    $lines = explode("\n", trim($block));
    $dimNameRaw = array_shift($lines);
    $dimName = trim(preg_replace('/^(محور|القيادة|البعد.*?:)\s+/u', '', trim($dimNameRaw)));
    
    echo "DIMENSION: $dimName\n";
    
    $levels = [];
    $currentLevel = null;
    
    foreach ($lines as $line) {
        $trimLine = trim($line);
        if (empty($trimLine)) continue;
        if (str_contains($trimLine, 'مجموع درجات')) continue;
        
        // Detect level header
        if (preg_match('/^(?:-?\s*\*\*)?(?:مستوى|المستوى)\s*(مرتفع|متوسط|منخفض|عالي|ضعيف)/ui', $trimLine, $m)) {
            $currentLevel = $m[1];
            if ($currentLevel == 'مرتفع' || $currentLevel == 'عالي') $currentLevel = 'high';
            elseif ($currentLevel == 'متوسط') $currentLevel = 'medium';
            elseif ($currentLevel == 'منخفض' || $currentLevel == 'ضعيف') $currentLevel = 'low';
            
            $levels[$currentLevel] = [
                'header' => $trimLine,
                'content' => []
            ];
        } else {
            if ($currentLevel) {
                $levels[$currentLevel]['content'][] = $trimLine;
            } else {
                // If there's no level yet, we store it in a default 'none' level (meaning the whole text is the interpretation)
                if (!isset($levels['none'])) {
                    $levels['none'] = ['header' => $dimName, 'content' => []];
                }
                $levels['none']['content'][] = $trimLine;
            }
        }
    }
    
    // Now process the levels
    foreach ($levels as $key => $data) {
        echo "  LEVEL: $key\n";
        echo "    HEADER: {$data['header']}\n";
        echo "    LINES: " . count($data['content']) . "\n";
    }
}
