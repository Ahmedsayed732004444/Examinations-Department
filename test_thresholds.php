<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$nullThresholds = App\Models\DimensionInterpretation::whereNull('high_threshold')->orWhereNull('low_threshold')->count();
$zeroThresholds = App\Models\DimensionInterpretation::where('high_threshold', 0)->where('low_threshold', 0)->count();

echo "Null Thresholds: $nullThresholds\n";
echo "Zero Thresholds: $zeroThresholds\n";

if ($nullThresholds > 0 || $zeroThresholds > 0) {
    echo "\nListing problematic dimensions:\n";
    $badDims = App\Models\DimensionInterpretation::whereNull('high_threshold')
        ->orWhereNull('low_threshold')
        ->orWhere(function($q) {
            $q->where('high_threshold', 0)->where('low_threshold', 0);
        })
        ->get();
        
    foreach ($badDims as $d) {
        $dimName = App\Models\Assessment::find($d->assessment_id)->title_ar ?? 'Unknown Assessment';
        echo "Assessment: $dimName | Level: {$d->level} | Low: {$d->low_threshold} | High: {$d->high_threshold}\n";
    }
}
