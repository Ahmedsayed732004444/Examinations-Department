<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Assessment;

$assessments = Assessment::with(['dimensions', 'questions', 'recommendations'])->get();
$report = [];

foreach ($assessments as $assessment) {
    $report[] = [
        'id' => $assessment->id,
        'title' => $assessment->title_ar,
        'dimensions_count' => $assessment->dimensions->count(),
        'questions_count' => $assessment->questions->count(),
        'recommendations_count' => $assessment->recommendations->count(),
        'recommendations' => $assessment->recommendations->map(function($r) {
            return [
                'level' => $r->level,
                'low' => $r->low_threshold,
                'high' => $r->high_threshold,
                'programs' => !empty(trim($r->programs_ar)) ? 'Yes' : 'No'
            ];
        })->toArray()
    ];
}

file_put_contents('verify_report.json', json_encode($report, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
echo "Verification report generated.\n";
