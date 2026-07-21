<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Remove (عبارة معكوسة) and variations from questions.text_ar
        $questions = DB::table('questions')
            ->where('text_ar', 'like', '%معكوس%')
            ->get();

        foreach ($questions as $question) {
            $cleaned = str_replace(
                [' (عبارة معكوسة)', '(عبارة معكوسة)', ' (عبارة معكوسه)', '(عبارة معكوسه)'],
                '',
                $question->text_ar
            );

            DB::table('questions')
                ->where('id', $question->id)
                ->update(['text_ar' => trim($cleaned)]);
        }

        // Clean assessment description if note exists
        $assessments = DB::table('assessments')
            ->where('description_ar', 'like', '%معكوس%')
            ->get();

        foreach ($assessments as $assessment) {
            $cleanedDesc = preg_replace('/ ملحوظة:\s*العبارات.*معكوسة.*/u', '', $assessment->description_ar);
            DB::table('assessments')
                ->where('id', $assessment->id)
                ->update(['description_ar' => trim($cleanedDesc)]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op
    }
};
