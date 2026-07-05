<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$r = App\Models\Recommendation::where('level', 'like', '%الإدارة والقيادة%')->first();
if ($r) {
    echo 'In Recommendations!' . "\n";
} else {
    echo 'Not in recs' . "\n";
}

$d = App\Models\DimensionInterpretation::where('level', 'like', '%الإدارة والقيادة%')->first();
if ($d) {
    echo 'In DimensionInterpretations!' . "\n";
}
