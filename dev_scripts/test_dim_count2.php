<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$a = App\Models\Assessment::where('title_ar', 'LIKE', '%الاحتراق الوظيفي%')->first();
$dimInterpsCount = App\Models\DimensionInterpretation::where('assessment_id', $a->id)->count();
echo "Assessment: {$a->title_ar} | DimInterps Count: $dimInterpsCount\n";
