<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_user_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('session_id');
            $table->uuid('question_id');
            $table->boolean('is_correct')->nullable(); // NULL لحد ما يتم التصحيح
            $table->timestamp('answered_at')->nullable();
            $table->timestamps();

            $table->unique(['session_id', 'question_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_user_answers');
    }
};
