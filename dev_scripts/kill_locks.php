<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
use Illuminate\Support\Facades\DB;

$processes = DB::select('SHOW PROCESSLIST');
foreach ($processes as $p) {
    if ($p->Command === 'Sleep' && $p->Time > 10) {
        DB::statement("KILL {$p->Id}");
        echo "Killed process {$p->Id}\n";
    }
}
echo "Done cleaning locks.\n";
