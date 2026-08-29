<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('graded_exam_id');          // مكرر عمدًا (denormalized) لتسهيل الاستعلامات المباشرة
            $table->uuid('unit_id');
            $table->integer('original_number')->nullable(); // الرقم التسلسلي الأصلي 1-404 (تتبّع فقط)
            $table->enum('level', ['easy', 'medium', 'hard']);
            $table->enum('question_type', ['mcq', 'true_false']);
            $table->text('text_ar');
            $table->text('explanation_ar')->nullable();      // NULL لو مفيش شرح في المصدر
            $table->boolean('is_multi_correct')->default(false);
            $table->string('source_page_ref')->nullable();   // رقم الصفحة المرجعية إن وُجد
            $table->integer('order_index')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_questions');
    }
};
