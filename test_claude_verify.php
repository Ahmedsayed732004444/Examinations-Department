<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$assessments = App\Models\Assessment::with(['questions.answerOptions', 'dimensions', 'recommendations', 'dimensions.interpretations'])->get();

$report = "";
$totalAssessments = $assessments->count();
$withDims = 0;
$withoutDims = 0;

foreach ($assessments as $a) {
    $qCount = $a->questions->count();
    $maxScore = $a->questions->sum(function($q) {
        return $q->answerOptions->max('score_value');
    });
    $hasReversed = $a->questions->where('is_reversed', true)->count() > 0 ? "نعم ⚠️" : "لا";
    
    // Check if it has real dimensions (excluding the auto-generated "عام" dimension if it's the only one)
    $realDims = $a->dimensions->filter(function($d) { return $d->name_ar !== 'عام'; });
    
    if ($realDims->count() > 0) {
        $dimCount = $realDims->count();
        $dimNames = $realDims->pluck('name_ar')->implode('، ');
        $withDims++;
    } else {
        $dimCount = 0;
        $dimNames = "لا يوجد تقسيم لأبعاد فرعية";
        $withoutDims++;
    }
    
    $hasOverall = $a->recommendations->count() > 0 ? "نعم" : "لا";
    
    $hasDimInterps = false;
    foreach ($a->dimensions as $d) {
        if ($d->interpretations->count() > 0) {
            $hasDimInterps = true;
            break;
        }
    }
    $dimInterpStr = $hasDimInterps ? "نعم" : "لا";
    if ($a->title_ar === 'اعرف نمطك القيادي') {
        $dimInterpStr = "⚠️ حسب النمط الأعلى";
    }

    $report .= "### {$a->title_ar}\n";
    $report .= "- عدد العبارات: {$qCount}\n";
    $report .= "- الدرجة الكلية القصوى: {$maxScore}\n";
    $report .= "- توجد عبارات معكوسة: {$hasReversed}\n";
    $report .= "- عدد الأبعاد: {$dimCount} -> {$dimNames}\n";
    $report .= "- نتيجة لكل بعد؟ {$dimInterpStr}\n";
    $report .= "- نتيجة كلية للمقياس؟ {$hasOverall}\n\n";
}

$report .= "إجمالي المقاييس: {$totalAssessments} | بها أبعاد فرعية: {$withDims} | بدون أبعاد: {$withoutDims}\n";

file_put_contents('test_claude_verify.txt', $report);
echo "Verification report generated.\n";
