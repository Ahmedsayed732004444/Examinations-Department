<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$recs = App\Models\Recommendation::all();
foreach ($recs as $r) {
    echo $r->level . "\n";
}
