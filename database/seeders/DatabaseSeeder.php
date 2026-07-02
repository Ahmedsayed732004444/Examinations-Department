<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\DimensionInterpretation;
use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\Recommendation;
use App\Models\Result;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign keys for SQLite truncation
        DB::statement('PRAGMA foreign_keys = OFF;');

        // Truncate all tables in proper order
        DimensionScore::query()->delete();
        Result::query()->delete();
        UserAnswer::query()->delete();
        ExamSession::query()->delete();
        AnswerOption::query()->delete();
        Question::query()->delete();
        DimensionInterpretation::query()->delete();
        Dimension::query()->delete();
        Recommendation::query()->delete();
        Assessment::query()->delete();

        // Enable foreign keys
        DB::statement('PRAGMA foreign_keys = ON;');

        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@alroaya.sa'],
            [
                'name' => 'مدير النظام',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Demo User
        User::firstOrCreate(
            ['email' => 'user@alroaya.sa'],
            [
                'name' => 'محمد أحمد',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );

        // Include assessments data
        $assessmentsData = require __DIR__.'/assessments_data.php';

        foreach ($assessmentsData as $index => $aData) {
            $assessment = Assessment::create([
                'title_ar' => $aData['title'],
                'category' => $aData['category'],
                'description_ar' => $aData['description'],
                'time_limit_min' => null,
                'is_active' => true,
                'created_by' => $admin->id,
            ]);

            $totalMaxScore = 0;
            $qGlobalIndex = 0;

            foreach ($aData['dimensions'] as $dIndex => $dData) {
                $dim = Dimension::create([
                    'assessment_id' => $assessment->id,
                    'name_ar' => $dData['name'],
                    'max_score' => count($dData['questions']) * 2,
                    'order_index' => $dIndex,
                ]);

                $totalMaxScore += count($dData['questions']) * 2;

                // Add questions
                foreach ($dData['questions'] as $qIdx => $qText) {
                    $isReversed = in_array($qIdx + 1, $dData['reversed_indexes'] ?? []);
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dim->id,
                        'text_ar' => $qText,
                        'order_index' => $qGlobalIndex++,
                        'is_reversed' => $isReversed,
                    ]);

                    // Options: Yes (نعم), Somewhat (إلى حد ما), No (لا)
                    $options = [
                        ['label_ar' => 'نعم',        'score_value' => $isReversed ? 0 : 2, 'order_index' => 0],
                        ['label_ar' => 'إلى حد ما', 'score_value' => 1,                   'order_index' => 1],
                        ['label_ar' => 'لا',         'score_value' => $isReversed ? 2 : 0, 'order_index' => 2],
                    ];
                    foreach ($options as $opt) {
                        AnswerOption::create(array_merge($opt, ['question_id' => $question->id]));
                    }
                }

                // Add dimension interpretations
                $maxDimScore = count($dData['questions']) * 2;

                // Set thresholds as percentages globally
                $highThresholdDim = 70;
                $lowThresholdDim = 33;

                $dimInterps = $dData['interpretations'] ?? [
                    'high' => "تتمتع بمستوى مرتفع في بعد ({$dData['name']}) وقدرة عالية على توظيفه في بيئة العمل.",
                    'medium' => "مستواك متوسط في بعد ({$dData['name']}) ولديك فرص جيدة للتطوير والتحسين.",
                    'low' => "تحتاج إلى تطوير فوري في بعد ({$dData['name']}) لرفع كفاءتك المهنية وتجنب الآثار السلبية.",
                ];

                foreach (['high', 'medium', 'low'] as $level) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dim->id,
                        'level' => $level,
                        'interpretation_text_ar' => $dimInterps[$level],
                        'high_threshold' => $highThresholdDim,
                        'low_threshold' => $lowThresholdDim,
                    ]);
                }
            }

            // Recommendations for Assessment (Thresholds as Percentages)
            $highThreshold = 70;
            $lowThreshold = 33;

            foreach ($aData['recommendations'] as $rec) {
                Recommendation::create([
                    'assessment_id' => $assessment->id,
                    'level' => $rec['level'],
                    'description_ar' => $rec['desc'],
                    'programs_ar' => implode("\n", $rec['programs'] ?? []),
                    'high_threshold' => $highThreshold,
                    'low_threshold' => $lowThreshold,
                ]);
            }
        }
    }
}
