<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Assessment;

$assessments = Assessment::with([
    'dimensions.questions.answerOptions',
    'dimensions.interpretations',
    'questions.answerOptions',
    'recommendations'
])->get();

$exportData = [];

foreach ($assessments as $a) {
    $assData = [
        'title_ar' => $a->title_ar,
        'category' => $a->category,
        'description_ar' => $a->description_ar,
        'time_limit_min' => $a->time_limit_min,
        'is_active' => $a->is_active,
        'dimensions' => [],
        'questions' => [], // For assessment-level questions (no dimension)
        'recommendations' => []
    ];

    foreach ($a->dimensions()->orderBy('order_index')->get() as $d) {
        $dimData = [
            'name_ar' => $d->name_ar,
            'max_score' => $d->max_score,
            'order_index' => $d->order_index,
            'questions' => [],
            'interpretations' => []
        ];

        foreach ($d->questions()->orderBy('order_index')->get() as $q) {
            $qData = [
                'text_ar' => $q->text_ar,
                'order_index' => $q->order_index,
                'options' => []
            ];
            foreach ($q->answerOptions()->orderBy('order_index')->get() as $opt) {
                $qData['options'][] = [
                    'label_ar' => $opt->label_ar,
                    'score_value' => $opt->score_value,
                    'order_index' => $opt->order_index,
                ];
            }
            $dimData['questions'][] = $qData;
        }

        foreach ($d->interpretations as $interp) {
            $dimData['interpretations'][] = [
                'level' => $interp->level,
                'interpretation_text_ar' => $interp->interpretation_text_ar,
                'high_threshold' => $interp->high_threshold,
                'low_threshold' => $interp->low_threshold,
            ];
        }

        $assData['dimensions'][] = $dimData;
    }

    foreach ($a->questions()->whereNull('dimension_id')->orderBy('order_index')->get() as $q) {
        $qData = [
            'text_ar' => $q->text_ar,
            'order_index' => $q->order_index,
            'options' => []
        ];
        foreach ($q->answerOptions()->orderBy('order_index')->get() as $opt) {
            $qData['options'][] = [
                'label_ar' => $opt->label_ar,
                'score_value' => $opt->score_value,
                'order_index' => $opt->order_index,
            ];
        }
        $assData['questions'][] = $qData;
    }

    foreach ($a->recommendations as $rec) {
        $assData['recommendations'][] = [
            'level' => $rec->level,
            'low_threshold' => $rec->low_threshold,
            'high_threshold' => $rec->high_threshold,
            'description_ar' => $rec->description_ar,
            'programs_ar' => $rec->programs_ar,
        ];
    }

    $exportData[] = $assData;
}

$phpArray = var_export($exportData, true);

// Clean up standard objects representation if any
$phpArray = str_replace(['stdClass::__set_state', '(', ')'], ['', '[', ']'], $phpArray);

$seederCode = "<?php\n\nnamespace Database\\Seeders;\n\nuse Illuminate\\Database\\Seeder;\nuse App\\Models\\Assessment;\nuse App\\Models\\Dimension;\nuse App\\Models\\Question;\nuse App\\Models\\AnswerOption;\nuse App\\Models\\DimensionInterpretation;\nuse App\\Models\\Recommendation;\nuse Illuminate\\Support\\Facades\\DB;\n\nclass FinalComprehensiveSeeder extends Seeder\n{\n    public function run()\n    {\n        // Clear existing data\n        DB::statement('PRAGMA foreign_keys=OFF;');\n        Recommendation::truncate();\n        DimensionInterpretation::truncate();\n        AnswerOption::truncate();\n        Question::truncate();\n        Dimension::truncate();\n        Assessment::truncate();\n        DB::statement('PRAGMA foreign_keys=ON;');\n\n        \$data = " . var_export($exportData, true) . ";\n\n";

$seederCode .= <<<'EOT'
        foreach ($data as $assData) {
            $assessment = Assessment::create([
                'title_ar' => $assData['title_ar'],
                'category' => $assData['category'],
                'description_ar' => $assData['description_ar'],
                'time_limit_min' => $assData['time_limit_min'],
                'is_active' => $assData['is_active'],
                'created_by' => 1
            ]);

            foreach ($assData['dimensions'] as $dimData) {
                $dimension = Dimension::create([
                    'assessment_id' => $assessment->id,
                    'name_ar' => $dimData['name_ar'],
                    'max_score' => $dimData['max_score'],
                    'order_index' => $dimData['order_index'],
                ]);

                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    foreach ($qData['options'] as $optData) {
                        AnswerOption::create([
                            'question_id' => $question->id,
                            'label_ar' => $optData['label_ar'],
                            'score_value' => $optData['score_value'],
                            'order_index' => $optData['order_index'],
                        ]);
                    }
                }

                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }

            foreach ($assData['questions'] as $qData) {
                $question = Question::create([
                    'assessment_id' => $assessment->id,
                    'dimension_id' => null,
                    'text_ar' => $qData['text_ar'],
                    'order_index' => $qData['order_index'],
                ]);

                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }

            foreach ($assData['recommendations'] as $recData) {
                Recommendation::create([
                    'assessment_id' => $assessment->id,
                    'level' => $recData['level'],
                    'low_threshold' => $recData['low_threshold'],
                    'high_threshold' => $recData['high_threshold'],
                    'description_ar' => $recData['description_ar'],
                    'programs_ar' => $recData['programs_ar'],
                ]);
            }
        }
    }
}
EOT;

file_put_contents(__DIR__ . '/database/seeders/FinalComprehensiveSeeder.php', $seederCode);
echo "FinalComprehensiveSeeder generated successfully!\n";
