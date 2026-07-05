<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$invalidRecs = App\Models\Recommendation::whereNotIn('level', ['high', 'medium', 'low'])->count();
echo "Invalid Recs: $invalidRecs\n";

$invalidDims = App\Models\DimensionInterpretation::whereNotIn('level', ['high', 'medium', 'low'])->count();
echo "Invalid DimInterps: $invalidDims\n";
