<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\Recommendation;
use App\Models\User;

class PerceptualStylesSeeder extends Seeder
{
    public function run(): void
    {
        $dir = is_dir(database_path('data/assessments/28'))
            ? database_path('data/assessments/28')
            : database_path('data/assessments/perceptual_styles');
        $meta = require $dir . '/meta.php';
        
        $adminUser = User::where('role', 'admin')->first() ?? User::first();
        $meta['created_by'] = $adminUser?->id;

        // Delete old version if exists to ensure clean idempotent seed
        $existing = Assessment::where('report_code', 'REP-PERCEPTUAL')
            ->orWhere('title_ar', 'مقياس الأنماط الإدراكية')
            ->first();

        if ($existing) {
            $existing->delete();
        }

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
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'title_ar' => $recData['title_ar'] ?? null,
                'description_ar' => $recData['description_ar'],
                'strengths_ar' => $recData['strengths_ar'] ?? null,
                'development_areas_ar' => $recData['development_areas_ar'] ?? null,
                'how_to_learn_ar' => $recData['how_to_learn_ar'] ?? null,
                'practical_tips_ar' => $recData['practical_tips_ar'] ?? null,
                'certificates_intro_ar' => $recData['certificates_intro_ar'] ?? null,
                'certificates_ar' => $recData['certificates_ar'] ?? null,
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
                'plan_30_days_intro_ar' => $recData['plan_30_days_intro_ar'] ?? null,
                'plan_30_days_ar' => $recData['plan_30_days_ar'] ?? null,
            ]);
        }
    }
}
