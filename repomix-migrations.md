This file is a merged representation of a subset of the codebase, containing files not matching ignore patterns, combined into a single document by Repomix.

# File Summary

## Purpose
This file contains a packed representation of a subset of the repository's contents that is considered the most important context.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.

## File Format
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Repository files (if enabled)
5. Multiple file entries, each consisting of:
  a. A header with the file path (## File: path/to/file)
  b. The full contents of the file in a code block

## Usage Guidelines
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.

## Notes
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Files matching these patterns are excluded: repomix-output.xml, repomix-output.md
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Files are sorted by Git change count (files with more changes are at the bottom)

# Directory Structure
```
0001_01_01_000000_create_users_table.php
0001_01_01_000001_create_cache_table.php
0001_01_01_000002_create_jobs_table.php
2024_01_01_000002_create_assessments_table.php
2024_01_01_000003_create_dimensions_table.php
2024_01_01_000004_create_questions_table.php
2024_01_01_000005_create_answer_options_table.php
2024_01_01_000006_create_exam_sessions_table.php
2024_01_01_000007_create_user_answers_table.php
2024_01_01_000008_create_results_table.php
2024_01_01_000009_create_dimension_scores_table.php
2024_01_01_000010_create_recommendations_table.php
2026_06_24_085954_add_performance_indexes_to_tables.php
2026_06_24_091932_create_dimension_interpretations_table.php
2026_06_25_120000_add_is_reversed_to_questions_table.php
2026_07_01_122729_add_price_and_rating_to_assessments_table.php
2026_07_01_140449_add_image_url_to_assessments_table.php
2026_07_01_154805_create_coupons_table.php
2026_07_03_160643_add_subtitle_ar_to_assessments_table.php
2026_07_05_000000_upgrade_coupons_and_users_tables.php
2026_07_05_124738_add_user_restrictions_to_coupons.php
2026_07_05_153443_create_settings_table.php
2026_07_05_161859_add_extra_discount_tiers_to_coupons_table.php
2026_07_05_225427_add_details_to_users_table.php
2026_07_06_005159_add_report_details_to_assessments_table.php
2026_07_10_164000_add_intro_and_outro_to_assessments_and_recommendations.php
2026_07_11_102607_move_report_details_to_recommendations.php
2026_07_11_104237_add_intro_texts_to_recommendations.php
2026_07_11_113325_convert_recommendation_fields_to_json.php
2026_07_11_115159_create_icons_table.php
2026_07_11_132219_add_icon_to_assessments_table.php
2026_07_15_151418_add_report_code_to_assessments_table.php
2026_07_17_014000_change_sessions_user_id_to_uuid.php
2026_07_21_160000_remove_reversed_label_from_questions.php
2026_07_21_170000_make_assessments_limit_nullable_on_coupons_table.php
2026_07_21_234000_add_perceptual_fields_to_recommendations_table.php
```

# Files

## File: 0001_01_01_000000_create_users_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('user_id', 36)->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
```

## File: 0001_01_01_000001_create_cache_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration')->index();
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
```

## File: 0001_01_01_000002_create_jobs_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
```

## File: 2024_01_01_000002_create_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title_ar');
            $table->string('category');
            $table->text('description_ar')->nullable();
            $table->string('scoring_type')->default('overall_score');
            $table->integer('time_limit_min')->nullable();
            $table->boolean('is_active')->default(true);
            $table->uuid('created_by');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
```

## File: 2024_01_01_000003_create_dimensions_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dimensions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assessment_id');
            $table->string('name_ar');
            $table->integer('max_score');
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dimensions');
    }
};
```

## File: 2024_01_01_000004_create_questions_table.php
```php
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
            $table->uuid('dimension_id')->nullable();
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
```

## File: 2024_01_01_000005_create_answer_options_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('answer_options', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('question_id');
            $table->string('label_ar');
            $table->integer('score_value');
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answer_options');
    }
};
```

## File: 2024_01_01_000006_create_exam_sessions_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exam_sessions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('assessment_id');
            $table->enum('status', ['in_progress', 'completed', 'abandoned'])->default('in_progress');
            $table->timestamp('started_at');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_sessions');
    }
};
```

## File: 2024_01_01_000007_create_user_answers_table.php
```php
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
            $table->uuid('question_id');
            $table->uuid('selected_option_id');
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
```

## File: 2024_01_01_000008_create_results_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('session_id');
            $table->integer('total_score');
            $table->integer('max_possible_score');
            $table->string('level')->nullable();
            $table->timestamp('calculated_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
```

## File: 2024_01_01_000009_create_dimension_scores_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dimension_scores', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('result_id');
            $table->uuid('dimension_id');
            $table->integer('score');
            $table->integer('max_score');
            $table->string('level')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dimension_scores');
    }
};
```

## File: 2024_01_01_000010_create_recommendations_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assessment_id');
            $table->string('level');
            $table->text('description_ar');
            $table->text('programs_ar')->nullable();
            $table->integer('high_threshold')->nullable();
            $table->integer('low_threshold')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
```

## File: 2026_06_24_085954_add_performance_indexes_to_tables.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->unique(['assessment_id', 'level'], 'recommendations_assessment_level_unique');
        });

        Schema::table('dimensions', function (Blueprint $table) {
            $table->index(['assessment_id', 'order_index'], 'dimensions_assessment_order_index');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->index(['assessment_id', 'order_index'], 'questions_assessment_order_index');
            $table->index(['dimension_id', 'order_index'], 'questions_dimension_order_index');
        });

        Schema::table('answer_options', function (Blueprint $table) {
            $table->index(['question_id', 'order_index'], 'answer_options_question_order_index');
        });
    }

    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropUnique('recommendations_assessment_level_unique');
        });

        Schema::table('dimensions', function (Blueprint $table) {
            $table->dropIndex('dimensions_assessment_order_index');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->dropIndex('questions_assessment_order_index');
            $table->dropIndex('questions_dimension_order_index');
        });

        Schema::table('answer_options', function (Blueprint $table) {
            $table->dropIndex('answer_options_question_order_index');
        });
    }
};
```

## File: 2026_06_24_091932_create_dimension_interpretations_table.php
```php
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
            $table->string('level');
            $table->text('interpretation_text_ar');
            $table->integer('high_threshold')->nullable();
            $table->integer('low_threshold')->nullable();
            $table->timestamps();

            $table->unique(['dimension_id', 'level'], 'dim_interpretations_dim_level_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dimension_interpretations');
    }
};
```

## File: 2026_06_25_120000_add_is_reversed_to_questions_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // Reversed questions score inversely: نعم=0, إلى حد ما=1, لا=2
            $table->boolean('is_reversed')->default(false)->after('order_index');
        });
    }

    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('is_reversed');
        });
    }
};
```

## File: 2026_07_01_122729_add_price_and_rating_to_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->nullable()->after('time_limit_min');
            $table->decimal('rating', 3, 2)->nullable()->after('price');
            $table->integer('rating_count')->default(0)->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn(['price', 'rating', 'rating_count']);
        });
    }
};
```

## File: 2026_07_01_140449_add_image_url_to_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('description_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
};
```

## File: 2026_07_01_154805_create_coupons_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('assessments_limit')->default(1)->comment('Number of assessments allowed per user');
            $table->date('expires_at')->nullable()->comment('When the coupon expires and can no longer be used');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('coupon_user', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->unsignedBigInteger('coupon_id');
            $table->integer('used_count')->default(0);
            $table->timestamps();

            $table->unique(['user_id', 'coupon_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon_user');
        Schema::dropIfExists('coupons');
    }
};
```

## File: 2026_07_03_160643_add_subtitle_ar_to_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->string('subtitle_ar')->nullable()->after('title_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('subtitle_ar');
        });
    }
};
```

## File: 2026_07_05_000000_upgrade_coupons_and_users_tables.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Update users table
        Schema::table('users', function (Blueprint $table) {
            $table->string('national_id')->nullable()->unique()->after('email');
            $table->string('phone')->nullable()->unique()->after('national_id');
        });

        // 2. Update coupons table
        Schema::table('coupons', function (Blueprint $table) {
            $table->string('code')->nullable()->unique()->after('title');
            $table->integer('discount_percentage')->default(100)->after('code');
            $table->integer('discount_percentage_2nd')->nullable()->after('discount_percentage');
            $table->integer('discount_percentage_3rd')->nullable()->after('discount_percentage_2nd');
            $table->boolean('applies_to_all_assessments')->default(true)->after('discount_percentage_3rd');
        });

        // 3. Update assessments table
        Schema::table('assessments', function (Blueprint $table) {
            $table->boolean('hide_coupon_field')->default(false)->after('is_active');
        });

        // 4. Update exam_sessions table
        Schema::table('exam_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('coupon_id')->nullable()->after('assessment_id');
            $table->integer('discount_applied')->nullable()->after('coupon_id');
        });

        // 5. Create coupon_assessment pivot table
        Schema::create('coupon_assessment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coupon_id');
            $table->uuid('assessment_id');
            $table->timestamps();

            $table->unique(['coupon_id', 'assessment_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupon_assessment');

        Schema::table('exam_sessions', function (Blueprint $table) {
            $table->dropColumn(['coupon_id', 'discount_applied']);
        });

        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('hide_coupon_field');
        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->dropColumn([
                'code',
                'discount_percentage',
                'discount_percentage_2nd',
                'discount_percentage_3rd',
                'applies_to_all_assessments'
            ]);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['national_id', 'phone']);
        });
    }
};
```

## File: 2026_07_05_124738_add_user_restrictions_to_coupons.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->boolean('applies_to_all_users')->default(true);
        });

        Schema::create('coupon_permitted_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coupon_id');
            $table->uuid('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon_permitted_user');

        Schema::table('coupons', function (Blueprint $table) {
            $table->dropColumn('applies_to_all_users');
        });
    }
};
```

## File: 2026_07_05_153443_create_settings_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
```

## File: 2026_07_05_161859_add_extra_discount_tiers_to_coupons_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->decimal('discount_percentage_4th', 5, 2)->nullable()->after('discount_percentage_3rd');
            $table->decimal('discount_percentage_5th', 5, 2)->nullable()->after('discount_percentage_4th');
            $table->decimal('discount_percentage_6th', 5, 2)->nullable()->after('discount_percentage_5th');
            $table->decimal('discount_percentage_7th', 5, 2)->nullable()->after('discount_percentage_6th');
            $table->decimal('discount_percentage_8th', 5, 2)->nullable()->after('discount_percentage_7th');
            $table->decimal('discount_percentage_9th', 5, 2)->nullable()->after('discount_percentage_8th');
            $table->decimal('discount_percentage_10th', 5, 2)->nullable()->after('discount_percentage_9th');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropColumn([
                'discount_percentage_4th',
                'discount_percentage_5th',
                'discount_percentage_6th',
                'discount_percentage_7th',
                'discount_percentage_8th',
                'discount_percentage_9th',
                'discount_percentage_10th'
            ]);
        });
    }
};
```

## File: 2026_07_05_225427_add_details_to_users_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable()->after('phone');
            $table->string('qualification')->nullable()->after('gender');
            $table->string('nationality')->nullable()->after('qualification');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['gender', 'qualification', 'nationality']);
        });
    }
};
```

## File: 2026_07_06_005159_add_report_details_to_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->text('certificates_ar')->nullable()->after('description_ar');
            $table->text('programs_ar')->nullable()->after('certificates_ar');
            $table->text('plan_30_days_ar')->nullable()->after('programs_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn(['certificates_ar', 'programs_ar', 'plan_30_days_ar']);
        });
    }
};
```

## File: 2026_07_10_164000_add_intro_and_outro_to_assessments_and_recommendations.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->text('programs_intro_ar')->nullable()->after('description_ar');
            $table->text('programs_outro_ar')->nullable()->after('programs_intro_ar');
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->text('programs_intro_ar')->nullable()->after('programs_ar');
            $table->text('programs_outro_ar')->nullable()->after('programs_intro_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropColumn(['programs_intro_ar', 'programs_outro_ar']);
        });

        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn(['programs_intro_ar', 'programs_outro_ar']);
        });
    }
};
```

## File: 2026_07_11_102607_move_report_details_to_recommendations.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add to recommendations
        Schema::table('recommendations', function (Blueprint $table) {
            $table->text('certificates_ar')->nullable()->after('description_ar');
            $table->text('plan_30_days_ar')->nullable()->after('programs_outro_ar');
        });

        // Drop from assessments
        Schema::table('assessments', function (Blueprint $table) {
            if (Schema::hasColumn('assessments', 'certificates_ar')) {
                $table->dropColumn('certificates_ar');
            }
            if (Schema::hasColumn('assessments', 'programs_ar')) {
                $table->dropColumn('programs_ar');
            }
            if (Schema::hasColumn('assessments', 'programs_intro_ar')) {
                $table->dropColumn('programs_intro_ar');
            }
            if (Schema::hasColumn('assessments', 'programs_outro_ar')) {
                $table->dropColumn('programs_outro_ar');
            }
            if (Schema::hasColumn('assessments', 'plan_30_days_ar')) {
                $table->dropColumn('plan_30_days_ar');
            }
            if (Schema::hasColumn('assessments', 'roadmap_ar')) {
                $table->dropColumn('roadmap_ar');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->text('certificates_ar')->nullable();
            $table->text('programs_ar')->nullable();
            $table->text('programs_intro_ar')->nullable();
            $table->text('programs_outro_ar')->nullable();
            $table->text('plan_30_days_ar')->nullable();
            $table->text('roadmap_ar')->nullable();
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropColumn(['certificates_ar', 'plan_30_days_ar']);
        });
    }
};
```

## File: 2026_07_11_104237_add_intro_texts_to_recommendations.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->text('certificates_intro_ar')->nullable()->after('certificates_ar');
            $table->text('plan_30_days_intro_ar')->nullable()->after('programs_outro_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropColumn(['certificates_intro_ar', 'plan_30_days_intro_ar']);
        });
    }
};
```

## File: 2026_07_11_113325_convert_recommendation_fields_to_json.php
```php
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
        $recommendations = DB::table('recommendations')->get();

        foreach ($recommendations as $rec) {
            $certs = [];
            if (!empty($rec->certificates_ar)) {
                $lines = array_filter(array_map('trim', explode("\n", $rec->certificates_ar)));
                foreach ($lines as $line) {
                    $certs[] = [
                        'title' => mb_substr($line, 0, 30), // Short title
                        'subtitle' => $line,
                        'icon' => 'blue-hexagon' // default
                    ];
                }
            }

            $progs = [];
            if (!empty($rec->programs_ar)) {
                $decoded = json_decode($rec->programs_ar, true);
                if (is_array($decoded)) {
                    foreach ($decoded as $p) {
                        $progs[] = [
                            'title' => $p,
                            'icon' => 'bi-journal-bookmark'
                        ];
                    }
                } else {
                    $lines = array_filter(array_map('trim', explode("\n", $rec->programs_ar)));
                    foreach ($lines as $line) {
                        $progs[] = [
                            'title' => $line,
                            'icon' => 'bi-journal-bookmark'
                        ];
                    }
                }
            }

            $plans = [];
            if (!empty($rec->plan_30_days_ar)) {
                $lines = array_filter(array_map('trim', explode("\n", $rec->plan_30_days_ar)));
                $week = 1;
                $arabicWeeks = [1 => 'الأسبوع الأول', 2 => 'الأسبوع الثاني', 3 => 'الأسبوع الثالث', 4 => 'الأسبوع الرابع'];
                foreach ($lines as $line) {
                    $plans[] = [
                        'period' => $arabicWeeks[$week] ?? "الأسبوع {$week}",
                        'title' => $line,
                        'icon' => 'bi-calendar-check'
                    ];
                    $week++;
                }
            }

            DB::table('recommendations')->where('id', $rec->id)->update([
                'certificates_ar' => json_encode($certs, JSON_UNESCAPED_UNICODE),
                'programs_ar' => json_encode($progs, JSON_UNESCAPED_UNICODE),
                'plan_30_days_ar' => json_encode($plans, JSON_UNESCAPED_UNICODE),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Not reversing
    }
};
```

## File: 2026_07_11_115159_create_icons_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('icons', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('category'); // 'certificates', 'programs', 'plan_30_days'
            $table->string('icon_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icons');
    }
};
```

## File: 2026_07_11_132219_add_icon_to_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->string('icon')->nullable()->after('title_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
};
```

## File: 2026_07_15_151418_add_report_code_to_assessments_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->string('report_code')->nullable()->after('scoring_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessments', function (Blueprint $table) {
            $table->dropColumn('report_code');
        });
    }
};
```

## File: 2026_07_17_014000_change_sessions_user_id_to_uuid.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->string('user_id', 36)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
        });
    }
};
```

## File: 2026_07_21_160000_remove_reversed_label_from_questions.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Remove (عبارة معكوسة) and variations from questions.text_ar
        $questions = DB::table('questions')
            ->where('text_ar', 'like', '%معكوس%')
            ->get();

        foreach ($questions as $question) {
            $cleaned = str_replace(
                [' (عبارة معكوسة)', '(عبارة معكوسة)', ' (عبارة معكوسه)', '(عبارة معكوسه)'],
                '',
                $question->text_ar
            );

            DB::table('questions')
                ->where('id', $question->id)
                ->update(['text_ar' => trim($cleaned)]);
        }

        // Clean assessment description if note exists
        $assessments = DB::table('assessments')
            ->where('description_ar', 'like', '%معكوس%')
            ->get();

        foreach ($assessments as $assessment) {
            $cleanedDesc = preg_replace('/ ملحوظة:\s*العبارات.*معكوسة.*/u', '', $assessment->description_ar);
            DB::table('assessments')
                ->where('id', $assessment->id)
                ->update(['description_ar' => trim($cleanedDesc)]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op
    }
};
```

## File: 2026_07_21_170000_make_assessments_limit_nullable_on_coupons_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->integer('assessments_limit')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->integer('assessments_limit')->default(1)->change();
        });
    }
};
```

## File: 2026_07_21_234000_add_perceptual_fields_to_recommendations_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            if (!Schema::hasColumn('recommendations', 'title_ar')) {
                $table->string('title_ar')->nullable()->after('level');
            }
            if (!Schema::hasColumn('recommendations', 'strengths_ar')) {
                $table->text('strengths_ar')->nullable()->after('description_ar');
            }
            if (!Schema::hasColumn('recommendations', 'development_areas_ar')) {
                $table->text('development_areas_ar')->nullable()->after('strengths_ar');
            }
            if (!Schema::hasColumn('recommendations', 'how_to_learn_ar')) {
                $table->text('how_to_learn_ar')->nullable()->after('development_areas_ar');
            }
            if (!Schema::hasColumn('recommendations', 'practical_tips_ar')) {
                $table->text('practical_tips_ar')->nullable()->after('how_to_learn_ar');
            }
        });
    }

    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropColumn([
                'title_ar',
                'strengths_ar',
                'development_areas_ar',
                'how_to_learn_ar',
                'practical_tips_ar'
            ]);
        });
    }
};
```
