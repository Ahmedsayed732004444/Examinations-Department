<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// نسخة موازية لـ exam_sessions الحالي، لكن خاصة بامتحانات الأسئلة الموضوعية
// العشوائية (مثال: امتحان 50 سؤال بقيود سهل/متوسط/صعب اللي اتفقنا عليها).
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_sessions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('graded_exam_id');
            $table->enum('status', ['in_progress', 'completed', 'abandoned'])->default('in_progress');
            $table->integer('total_questions');          // عدد الأسئلة في هذه النسخة (مثال: 50)
            $table->json('constraints_snapshot')->nullable(); // نسخة من constraints.json وقت التوليد
            $table->integer('random_seed')->nullable();
            $table->timestamp('started_at');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_sessions');
    }
};
