<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Assessment;
use App\Models\Dimension;

$dimensions = Dimension::doesntHave('questions')->with('assessment')->get();
echo "Empty Dimensions:\n";
foreach($dimensions as $d) {
    echo "- Assessment: " . $d->assessment->title_ar . " | Dimension: " . $d->name_ar . "\n";
}

$assessments = Assessment::select('title_ar', \DB::raw('count(*) as count'))->groupBy('title_ar')->having('count', '>', 1)->get();
echo "\nDuplicate Assessments:\n";
foreach($assessments as $a) {
    echo "- " . $a->title_ar . " (Count: " . $a->count . ")\n";
}
