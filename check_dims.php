<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$assessments = \App\Models\Assessment::whereIn('title_ar', ['مقياس الاستعداد الشخصي للتعامل مع الجمهور', 'مقياس الأنماط الإدراكية'])->with('dimensions')->get();
foreach($assessments as $a) {
    echo $a->title_ar . "\n";
    foreach($a->dimensions as $d) {
        echo ' - ' . $d->name_ar . "\n";
    }
}
