<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // For MySQL, modifying columns to decimal is supported via Doctrine DBAL or natively in Laravel 11.
        // If DBAL is missing, this might fail, so let's be careful. Laravel 11 supports it natively if using supported driver.
        Schema::table('graded_exam_results', function (Blueprint $table) {
            $table->decimal('correct_count', 8, 2)->change();
            $table->decimal('incorrect_count', 8, 2)->change();
        });

        Schema::table('graded_exam_user_answers', function (Blueprint $table) {
            $table->decimal('points_earned', 8, 2)->default(0)->after('is_correct');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('graded_exam_user_answers', function (Blueprint $table) {
            $table->dropColumn('points_earned');
        });
        
        Schema::table('graded_exam_results', function (Blueprint $table) {
            $table->integer('correct_count')->change();
            $table->integer('incorrect_count')->change();
        });
    }
};
