<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$dim = App\Models\Dimension::where('name_ar', 'LIKE', '%الإدارة والقيادة%')->first();
if ($dim) {
    echo "Dimension Found: {$dim->name_ar}\n";
    $interps = App\Models\DimensionInterpretation::where('dimension_id', $dim->id)->get();
    foreach ($interps as $interp) {
        echo "Level: {$interp->level} | Low: {$interp->low_threshold} | High: {$interp->high_threshold}\n";
    }
}
