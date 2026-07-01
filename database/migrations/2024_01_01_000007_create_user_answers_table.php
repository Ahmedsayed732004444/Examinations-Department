<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('session_id');
            $table->foreign('session_id')->references('id')->on('exam_sessions')->cascadeOnDelete();
            $table->uuid('question_id');
            $table->foreign('question_id')->references('id')->on('questions')->cascadeOnDelete();
            $table->uuid('selected_option_id');
            $table->foreign('selected_option_id')->references('id')->on('answer_options')->cascadeOnDelete();
            $table->integer('score_earned');
            $table->timestamps();
            $table->unique(['session_id', 'question_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_answers');
    }
};
