<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_options', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('question_id');
            $table->string('option_label')->nullable();  // 'أ' / 'ب' / 'True' / 'False' ... قد تكون NULL
            $table->text('option_text_ar');
            $table->integer('order_index')->default(0);
            $table->boolean('is_correct')->default(false); // بديل score_value بتاع answer_options القديم
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_options');
    }
};
