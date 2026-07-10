<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$invalidDims = App\Models\DimensionInterpretation::whereNotIn('level', ['high', 'medium', 'low'])->get();
foreach ($invalidDims as $d) {
    echo "ID: " . $d->id . " | Level: " . $d->level . "\n";
}
