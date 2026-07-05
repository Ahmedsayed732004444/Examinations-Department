<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$assessments = App\Models\Assessment::all();
foreach($assessments as $a) {
    echo $a->title_ar . "\n";
}
