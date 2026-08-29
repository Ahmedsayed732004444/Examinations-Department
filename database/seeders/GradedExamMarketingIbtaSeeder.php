<?php

namespace Database\Seeders;

use App\Models\GradedExam;
use App\Models\GradedExamUnit;
use App\Models\GradedExamQuestion;
use App\Models\GradedExamOption;
use Illuminate\Database\Seeder;

class GradedExamMarketingIbtaSeeder extends Seeder
{
    public function run(): void
    {
        $dir = database_path('data/graded_exams/marketing_ibta');

        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $gradedExam = GradedExam::create($meta);

        \App\Models\GradedExamConstraintSetting::create([
            'graded_exam_id' => $gradedExam->id,
            'total_questions' => 50,
            'easy_percentage' => 50.00,
            'medium_percentage' => 40.00,
            'hard_percentage' => 10.00,
        ]);

        // كل وحدة في ملف منفصل: units/unit_01.php ... unit_13.php
        $unitFiles = glob($dir . '/units/unit_*.php');
        sort($unitFiles); // يضمن ترتيب unit_01 قبل unit_02 ... الخ

        foreach ($unitFiles as $unitFile) {
            $unitData = require $unitFile;

            $unit = GradedExamUnit::create([
                'graded_exam_id' => $gradedExam->id,
                'unit_number' => $unitData['unit_number'],
                'title_ar' => $unitData['title_ar'],
                'order_index' => $unitData['order_index'],
            ]);

            foreach ($unitData['questions'] as $qData) {
                $question = GradedExamQuestion::create([
                    'graded_exam_id' => $gradedExam->id,
                    'unit_id' => $unit->id,
                    'original_number' => $qData['original_number'],
                    'level' => $qData['level'],
                    'question_type' => $qData['question_type'],
                    'text_ar' => $qData['text_ar'],
                    'explanation_ar' => $qData['explanation_ar'],
                    'is_multi_correct' => $qData['is_multi_correct'],
                    'order_index' => $qData['order_index'],
                ]);

                foreach ($qData['options'] as $optData) {
                    GradedExamOption::create([
                        'question_id' => $question->id,
                        'option_text_ar' => $optData['option_text_ar'],
                        'order_index' => $optData['order_index'],
                        'is_correct' => $optData['is_correct'],
                    ]);
                }
            }
        }

        // تحديث العدد الفعلي للأسئلة بعد الإدخال (تحقق تلقائي)
        $gradedExam->update([
            'total_questions' => $gradedExam->questions()->count(),
        ]);
    }
}
