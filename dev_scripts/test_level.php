<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$r = App\Models\Recommendation::where('description_ar', 'like', '%الإدارة والقيادة%')->first();
if ($r) echo "LEVEL=" . $r->level . "\n";
