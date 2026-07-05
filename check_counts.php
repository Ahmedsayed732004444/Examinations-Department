<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$assessments = \App\Models\Assessment::withCount(['questions', 'dimensions'])->orderBy('id')->get();

foreach ($assessments as $a) {
    echo "ID: " . str_pad($a->id, 3) . " | Q: " . str_pad($a->questions_count, 3) . " | D: " . str_pad($a->dimensions_count, 3) . " | " . $a->title_ar . "\n";
}
