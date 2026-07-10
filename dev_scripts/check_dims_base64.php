<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$assessments = \App\Models\Assessment::where('title_ar', 'مقياس الاستعداد الشخصي للتعامل مع الجمهور')->with('dimensions')->get();
foreach($assessments as $a) {
    foreach($a->dimensions as $d) {
        echo base64_encode($d->name_ar) . "\n";
    }
}
