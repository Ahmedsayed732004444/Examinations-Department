<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$mdFile = "C:\\Users\\AIO\\Downloads\\combined_fixed_clean_final.md";
$content = file_get_contents($mdFile);
$lines = explode("\n", $content);

// Regex counters for Markdown
$mdAssessments = 0;
$mdQuestions = 0;
$mdOverallRecs = 0;
$mdDimInterps = 0;

$currentSection = '';
foreach ($lines as $line) {
    $trimLine = trim($line);
    
    // Count assessments (starts with # but not ##)
    if (preg_match('/^#\s+(.+)$/', $trimLine) && !preg_match('/^##/', $trimLine)) {
        $mdAssessments++;
    }
    
    // Track sections
    if (str_contains($trimLine, 'عبارات المقياس')) {
        $currentSection = 'questions';
    } elseif (in_array($trimLine, [
        '## تفسير النتائج', '## تفسير نتائج المقياس', '## تفسير النتيجة', '## تفسير النتيجة الإجمالية', 
        '## التوصيات', '## تفسير النتيجة الكلية للمقياس'
    ])) {
        $currentSection = 'overall';
    } elseif (str_contains($trimLine, 'تفسير') && (str_contains($trimLine, 'الأبعاد') || str_contains($trimLine, 'المحاور') || str_contains($trimLine, 'نمط'))) {
        $currentSection = 'dimInterp';
    }
    
    // Count questions
    if ($currentSection === 'questions' && preg_match('/^\d+\.\s+/', $trimLine)) {
        $mdQuestions++;
    }
    
    // Count overall levels
    if ($currentSection === 'overall') {
        if (preg_match('/^(?:-?\s*\*\*)?(?:مستوى|المستوى)\s*(مرتفع|متوسط|منخفض|عالي|ضعيف)/ui', $trimLine) || preg_match('/^###\s+(.+)$/', $trimLine)) {
            $mdOverallRecs++;
        }
    }
    
    // Count dim levels
    if ($currentSection === 'dimInterp') {
        if (preg_match('/^(?:-?\s*\*\*)?(?:مستوى|المستوى)\s*(مرتفع|متوسط|منخفض|عالي|ضعيف)/ui', $trimLine) || preg_match('/^###\s+(.+)$/', $trimLine)) {
            $mdDimInterps++;
        }
    }
}

echo "=== Markdown File ===\n";
echo "Assessments: $mdAssessments\n";
echo "Questions: $mdQuestions\n";
echo "Overall Recommendations Levels: $mdOverallRecs\n";
echo "Dimension Interpretation Levels: $mdDimInterps\n\n";

echo "=== Database ===\n";
echo "Assessments: " . App\Models\Assessment::count() . "\n";
echo "Questions: " . App\Models\Question::count() . "\n";
echo "Overall Recommendations Levels: " . App\Models\Recommendation::count() . "\n";
echo "Dimension Interpretation Levels: " . App\Models\DimensionInterpretation::count() . "\n";

