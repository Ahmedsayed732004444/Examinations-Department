<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

foreach(\App\Models\Assessment::with('questions.answerOptions')->get() as $a) {
    if ($a->questions->first()) {
        echo $a->title_ar . " -> Options: ";
        foreach($a->questions->first()->answerOptions as $o) {
            echo $o->label_ar . "(" . $o->score_value . ") ";
        }
        echo "\n";
    }
}
