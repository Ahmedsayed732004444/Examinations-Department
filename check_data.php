<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Recommendation;
use App\Models\Dimension;
use App\Models\DimensionInterpretation;
use App\Models\Assessment;
use Illuminate\Support\Facades\DB;

echo "=== PROBLEMS DETECTED ===\n\n";

// 1. Check recommendations with non-standard levels
$nonStdLevels = Recommendation::whereNotIn('level', ['high','medium','low'])
    ->with('assessment')->get();
echo "Non-standard levels in recommendations: " . $nonStdLevels->count() . "\n";
foreach($nonStdLevels as $r) {
    echo "  - " . $r->assessment->title_ar . " | level: " . $r->level . "\n";
}

// 2. Check assessments missing recommendations
echo "\n=== Assessments without ANY recommendations ===\n";
$assWithoutRec = Assessment::whereDoesntHave('recommendations')->get();
foreach($assWithoutRec as $a) {
    echo "  - " . $a->title_ar . "\n";
}

// 3. Check assessments with wrong number of recommendations (not exactly 3)
echo "\n=== Assessments with recommendation count != 3 ===\n";
$recCounts = Recommendation::selectRaw('assessment_id, count(*) as cnt')
    ->groupBy('assessment_id')->get();
foreach($recCounts as $rc) {
    if ($rc->cnt != 3) {
        $a = Assessment::find($rc->assessment_id);
        echo "  - " . ($a ? $a->title_ar : $rc->assessment_id) . " | count: " . $rc->cnt . "\n";
    }
}

// 4. Check dimensions without any interpretations
echo "\n=== Dimensions without interpretations ===\n";
$dimsWithout = Dimension::whereDoesntHave('interpretations')->with('assessment')->get();
foreach($dimsWithout as $d) {
    echo "  - " . $d->assessment->title_ar . " | dim: " . $d->name_ar . "\n";
}

// 5. Sample check: معرفة الذات thresholds
echo "\n=== Sample: معرفة الذات recommendations ===\n";
$a = Assessment::where('title_ar', 'معرفة الذات')->first();
if ($a) {
    foreach ($a->recommendations as $r) {
        echo "  level:" . $r->level . " | low_threshold:" . $r->low_threshold . " | high_threshold:" . $r->high_threshold . "\n";
    }
}

// 6. Sample: الذكاء العاطفي recommendations
echo "\n=== Sample: مقياس الذكاء العاطفي recommendations ===\n";
$a2 = Assessment::where('title_ar', 'مقياس الذكاء العاطفي')->first();
if ($a2) {
    foreach ($a2->recommendations as $r) {
        echo "  level:" . $r->level . " | low_threshold:" . $r->low_threshold . " | high_threshold:" . $r->high_threshold . "\n";
    }
}

// 7. Check اعرف نمطك القيادي
echo "\n=== اعرف نمطك القيادي recommendations ===\n";
$a3 = Assessment::where('title_ar', 'اعرف نمطك القيادي')->first();
if ($a3) {
    foreach ($a3->recommendations as $r) {
        echo "  level:" . $r->level . " | low_threshold:" . $r->low_threshold . " | high_threshold:" . $r->high_threshold . "\n";
    }
}
