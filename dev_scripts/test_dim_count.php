<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$a = App\Models\Assessment::where('title_ar', 'LIKE', '%الذكاء العاطفي%')->first();
$dimInterpsCount = App\Models\DimensionInterpretation::where('assessment_id', $a->id)->count();
echo "Assessment: {$a->title_ar} | DimInterps Count: $dimInterpsCount\n";

$dims = App\Models\Dimension::where('assessment_id', $a->id)->get();
foreach ($dims as $d) {
    echo "Dimension: {$d->name_ar} | Interps: {$d->interpretations()->count()}\n";
}
