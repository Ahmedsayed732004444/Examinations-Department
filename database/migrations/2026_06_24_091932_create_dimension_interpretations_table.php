<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dimension_interpretations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('dimensions')->cascadeOnDelete();
            $table->enum('level', ['high', 'medium', 'low']);
            $table->text('interpretation_text_ar');
            $table->integer('high_threshold');
            $table->integer('low_threshold');
            $table->timestamps();

            $table->unique(['dimension_id', 'level'], 'dim_interpretations_dim_level_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dimension_interpretations');
    }
};
