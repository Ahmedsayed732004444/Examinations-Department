<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Assessment;

$c = Assessment::where('title_ar', 'LIKE', '%الإداري%')->get();
foreach ($c as $a) {
    echo $a->title_ar . " -> " . $a->category . "\n";
    $a->category = 'مقاييس القيادة والإدارة';
    $a->save();
}
Illuminate\Support\Facades\Cache::flush();
