<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assessment_id');
            $table->foreign('assessment_id')->references('id')->on('assessments')->cascadeOnDelete();
            $table->uuid('dimension_id')->nullable();
            $table->foreign('dimension_id')->references('id')->on('dimensions')->nullOnDelete();
            $table->text('text_ar');
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
