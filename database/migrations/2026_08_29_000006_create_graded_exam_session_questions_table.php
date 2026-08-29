<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// يحدد فعليًا: أي أسئلة اتسحبت لهذه النسخة من الامتحان، بأي ترتيب،
// وترتيب الخيارات بعد الخلط (shuffle) الخاص بهذه المحاولة تحديدًا.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_session_questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('session_id');
            $table->uuid('question_id');
            $table->integer('position_in_exam');           // 1 إلى 50 مثلاً
            $table->json('shuffled_options_order')->nullable(); // ترتيب عرض الخيارات لهذه النسخة
            $table->timestamps();

            $table->unique(['session_id', 'question_id']);
            $table->index(['session_id', 'position_in_exam']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_session_questions');
    }
};
