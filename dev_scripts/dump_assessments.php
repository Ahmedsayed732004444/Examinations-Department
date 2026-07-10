<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$assessments = \App\Models\Assessment::withCount(['questions', 'dimensions'])->orderBy('id')->get();
$data = [];
foreach ($assessments as $a) {
    $data[] = [
        'id' => $a->id,
        'title' => $a->title_ar,
        'q' => $a->questions_count,
        'd' => $a->dimensions_count,
        'created_at' => $a->created_at->toDateTimeString()
    ];
}
file_put_contents('assessments_dump.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
echo "Dumped to assessments_dump.json\n";
