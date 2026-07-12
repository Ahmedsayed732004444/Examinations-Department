<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment5Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/5');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
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
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
