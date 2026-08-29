<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// جدول منفصل تمامًا عن assessments الحالي (نظام سيكومتري بالسكور).
// graded_exams مخصص لبنوك الأسئلة الموضوعية (إجابة صحيحة/خطأ محددة)
// زي "الاختبار التجريبي للشهادة الاحترافية في التسويق - IBTA".
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title_ar');
            $table->text('description_ar')->nullable();
            $table->string('category')->nullable();      // مثال: 'marketing_certification'
            $table->integer('total_questions')->default(0); // إجمالي بنك الأسئلة (404)
            $table->integer('time_limit_min')->nullable();
            $table->boolean('is_active')->default(true);
            $table->uuid('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exams');
    }
};
