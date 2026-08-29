<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// وحدات بنك الأسئلة (13 وحدة). مكافئ مفاهيميًا لـ dimensions
// لكن مفصول تمامًا لتجنّب أي تعارض مع منطق السكور النفسي الحالي.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('graded_exam_id');
            $table->integer('unit_number');        // 1 إلى 13 (نفس ترقيم المصدر الأصلي)
            $table->string('title_ar');
            $table->integer('order_index')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['graded_exam_id', 'unit_number']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_units');
    }
};
