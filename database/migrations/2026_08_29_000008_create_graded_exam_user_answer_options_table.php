<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// pivot table: يدعم اختيار أكثر من خيار واحد لكل سؤال
// (ضروري لأن 21 سؤال في البنك ليهم أكثر من إجابة صحيحة).
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_user_answer_options', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_answer_id');
            $table->uuid('option_id');
            $table->timestamps();

            $table->unique(['user_answer_id', 'option_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_user_answer_options');
    }
};
