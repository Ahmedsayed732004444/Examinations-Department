<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('session_id');
            $table->decimal('correct_count', 8, 2)->default(0);
            $table->decimal('incorrect_count', 8, 2)->default(0);
            $table->integer('total_questions');
            $table->decimal('percentage', 5, 2);
            $table->string('pass_status')->nullable(); // 'ناجح' / 'راسب' حسب حد النجاح المعتمد
            $table->timestamp('calculated_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_results');
    }
};
