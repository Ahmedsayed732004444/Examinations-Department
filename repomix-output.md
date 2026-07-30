This file is a merged representation of a subset of the codebase, containing specifically included files and files not matching ignore patterns, combined into a single document by Repomix.

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
- Only files matching these patterns are included: app/**, routes/**, config/**, database/migrations/**, database/seeders/**, tests/**
- Files matching these patterns are excluded: repomix-output.xml, repomix-output.md, repomix-migrations.md, database/data/assessments/**, database/database.sqlite, storage/**, composer.lock, package-lock.json, public/css/report-pdf.css
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Files are sorted by Git change count (files with more changes are at the bottom)

# Directory Structure
```
app/Console/Commands/CleanReversedLabels.php
app/Console/Commands/ConvertRecommendationsJson.php
app/Http/Controllers/Admin/AnswerOptionController.php
app/Http/Controllers/Admin/AssessmentController.php
app/Http/Controllers/Admin/CouponController.php
app/Http/Controllers/Admin/DashboardController.php
app/Http/Controllers/Admin/DimensionController.php
app/Http/Controllers/Admin/ExamController.php
app/Http/Controllers/Admin/IconController.php
app/Http/Controllers/Admin/QuestionController.php
app/Http/Controllers/Admin/RecommendationController.php
app/Http/Controllers/Admin/SettingController.php
app/Http/Controllers/Admin/StatisticsController.php
app/Http/Controllers/Admin/UserController.php
app/Http/Controllers/AuthController.php
app/Http/Controllers/Controller.php
app/Http/Controllers/DashboardController.php
app/Http/Controllers/ExamController.php
app/Http/Middleware/AdminMiddleware.php
app/Http/Middleware/UserMiddleware.php
app/Http/Requests/Admin/BulkStoreQuestionsRequest.php
app/Http/Requests/Admin/SaveCouponRequest.php
app/Http/Requests/Admin/StoreAssessmentRequest.php
app/Http/Requests/Admin/StoreDimensionRequest.php
app/Http/Requests/Admin/StoreInterpretationsRequest.php
app/Http/Requests/Admin/StoreQuestionRequest.php
app/Http/Requests/Admin/StoreRecommendationRequest.php
app/Http/Requests/Admin/UpdateAssessmentRequest.php
app/Http/Requests/Admin/UpdateSettingsRequest.php
app/Http/Requests/AnswerQuestionRequest.php
app/Models/AnswerOption.php
app/Models/Assessment.php
app/Models/Coupon.php
app/Models/Dimension.php
app/Models/DimensionInterpretation.php
app/Models/DimensionScore.php
app/Models/ExamSession.php
app/Models/Icon.php
app/Models/Question.php
app/Models/Recommendation.php
app/Models/Result.php
app/Models/Setting.php
app/Models/User.php
app/Models/UserAnswer.php
app/Providers/AppServiceProvider.php
app/Repositories/AssessmentRepository.php
app/Repositories/Contracts/AssessmentRepositoryInterface.php
app/Repositories/Contracts/DimensionRepositoryInterface.php
app/Repositories/Contracts/ExamSessionRepositoryInterface.php
app/Repositories/Contracts/QuestionRepositoryInterface.php
app/Repositories/Contracts/RecommendationRepositoryInterface.php
app/Repositories/Contracts/UserRepositoryInterface.php
app/Repositories/DimensionRepository.php
app/Repositories/ExamSessionRepository.php
app/Repositories/QuestionRepository.php
app/Repositories/RecommendationRepository.php
app/Repositories/UserRepository.php
app/Services/AdminDashboardService.php
app/Services/AssessmentService.php
app/Services/CouponService.php
app/Services/DimensionService.php
app/Services/ExamResultService.php
app/Services/ExamService.php
app/Services/QuestionService.php
app/Services/RecommendationService.php
app/Services/Result/DimensionInterpreter.php
app/Services/Result/RecommendationSelector.php
app/Services/Result/ResultFormatter.php
app/Services/Result/ScoreCalculator.php
app/Services/StatisticsService.php
app/Services/UserDashboardService.php
app/Services/UserService.php
config/app.php
config/auth.php
config/cache.php
config/database.php
config/filesystems.php
config/logging.php
config/mail.php
config/queue.php
config/services.php
config/session.php
database/migrations/0001_01_01_000000_create_users_table.php
database/migrations/0001_01_01_000001_create_cache_table.php
database/migrations/0001_01_01_000002_create_jobs_table.php
database/migrations/2024_01_01_000002_create_assessments_table.php
database/migrations/2024_01_01_000003_create_dimensions_table.php
database/migrations/2024_01_01_000004_create_questions_table.php
database/migrations/2024_01_01_000005_create_answer_options_table.php
database/migrations/2024_01_01_000006_create_exam_sessions_table.php
database/migrations/2024_01_01_000007_create_user_answers_table.php
database/migrations/2024_01_01_000008_create_results_table.php
database/migrations/2024_01_01_000009_create_dimension_scores_table.php
database/migrations/2024_01_01_000010_create_recommendations_table.php
database/migrations/2026_06_24_085954_add_performance_indexes_to_tables.php
database/migrations/2026_06_24_091932_create_dimension_interpretations_table.php
database/migrations/2026_06_25_120000_add_is_reversed_to_questions_table.php
database/migrations/2026_07_01_122729_add_price_and_rating_to_assessments_table.php
database/migrations/2026_07_01_140449_add_image_url_to_assessments_table.php
database/migrations/2026_07_01_154805_create_coupons_table.php
database/migrations/2026_07_03_160643_add_subtitle_ar_to_assessments_table.php
database/migrations/2026_07_05_000000_upgrade_coupons_and_users_tables.php
database/migrations/2026_07_05_124738_add_user_restrictions_to_coupons.php
database/migrations/2026_07_05_153443_create_settings_table.php
database/migrations/2026_07_05_161859_add_extra_discount_tiers_to_coupons_table.php
database/migrations/2026_07_05_225427_add_details_to_users_table.php
database/migrations/2026_07_06_005159_add_report_details_to_assessments_table.php
database/migrations/2026_07_10_164000_add_intro_and_outro_to_assessments_and_recommendations.php
database/migrations/2026_07_11_102607_move_report_details_to_recommendations.php
database/migrations/2026_07_11_104237_add_intro_texts_to_recommendations.php
database/migrations/2026_07_11_115159_create_icons_table.php
database/migrations/2026_07_11_132219_add_icon_to_assessments_table.php
database/migrations/2026_07_15_151418_add_report_code_to_assessments_table.php
database/migrations/2026_07_17_014000_change_sessions_user_id_to_uuid.php
database/migrations/2026_07_21_170000_make_assessments_limit_nullable_on_coupons_table.php
database/migrations/2026_07_21_234000_add_perceptual_fields_to_recommendations_table.php
database/migrations/2026_08_01_000000_add_soft_deletes_to_all_core_tables.php
database/seeders/Assessment10Seeder.php
database/seeders/Assessment11Seeder.php
database/seeders/Assessment12Seeder.php
database/seeders/Assessment13Seeder.php
database/seeders/Assessment14Seeder.php
database/seeders/Assessment15Seeder.php
database/seeders/Assessment16Seeder.php
database/seeders/Assessment17Seeder.php
database/seeders/Assessment18Seeder.php
database/seeders/Assessment19Seeder.php
database/seeders/Assessment1Seeder.php
database/seeders/Assessment20Seeder.php
database/seeders/Assessment21Seeder.php
database/seeders/Assessment22Seeder.php
database/seeders/Assessment23Seeder.php
database/seeders/Assessment24Seeder.php
database/seeders/Assessment25Seeder.php
database/seeders/Assessment26Seeder.php
database/seeders/Assessment27Seeder.php
database/seeders/Assessment2Seeder.php
database/seeders/Assessment3Seeder.php
database/seeders/Assessment4Seeder.php
database/seeders/Assessment5Seeder.php
database/seeders/Assessment6Seeder.php
database/seeders/Assessment7Seeder.php
database/seeders/Assessment8Seeder.php
database/seeders/Assessment9Seeder.php
database/seeders/AssessmentsDatabaseSeeder.php
database/seeders/DatabaseSeeder.php
database/seeders/PerceptualStylesSeeder.php
routes/console.php
routes/web.php
tests/Feature/Architecture/NoDirectBuilderDeleteTest.php
```

# Files

## File: app/Console/Commands/CleanReversedLabels.php
```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CleanReversedLabels extends Command
{
    protected $signature = 'app:clean-reversed-labels';
    protected $description = 'Clean legacy (عبارة معكوسة) notes from questions and assessments';

    public function handle(): int
    {
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

        $assessments = DB::table('assessments')
            ->where('description_ar', 'like', '%معكوس%')
            ->get();

        foreach ($assessments as $assessment) {
            $cleanedDesc = preg_replace('/ ملحوظة:\s*العبارات.*معكوسة.*/u', '', $assessment->description_ar);
            DB::table('assessments')
                ->where('id', $assessment->id)
                ->update(['description_ar' => trim($cleanedDesc)]);
        }

        $this->info('Reversed labels cleaned successfully.');
        return Command::SUCCESS;
    }
}
```

## File: app/Console/Commands/ConvertRecommendationsJson.php
```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ConvertRecommendationsJson extends Command
{
    protected $signature = 'app:convert-recommendations-json';
    protected $description = 'Convert legacy recommendation text fields to structured JSON format';

    public function handle(): int
    {
        $recommendations = DB::table('recommendations')->get();

        foreach ($recommendations as $rec) {
            $certs = [];
            if (!empty($rec->certificates_ar) && !is_array(json_decode($rec->certificates_ar, true))) {
                $lines = array_filter(array_map('trim', explode("\n", $rec->certificates_ar)));
                foreach ($lines as $line) {
                    $certs[] = [
                        'title' => mb_substr($line, 0, 30),
                        'subtitle' => $line,
                        'icon' => 'blue-hexagon'
                    ];
                }
            }

            $progs = [];
            if (!empty($rec->programs_ar) && !is_array(json_decode($rec->programs_ar, true))) {
                $lines = array_filter(array_map('trim', explode("\n", $rec->programs_ar)));
                foreach ($lines as $line) {
                    $progs[] = [
                        'title' => $line,
                        'icon' => 'bi-journal-bookmark'
                    ];
                }
            }

            $plans = [];
            if (!empty($rec->plan_30_days_ar) && !is_array(json_decode($rec->plan_30_days_ar, true))) {
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

            $updateData = [];
            if (!empty($certs)) {
                $updateData['certificates_ar'] = json_encode($certs, JSON_UNESCAPED_UNICODE);
            }
            if (!empty($progs)) {
                $updateData['programs_ar'] = json_encode($progs, JSON_UNESCAPED_UNICODE);
            }
            if (!empty($plans)) {
                $updateData['plan_30_days_ar'] = json_encode($plans, JSON_UNESCAPED_UNICODE);
            }

            if (!empty($updateData)) {
                DB::table('recommendations')->where('id', $rec->id)->update($updateData);
            }
        }

        $this->info('Recommendation fields successfully converted to JSON.');
        return Command::SUCCESS;
    }
}
```

## File: app/Http/Controllers/Admin/DashboardController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminDashboardService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private readonly AdminDashboardService $dashboardService,
    ) {}

    public function index(): View
    {
        $data = $this->dashboardService->getData();

        return view('admin.dashboard', $data);
    }
}
```

## File: app/Http/Controllers/Admin/DimensionController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDimensionRequest;
use App\Http\Requests\Admin\StoreInterpretationsRequest;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Services\DimensionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DimensionController extends Controller
{
    public function __construct(
        private readonly DimensionService $dimensionService,
    ) {}

    public function byAssessment(Assessment $assessment): JsonResponse
    {
        $dimensions = $this->dimensionService->byAssessment($assessment);

        return response()->json($dimensions);
    }

    public function store(StoreDimensionRequest $request, Assessment $assessment): JsonResponse
    {
        $dimension = $this->dimensionService->create($assessment, $request->validated());

        return response()->json([
            'success' => true,
            'dimension' => $dimension,
            'message' => 'تم إضافة البُعد بنجاح.',
        ]);
    }

    public function update(StoreDimensionRequest $request, Dimension $dimension): JsonResponse
    {
        $this->dimensionService->update($dimension, $request->validated());

        return response()->json(['success' => true, 'message' => 'تم تحديث البُعد.']);
    }

    public function destroy(Dimension $dimension): JsonResponse
    {
        $this->dimensionService->delete($dimension);

        return response()->json(['success' => true, 'message' => 'تم حذف البُعد بنجاح.']);
    }

    public function reorder(Request $request): JsonResponse
    {
        $data = $request->validate([
            'order' => 'required|array',
            'order.*' => 'required|uuid|exists:dimensions,id',
        ]);

        $this->dimensionService->reorder($data['order']);

        return response()->json(['success' => true, 'message' => 'تم إعادة ترتيب الأبعاد.']);
    }

    public function storeInterpretations(StoreInterpretationsRequest $request, Dimension $dimension): JsonResponse
    {
        $this->dimensionService->saveInterpretations($dimension, $request->validated());

        return response()->json(['success' => true, 'message' => 'تم حفظ تفسيرات البُعد بنجاح.']);
    }
}
```

## File: app/Http/Controllers/Admin/IconController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IconController extends Controller
{
    public function index()
    {
        $icons = Icon::orderBy('created_at', 'desc')->get()->groupBy('category');
        return view('admin.icons.index', compact('icons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:certificates,programs,plan_30_days,assessments,system',
            'icon_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:500', // max 500KB
        ], [
            'icon_file.max' => 'حجم الأيقونة يجب أن لا يتجاوز 500 كيلوبايت لضمان سرعة التقرير.',
            'icon_file.image' => 'يجب اختيار ملف صورة صالح.',
        ]);

        if ($request->hasFile('icon_file')) {
            $file = $request->file('icon_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Move to public/images/icons
            $destinationPath = public_path('images/icons');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            
            $file->move($destinationPath, $filename);
            
            $iconUrl = '/images/icons/' . $filename;

            Icon::create([
                'name' => $request->name,
                'category' => $request->category,
                'icon_url' => $iconUrl,
            ]);

            return back()->with('success', 'تم إضافة الأيقونة بنجاح.');
        }

        return back()->withErrors(['icon_file' => 'فشل في رفع الأيقونة.']);
    }

    public function destroy(Icon $icon)
    {
        // Extract filename from URL
        $filename = basename($icon->icon_url);
        $path = public_path('images/icons/' . $filename);
        
        if (File::exists($path)) {
            File::delete($path);
        }

        $icon->delete();

        return back()->with('success', 'تم حذف الأيقونة بنجاح.');
    }
}
```

## File: app/Http/Controllers/Controller.php
```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
```

## File: app/Http/Controllers/DashboardController.php
```php
<?php

namespace App\Http\Controllers;

use App\Services\UserDashboardService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private readonly UserDashboardService $dashboardService,
    ) {}

    public function index(): View
    {
        $data = $this->dashboardService->getData(auth()->user());

        return view('user.dashboard', $data);
    }
}
```

## File: app/Http/Middleware/AdminMiddleware.php
```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->check() || ! auth()->user()->isAdmin()) {
            abort(403, 'غير مصرح لك بالوصول.');
        }

        return $next($request);
    }
}
```

## File: app/Http/Middleware/UserMiddleware.php
```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->isAdmin() && ! $request->is('exam/*/result')) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
```

## File: app/Http/Requests/Admin/StoreDimensionRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreDimensionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'name_ar' => 'required|string|max:255',
            'max_score' => 'required|integer|min:1',
        ];
    }
}
```

## File: app/Models/DimensionScore.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class DimensionScore extends Model
{
    use HasUuids;

    protected $fillable = ['result_id', 'dimension_id', 'score', 'max_score', 'level'];

    public function result()
    {
        return $this->belongsTo(Result::class);
    }

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
}
```

## File: app/Models/Icon.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Icon extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'category',
        'icon_url',
    ];
}
```

## File: app/Models/Setting.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];
}
```

## File: app/Models/UserAnswer.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasUuids;

    protected $fillable = ['session_id', 'question_id', 'selected_option_id', 'score_earned'];

    public function examSession()
    {
        return $this->belongsTo(ExamSession::class, 'session_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function selectedOption()
    {
        return $this->belongsTo(AnswerOption::class, 'selected_option_id');
    }
}
```

## File: app/Repositories/Contracts/DimensionRepositoryInterface.php
```php
<?php

namespace App\Repositories\Contracts;

use App\Models\Assessment;
use App\Models\Dimension;
use Illuminate\Database\Eloquent\Collection;

interface DimensionRepositoryInterface
{
    /**
     * Get all dimensions for an assessment ordered by order_index, with question count.
     */
    public function byAssessment(Assessment $assessment): Collection;

    /**
     * Create a new dimension.
     *
     * @param  array<string, mixed>  $data
     */
    public function create(array $data): Dimension;

    /**
     * Update a dimension.
     *
     * @param  array<string, mixed>  $data
     */
    public function update(Dimension $dimension, array $data): Dimension;

    /**
     * Delete a dimension (unlinks its questions first).
     */
    public function delete(Dimension $dimension): void;

    /**
     * Reorder dimensions by providing an ordered array of UUIDs.
     *
     * @param  array<int, string>  $orderedIds
     */
    public function reorder(array $orderedIds): void;

    /**
     * Upsert dimension interpretations (high / medium / low).
     *
     * @param  array<string, mixed>  $data
     */
    public function upsertInterpretations(Dimension $dimension, array $data): void;
}
```

## File: app/Repositories/Contracts/ExamSessionRepositoryInterface.php
```php
<?php

namespace App\Repositories\Contracts;

use App\Models\Assessment;
use App\Models\ExamSession;

interface ExamSessionRepositoryInterface
{
    /**
     * Find an in-progress session for a user and assessment.
     */
    public function findInProgress(string $userId, string $assessmentId): ?ExamSession;

    /**
     * Create a new exam session.
     *
     * @param  array<string, mixed>  $data
     */
    public function create(array $data): ExamSession;

    /**
     * Update an exam session with the given attributes.
     *
     * @param  array<string, mixed>  $data
     */
    public function update(ExamSession $session, array $data): ExamSession;
}
```

## File: app/Repositories/Contracts/QuestionRepositoryInterface.php
```php
<?php

namespace App\Repositories\Contracts;

use App\Models\Assessment;
use App\Models\Question;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface QuestionRepositoryInterface
{
    /**
     * Return a paginated, filtered list of questions.
     * Uses DB JOINs to fetch assessment and dimension names efficiently.
     *
     * @param  array<string, mixed>  $filters  Keys: assessment_id, dimension_id, search, per_page
     */
    public function filteredPaginated(array $filters): LengthAwarePaginator;

    /**
     * Get all questions for an assessment with their answer options.
     */
    public function byAssessment(Assessment $assessment): Collection;

    /**
     * Create a question together with its answer options.
     *
     * @param  array<string, mixed>  $data
     * @param  array<int, array<string, mixed>>  $options
     */
    public function create(array $data, array $options): Question;

    /**
     * Update the question text.
     *
     * @param  array<string, mixed>  $data
     */
    public function update(Question $question, array $data): Question;

    /**
     * Delete a single question.
     */
    public function delete(Question $question): void;

    /**
     * Delete multiple questions by IDs.
     *
     * @param  array<int, string>  $ids
     */
    public function bulkDelete(array $ids): void;

    /**
     * Reorder questions by providing an ordered array of UUIDs.
     *
     * @param  array<int, string>  $orderedIds
     */
    public function reorder(array $orderedIds): void;

    /**
     * Assign a dimension to multiple questions.
     *
     * @param  array<int, string>  $ids
     */
    public function bulkAssignDimension(array $ids, ?string $dimensionId): void;

    /**
     * Assign a dimension to a single question.
     */
    public function assignDimension(Question $question, ?string $dimensionId): Question;

    /**
     * Bulk-import questions from plain text lines with default answer options.
     *
     * @param  array<string, mixed>  $data  Keys: assessment_id, dimension_id, lines
     * @return int Number of questions created
     */
    public function bulkImport(array $data): int;
}
```

## File: app/Repositories/Contracts/RecommendationRepositoryInterface.php
```php
<?php

namespace App\Repositories\Contracts;

use App\Models\Recommendation;
use Illuminate\Support\Collection;

interface RecommendationRepositoryInterface
{
    /**
     * Get all recommendations joined with assessment names, grouped by assessment_id.
     *
     * @return Collection<string, Collection<int, Recommendation>>
     */
    public function allGrouped(): Collection;

    /**
     * Upsert a recommendation (update-or-create by assessment_id + level).
     *
     * @param  array<string, mixed>  $data
     */
    public function upsert(array $data): Recommendation;

    /**
     * Delete a recommendation.
     */
    public function delete(Recommendation $recommendation): void;
}
```

## File: app/Repositories/Contracts/UserRepositoryInterface.php
```php
<?php

namespace App\Repositories\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    /**
     * Search and paginate users with their completed exam session count.
     *
     * @return LengthAwarePaginator
     */
    public function searchPaginated(?string $search, int $perPage = 15);

    /**
     * Retrieve completed exam sessions for a specific user.
     *
     * @return Collection
     */
    public function getUserResults(string $userId);
}
```

## File: app/Repositories/DimensionRepository.php
```php
<?php

namespace App\Repositories;

use App\Models\Assessment;
use App\Models\Dimension;
use App\Repositories\Contracts\DimensionRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DimensionRepository implements DimensionRepositoryInterface
{
    public function byAssessment(Assessment $assessment): Collection
    {
        return $assessment->dimensions()
            ->withCount('questions')
            ->orderBy('order_index')
            ->get();
    }

    public function create(array $data): Dimension
    {
        return Dimension::create($data);
    }

    public function update(Dimension $dimension, array $data): Dimension
    {
        $dimension->update($data);

        return $dimension->fresh();
    }

    public function delete(Dimension $dimension): void
    {
        // Unlink questions so they are not orphaned
        $dimension->questions()->update(['dimension_id' => null]);
        $dimension->delete();
    }

    public function reorder(array $orderedIds): void
    {
        foreach ($orderedIds as $index => $id) {
            Dimension::where('id', $id)->update(['order_index' => $index]);
        }
    }

    public function upsertInterpretations(Dimension $dimension, array $data): void
    {
        foreach (['high', 'medium', 'low'] as $level) {
            $dimension->interpretations()->updateOrCreate(
                ['level' => $level],
                [
                    'interpretation_text_ar' => $data['interpretations'][$level],
                    'high_threshold' => $data['high_threshold'],
                    'low_threshold' => $data['low_threshold'],
                ]
            );
        }
    }
}
```

## File: app/Repositories/ExamSessionRepository.php
```php
<?php

namespace App\Repositories;

use App\Models\ExamSession;
use App\Repositories\Contracts\ExamSessionRepositoryInterface;

class ExamSessionRepository implements ExamSessionRepositoryInterface
{
    public function findInProgress(string $userId, string $assessmentId): ?ExamSession
    {
        return ExamSession::where('user_id', $userId)
            ->where('assessment_id', $assessmentId)
            ->where('status', 'in_progress')
            ->first();
    }

    public function create(array $data): ExamSession
    {
        return ExamSession::create($data);
    }

    public function update(ExamSession $session, array $data): ExamSession
    {
        $session->update($data);

        return $session->fresh();
    }
}
```

## File: app/Repositories/QuestionRepository.php
```php
<?php

namespace App\Repositories;

use App\Models\AnswerOption;
use App\Models\Assessment;
use App\Models\Question;
use App\Repositories\Contracts\QuestionRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function filteredPaginated(array $filters): LengthAwarePaginator
    {
        /*
         * Use a DB JOIN between questions, assessments and dimensions
         * to retrieve assessment title and dimension name in a single query,
         * avoiding the N+1 problem that the previous with() approach caused.
         */
        $query = DB::table('questions as q')
            ->join('assessments as a', 'a.id', '=', 'q.assessment_id')
            ->leftJoin('dimensions as d', 'd.id', '=', 'q.dimension_id')
            ->select([
                'q.id',
                'q.text_ar',
                'q.assessment_id',
                'q.dimension_id',
                'q.order_index',
                'q.is_reversed',
                'q.created_at',
                'a.title_ar as assessment_title',
                'd.name_ar  as dimension_name',
            ])
            ->selectSub(
                DB::table('answer_options')->whereColumn('answer_options.question_id', 'q.id')->selectRaw('COUNT(*)'),
                'answer_options_count'
            );

        if (! empty($filters['assessment_id'])) {
            $query->where('q.assessment_id', $filters['assessment_id'])
                ->orderBy('q.order_index');
        } else {
            $query->orderByDesc('q.created_at');
        }

        if (! empty($filters['dimension_id'])) {
            $query->where('q.dimension_id', $filters['dimension_id']);
        }

        if (! empty($filters['search'])) {
            $query->where('q.text_ar', 'like', '%'.$filters['search'].'%');
        }

        $perPage = $filters['per_page'] ?? 25;

        if ($perPage === 'all' || $perPage === 'الكل') {
            $total = $query->count();
            $perPage = $total > 0 ? $total : 25;
        } else {
            $perPage = in_array((int) $perPage, [25, 50, 100]) ? (int) $perPage : 25;
        }

        return $query->paginate($perPage);
    }

    public function byAssessment(Assessment $assessment): Collection
    {
        return $assessment->questions()
            ->with('answerOptions')
            ->orderBy('order_index')
            ->get();
    }

    public function create(array $data, array $options): Question
    {
        $question = Question::create([
            'assessment_id' => $data['assessment_id'],
            'dimension_id' => $data['dimension_id'] ?? null,
            'text_ar' => $data['text_ar'],
            'order_index' => Question::where('assessment_id', $data['assessment_id'])->count(),
            'is_reversed' => $data['is_reversed'] ?? false,
        ]);

        foreach ($options as $index => $opt) {
            AnswerOption::create([
                'question_id' => $question->id,
                'label_ar' => $opt['label_ar'],
                'score_value' => $opt['score_value'],
                'order_index' => $opt['order_index'] ?? $index,
            ]);
        }

        return $question;
    }

    public function update(Question $question, array $data): Question
    {
        $question->update($data);

        return $question->fresh();
    }

    public function delete(Question $question): void
    {
        $question->delete();
    }

    public function bulkDelete(array $ids): void
    {
        Question::whereIn('id', $ids)->delete();
    }

    public function reorder(array $orderedIds): void
    {
        foreach ($orderedIds as $index => $id) {
            Question::where('id', $id)->update(['order_index' => $index]);
        }
    }

    public function bulkAssignDimension(array $ids, ?string $dimensionId): void
    {
        Question::whereIn('id', $ids)->update(['dimension_id' => $dimensionId]);
    }

    public function assignDimension(Question $question, ?string $dimensionId): Question
    {
        $question->update(['dimension_id' => $dimensionId]);

        return $question->fresh();
    }

    public function bulkImport(array $data): int
    {
        $defaultOptions = [
            ['label_ar' => 'نعم',        'score_value' => 2, 'order_index' => 0],
            ['label_ar' => 'إلى حد ما', 'score_value' => 1, 'order_index' => 1],
            ['label_ar' => 'لا',         'score_value' => 0, 'order_index' => 2],
        ];

        $lines = $data['lines'];
        $baseIndex = Question::where('assessment_id', $data['assessment_id'])->count();
        $count = 0;

        foreach ($lines as $offset => $line) {
            if (empty($line)) {
                continue;
            }

            $question = Question::create([
                'assessment_id' => $data['assessment_id'],
                'dimension_id' => $data['dimension_id'] ?? null,
                'text_ar' => $line,
                'order_index' => $baseIndex + $offset,
            ]);

            foreach ($defaultOptions as $opt) {
                AnswerOption::create(array_merge($opt, ['question_id' => $question->id]));
            }

            $count++;
        }

        return $count;
    }
}
```

## File: app/Services/AdminDashboardService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\ExamSession;
use Illuminate\Support\Facades\DB;

class AdminDashboardService
{
    /**
     * Build all data needed for the admin dashboard.
     *
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        $totalUsers = DB::table('users')->where('role', 'user')->count();
        $todaySessions = DB::table('exam_sessions')
            ->where('status', 'completed')
            ->whereDate('completed_at', today())
            ->count();

        /*
         * Most-used assessment: join exam_sessions and count completed ones
         * to avoid the N+1 withCount pattern.
         */
        $mostUsedAssessment = Assessment::withCount([
            'examSessions' => fn ($q) => $q->where('status', 'completed'),
        ])
            ->orderByDesc('exam_sessions_count')
            ->first();

        $avgScore = DB::table('results')->avg('total_score');

        /*
         * Recent sessions: JOIN users, assessments, results in a single query.
         */
        $recentSessions = ExamSession::where('status', 'completed')
            ->with(['user', 'assessment', 'result'])
            ->orderByDesc('completed_at')
            ->limit(10)
            ->get();

        return compact(
            'totalUsers',
            'todaySessions',
            'mostUsedAssessment',
            'avgScore',
            'recentSessions'
        );
    }
}
```

## File: app/Services/DimensionService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\Dimension;
use App\Repositories\Contracts\DimensionRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DimensionService
{
    public function __construct(
        private readonly DimensionRepositoryInterface $dimensions,
    ) {}

    public function byAssessment(Assessment $assessment): Collection
    {
        return $this->dimensions->byAssessment($assessment);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function create(Assessment $assessment, array $data): Dimension
    {
        return $this->dimensions->create([
            'assessment_id' => $assessment->id,
            'name_ar' => $data['name_ar'],
            'max_score' => $data['max_score'],
            'order_index' => $assessment->dimensions()->count(),
        ]);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(Dimension $dimension, array $data): Dimension
    {
        return $this->dimensions->update($dimension, $data);
    }

    public function delete(Dimension $dimension): void
    {
        $this->dimensions->delete($dimension);
    }

    /**
     * @param  array<int, string>  $orderedIds
     */
    public function reorder(array $orderedIds): void
    {
        $this->dimensions->reorder($orderedIds);
    }

    /**
     * Save all three level interpretations for a dimension.
     *
     * @param  array<string, mixed>  $data
     */
    public function saveInterpretations(Dimension $dimension, array $data): void
    {
        $this->dimensions->upsertInterpretations($dimension, $data);
    }
}
```

## File: app/Services/QuestionService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\Question;
use App\Repositories\Contracts\QuestionRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class QuestionService
{
    public function __construct(
        private readonly QuestionRepositoryInterface $questions,
    ) {}

    /**
     * @param  array<string, mixed>  $filters
     */
    public function filteredList(array $filters): LengthAwarePaginator
    {
        return $this->questions->filteredPaginated($filters);
    }

    public function byAssessment(Assessment $assessment): Collection
    {
        return $this->questions->byAssessment($assessment);
    }

    /**
     * @param  array<string, mixed>  $data
     * @param  array<int, array<string, mixed>>  $options
     */
    public function create(array $data, array $options): Question
    {
        return $this->questions->create($data, $options);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(Question $question, array $data): Question
    {
        return $this->questions->update($question, ['text_ar' => $data['text_ar']]);
    }

    public function delete(Question $question): void
    {
        $this->questions->delete($question);
    }

    /**
     * @param  array<int, string>  $ids
     */
    public function bulkDelete(array $ids): int
    {
        $count = count($ids);
        $this->questions->bulkDelete($ids);

        return $count;
    }

    /**
     * @param  array<int, string>  $orderedIds
     */
    public function reorder(array $orderedIds): void
    {
        $this->questions->reorder($orderedIds);
    }

    /**
     * @param  array<int, string>  $ids
     */
    public function bulkAssignDimension(array $ids, ?string $dimensionId): void
    {
        $this->questions->bulkAssignDimension($ids, $dimensionId);
    }

    public function assignDimension(Question $question, ?string $dimensionId): Question
    {
        return $this->questions->assignDimension($question, $dimensionId);
    }

    /**
     * Bulk-import questions from raw text (one per line).
     *
     * @param  array<string, mixed>  $data  Keys: assessment_id, dimension_id, questions_text
     * @return int Number of questions created
     */
    public function bulkImport(array $data): int
    {
        $lines = array_filter(
            array_map('trim', explode("\n", $data['questions_text']))
        );

        return $this->questions->bulkImport([
            'assessment_id' => $data['assessment_id'],
            'dimension_id' => $data['dimension_id'] ?? null,
            'lines' => array_values($lines),
        ]);
    }

    /**
     * Import questions from a CSV file.
     */
    public function importFromCsv(Assessment $assessment, string $filePath): int
    {
        if (($handle = fopen($filePath, 'r')) === false) {
            throw new \RuntimeException('تعذر فتح ملف CSV.');
        }

        $rowCount = 0;
        $isFirst = true;

        while (($row = fgetcsv($handle, 1000, ',')) !== false) {
            if (empty($row) || count($row) < 2) {
                continue;
            }

            // Skip header row if present
            if ($isFirst) {
                $isFirst = false;
                $firstCol = trim($row[0]);
                if (
                    str_contains($firstCol, 'dimension') ||
                    str_contains($firstCol, 'البعد') ||
                    str_contains($firstCol, 'بُعد') ||
                    str_contains(trim($row[1]), 'question') ||
                    str_contains(trim($row[1]), 'السؤال')
                ) {
                    continue;
                }
            }

            $dimName = trim($row[0] ?? '');
            $qText = trim($row[1] ?? '');

            if (empty($qText)) {
                continue;
            }

            $isReversed = filter_var(trim($row[2] ?? '0'), FILTER_VALIDATE_BOOLEAN) || trim($row[2] ?? '0') === '1';
            $optionsStr = trim($row[3] ?? '');

            // Get or create dimension if dimName is provided
            $dimensionId = null;
            if (! empty($dimName)) {
                $dimension = $assessment->dimensions()->firstOrCreate(
                    ['name_ar' => $dimName],
                    [
                        'max_score' => 0,
                        'order_index' => $assessment->dimensions()->count(),
                    ]
                );
                $dimensionId = $dimension->id;
            }

            // Parse options
            $options = [];
            if (! empty($optionsStr)) {
                $optParts = explode('|', $optionsStr);
                foreach ($optParts as $idx => $part) {
                    $pair = explode(':', $part);
                    $label = trim($pair[0] ?? '');
                    $score = intval(trim($pair[1] ?? '0'));
                    if ($label !== '') {
                        $options[] = [
                            'label_ar' => $label,
                            'score_value' => $score,
                            'order_index' => $idx,
                        ];
                    }
                }
            }

            // Default options
            if (empty($options)) {
                $options = [
                    ['label_ar' => 'نعم',        'score_value' => $isReversed ? 0 : 2, 'order_index' => 0],
                    ['label_ar' => 'إلى حد ما', 'score_value' => 1,                   'order_index' => 1],
                    ['label_ar' => 'لا',         'score_value' => $isReversed ? 2 : 0, 'order_index' => 2],
                ];
            }

            $this->questions->create([
                'assessment_id' => $assessment->id,
                'dimension_id' => $dimensionId,
                'text_ar' => $qText,
                'is_reversed' => $isReversed,
            ], $options);

            $rowCount++;
        }

        fclose($handle);

        // Update dimensions max_scores
        foreach ($assessment->dimensions as $dim) {
            $dimQuestions = $dim->questions()->with('answerOptions')->get();
            $dimMax = $dimQuestions->sum(
                fn ($q) => $q->answerOptions->max('score_value') ?? 0
            );
            $dim->update(['max_score' => $dimMax]);
        }

        return $rowCount;
    }
}
```

## File: app/Services/RecommendationService.php
```php
<?php

namespace App\Services;

use App\Models\Recommendation;
use App\Repositories\Contracts\RecommendationRepositoryInterface;
use Illuminate\Support\Collection;

class RecommendationService
{
    public function __construct(
        private readonly RecommendationRepositoryInterface $recommendations,
    ) {}

    /**
     * @return Collection<string, Collection<int, Recommendation>>
     */
    public function allGrouped(): Collection
    {
        return $this->recommendations->allGrouped();
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function upsert(array $data): Recommendation
    {
        return $this->recommendations->upsert($data);
    }

    public function delete(Recommendation $recommendation): void
    {
        $this->recommendations->delete($recommendation);
    }
}
```

## File: app/Services/Result/DimensionInterpreter.php
```php
<?php

namespace App\Services\Result;

use App\Models\Dimension;
use App\Models\DimensionInterpretation;

class DimensionInterpreter
{
    /**
     * Interprets a dimension score strictly using its database thresholds.
     */
    public function interpret(Dimension $dimension, int $score): ?DimensionInterpretation
    {
        foreach ($dimension->interpretations as $interp) {
            if ($interp->low_threshold !== null && $interp->high_threshold !== null) {
                if ($score >= $interp->low_threshold && $score <= $interp->high_threshold) {
                    return $interp;
                }
            }
        }

        return null;
    }
}
```

## File: app/Services/Result/ScoreCalculator.php
```php
<?php

namespace App\Services\Result;

use App\Models\ExamSession;

class ScoreCalculator
{
    /**
     * Calculate raw scores for the overall assessment and individual dimensions.
     * 
     * @return array{
     *   total_score: int, 
     *   max_score: int, 
     *   dimensions: array<array{dimension_id: string, score: int, max_score: int, name: string}>
     * }
     */
    public function calculate(ExamSession $session): array
    {
        $assessment = $session->assessment;
        $answeredByQuestion = $session->userAnswers->keyBy('question_id');

        $totalScore = 0;
        $maxScore = 0;

        foreach ($assessment->questions as $question) {
            $answer = $answeredByQuestion->get($question->id);
            if ($answer) {
                // The score_earned is already accurately recorded during the exam 
                // regardless of whether the question is reversed or not.
                $totalScore += (int)$answer->score_earned;
            }
            $maxScore += (int)($question->answerOptions->max('score_value') ?? 0);
        }

        $dimensionScoresData = [];

        foreach ($assessment->dimensions as $dimension) {
            $dimQuestions = $assessment->questions->where('dimension_id', $dimension->id);
            $dimScore = 0;
            $dimMax = 0;

            foreach ($dimQuestions as $q) {
                $answer = $answeredByQuestion->get($q->id);
                if ($answer) {
                    $dimScore += (int)$answer->score_earned;
                }
                $dimMax += (int)($q->answerOptions->max('score_value') ?? 0);
            }
            
            // Fallback for max score if no options
            $dimMax = $dimMax ?: $dimension->max_score;

            $dimensionScoresData[] = [
                'dimension_id' => $dimension->id,
                'name'         => $dimension->name_ar,
                'score'        => $dimScore,
                'max_score'    => (int)$dimMax,
            ];
        }

        return [
            'total_score' => $totalScore,
            'max_score'   => $maxScore,
            'dimensions'  => $dimensionScoresData,
        ];
    }
}
```

## File: app/Services/StatisticsService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class StatisticsService
{
    /**
     * Get all assessments for the filter dropdown.
     *
     * @return \Illuminate\Database\Eloquent\Collection<int, Assessment>
     */
    public function getAssessments()
    {
        return Assessment::all();
    }

    /**
     * Build the full statistics data payload.
     * Uses DB JOINs to avoid N+1 queries.
     *
     * @param  int  $range  Number of days
     * @return array<string, mixed>
     */
    public function getData(int $range): array
    {
        return [
            'dailyData' => $this->getDailySessionData($range),
            'assessments' => $this->getLevelDistribution(),
            'avgScores' => $this->getAverageScores(),
            'topUsers' => $this->getTopUsers(),
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getDailySessionData(int $range): array
    {
        $from = now()->subDays($range - 1)->startOfDay();

        $rows = DB::table('exam_sessions')
            ->where('status', 'completed')
            ->where('completed_at', '>=', $from)
            ->selectRaw('DATE(completed_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        $data = [];
        for ($i = 0; $i < $range; $i++) {
            $date = now()->subDays($range - 1 - $i)->format('Y-m-d');
            $data[] = [
                'date' => $date,
                'count' => $rows->get($date)?->count ?? 0,
            ];
        }

        return $data;
    }

    /**
     * Use a single JOIN query to aggregate level counts per assessment.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getLevelDistribution(): array
    {
        $rows = DB::table('assessments as a')
            ->join('exam_sessions as es', 'es.assessment_id', '=', 'a.id')
            ->join('results as r', 'r.session_id', '=', 'es.id')
            ->select([
                'a.id',
                'a.title_ar as title',
                DB::raw("SUM(CASE WHEN r.level = 'high'   THEN 1 ELSE 0 END) as high"),
                DB::raw("SUM(CASE WHEN r.level = 'medium' THEN 1 ELSE 0 END) as medium"),
                DB::raw("SUM(CASE WHEN r.level = 'low'    THEN 1 ELSE 0 END) as low"),
            ])
            ->groupBy('a.id', 'a.title_ar')
            ->get();

        return $rows->map(fn ($r) => [
            'id' => $r->id,
            'title' => $r->title,
            'high' => (int) $r->high,
            'medium' => (int) $r->medium,
            'low' => (int) $r->low,
        ])->values()->toArray();
    }

    /**
     * Use a JOIN to compute average score per assessment in a single query.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getAverageScores(): array
    {
        $rows = DB::table('assessments as a')
            ->leftJoin('exam_sessions as es', 'es.assessment_id', '=', 'a.id')
            ->leftJoin('results as r', 'r.session_id', '=', 'es.id')
            ->select([
                'a.title_ar as title',
                DB::raw('ROUND(AVG(r.total_score), 1) as avg'),
            ])
            ->groupBy('a.id', 'a.title_ar')
            ->get();

        return $rows->map(fn ($r) => [
            'title' => $r->title,
            'avg' => (float) ($r->avg ?? 0),
        ])->values()->toArray();
    }

    /**
     * @return Collection<int, object>
     */
    private function getTopUsers()
    {
        return DB::table('users as u')
            ->leftJoin('exam_sessions as es', fn ($j) => $j->on('es.user_id', '=', 'u.id')->where('es.status', 'completed')
            )
            ->where('u.role', 'user')
            ->select([
                'u.id',
                'u.name',
                'u.email',
                DB::raw('COUNT(es.id) as exam_sessions_count'),
            ])
            ->groupBy('u.id', 'u.name', 'u.email')
            ->orderByDesc('exam_sessions_count')
            ->limit(10)
            ->get();
    }

    /**
     * Export all completed exam sessions and results to a CSV string.
     */
    public function exportResultsCsv(): string
    {
        $rows = DB::table('exam_sessions as es')
            ->join('users as u', 'u.id', '=', 'es.user_id')
            ->join('assessments as a', 'a.id', '=', 'es.assessment_id')
            ->join('results as r', 'r.session_id', '=', 'es.id')
            ->where('es.status', 'completed')
            ->select([
                'es.id as session_id',
                'u.name as user_name',
                'u.email as user_email',
                'a.title_ar as assessment_title',
                'r.total_score',
                'r.max_possible_score',
                'r.level',
                'es.completed_at',
            ])
            ->orderByDesc('es.completed_at')
            ->get();

        $output = fopen('php://temp', 'r+');

        // Prepend UTF-8 BOM so Excel opens Arabic letters correctly
        fwrite($output, "\xEF\xBB\xBF");

        // Headers
        fputcsv($output, [
            'معرف الجلسة',
            'اسم المستخدم',
            'البريد الإلكتروني',
            'اسم المقياس',
            'الدرجة المحرزة',
            'الدرجة القصوى',
            'النسبة المئوية',
            'المستوى',
            'تاريخ الإكمال',
        ]);

        foreach ($rows as $row) {
            $percentage = $row->max_possible_score > 0
                ? round(($row->total_score / $row->max_possible_score) * 100).'%'
                : '0%';

            $levelLabel = match ($row->level) {
                'high' => 'مرتفع',
                'medium' => 'متوسط',
                default => 'منخفض',
            };

            fputcsv($output, [
                $row->session_id,
                $row->user_name,
                $row->user_email,
                $row->assessment_title,
                $row->total_score,
                $row->max_possible_score,
                $percentage,
                $levelLabel,
                $row->completed_at,
            ]);
        }

        rewind($output);
        $csvContent = stream_get_contents($output);
        fclose($output);

        return $csvContent;
    }
}
```

## File: app/Services/UserService.php
```php
<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
    ) {}

    public function searchPaginated(?string $search, int $perPage = 15)
    {
        return $this->userRepository->searchPaginated($search, $perPage);
    }

    public function getUserResults(string $userId)
    {
        return $this->userRepository->getUserResults($userId);
    }
}
```

## File: config/app.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
```

## File: config/auth.php
```php
<?php

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | which utilizes session storage plus the Eloquent user provider.
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | If you have multiple user tables or models you may configure multiple
    | providers to represent the model / table. These providers may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | These configuration options specify the behavior of Laravel's password
    | reset functionality, including the table utilized for token storage
    | and the user provider that is invoked to actually retrieve users.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the number of seconds before a password confirmation
    | window expires and users are asked to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
```

## File: config/cache.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache store that will be used by the
    | framework. This connection is utilized if another isn't explicitly
    | specified when running a cache operation inside the application.
    |
    */

    'default' => env('CACHE_STORE', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    | Supported drivers: "array", "database", "file", "memcached",
    |                    "redis", "dynamodb", "octane",
    |                    "failover", "null"
    |
    */

    'stores' => [

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_CACHE_CONNECTION'),
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

        'failover' => [
            'driver' => 'failover',
            'stores' => [
                'database',
                'array',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
    | stores, there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-cache-'),

];
```

## File: config/database.php
```php
<?php

use Illuminate\Support\Str;
use Pdo\Mysql;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
            'transaction_mode' => 'DEFERRED',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                (PHP_VERSION_ID >= 80500 ? Mysql::ATTR_SSL_CA : PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                (PHP_VERSION_ID >= 80500 ? Mysql::ATTR_SSL_CA : PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => env('DB_SSLMODE', 'prefer'),
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

    ],

];
```

## File: config/filesystems.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => rtrim(env('APP_URL', 'http://localhost'), '/').'/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
```

## File: config/logging.php
```php
<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', (string) env('LOG_STACK', 'single')),
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env('LOG_SLACK_USERNAME', env('APP_NAME', 'Laravel')),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'handler_with' => [
                'stream' => 'php://stderr',
            ],
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],

    ],

];
```

## File: config/mail.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send all email
    | messages unless another mailer is explicitly specified when sending
    | the message. All additional mailers can be configured within the
    | "mailers" array. Examples of each type of mailer are provided.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers that can be used
    | when delivering an email. You may specify which one you're using for
    | your mailers below. You may also add additional mailers if needed.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |            "postmark", "resend", "log", "array",
    |            "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
            'retry_after' => 60,
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
            'retry_after' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all emails sent by your application to be sent from
    | the same address. Here you may specify a name and address that is
    | used globally for all emails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', env('APP_NAME', 'Laravel')),
    ],

];
```

## File: config/queue.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue supports a variety of backends via a single, unified
    | API, giving you convenient access to each backend using identical
    | syntax for each. The default queue connection is defined below.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection options for every queue backend
    | used by your application. An example configuration is provided for
    | each backend supported by Laravel. You're also free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis",
    |          "deferred", "background", "failover", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

        'deferred' => [
            'driver' => 'deferred',
        ],

        'background' => [
            'driver' => 'background',
        ],

        'failover' => [
            'driver' => 'failover',
            'connections' => [
                'database',
                'deferred',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Job Batching
    |--------------------------------------------------------------------------
    |
    | The following options configure the database and table that store job
    | batching information. These options can be updated to any database
    | connection and table which has been defined by your application.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control how and where failed jobs are stored. Laravel ships with
    | support for storing failed jobs in a simple file or in a database.
    |
    | Supported drivers: "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
```

## File: config/services.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
```

## File: config/session.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option determines the default session driver that is utilized for
    | incoming requests. Laravel supports a variety of storage options to
    | persist session data. Database storage is a great default choice.
    |
    | Supported: "file", "cookie", "database", "memcached",
    |            "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to expire immediately when the browser is closed then you may
    | indicate that via the expire_on_close configuration option.
    |
    */

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it's stored. All encryption is performed
    | automatically by Laravel and you may use the session like normal.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When utilizing the "file" session driver, the session files are placed
    | on disk. The default storage location is defined here; however, you
    | are free to provide another location where they should be stored.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table to
    | be used to store sessions. Of course, a sensible default is defined
    | for you; however, you're welcome to change this to another table.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | When using one of the framework's cache driven session backends, you may
    | define the cache store which should be used to store the session data
    | between requests. This must match one of your defined cache stores.
    |
    | Affects: "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the session cookie that is created by
    | the framework. Typically, you should not need to change this value
    | since doing so does not grant a meaningful security improvement.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug((string) env('APP_NAME', 'laravel')).'-session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application, but you're free to change this when necessary.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | This value determines the domain and subdomains the session cookie is
    | available to. By default, the cookie will be available to the root
    | domain without subdomains. Typically, this shouldn't be changed.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you when it can't be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. It's unlikely you should disable this option.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" to permit secure cross-site requests.
    |
    | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Partitioned Cookies
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will tie the cookie to the top-level site for
    | a cross-site context. Partitioned cookies are accepted by the browser
    | when flagged "secure" and the Same-Site attribute is set to "none".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
```

## File: database/migrations/0001_01_01_000001_create_cache_table.php
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

## File: database/migrations/0001_01_01_000002_create_jobs_table.php
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

## File: database/migrations/2026_06_24_085954_add_performance_indexes_to_tables.php
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

## File: database/migrations/2026_06_25_120000_add_is_reversed_to_questions_table.php
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

## File: database/migrations/2026_07_01_122729_add_price_and_rating_to_assessments_table.php
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

## File: database/migrations/2026_07_01_140449_add_image_url_to_assessments_table.php
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

## File: database/migrations/2026_07_03_160643_add_subtitle_ar_to_assessments_table.php
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

## File: database/migrations/2026_07_05_153443_create_settings_table.php
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

## File: database/migrations/2026_07_05_161859_add_extra_discount_tiers_to_coupons_table.php
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

## File: database/migrations/2026_07_05_225427_add_details_to_users_table.php
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

## File: database/migrations/2026_07_06_005159_add_report_details_to_assessments_table.php
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

## File: database/migrations/2026_07_11_102607_move_report_details_to_recommendations.php
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

## File: database/migrations/2026_07_11_104237_add_intro_texts_to_recommendations.php
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

## File: database/migrations/2026_07_11_115159_create_icons_table.php
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

## File: database/migrations/2026_07_15_151418_add_report_code_to_assessments_table.php
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

## File: database/migrations/2026_07_21_170000_make_assessments_limit_nullable_on_coupons_table.php
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

## File: database/migrations/2026_07_21_234000_add_perceptual_fields_to_recommendations_table.php
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

## File: database/migrations/2026_08_01_000000_add_soft_deletes_to_all_core_tables.php
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
        $tables = [
            'users',
            'assessments',
            'dimensions',
            'questions',
            'answer_options',
            'exam_sessions',
            'results',
            'recommendations',
            'dimension_interpretations',
            'coupons',
        ];

        foreach ($tables as $table) {
            if (Schema::hasTable($table) && !Schema::hasColumn($table, 'deleted_at')) {
                Schema::table($table, function (Blueprint $tableBlueprint) {
                    $tableBlueprint->softDeletes();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'coupons',
            'dimension_interpretations',
            'recommendations',
            'results',
            'exam_sessions',
            'answer_options',
            'questions',
            'dimensions',
            'assessments',
            'users',
        ];

        foreach ($tables as $table) {
            if (Schema::hasTable($table) && Schema::hasColumn($table, 'deleted_at')) {
                Schema::table($table, function (Blueprint $tableBlueprint) {
                    $tableBlueprint->dropSoftDeletes();
                });
            }
        }
    }
};
```

## File: routes/console.php
```php
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
```

## File: app/Http/Controllers/Admin/AnswerOptionController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnswerOption;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnswerOptionController extends Controller
{
    /**
     * Get all options for a specific question.
     */
    public function index(Question $question): JsonResponse
    {
        $options = $question->answerOptions()->orderBy('order_index')->get();
        return response()->json($options);
    }

    /**
     * Store a new answer option for a question.
     */
    public function store(Request $request, Question $question): JsonResponse
    {
        $request->validate([
            'label_ar' => 'required|string|max:255',
            'score_value' => 'required|numeric',
        ]);

        $maxOrder = $question->answerOptions()->max('order_index') ?? -1;

        $option = AnswerOption::create([
            'question_id' => $question->id,
            'label_ar' => $request->label_ar,
            'score_value' => $request->score_value,
            'order_index' => $maxOrder + 1,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'تم إضافة خيار الإجابة.',
            'option' => $option
        ]);
    }

    /**
     * Update an existing answer option.
     */
    public function update(Request $request, AnswerOption $option): JsonResponse
    {
        $request->validate([
            'label_ar' => 'required|string|max:255',
            'score_value' => 'required|numeric',
        ]);

        $option->update([
            'label_ar' => $request->label_ar,
            'score_value' => $request->score_value,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'تم تحديث خيار الإجابة.'
        ]);
    }

    /**
     * Delete an answer option.
     */
    public function destroy(AnswerOption $option): JsonResponse
    {
        $option->delete();

        return response()->json([
            'success' => true,
            'message' => 'تم حذف خيار الإجابة.'
        ]);
    }

    /**
     * Sync identical options to ALL questions in the same assessment.
     */
    public function syncToAssessment(Request $request, Question $question): JsonResponse
    {
        $assessment = $question->assessment;
        $options = $question->answerOptions()->orderBy('order_index')->get();

        if ($options->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'لا توجد خيارات لنسخها.']);
        }

        $allQuestions = $assessment->questions()->where('id', '!=', $question->id)->get();

        \Illuminate\Support\Facades\DB::transaction(function () use ($allQuestions, $options) {
            foreach ($allQuestions as $q) {
                // Delete existing options
                $q->answerOptions()->delete();
                
                // Duplicate the current question's options
                foreach ($options as $opt) {
                    AnswerOption::create([
                        'question_id' => $q->id,
                        'label_ar' => $opt->label_ar,
                        'score_value' => $opt->score_value,
                        'order_index' => $opt->order_index,
                    ]);
                }
            }
        });

        return response()->json([
            'success' => true,
            'message' => 'تم تعميم الخيارات على جميع أسئلة المقياس بنجاح.'
        ]);
    }
}
```

## File: app/Http/Controllers/Admin/ExamController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\Question;
use App\Services\AssessmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExamController extends Controller
{
    public function __construct(
        private readonly AssessmentService $assessmentService,
    ) {}

    public function create(): View
    {
        $assessments = Assessment::orderBy('title_ar')->get();

        return view('admin.exams.create', compact('assessments'));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title_ar' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'time_limit_min' => 'nullable|integer|min:1',
            'question_ids' => 'required|array|min:1',
            'question_ids.*' => 'uuid|exists:questions,id',
        ]);

        $assessment = \Illuminate\Support\Facades\DB::transaction(function () use ($data) {
            $assessment = $this->assessmentService->create([
                'title_ar' => $data['title_ar'],
                'category' => $data['category'],
                'description_ar' => $data['description_ar'] ?? null,
                'time_limit_min' => $data['time_limit_min'] ?? null,
                'dimensions' => [],
            ]);

            // Re-assign chosen questions to this assessment in order
            foreach ($data['question_ids'] as $idx => $qId) {
                Question::where('id', $qId)->update([
                    'assessment_id' => $assessment->id,
                    'order_index' => $idx,
                ]);
            }
            
            return $assessment;
        });

        return response()->json(['success' => true, 'message' => 'تم إنشاء الاختبار.', 'id' => $assessment->id]);
    }
}
```

## File: app/Http/Controllers/Admin/QuestionController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BulkStoreQuestionsRequest;
use App\Http\Requests\Admin\StoreQuestionRequest;
use App\Models\Assessment;
use App\Models\Question;
use App\Services\AssessmentService;
use App\Services\QuestionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class QuestionController extends Controller
{
    public function __construct(
        private readonly QuestionService $questionService,
        private readonly AssessmentService $assessmentService,
    ) {}

    public function index(Request $request): View
    {
        $assessments = Assessment::with('dimensions')->orderBy('title_ar')->get();

        $questions = $this->questionService->filteredList($request->only([
            'assessment_id',
            'dimension_id',
            'search',
            'per_page',
        ]));

        return view('admin.questions.index', compact('questions', 'assessments'));
    }

    public function store(StoreQuestionRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $question = $this->questionService->create($validated, $validated['options']);

        return response()->json([
            'success' => true,
            'message' => 'تم إضافة السؤال.',
            'id' => $question->id,
        ]);
    }

    public function bulkStore(BulkStoreQuestionsRequest $request): JsonResponse
    {
        $count = $this->questionService->bulkImport($request->validated());

        return response()->json(['success' => true, 'message' => "تم استيراد $count سؤال بنجاح."]);
    }

    public function byAssessment(Assessment $assessment): JsonResponse
    {
        $questions = $this->questionService->byAssessment($assessment);

        return response()->json($questions);
    }

    public function update(Request $request, Question $question): JsonResponse
    {
        $request->validate(['text_ar' => 'sometimes|string', 'is_reversed' => 'sometimes|boolean']);
        $this->questionService->update($question, $request->only(['text_ar', 'is_reversed']));

        return response()->json(['success' => true, 'message' => 'تم تحديث السؤال.']);
    }

    public function destroy(Question $question): JsonResponse
    {
        $this->questionService->delete($question);

        return response()->json(['success' => true, 'message' => 'تم حذف السؤال.']);
    }

    public function bulkDelete(Request $request): JsonResponse
    {
        $request->validate(['ids' => 'required|array', 'ids.*' => 'uuid']);
        $count = $this->questionService->bulkDelete($request->ids);

        return response()->json(['success' => true, 'message' => "تم حذف $count سؤال."]);
    }

    public function reorder(Request $request): JsonResponse
    {
        $request->validate(['order' => 'required|array', 'order.*' => 'uuid']);
        $this->questionService->reorder($request->order);

        return response()->json(['success' => true]);
    }

    public function assignDimension(Request $request, Question $question): JsonResponse
    {
        $request->validate(['dimension_id' => 'nullable|uuid|exists:dimensions,id']);
        $this->questionService->assignDimension($question, $request->dimension_id ?: null);

        return response()->json(['success' => true, 'message' => 'تم تحديد البُعد.']);
    }

    public function bulkAssignDimension(Request $request): JsonResponse
    {
        $request->validate([
            'ids' => 'required|array', 
            'ids.*' => 'uuid',
            'dimension_id' => 'nullable|uuid|exists:dimensions,id'
        ]);
        $this->questionService->bulkAssignDimension($request->ids, $request->dimension_id ?: null);

        return response()->json(['success' => true, 'message' => 'تم تعيين البُعد للأسئلة المحددة.']);
    }

    /**
     * Import questions from CSV for an assessment.
     */
    public function importCsv(Request $request, Assessment $assessment): JsonResponse
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt|max:2048',
        ]);

        $file = $request->file('csv_file');

        try {
            $count = $this->questionService->importFromCsv($assessment, $file->getRealPath());

            return response()->json([
                'success' => true,
                'message' => "تم استيراد $count سؤال بنجاح وتحديث الأبعاد المعنية.",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء الاستيراد: '.$e->getMessage(),
            ], 422);
        }
    }

    /**
     * Download CSV template for question importing.
     */
    public function downloadTemplate(): StreamedResponse
    {
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="questions_import_template.csv"',
        ];

        return response()->streamDownload(function () {
            $output = fopen('php://output', 'w');
            fwrite($output, "\xEF\xBB\xBF"); // UTF-8 BOM
            fputcsv($output, ['اسم البعد', 'نص السؤال', 'معكوس', 'الخيارات']);
            fputcsv($output, ['الوعي بالذات', 'أعرف نقاط قوتي بوضوح.', '0', 'نعم:2|إلى حد ما:1|لا:0']);
            fputcsv($output, ['الوعي بالذات', 'أستطيع تحديد نقاط الضعف التي أحتاج إلى تطويرها.', '0', '']);
            fputcsv($output, ['الوعي الانفعالي', 'أشعر بالقلق أو التوتر بسهولة عند مواجهة المشكلات.', '1', 'نعم:0|إلى حد ما:1|لا:2']);
            fclose($output);
        }, 'questions_import_template.csv', $headers);
    }
}
```

## File: app/Http/Controllers/Admin/RecommendationController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRecommendationRequest;
use App\Models\Assessment;
use App\Models\Recommendation;
use App\Services\RecommendationService;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class RecommendationController extends Controller
{
    public function __construct(
        private readonly RecommendationService $recommendationService,
    ) {}

    public function index(): View
    {
        $recommendations = $this->recommendationService->allGrouped();
        $assessments = Assessment::orderBy('title_ar')->get();
        $icons = \App\Models\Icon::all()->groupBy('category');

        return view('admin.recommendations.index', compact('recommendations', 'assessments', 'icons'));
    }

    public function store(StoreRecommendationRequest $request): JsonResponse
    {
        $rec = $this->recommendationService->upsert($request->validated());

        return response()->json(['success' => true, 'message' => 'تم حفظ التوصية.', 'id' => $rec->id]);
    }

    public function destroy(Recommendation $recommendation): JsonResponse
    {
        $this->recommendationService->delete($recommendation);

        return response()->json(['success' => true, 'message' => 'تم حذف التوصية.']);
    }
}
```

## File: app/Http/Controllers/Admin/StatisticsController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\StatisticsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StatisticsController extends Controller
{
    public function __construct(
        private readonly StatisticsService $statisticsService,
    ) {}

    public function index(): View
    {
        $assessments = $this->statisticsService->getAssessments();

        return view('admin.statistics.index', compact('assessments'));
    }

    public function data(Request $request): JsonResponse
    {
        $range = max(1, min((int) $request->query('range', 30), 365));
        $data = $this->statisticsService->getData($range);

        return response()->json($data);
    }

    /**
     * Export completed exam results to a CSV file.
     */
    public function exportCsv(): StreamedResponse
    {
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="exam_results_export.csv"',
        ];

        $csvContent = $this->statisticsService->exportResultsCsv();

        return response()->streamDownload(function () use ($csvContent) {
            echo $csvContent;
        }, 'exam_results_export.csv', $headers);
    }
}
```

## File: app/Http/Controllers/Admin/UserController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(
        private readonly UserService $userService,
    ) {}

    public function index(Request $request): View
    {
        $search = $request->query('search');
        $users = $this->userService->searchPaginated($search);

        return view('admin.users.index', compact('users', 'search'));
    }

    public function userResults(User $user): JsonResponse
    {
        $sessions = $this->userService->getUserResults($user->id);

        $levelTranslations = [
            'high' => 'مرتفع',
            'medium' => 'متوسط',
            'low' => 'منخفض',
        ];

        $formatted = $sessions->map(function ($session) use ($levelTranslations) {
            return [
                'id' => $session->id,
                'assessment_title' => $session->assessment->title_ar,
                'completed_at' => $session->completed_at ? $session->completed_at->format('Y-m-d H:i') : null,
                'total_score' => $session->result ? $session->result->total_score : 0,
                'max_possible_score' => $session->result ? $session->result->max_possible_score : 0,
                'level' => $session->result ? ($levelTranslations[$session->result->level] ?? $session->result->level) : 'غير متوفر',
                'level_raw' => $session->result ? $session->result->level : 'unknown',
            ];
        });

        return response()->json([
            'success' => true,
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
            'results' => $formatted,
        ]);
    }
}
```

## File: app/Http/Requests/Admin/BulkStoreQuestionsRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BulkStoreQuestionsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'assessment_id' => 'required|uuid|exists:assessments,id,deleted_at,NULL',
            'dimension_id' => 'nullable|uuid|exists:dimensions,id,deleted_at,NULL',
            'questions_text' => 'required|string',
        ];
    }
}
```

## File: app/Http/Requests/Admin/StoreInterpretationsRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreInterpretationsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'high_threshold' => 'nullable|integer|min:0',
            'low_threshold' => 'nullable|integer|min:0',
            'interpretations' => 'required|array',
            'interpretations.*' => 'required|string',
        ];
    }
}
```

## File: app/Http/Requests/Admin/StoreQuestionRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'assessment_id' => 'required|uuid|exists:assessments,id,deleted_at,NULL',
            'dimension_id' => 'nullable|uuid|exists:dimensions,id,deleted_at,NULL',
            'text_ar' => 'required|string',
            'is_reversed' => 'nullable|boolean',
            'options' => 'required|array|min:2',
            'options.*.label_ar' => 'required|string',
            'options.*.score_value' => 'required|integer',
        ];
    }
}
```

## File: app/Http/Requests/Admin/UpdateAssessmentRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssessmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'time_limit_min' => 'nullable|integer|min:1',
            'is_active' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'certificates_ar' => 'nullable|string',
            'programs_ar' => 'nullable|string',
            'plan_30_days_ar' => 'nullable|string',
        ];
    }
}
```

## File: app/Http/Requests/AnswerQuestionRequest.php
```php
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerQuestionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'question_id' => 'required|uuid|exists:questions,id,deleted_at,NULL',
            'selected_option_id' => 'required|uuid|exists:answer_options,id,deleted_at,NULL',
        ];
    }
}
```

## File: app/Models/AnswerOption.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnswerOption extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = ['question_id', 'label_ar', 'score_value', 'order_index'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class, 'selected_option_id');
    }
}
```

## File: app/Models/Dimension.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dimension extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = ['assessment_id', 'name_ar', 'max_score', 'order_index'];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function dimensionScores()
    {
        return $this->hasMany(DimensionScore::class);
    }

    public function interpretations()
    {
        return $this->hasMany(DimensionInterpretation::class);
    }
}
```

## File: app/Models/DimensionInterpretation.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DimensionInterpretation extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'dimension_id',
        'level',
        'interpretation_text_ar',
        'high_threshold',
        'low_threshold',
    ];

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
}
```

## File: app/Models/Question.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = ['assessment_id', 'dimension_id', 'text_ar', 'order_index', 'is_reversed'];

    protected $casts = [
        'is_reversed' => 'boolean',
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }

    public function answerOptions()
    {
        return $this->hasMany(AnswerOption::class)->orderBy('order_index');
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class);
    }
}
```

## File: app/Models/Result.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'session_id', 'total_score', 'max_possible_score', 'level', 'calculated_at',
    ];

    protected $casts = [
        'calculated_at' => 'datetime',
    ];

    public function examSession()
    {
        return $this->belongsTo(ExamSession::class, 'session_id');
    }

    public function dimensionScores()
    {
        return $this->hasMany(DimensionScore::class);
    }
}
```

## File: app/Providers/AppServiceProvider.php
```php
<?php

namespace App\Providers;

use App\Repositories\AssessmentRepository;
use App\Repositories\Contracts\AssessmentRepositoryInterface;
use App\Repositories\Contracts\DimensionRepositoryInterface;
use App\Repositories\Contracts\ExamSessionRepositoryInterface;
use App\Repositories\Contracts\QuestionRepositoryInterface;
use App\Repositories\Contracts\RecommendationRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\DimensionRepository;
use App\Repositories\ExamSessionRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\RecommendationRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register repository interface → implementation bindings.
     * This enables constructor injection throughout the application.
     */
    public function register(): void
    {
        $this->app->bind(AssessmentRepositoryInterface::class, AssessmentRepository::class);
        $this->app->bind(DimensionRepositoryInterface::class, DimensionRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(RecommendationRepositoryInterface::class, RecommendationRepository::class);
        $this->app->bind(ExamSessionRepositoryInterface::class, ExamSessionRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production') || env('FORCE_HTTPS', false)) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    }
}
```

## File: app/Repositories/Contracts/AssessmentRepositoryInterface.php
```php
<?php

namespace App\Repositories\Contracts;

use App\Models\Assessment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface AssessmentRepositoryInterface
{
    /**
     * Return paginated list of assessments with questions/dimensions counts.
     */
    public function paginated(array $filters = [], int $perPage = 15): LengthAwarePaginator;

    /**
     * Find an assessment and eager-load all nested relations needed for the show page.
     */
    public function findWithRelations(string $id): Assessment;

    /**
     * Create a new assessment and return it.
     *
     * @param  array<string, mixed>  $data
     */
    public function create(array $data): Assessment;

    /**
     * Update an assessment with the given attributes.
     *
     * @param  array<string, mixed>  $data
     */
    public function update(Assessment $assessment, array $data): Assessment;

    /**
     * Delete an assessment.
     */
    public function delete(Assessment $assessment): void;

    /**
     * Toggle the is_active flag.
     */
    public function toggle(Assessment $assessment): Assessment;
}
```

## File: app/Repositories/RecommendationRepository.php
```php
<?php

namespace App\Repositories;

use App\Models\Recommendation;
use App\Repositories\Contracts\RecommendationRepositoryInterface;
use Illuminate\Support\Collection;

class RecommendationRepository implements RecommendationRepositoryInterface
{
    public function allGrouped(): Collection
    {
        /*
         * JOIN recommendations with assessments to retrieve assessment title
         * alongside each recommendation in a single query.
         */
        return Recommendation::with('assessment')
            ->orderBy('assessment_id')
            ->get()
            ->groupBy('assessment_id');
    }

    public function upsert(array $data): Recommendation
    {
        if (!empty($data['id'])) {
            /** @var Recommendation $rec */
            $rec = Recommendation::findOrFail($data['id']);
            $rec->update($data);
            return $rec;
        }

        /** @var Recommendation $rec */
        $rec = Recommendation::updateOrCreate(
            [
                'assessment_id' => $data['assessment_id'],
                'level' => $data['level'],
            ],
            $data
        );

        return $rec;
    }

    public function delete(Recommendation $recommendation): void
    {
        $recommendation->delete();
    }
}
```

## File: app/Repositories/UserRepository.php
```php
<?php

namespace App\Repositories;

use App\Models\ExamSession;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function searchPaginated(?string $search, int $perPage = 15)
    {
        $query = User::query()
            ->withCount(['examSessions as completed_exams_count' => function ($q) {
                $q->where('status', 'completed');
            }]);

        if (! empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('national_id', 'like', "%{$search}%");
            });
        }

        return $query->paginate($perPage);
    }

    public function getUserResults(string $userId)
    {
        return ExamSession::where('user_id', $userId)
            ->where('status', 'completed')
            ->with(['assessment', 'result'])
            ->orderBy('completed_at', 'desc')
            ->get();
    }
}
```

## File: app/Services/AssessmentService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Repositories\Contracts\AssessmentRepositoryInterface;
use App\Repositories\Contracts\DimensionRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AssessmentService
{
    public function __construct(
        private readonly AssessmentRepositoryInterface $assessments,
        private readonly DimensionRepositoryInterface $dimensions,
    ) {}

    public function list(array $filters = []): LengthAwarePaginator
    {
        return $this->assessments->paginated($filters);
    }

    public function getForManagement(string $id): Assessment
    {
        return $this->assessments->findWithRelations($id);
    }

    /**
     * Create an assessment along with its initial dimensions.
     *
     * @param  array<string, mixed>  $data
     */
    public function create(array $data): Assessment
    {
        $assessment = $this->assessments->create([
            'title_ar' => $data['title_ar'],
            'category' => $data['category'],
            'description_ar' => $data['description_ar'] ?? null,
            'time_limit_min' => $data['time_limit_min'] ?? null,
            'created_by' => auth()->id(),
        ]);

        if (! empty($data['dimensions'])) {
            foreach ($data['dimensions'] as $index => $dim) {
                $this->dimensions->create([
                    'assessment_id' => $assessment->id,
                    'name_ar' => $dim['name_ar'],
                    'max_score' => $dim['max_score'],
                    'order_index' => $index,
                ]);
            }
        }

        return $assessment;
    }

    /**
     * Update basic assessment fields.
     *
     * @param  array<string, mixed>  $data
     */
    public function update(Assessment $assessment, array $data): Assessment
    {
        return $this->assessments->update($assessment, $data);
    }

    /**
     * Update assessment settings (includes is_active flag).
     *
     * @param  array<string, mixed>  $data
     */
    public function updateSettings(Assessment $assessment, array $data): Assessment
    {
        return $this->assessments->update($assessment, $data);
    }

    public function delete(Assessment $assessment): void
    {
        $this->assessments->delete($assessment);
    }

    public function toggle(Assessment $assessment): Assessment
    {
        return $this->assessments->toggle($assessment);
    }
}
```

## File: database/migrations/0001_01_01_000000_create_users_table.php
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

## File: database/migrations/2026_07_10_164000_add_intro_and_outro_to_assessments_and_recommendations.php
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

## File: database/migrations/2026_07_11_132219_add_icon_to_assessments_table.php
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

## File: database/migrations/2026_07_17_014000_change_sessions_user_id_to_uuid.php
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

## File: database/seeders/AssessmentsDatabaseSeeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;

class AssessmentsDatabaseSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data (optional, but good if we want a fresh start)
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::statement('PRAGMA foreign_keys=OFF;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
        Recommendation::truncate();
        DimensionInterpretation::truncate();
        AnswerOption::truncate();
        Question::truncate();
        Dimension::truncate();
        Assessment::truncate();
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::statement('PRAGMA foreign_keys=ON;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
        $this->call(Assessment1Seeder::class);
        $this->call(Assessment2Seeder::class);
        $this->call(Assessment3Seeder::class);
        $this->call(Assessment4Seeder::class);
        $this->call(Assessment5Seeder::class);
        $this->call(Assessment6Seeder::class);
        $this->call(Assessment7Seeder::class);
        $this->call(Assessment8Seeder::class);
        $this->call(Assessment9Seeder::class);
        $this->call(Assessment10Seeder::class);
        $this->call(Assessment11Seeder::class);
        $this->call(Assessment12Seeder::class);
        $this->call(Assessment13Seeder::class);
        $this->call(Assessment14Seeder::class);
        $this->call(Assessment15Seeder::class);
        $this->call(Assessment16Seeder::class);
        $this->call(Assessment17Seeder::class);
        $this->call(Assessment18Seeder::class);
        $this->call(Assessment19Seeder::class);
        $this->call(Assessment20Seeder::class);
        $this->call(Assessment21Seeder::class);
        $this->call(Assessment22Seeder::class);
        $this->call(Assessment23Seeder::class);
        $this->call(Assessment24Seeder::class);
        $this->call(Assessment25Seeder::class);
        $this->call(Assessment26Seeder::class);
        $this->call(Assessment27Seeder::class);
    }
}
```

## File: tests/Feature/Architecture/NoDirectBuilderDeleteTest.php
```php
<?php

namespace Tests\Feature\Architecture;

use PHPUnit\Framework\TestCase;

class NoDirectBuilderDeleteTest extends TestCase
{
    /**
     * Test that User and Coupon models are not deleted via direct Builder::delete() calls across app/ and database/seeders/.
     */
    public function test_no_direct_builder_delete_on_models_with_unique_columns(): void
    {
        $baseDir = dirname(__DIR__, 3);
        $directories = [
            $baseDir . '/app',
            $baseDir . '/database/seeders',
        ];

        $violatingFiles = [];

        // Matches User::where...->delete(), Coupon::whereIn...->delete(), etc., across single or multiple lines
        $patterns = [
            '/(?:User|Coupon)::(?:query|where|orWhere|whereIn|whereNotIn|withTrashed|onlyTrashed)[\s\S]{1,200}?->delete\s*\(/i',
        ];

        foreach ($directories as $dir) {
            if (!is_dir($dir)) {
                continue;
            }

            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir));

            foreach ($files as $file) {
                if ($file->isFile() && $file->getExtension() === 'php') {
                    $content = file_get_contents($file->getPathname());
                    foreach ($patterns as $pattern) {
                        if (preg_match($pattern, $content)) {
                            $violatingFiles[] = $file->getPathname();
                        }
                    }
                }
            }
        }

        $this->assertEmpty(
            $violatingFiles,
            'Direct Builder delete found on User/Coupon models in: ' . implode(', ', $violatingFiles) . '. Use Model::bulkSoftDelete() or $collection->each->delete() instead.'
        );
    }
}
```

## File: app/Http/Controllers/Admin/SettingController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'stats_mode' => 'required|in:manual,auto',
            'stat_users' => 'required|string|max:255',
            'stat_exams' => 'required|string|max:255',
            'stat_assessments' => 'required|string|max:255',
            'stat_fields' => 'required|string|max:255',
            'stat_users_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'stat_exams_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'stat_assessments_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'stat_fields_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $textData = collect($data)->except(['stat_users_icon', 'stat_exams_icon', 'stat_assessments_icon', 'stat_fields_icon'])->toArray();

        foreach ($textData as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $iconKeys = ['stat_users_icon', 'stat_exams_icon', 'stat_assessments_icon', 'stat_fields_icon'];
        foreach ($iconKeys as $key) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $filename = 'sysicon_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/icons'), $filename);
                
                $oldSetting = Setting::where('key', $key)->first();
                $oldPath = null;
                if ($oldSetting && str_starts_with($oldSetting->value, '/images/icons/')) {
                    $oldPath = public_path(ltrim($oldSetting->value, '/'));
                }
                
                Setting::updateOrCreate(['key' => $key], ['value' => '/images/icons/' . $filename]);
                
                if ($oldPath && File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
        }

        Cache::forget('site_settings');

        return redirect()->back()->with('success', 'تم تحديث الإحصائيات والإعدادات بنجاح.');
    }
}
```

## File: app/Http/Requests/Admin/SaveCouponRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveCouponRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_active' => $this->has('is_active'),
            'applies_to_all_assessments' => $this->has('applies_to_all_assessments'),
            'applies_to_all_users' => $this->has('applies_to_all_users'),
        ]);
    }

    public function rules(): array
    {
        $couponId = $this->route('coupon') ? $this->route('coupon')->id : null;

        return [
            'title' => 'required|string|max:255',
            'code' => ['required', 'string', 'max:50', Rule::unique('coupons')->ignore($couponId)->whereNull('deleted_at')],
            'assessments_limit' => 'nullable|integer|min:1',
            'expires_at' => 'nullable|date',
            'is_active' => 'boolean',
            'discount_percentage' => 'required|integer|min:0|max:100',
            'discount_percentage_2nd' => 'nullable|integer|min:0|max:100',
            'discount_percentage_3rd' => 'nullable|integer|min:0|max:100',
            'discount_percentage_4th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_5th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_6th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_7th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_8th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_9th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_10th' => 'nullable|integer|min:0|max:100',
            'applies_to_all_assessments' => 'boolean',
            'assessment_ids' => 'nullable|array',
            'assessment_ids.*' => 'exists:assessments,id,deleted_at,NULL',
            'applies_to_all_users' => 'boolean',
            'permitted_user_ids' => 'nullable|array',
            'permitted_user_ids.*' => 'exists:users,id,deleted_at,NULL',
        ];
    }
}
```

## File: app/Http/Requests/Admin/StoreAssessmentRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssessmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'time_limit_min' => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|numeric|min:0',
            'rating' => 'nullable|numeric|min:1|max:5',
            'certificates_ar' => 'nullable|string',
            'programs_ar' => 'nullable|string',
            'plan_30_days_ar' => 'nullable|string',
            'dimensions' => 'nullable|array',
            'dimensions.*.name_ar' => 'required_with:dimensions|string',
            'dimensions.*.max_score' => 'required_with:dimensions|integer|min:1',
        ];
    }
}
```

## File: app/Models/ExamSession.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamSession extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'user_id', 'assessment_id', 'status', 'started_at', 'completed_at', 'coupon_id', 'discount_applied',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class, 'session_id');
    }

    public function result()
    {
        return $this->hasOne(Result::class, 'session_id');
    }
}
```

## File: app/Services/ExamService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\ExamSession;
use App\Models\UserAnswer;
use App\Repositories\Contracts\ExamSessionRepositoryInterface;
use Carbon\Carbon;

class ExamService
{
    public function __construct(
        private readonly ExamSessionRepositoryInterface $sessions,
        private readonly ExamResultService $resultService,
    ) {}

    /**
     * Start a new exam session (or return an existing in-progress one).
     *
     * Returns either an ExamSession (if resumed) or a newly created ExamSession.
     */
    public function startOrResume(Assessment $assessment, string $userId): array
    {
        $existing = $this->sessions->findInProgress($userId, $assessment->id);

        if ($existing) {
            return ['session' => $existing, 'resumed' => true];
        }

        $session = $this->sessions->create([
            'user_id' => $userId,
            'assessment_id' => $assessment->id,
            'status' => 'in_progress',
            'started_at' => Carbon::now(),
        ]);

        return ['session' => $session, 'resumed' => false];
    }

    /**
     * Load session data for the exam page (assessment + questions + progress).
     *
     * @return array<string, mixed>
     */
    public function getSessionData(ExamSession $session): array
    {
        $assessment = $session->assessment;
        $total = $assessment->questions()->count();
        $answeredIds = $session->userAnswers()->pluck('question_id')->toArray();
        
        $nextQuestion = $assessment->questions()
            ->with('answerOptions')
            ->whereNotIn('id', $answeredIds)
            ->orderBy('order_index')
            ->first();
            
        $current = count($answeredIds) + 1;

        return [
            'assessment' => $assessment,
            'nextQuestion' => $nextQuestion,
            'progress' => [
                'current' => $current,
                'total' => $total,
                'percentage' => $total > 0 ? round(($current) / $total * 100) : 0,
            ],
        ];
    }

    /**
     * Delete the last answer and return the previous question state.
     *
     * @return array<string, mixed>
     */
    public function previousQuestion(ExamSession $session): array
    {
        $lastAnswer = $session->userAnswers()->orderBy('id', 'desc')->first();
        if ($lastAnswer) {
            $lastAnswer->delete();
        }

        $answeredIds = $session->userAnswers()->pluck('question_id')->toArray();
        $total = $session->assessment->questions()->count();
        $answeredCount = count($answeredIds);
        
        $nextQuestion = $session->assessment->questions()
            ->with('answerOptions', 'dimension')
            ->whereNotIn('id', $answeredIds)
            ->orderBy('order_index')
            ->first();
            
        $current = $answeredCount + 1;

        if (! $nextQuestion) {
            // Unlikely if we just deleted an answer, but fallback
            $this->resultService->calculate($session);

            return ['is_last' => true, 'redirect' => route('exam.result', $session->id)];
        }

        return [
            'is_last' => false,
            'next_question' => [
                'id' => $nextQuestion->id,
                'text_ar' => $nextQuestion->text_ar,
                'is_reversed' => (bool) $nextQuestion->is_reversed,
                'dimension_name' => $nextQuestion->dimension?->name_ar,
                'options' => $nextQuestion->answerOptions->map(fn ($o) => [
                    'id' => $o->id,
                    'label_ar' => $o->label_ar,
                ]),
            ],
            'progress' => [
                'current' => $current,
                'total' => $total,
                'percentage' => $total > 0 ? round(($current) / $total * 100) : 0,
            ],
        ];
    }

    /**
     * Submit an answer and return the next question data (or redirect to result).
     *
     * @return array<string, mixed>
     */
    public function submitAnswer(ExamSession $session, string $questionId, string $optionId): array
    {
        // Verify question belongs to this assessment
        $question = $session->assessment->questions()->findOrFail($questionId);

        // Verify option belongs to this question
        $option = $question->answerOptions()->findOrFail($optionId);

        // Upsert answer
        UserAnswer::updateOrCreate(
            ['session_id' => $session->id, 'question_id' => $question->id],
            ['selected_option_id' => $option->id, 'score_earned' => $option->score_value]
        );

        // Find next unanswered question
        $answeredIds = $session->userAnswers()->pluck('question_id')->toArray();
        $total = $session->assessment->questions()->count();
        $answeredCount = count($answeredIds);
        
        $nextQuestion = $session->assessment->questions()
            ->with('answerOptions', 'dimension')
            ->whereNotIn('id', $answeredIds)
            ->orderBy('order_index')
            ->first();

        if (! $nextQuestion) {
            $this->resultService->calculate($session);

            return ['is_last' => true, 'redirect' => route('exam.result', $session->id)];
        }

        $current = $answeredCount + 1;

        return [
            'is_last' => false,
            'next_question' => [
                'id' => $nextQuestion->id,
                'text_ar' => $nextQuestion->text_ar,
                'is_reversed' => (bool) $nextQuestion->is_reversed,
                'dimension_name' => $nextQuestion->dimension?->name_ar,
                'options' => $nextQuestion->answerOptions->map(fn ($o) => [
                    'id' => $o->id,
                    'label_ar' => $o->label_ar,
                ]),
            ],
            'progress' => [
                'current' => $current,
                'total' => $total,
                'percentage' => $total > 0 ? round(($current) / $total * 100) : 0,
            ],
        ];
    }

    /**
     * Get or calculate the result for a completed session.
     *
     * @return array<string, mixed>
     */
    public function getResult(ExamSession $session): array
    {
        return $this->resultService->getFormattedResult($session);
    }
}
```

## File: app/Services/Result/ResultFormatter.php
```php
<?php

namespace App\Services\Result;

use App\Models\Assessment;
use App\Models\Recommendation;
use App\Models\Result;

class ResultFormatter
{
    /**
     * Formats the final result API response into a strictly structured format.
     */
    public function format(Assessment $assessment, Result $result, ?Recommendation $recommendation): array
    {
        $response = [
            'result_id' => $result->id,
            'created_at' => clone $result->calculated_at,
            'assessment' => [
                'id' => $assessment->id,
                'title_ar' => $assessment->title_ar,
                'scoring_type' => $assessment->scoring_type,
            ],
            'category' => $assessment->category,
            'total_score' => $result->total_score,
            'max_score' => $result->max_possible_score,
            'level' => $result->level,
            'recommendation' => $recommendation ? $recommendation->description_ar : null,
        ];
        // Use fields directly from Recommendation if available
        $progIntro = $recommendation ? $recommendation->programs_intro_ar : null;
        $progOutro = $recommendation ? $recommendation->programs_outro_ar : null;
        $progText = $recommendation ? $recommendation->programs_ar : null;
        $programs = is_array($progText) ? $this->formatProgramsArray($progText) : $this->formatProgramsArray($this->parseList($progText));
        
        if (!empty($progIntro)) $response['programs_intro'] = $progIntro;
        if (!empty($programs)) $response['programs'] = $programs;
        if (!empty($progOutro)) $response['programs_outro'] = $progOutro;
        
        $certs_ar = $recommendation ? $recommendation->certificates_ar : null;
        $certsIntro = $recommendation ? $recommendation->certificates_intro_ar : null;
        $certificates = is_array($certs_ar) ? $this->formatCertificatesArray($certs_ar) : $this->parseCertificates($certs_ar);
        if (!empty($certsIntro)) $response['certificates_intro'] = $certsIntro;
        if (!empty($certificates)) $response['certificates'] = $certificates;

        $roadmap_ar = $recommendation ? $recommendation->plan_30_days_ar : null;
        $roadmapIntro = $recommendation ? $recommendation->plan_30_days_intro_ar : null;
        $roadmap = is_array($roadmap_ar) ? $roadmap_ar : $this->parseList($roadmap_ar);
        if (!empty($roadmapIntro)) $response['roadmap_intro'] = $roadmapIntro;
        if (!empty($roadmap)) $response['roadmap'] = $roadmap;

        if ($recommendation) {
            if (!empty($recommendation->title_ar)) $response['recommendation_title'] = $recommendation->title_ar;
            if (!empty($recommendation->strengths_ar)) $response['strengths'] = is_array($recommendation->strengths_ar) ? $recommendation->strengths_ar : $this->parseList($recommendation->strengths_ar);
            if (!empty($recommendation->development_areas_ar)) $response['development_areas'] = is_array($recommendation->development_areas_ar) ? $recommendation->development_areas_ar : $this->parseList($recommendation->development_areas_ar);
            if (!empty($recommendation->how_to_learn_ar)) $response['how_to_learn'] = is_array($recommendation->how_to_learn_ar) ? $recommendation->how_to_learn_ar : $this->parseList($recommendation->how_to_learn_ar);
            if (!empty($recommendation->practical_tips_ar)) $response['practical_tips'] = is_array($recommendation->practical_tips_ar) ? $recommendation->practical_tips_ar : $this->parseList($recommendation->practical_tips_ar);
        }

        $dimensions = [];
        $chartLabels = [];
        $chartData = [];

        foreach ($result->dimensionScores as $ds) {
            // Skip the "عام" dimension as it is a fallback placeholder
            if (trim($ds->dimension->name_ar) === 'عام') {
                continue;
            }

            $interp = $ds->dimension->interpretations->where('level', $ds->level)->first();
            $pct = $ds->max_score > 0 ? round(($ds->score / $ds->max_score) * 100) : 0;

            $cleanName = preg_replace('/^المحور\s+\S+[:：]\s*/u', '', $ds->dimension->name_ar);

            $dimensions[] = [
                'id' => $ds->dimension->id,
                'name' => $cleanName,
                'score' => $ds->score,
                'max_score' => $ds->max_score,
                'percentage' => $pct,
                'level' => $ds->level,
                'display_level' => $this->getDisplayLevel($ds->level),
                'interpretation' => $interp ? $interp->interpretation_text_ar : null,
            ];

            // Chart Data using score / max_score
            $chartLabels[] = $cleanName;
            $chartData[] = $pct;
        }

        if (!empty($dimensions)) {
            $response['dimensions'] = $dimensions;
            if (!empty($chartLabels)) {
                $response['chart_data'] = [
                    'labels' => $chartLabels,
                    'data' => $chartData
                ];
            }
        }

        return $response;
    }

    private function parseList(?string $text): array
    {
        if (empty(trim($text ?? ''))) return [];
        // Clean invalid UTF-8 bytes that might cause preg_split to fail
        $text = mb_convert_encoding($text, 'UTF-8', 'UTF-8');
        $split = preg_split('/[,\n،]+/u', $text);
        if (!is_array($split)) return [];
        
        $items = array_map(function($item) {
            return trim(preg_replace('/^[\d\-\.\*\s]+/u', '', $item));
        }, $split);
        return array_values(array_filter($items, fn($i) => !empty($i)));
    }

    private function getDisplayLevel(string $level): string
    {
        $map = [
            'excellent' => 'متميز',
            'advanced'  => 'متقدم',
            'good'      => 'جيد',
            'average'   => 'متوسط',
            'weak'      => 'ضعيف',
            // Legacy/alternative keys
            'high'      => 'مرتفع',
            'medium'    => 'متوسط',
            'low'       => 'منخفض',
        ];
        
        return $map[$level] ?? $level;
    }

    private function parseCertificates(?string $text): array
    {
        if (empty($text)) return [];
        $items = array_map('trim', preg_split('/[,\n،]+/u', $text));
        $items = array_values(array_filter($items, fn($i) => !empty($i)));
        
        return $this->formatCertificatesArray($items);
    }

    private function formatCertificatesArray(array $items): array
    {
        return array_map(function($cert) {
            if (is_array($cert)) {
                return $cert;
            }
            if (is_object($cert)) {
                return (array) $cert;
            }
            return [
                'title' => trim(preg_replace('/^[\d\-\.\*\s]+/u', '', $cert)),
                'description' => 'شهادة احترافية'
            ];
        }, array_filter($items));
    }

    private function formatProgramsArray(array $items): array
    {
        return array_map(function($prog) {
            if (is_array($prog)) {
                return $prog;
            }
            if (is_object($prog)) {
                return (array) $prog;
            }
            return [
                'title' => trim(preg_replace('/^[\d\-\.\*\s]+/u', '', $prog)),
                'icon' => 'bi-journal-bookmark'
            ];
        }, array_filter($items));
    }
}
```

## File: app/Services/UserDashboardService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserDashboardService
{
    /**
     * Build all data needed for the user dashboard in an optimised way.
     *
     * @return array<string, mixed>
     */
    public function getData(User $user): array
    {
        // 1. Cache Assessments (Global)
        $assessmentsMax = Assessment::max('updated_at') ?? 'none';
        $assessmentsCount = Assessment::count();
        $assessmentsKey = "active_assessments_{$assessmentsMax}_{$assessmentsCount}";
        $assessments = Cache::remember($assessmentsKey, 3600, function () {
            return Assessment::where('is_active', true)
                ->withCount('questions')
                ->orderBy('category')
                ->orderBy('title_ar')
                ->get();
        });

        // 2. Cache Active Coupons (Global)
        $couponsMax = Coupon::max('updated_at') ?? 'none';
        $couponsCount = Coupon::count();
        $couponsKey = "active_coupons_{$couponsMax}_{$couponsCount}";
        $activeCoupons = Cache::remember($couponsKey, 3600, function () {
            return Coupon::where('is_active', true)
                ->where(function ($query) {
                    $query->whereNull('expires_at')
                        ->orWhere('expires_at', '>=', now()->toDateString());
                })->get();
        });

        // 3. Cache User Sessions & Progress Map (User-specific)
        $sessionsMax = $user->examSessions()->max('updated_at') ?? 'none';
        $sessionsCount = $user->examSessions()->count();
        $sessionsKey = "user_sessions_{$user->id}_{$sessionsMax}_{$sessionsCount}";

        $userSessions = Cache::remember($sessionsKey, 3600, function () use ($user) {
            return $user->examSessions()
                ->with(['assessment', 'result'])
                ->orderByDesc('updated_at')
                ->get();
        });

        $progressKey = "user_progress_{$user->id}_{$sessionsMax}_{$sessionsCount}";
        $progressMap = Cache::remember($progressKey, 3600, function () use ($user) {
            $progressRows = DB::table('exam_sessions')
                ->where('user_id', $user->id)
                ->select([
                    'assessment_id',
                    DB::raw('COUNT(*) as total'),
                    DB::raw("SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed"),
                ])
                ->groupBy('assessment_id')
                ->get();

            $map = [];
            foreach ($progressRows as $row) {
                $map[$row->assessment_id] = [
                    'completed' => (int) $row->completed,
                    'total' => (int) $row->total,
                ];
            }

            return $map;
        });

        // 4. Load My Coupons (No need to cache as it's a very light query and pivot updates are tricky to track globally)
        $myCoupons = $user->coupons()->get();

        // 5. Site Settings (stats)
        $siteSettings = Cache::remember('site_settings', 3600, function () {
            $settings = Setting::pluck('value', 'key')->toArray();
            
            if (isset($settings['stats_mode']) && $settings['stats_mode'] === 'auto') {
                $settings['stat_users'] = '+' . \App\Models\User::count();
                $settings['stat_exams'] = '+' . \App\Models\Result::count();
                $settings['stat_assessments'] = '+' . \App\Models\Assessment::count();
                $settings['stat_fields'] = '+' . \App\Models\Dimension::count();
            }
            
            return $settings;
        });

        return compact('assessments', 'userSessions', 'progressMap', 'activeCoupons', 'myCoupons', 'siteSettings');
    }
}
```

## File: database/migrations/2024_01_01_000003_create_dimensions_table.php
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

## File: database/migrations/2024_01_01_000004_create_questions_table.php
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

## File: database/migrations/2024_01_01_000005_create_answer_options_table.php
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

## File: database/migrations/2024_01_01_000006_create_exam_sessions_table.php
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

## File: database/migrations/2024_01_01_000007_create_user_answers_table.php
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

## File: database/migrations/2026_07_05_000000_upgrade_coupons_and_users_tables.php
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

## File: database/seeders/Assessment10Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment10Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/time_management');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment11Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment11Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/administrative_creativity');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment12Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment12Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/career_success_readiness');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment13Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment13Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/decision_making_skills');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment14Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment14Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/strategic_planning');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment15Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment15Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/negotiation_and_persuasion');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment16Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment16Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/communication_skills');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment17Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment17Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/teamwork_preference');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment18Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment18Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/career_guidance');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment19Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment19Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/passion_for_work');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment1Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment1Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/leadership_style');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment20Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment20Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/work_loyalty');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment21Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment21Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/job_satisfaction');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment22Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment22Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/professional_exhaustion');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment23Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment23Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/job_burnout');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment24Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment24Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/occupational_health_safety');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment25Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment25Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/work_stress_level');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment26Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment26Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/perceptual_styles_basic');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment27Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment27Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/public_interaction_readiness');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment2Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment2Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/transformational_leadership');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment3Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment3Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/managerial_skills');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment4Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment4Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/employee_motivation');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment5Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment5Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/positive_thinking');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment6Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment6Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/workplace_self_confidence');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment7Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment7Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/emotional_intelligence');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment8Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment8Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/personal_traits');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/Assessment9Seeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\DimensionInterpretation;
use App\Models\Recommendation;
use Illuminate\Support\Facades\DB;

class Assessment9Seeder extends Seeder
{
    public function run()
    {
        $dir = database_path('data/assessments/self_awareness');
        $meta = require $dir . '/meta.php';
        $meta['created_by'] = \App\Models\User::first()->id ?? null;

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }

            if (isset($dimData['interpretations'])) {
                foreach ($dimData['interpretations'] as $interpData) {
                    DimensionInterpretation::create([
                        'dimension_id' => $dimension->id,
                        'level' => $interpData['level'],
                        'interpretation_text_ar' => $interpData['interpretation_text_ar'],
                        'high_threshold' => $interpData['high_threshold'],
                        'low_threshold' => $interpData['low_threshold'],
                    ]);
                }
            }
        }

        $questions = require $dir . '/questions.php';
        foreach ($questions as $qData) {
            $question = Question::create([
                'assessment_id' => $assessment->id,
                'dimension_id' => null,
                'text_ar' => $qData['text_ar'],
                'order_index' => $qData['order_index'],
            ]);

            if (isset($qData['options'])) {
                foreach ($qData['options'] as $optData) {
                    AnswerOption::create([
                        'question_id' => $question->id,
                        'label_ar' => $optData['label_ar'],
                        'score_value' => $optData['score_value'],
                        'order_index' => $optData['order_index'],
                    ]);
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'low_threshold' => $recData['low_threshold'],
                'high_threshold' => $recData['high_threshold'],
                'description_ar' => $recData['description_ar'],
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
            ]);
        }
    }
}
```

## File: app/Http/Controllers/Admin/CouponController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Http\Requests\Admin\SaveCouponRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->paginate(10);

        return view('admin.coupons.index', compact('coupons'));
    }

    public function create(): View
    {
        $assessments = \App\Models\Assessment::orderBy('title_ar')->get();
        $users = \App\Models\User::orderBy('name')->get();
        return view('admin.coupons.create', compact('assessments', 'users'));
    }

    public function store(SaveCouponRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $coupon = Coupon::create($validated);

        if (!$coupon->applies_to_all_assessments && !empty($validated['assessment_ids'])) {
            $coupon->assessments()->sync($validated['assessment_ids']);
        }

        if (!$coupon->applies_to_all_users && !empty($validated['permitted_user_ids'])) {
            $coupon->permittedUsers()->sync($validated['permitted_user_ids']);
        }

        return redirect()->route('admin.coupons.index')->with('success', 'تم إضافة الكوبون بنجاح');
    }

    public function edit(Coupon $coupon): View
    {
        $assessments = \App\Models\Assessment::orderBy('title_ar')->get();
        $couponAssessmentIds = $coupon->assessments()->pluck('assessment_id')->toArray();
        $users = \App\Models\User::orderBy('name')->get();
        $couponPermittedUserIds = $coupon->permittedUsers()->pluck('user_id')->toArray();
        return view('admin.coupons.edit', compact('coupon', 'assessments', 'couponAssessmentIds', 'users', 'couponPermittedUserIds'));
    }

    public function update(SaveCouponRequest $request, Coupon $coupon): RedirectResponse
    {
        $validated = $request->validated();

        $coupon->update($validated);

        if ($coupon->applies_to_all_assessments) {
            $coupon->assessments()->detach();
        } else {
            $coupon->assessments()->sync($validated['assessment_ids'] ?? []);
        }

        if ($coupon->applies_to_all_users) {
            $coupon->permittedUsers()->detach();
        } else {
            $coupon->permittedUsers()->sync($validated['permitted_user_ids'] ?? []);
        }

        return redirect()->route('admin.coupons.index')->with('success', 'تم تحديث الكوبون بنجاح');
    }

    public function destroy(Coupon $coupon): RedirectResponse
    {
        $coupon->delete();

        return redirect()->route('admin.coupons.index')->with('success', 'تم حذف الكوبون بنجاح');
    }
}
```

## File: app/Http/Requests/Admin/StoreRecommendationRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecommendationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'id' => 'nullable|uuid',
            'assessment_id' => 'required|uuid|exists:assessments,id,deleted_at,NULL',
            'level' => 'required|string',
            'description_ar' => 'required|string',
            'certificates_ar' => 'nullable|array',
            'certificates_ar.*.title' => 'nullable|string',
            'certificates_ar.*.subtitle' => 'nullable|string',
            'certificates_ar.*.icon' => 'nullable|string',
            'certificates_intro_ar' => 'nullable|string',
            'programs_ar' => 'nullable|array',
            'programs_ar.*.title' => 'nullable|string',
            'programs_ar.*.icon' => 'nullable|string',
            'programs_intro_ar' => 'nullable|string',
            'programs_outro_ar' => 'nullable|string',
            'plan_30_days_ar' => 'nullable|array',
            'plan_30_days_ar.*.period' => 'nullable|string',
            'plan_30_days_ar.*.title' => 'nullable|string',
            'plan_30_days_ar.*.icon' => 'nullable|string',
            'plan_30_days_intro_ar' => 'nullable|string',
            'high_threshold' => 'nullable|integer|min:0',
            'low_threshold' => 'nullable|integer|min:0',
        ];
    }
}
```

## File: app/Models/Coupon.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'code',
        'assessments_limit',
        'expires_at',
        'is_active',
        'discount_percentage',
        'discount_percentage_2nd',
        'discount_percentage_3rd',
        'discount_percentage_4th',
        'discount_percentage_5th',
        'discount_percentage_6th',
        'discount_percentage_7th',
        'discount_percentage_8th',
        'discount_percentage_9th',
        'discount_percentage_10th',
        'applies_to_all_assessments',
        'applies_to_all_users',
    ];

    protected $casts = [
        'expires_at' => 'date',
        'is_active' => 'boolean',
        'applies_to_all_assessments' => 'boolean',
        'applies_to_all_users' => 'boolean',
    ];

    public function delete()
    {
        return DB::transaction(fn () => parent::delete());
    }

    public function restore()
    {
        if ($this->code) {
            $pattern = '/_deleted_\d+$/';
            $originalCode = preg_replace($pattern, '', $this->code);

            if (static::where('code', $originalCode)->whereNull('deleted_at')->where('id', '!=', $this->id)->exists()) {
                throw new \Exception('لا يمكن استرجاع الكوبون لوجود كوبون نشط آخر بنفس الكود.');
            }
        }

        return DB::transaction(fn () => parent::restore());
    }

    public static function bulkSoftDelete(array $ids): void
    {
        DB::transaction(function () use ($ids) {
            static::whereIn('id', $ids)->get()->each->delete();
        });
    }

    protected static function booted(): void
    {
        static::deleting(function (Coupon $coupon) {
            if (!$coupon->isForceDeleting()) {
                $timestamp = now()->timestamp;
                if ($coupon->code) {
                    $coupon->code = $coupon->code . '_deleted_' . $timestamp;
                    $coupon->saveQuietly();
                }
            }
        });

        static::restoring(function (Coupon $coupon) {
            if ($coupon->code) {
                $pattern = '/_deleted_\d+$/';
                $coupon->code = preg_replace($pattern, '', $coupon->code);
                $coupon->saveQuietly();
            }
        });
    }

    public function getDisplayCodeAttribute(): ?string
    {
        return $this->code ? preg_replace('/_deleted_\d+$/', '', $this->code) : null;
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('used_count')->withTimestamps();
    }

    public function assessments()
    {
        return $this->belongsToMany(Assessment::class, 'coupon_assessment');
    }

    public function permittedUsers()
    {
        return $this->belongsToMany(User::class, 'coupon_permitted_user');
    }
}
```

## File: app/Models/Recommendation.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recommendation extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'assessment_id', 'level', 'title_ar', 'description_ar',
        'strengths_ar', 'development_areas_ar', 'how_to_learn_ar', 'practical_tips_ar',
        'certificates_ar', 'certificates_intro_ar',
        'programs_ar', 'programs_intro_ar', 'programs_outro_ar',
        'plan_30_days_ar', 'plan_30_days_intro_ar',
        'high_threshold', 'low_threshold',
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    protected $casts = [
        'strengths_ar' => 'array',
        'development_areas_ar' => 'array',
        'how_to_learn_ar' => 'array',
        'practical_tips_ar' => 'array',
        'certificates_ar' => 'array',
        'programs_ar' => 'array',
        'plan_30_days_ar' => 'array',
    ];
}
```

## File: app/Models/User.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasUuids, Notifiable, SoftDeletes;

    protected $fillable = ['name', 'email', 'password', 'role', 'national_id', 'phone', 'gender', 'qualification', 'nationality'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'role' => 'string',
        'password' => 'hashed',
    ];

    public function delete()
    {
        return DB::transaction(fn () => parent::delete());
    }

    public function restore()
    {
        $pattern = '/_deleted_\d+$/';
        $originalEmail = preg_replace($pattern, '', $this->email);

        if (static::where('email', $originalEmail)->whereNull('deleted_at')->where('id', '!=', $this->id)->exists()) {
            throw new \Exception('لا يمكن استرجاع الحساب لوجود حساب نشط آخر بنفس البريد الإلكتروني.');
        }

        return DB::transaction(fn () => parent::restore());
    }

    public static function bulkSoftDelete(array $ids): void
    {
        DB::transaction(function () use ($ids) {
            static::whereIn('id', $ids)->get()->each->delete();
        });
    }

    protected static function booted(): void
    {
        static::deleting(function (User $user) {
            if (!$user->isForceDeleting()) {
                $timestamp = now()->timestamp;
                $user->email = $user->email . '_deleted_' . $timestamp;
                if ($user->national_id) {
                    $user->national_id = $user->national_id . '_deleted_' . $timestamp;
                }
                if ($user->phone) {
                    $user->phone = $user->phone . '_deleted_' . $timestamp;
                }
                $user->saveQuietly();
            }
        });

        static::restoring(function (User $user) {
            $pattern = '/_deleted_\d+$/';
            $user->email = preg_replace($pattern, '', $user->email);
            if ($user->national_id) {
                $user->national_id = preg_replace($pattern, '', $user->national_id);
            }
            if ($user->phone) {
                $user->phone = preg_replace($pattern, '', $user->phone);
            }
            $user->saveQuietly();
        });
    }

    public function getDisplayEmailAttribute(): string
    {
        return preg_replace('/_deleted_\d+$/', '', $this->email);
    }

    public function getDisplayPhoneAttribute(): ?string
    {
        return $this->phone ? preg_replace('/_deleted_\d+$/', '', $this->phone) : null;
    }

    public function getDisplayNationalIdAttribute(): ?string
    {
        return $this->national_id ? preg_replace('/_deleted_\d+$/', '', $this->national_id) : null;
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function examSessions()
    {
        return $this->hasMany(ExamSession::class);
    }

    public function createdAssessments()
    {
        return $this->hasMany(Assessment::class, 'created_by');
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class)->withPivot('used_count')->withTimestamps();
    }

    public function permittedCoupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_permitted_user');
    }
}
```

## File: app/Repositories/AssessmentRepository.php
```php
<?php

namespace App\Repositories;

use App\Models\Assessment;
use App\Repositories\Contracts\AssessmentRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AssessmentRepository implements AssessmentRepositoryInterface
{
    public function paginated(array $filters = [], int $perPage = 15): LengthAwarePaginator
    {
        $query = Assessment::withCount(['questions', 'dimensions']);
        
        if (!empty($filters['category'])) {
            $query->where('category', $filters['category']);
        }
        if (!empty($filters['search'])) {
            $query->where('title_ar', 'like', '%' . $filters['search'] . '%');
        }

        return $query->orderByDesc('created_at')->paginate($perPage);
    }

    public function findWithRelations(string $id): Assessment
    {
        $assessment = Assessment::findOrFail($id);

        $assessment->load([
            'dimensions' => fn ($q) => $q->orderBy('order_index'),
            'dimensions.interpretations',
            'dimensions.questions' => fn ($q) => $q->orderBy('order_index'),
            'dimensions.questions.answerOptions',
            'questions' => fn ($q) => $q->whereNull('dimension_id')->orderBy('order_index'),
            'recommendations',
        ]);

        return $assessment;
    }

    public function create(array $data): Assessment
    {
        return Assessment::create($data);
    }

    public function update(Assessment $assessment, array $data): Assessment
    {
        $assessment->update($data);

        return $assessment->fresh();
    }

    public function delete(Assessment $assessment): void
    {
        $assessment->delete();
    }

    public function toggle(Assessment $assessment): Assessment
    {
        $assessment->update(['is_active' => ! $assessment->is_active]);

        return $assessment->fresh();
    }
}
```

## File: app/Services/CouponService.php
```php
<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
use App\Models\User;

class CouponService
{
    /**
     * Validates a coupon code for a specific user and assessment.
     * Returns an array with validation status, message, and pricing details.
     */
    public function validateCouponForUser(string $code, Assessment $assessment, User $user): array
    {
        $coupon = Coupon::where('code', $code)
            ->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>=', now()->toDateString());
            })
            ->first();

        if (!$coupon) {
            return ['valid' => false, 'message' => 'الكوبون غير صالح أو منتهي الصلاحية.'];
        }

        // Check assessment scope
        if (!$coupon->applies_to_all_assessments) {
            $appliesToAssessment = $coupon->assessments()->where('assessment_id', $assessment->id)->exists();
            if (!$appliesToAssessment) {
                return ['valid' => false, 'message' => 'هذا الكوبون لا ينطبق على هذا المقياس.'];
            }
        }

        // Check user scope
        if (!$coupon->applies_to_all_users) {
            $appliesToUser = $coupon->permittedUsers()->where('user_id', $user->id)->exists();
            if (!$appliesToUser) {
                return ['valid' => false, 'message' => 'هذا الكوبون مخصص لمستخدمين محددين فقط وليس لحسابك.'];
            }
        }

        $resolved = $this->resolveDiscount($coupon, $user);

        if ($resolved['exhausted']) {
            return ['valid' => false, 'message' => 'لقد استنفدت جميع فرص الاستخدام لهذا الكوبون.'];
        }

        if ($resolved['discount'] === null) {
            return ['valid' => false, 'message' => 'لا يوجد خصم متاح لك على هذا الكوبون في هذه المرحلة.'];
        }

        $price = (float) ($assessment->price ?? 0);
        $discountAmount = round($price * $resolved['discount'] / 100, 2);
        $finalPrice = max(0, $price - $discountAmount);

        return [
            'valid' => true,
            'coupon' => $coupon,
            'discount' => $resolved['discount'],
            'price' => $price,
            'discount_amount' => $discountAmount,
            'final_price' => $finalPrice,
            'is_free' => $finalPrice <= 0,
            'usage_number' => $resolved['total_used'] + 1,
            'message' => "الكوبون صالح! خصم {$resolved['discount']}% سيُطبق.",
        ];
    }

    /**
     * Records the usage of a coupon for a specific user.
     */
    public function recordUsage(Coupon $coupon, string $userId): void
    {
        $pivot = $coupon->users()->where('user_id', $userId)->first();
        if ($pivot) {
            $coupon->users()->updateExistingPivot($userId, ['used_count' => $pivot->pivot->used_count + 1]);
        } else {
            $coupon->users()->attach($userId, ['used_count' => 1]);
        }
    }

    /**
     * Resolve the actual discount percentage a user should get for a given coupon.
     * Checks usage across all identities (email, phone, national_id) to prevent fraud.
     */
    private function resolveDiscount(Coupon $coupon, User $user): array
    {
        $totalUsed = $this->countLinkedUsage($coupon, $user);

        $discount = null;
        if ($totalUsed === 0) {
            $discount = $coupon->discount_percentage;
        } elseif ($totalUsed === 1 && $coupon->discount_percentage_2nd !== null) {
            $discount = $coupon->discount_percentage_2nd;
        } elseif ($totalUsed === 2 && $coupon->discount_percentage_3rd !== null) {
            $discount = $coupon->discount_percentage_3rd;
        } elseif ($totalUsed === 3 && $coupon->discount_percentage_4th !== null) {
            $discount = $coupon->discount_percentage_4th;
        } elseif ($totalUsed === 4 && $coupon->discount_percentage_5th !== null) {
            $discount = $coupon->discount_percentage_5th;
        } elseif ($totalUsed === 5 && $coupon->discount_percentage_6th !== null) {
            $discount = $coupon->discount_percentage_6th;
        } elseif ($totalUsed === 6 && $coupon->discount_percentage_7th !== null) {
            $discount = $coupon->discount_percentage_7th;
        } elseif ($totalUsed === 7 && $coupon->discount_percentage_8th !== null) {
            $discount = $coupon->discount_percentage_8th;
        } elseif ($totalUsed === 8 && $coupon->discount_percentage_9th !== null) {
            $discount = $coupon->discount_percentage_9th;
        } elseif ($totalUsed === 9 && $coupon->discount_percentage_10th !== null) {
            $discount = $coupon->discount_percentage_10th;
        }

        // Fallback to base discount percentage if specific tier is not defined
        if ($discount === null) {
            $discount = $coupon->discount_percentage;
        }

        $exhausted = ($coupon->assessments_limit !== null) && ($totalUsed >= $coupon->assessments_limit);

        return [
            'total_used' => $totalUsed,
            'discount' => $discount,
            'exhausted' => $exhausted,
        ];
    }

    /**
     * Count exam sessions using this coupon across all users sharing
     * the same national_id, phone, or email as the requesting user.
     */
    private function countLinkedUsage(Coupon $coupon, User $user): int
    {
        $linkedUserIds = User::where(function ($q) use ($user) {
            $q->where('email', $user->email);
            if ($user->name) {
                $q->orWhere('name', $user->name);
            }
            if ($user->national_id) {
                $q->orWhere('national_id', $user->national_id);
            }
            if ($user->phone) {
                $q->orWhere('phone', $user->phone);
            }
        })->pluck('id');

        return ExamSession::whereIn('user_id', $linkedUserIds)
            ->where('coupon_id', $coupon->id)
            ->count();
    }
}
```

## File: app/Services/Result/RecommendationSelector.php
```php
<?php

namespace App\Services\Result;

use App\Models\Assessment;
use App\Models\Recommendation;

class RecommendationSelector
{
    /**
     * Select the appropriate recommendation based on scoring type and thresholds.
     */
    public function select(Assessment $assessment, array $scoreData): ?Recommendation
    {
        $scoringType = $assessment->scoring_type ?? 'overall_score';

        if ($scoringType === 'perceptual_styles') {
            return $this->selectForPerceptualStyles($assessment, $scoreData['dimensions']);
        }

        if ($scoringType === 'highest_dimension') {
            return $this->selectByHighestDimension($assessment, $scoreData['dimensions']);
        }

        if ($scoringType === 'overall_score') {
            return $this->selectByThresholds($assessment, $scoreData['total_score']);
        }

        return null;
    }

    /**
     * Classification logic for Perceptual Styles (Visual, Auditory, Kinesthetic).
     */
    private function selectForPerceptualStyles(Assessment $assessment, array $dimensions): ?Recommendation
    {
        $vScore = 0;
        $aScore = 0;
        $kScore = 0;

        foreach ($dimensions as $dim) {
            $name = $dim['name'] ?? '';
            if (mb_strpos($name, 'بصري') !== false) {
                $vScore = $dim['score'];
            } elseif (mb_strpos($name, 'سمعي') !== false) {
                $aScore = $dim['score'];
            } elseif (mb_strpos($name, 'حسي') !== false) {
                $kScore = $dim['score'];
            }
        }

        $styles = [
            ['key' => 'visual', 'score' => $vScore],
            ['key' => 'auditory', 'score' => $aScore],
            ['key' => 'kinesthetic', 'score' => $kScore],
        ];

        usort($styles, fn($a, $b) => $b['score'] <=> $a['score']);

        $s1 = $styles[0];
        $s2 = $styles[1];
        $s3 = $styles[2];

        // Rule 1: Balanced Style (difference across all 3 <= 2)
        if (($s1['score'] - $s3['score']) <= 2) {
            $targetLevel = 'balanced';
        }
        // Rule 2: Dual Style (difference between top 2 <= 2 and top 2 vs 3rd >= 3)
        elseif (($s1['score'] - $s2['score']) <= 2 && ($s2['score'] - $s3['score']) >= 3) {
            $keys = [$s1['key'], $s2['key']];
            sort($keys);
            $pair = implode('_', $keys);
            if ($pair === 'auditory_visual') $targetLevel = 'dual_visual_auditory';
            elseif ($pair === 'kinesthetic_visual') $targetLevel = 'dual_visual_kinesthetic';
            elseif ($pair === 'auditory_kinesthetic') $targetLevel = 'dual_auditory_kinesthetic';
            else $targetLevel = 'dual_' . $pair;
        }
        // Rule 3: Single Dominant Style
        else {
            $targetLevel = $s1['key'];
        }
        $rec = $assessment->recommendations->firstWhere('level', $targetLevel);
        if (!$rec) {
            $dataFile = database_path('data/assessments/28/recommendations.php');
            if (!file_exists($dataFile)) {
                $dataFile = database_path('data/assessments/perceptual_styles/recommendations.php');
            }
            if (file_exists($dataFile)) {
                $allRecs = require $dataFile;
                $found = collect($allRecs)->firstWhere('level', $targetLevel);
                if ($found) {
                    $rec = new Recommendation(array_merge($found, ['assessment_id' => $assessment->id]));
                }
            }
        }
        return $rec;
    }

    /**
     * Finds the highest scoring dimension and matches a recommendation by name.
     */
    private function selectByHighestDimension(Assessment $assessment, array $dimensions): ?Recommendation
    {
        if (empty($dimensions)) {
            return null;
        }

        // Find the dimension with the highest score
        $highestDim = null;
        $highestScore = -1;

        foreach ($dimensions as $dim) {
            if ($dim['score'] > $highestScore) {
                $highestScore = $dim['score'];
                $highestDim = $dim;
            }
        }

        if (!$highestDim) {
            return null;
        }

        $highestDimName = trim(str_replace('محور', '', $highestDim['name']));

        return $assessment->recommendations->first(function($rec) use ($highestDimName) {
            return strpos(trim($rec->level), $highestDimName) !== false 
                || strpos($highestDimName, trim($rec->level)) !== false;
        });
    }

    /**
     * Selects recommendation strictly based on database thresholds.
     */
    private function selectByThresholds(Assessment $assessment, int $totalScore): ?Recommendation
    {
        foreach ($assessment->recommendations as $rec) {
            if ($rec->low_threshold !== null && $rec->high_threshold !== null) {
                if ($totalScore >= $rec->low_threshold && $totalScore <= $rec->high_threshold) {
                    return $rec;
                }
            }
        }

        return null;
    }
}
```

## File: database/migrations/2024_01_01_000002_create_assessments_table.php
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

## File: database/migrations/2024_01_01_000008_create_results_table.php
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

## File: database/migrations/2024_01_01_000009_create_dimension_scores_table.php
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

## File: database/migrations/2026_06_24_091932_create_dimension_interpretations_table.php
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

## File: database/migrations/2026_07_01_154805_create_coupons_table.php
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

## File: app/Http/Controllers/AuthController.php
```php
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function showLogin()
    {
        return response()
            ->view('auth.login')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            if (Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.']);
    }

    public function showRegister()
    {
        return response()
            ->view('auth.register')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
    }

    public function register(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'national_id' => 'required|string|unique:users|max:20',
            'phone' => 'required|string|unique:users|max:20',
            'gender' => 'required|string|in:male,female',
            'qualification' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'national_id' => $data['national_id'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'qualification' => $data['qualification'],
            'nationality' => $data['nationality'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
```

## File: database/migrations/2024_01_01_000010_create_recommendations_table.php
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

## File: database/migrations/2026_07_05_124738_add_user_restrictions_to_coupons.php
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

## File: app/Http/Controllers/Admin/AssessmentController.php
```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssessmentRequest;
use App\Http\Requests\Admin\UpdateAssessmentRequest;
use App\Http\Requests\Admin\UpdateSettingsRequest;
use App\Models\Assessment;
use App\Services\AssessmentService;
use App\Models\Icon;
use App\Models\Result;
use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Services\Result\ResultFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class AssessmentController extends Controller
{
    public function __construct(
        private readonly AssessmentService $assessmentService,
    ) {}

    public function index(\Illuminate\Http\Request $request): View
    {
        $filters = $request->only(['category', 'search']);
        $assessments = $this->assessmentService->list($filters);

        return view('admin.assessments.index', compact('assessments'));
    }

    public function store(StoreAssessmentRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/dashboard'), $filename);
            $data['image_url'] = $filename;
        }
        unset($data['image']);

        $assessment = $this->assessmentService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'تم إنشاء المقياس بنجاح.',
            'id' => $assessment->id,
        ]);
    }

    public function show(Assessment $assessment): View
    {
        $assessment = $this->assessmentService->getForManagement($assessment->id);
        $icons = Icon::all()->groupBy('category');
        return view('admin.assessments.show', compact('assessment', 'icons'));
    }

    public function update(UpdateAssessmentRequest $request, Assessment $assessment): JsonResponse
    {
        $this->assessmentService->update($assessment, $request->validated());

        return response()->json(['success' => true, 'message' => 'تم تحديث المقياس.']);
    }

    public function updateSettings(UpdateSettingsRequest $request, Assessment $assessment): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not one of the default seeded images
            if ($assessment->image_url && ! preg_match('/^([1-9]|1[0-9]|2[0-5])\.png$/', $assessment->image_url)) {
                $oldPath = public_path('images/dashboard/'.$assessment->image_url);
                if (\Illuminate\Support\Facades\File::exists($oldPath)) {
                    \Illuminate\Support\Facades\File::delete($oldPath);
                }
            }

            $file = $request->file('image');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/dashboard'), $filename);
            $data['image_url'] = $filename;
        }
        unset($data['image']);

        if ($request->hasFile('icon_file')) {
            // Delete old icon if it exists and is an uploaded file
            if ($assessment->icon && str_starts_with($assessment->icon, '/images/icons/')) {
                $oldIconPath = public_path(ltrim($assessment->icon, '/'));
                if (\Illuminate\Support\Facades\File::exists($oldIconPath)) {
                    \Illuminate\Support\Facades\File::delete($oldIconPath);
                }
            }

            $file = $request->file('icon_file');
            $filename = 'icon_'.time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/icons'), $filename);
            $data['icon'] = '/images/icons/' . $filename;
        }
        unset($data['icon_file']);


        $this->assessmentService->updateSettings($assessment, $data);

        return response()->json(['success' => true, 'message' => 'تم حفظ الإعدادات بنجاح.']);
    }

    public function destroy(Assessment $assessment): JsonResponse
    {
        $this->assessmentService->delete($assessment);

        return response()->json(['success' => true, 'message' => 'تم حذف المقياس.']);
    }

    public function toggle(Assessment $assessment): JsonResponse
    {
        $updated = $this->assessmentService->toggle($assessment);
        $status = $updated->is_active ? 'تم تفعيل' : 'تم إيقاف';

        return response()->json([
            'success' => true,
            'message' => "$status المقياس.",
            'is_active' => $updated->is_active,
        ]);
    }

    public function previewResult(Assessment $assessment, string $level): View
    {
        // Find recommendation by level or ID
        $recommendation = $assessment->recommendations()
            ->where('level', $level)
            ->orWhere('id', $level)
            ->first();

        $levelKey = $recommendation ? $recommendation->level : $level;
        $scoringType = $assessment->scoring_type ?? 'overall_score';

        // Fallback for perceptual styles if DB recommendations table is empty on server
        if (!$recommendation && $scoringType === 'perceptual_styles') {
            $dataFile = database_path('data/assessments/28/recommendations.php');
            if (!file_exists($dataFile)) {
                $dataFile = database_path('data/assessments/perceptual_styles/recommendations.php');
            }
            if (file_exists($dataFile)) {
                $allRecs = require $dataFile;
                $found = collect($allRecs)->firstWhere('level', $levelKey);
                if ($found) {
                    $recommendation = new Recommendation(array_merge($found, ['assessment_id' => $assessment->id]));
                }
            }
        }

        // Build mock scores based on scoring_type & level
        $mockDimensionScores = collect();
        $totalScore = 0;
        $maxPossible = 0;

        if ($scoringType === 'perceptual_styles') {
            $presetScores = [
                'visual'                    => ['النمط البصري' => 18, 'النمط السمعي' => 12, 'النمط الحسي' => 9],
                'auditory'                  => ['النمط البصري' => 11, 'النمط السمعي' => 19, 'النمط الحسي' => 10],
                'kinesthetic'               => ['النمط البصري' => 10, 'النمط السمعي' => 11, 'النمط الحسي' => 18],
                'balanced'                  => ['النمط البصري' => 15, 'النمط السمعي' => 14, 'النمط الحسي' => 13],
                'dual_visual_auditory'      => ['النمط البصري' => 17, 'النمط السمعي' => 16, 'النمط الحسي' => 10],
                'dual_visual_kinesthetic'   => ['النمط البصري' => 17, 'النمط السمعي' => 10, 'النمط الحسي' => 16],
                'dual_auditory_kinesthetic'  => ['النمط البصري' => 10, 'النمط السمعي' => 17, 'النمط الحسي' => 16],
            ];

            $scoresMap = $presetScores[$levelKey] ?? ['النمط البصري' => 15, 'النمط السمعي' => 14, 'النمط الحسي' => 13];

            foreach ($assessment->dimensions as $dim) {
                $scoreVal = $scoresMap[$dim->name_ar] ?? 12;
                $totalScore += $scoreVal;
                $maxPossible += 20;

                $ds = new DimensionScore([
                    'dimension_id' => $dim->id,
                    'score' => $scoreVal,
                    'max_score' => 20,
                    'level' => $levelKey,
                ]);
                $clonedDim = clone $dim;
                $ds->setRelation('dimension', $clonedDim);
                $mockDimensionScores->push($ds);
            }
        } else {
            $score = $recommendation ? ($recommendation->high_threshold ?? 85) : 85;
            $totalScore = $score;
            $maxPossible = 100;

            foreach ($assessment->dimensions as $dim) {
                $interp = $dim->interpretations()->where('level', $levelKey)->first();
                $ds = new DimensionScore([
                    'dimension_id' => $dim->id,
                    'score' => $interp ? $interp->high_threshold : 10,
                    'max_score' => 10,
                    'level' => $levelKey,
                ]);
                $clonedDim = clone $dim;
                $clonedDim->load('interpretations');
                $ds->setRelation('dimension', $clonedDim);
                $mockDimensionScores->push($ds);
            }
        }

        // Mock Result model
        $result = new Result([
            'id' => 'PREVIEW-' . strtoupper(substr(md5($levelKey), 0, 8)),
            'assessment_id' => $assessment->id,
            'total_score' => $totalScore,
            'max_possible_score' => $maxPossible ?: 60,
            'level' => $levelKey,
            'calculated_at' => now(),
        ]);
        $result->setRelation('dimensionScores', $mockDimensionScores);

        $formatter = app(ResultFormatter::class);
        $formattedData = $formatter->format($assessment, $result, $recommendation);

        $session = tap(new ExamSession([
            'id' => 'PREVIEW-SESSION-' . time(),
            'status' => 'completed',
            'created_at' => now(),
        ]))->setRelation('result', $result)
           ->setRelation('assessment', $assessment);

        return view('user.result', array_merge(['session' => $session], $formattedData));
    }
}
```

## File: app/Http/Controllers/ExamController.php
```php
<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerQuestionRequest;
use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
use App\Services\CouponService;
use App\Services\ExamService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExamController extends Controller
{
    public function __construct(
        private readonly ExamService $examService,
        private readonly CouponService $couponService,
    ) {}

    /**
     * AJAX endpoint: validate a coupon code for a given assessment,
     * returning discount tier and pricing info.
     */
    public function validateCoupon(Request $request): JsonResponse
    {
        $request->validate([
            'code'          => 'required|string',
            'assessment_id' => 'required|exists:assessments,id,deleted_at,NULL',
        ]);

        $user       = auth()->user();
        $assessment = Assessment::findOrFail($request->assessment_id);

        // Block coupon usage if the admin has disabled it for this assessment
        if ($assessment->hide_coupon_field) {
            return response()->json(['valid' => false, 'message' => 'الكوبون غير مقبول لهذا المقياس.'], 422);
        }

        $hasAnySession = ExamSession::where('user_id', $user->id)
            ->where('assessment_id', $assessment->id)
            ->exists();

        if ($hasAnySession) {
            return response()->json([
                'valid'            => true,
                'coupon_id'        => null,
                'discount'         => 100,
                'price'            => (float) $assessment->price,
                'discount_amount'  => (float) $assessment->price,
                'final_price'      => 0,
                'is_free'          => true,
                'usage_number'     => 1,
                'message'          => 'لديك دخول مسبق لهذا المقياس، سيتم استئنافه فوراً.',
            ]);
        }

        $result = $this->couponService->validateCouponForUser($request->code, $assessment, $user);

        if (!$result['valid']) {
            return response()->json(['valid' => false, 'message' => $result['message']], 422);
        }

        return response()->json([
            'valid'            => true,
            'coupon_id'        => $result['coupon']->id,
            'discount'         => $result['discount'],
            'price'            => $result['price'],
            'discount_amount'  => $result['discount_amount'],
            'final_price'      => $result['final_price'],
            'is_free'          => $result['is_free'],
            'usage_number'     => $result['usage_number'],
            'message'          => $result['message'],
        ]);
    }

    /**
     * AJAX endpoint: get the available public coupon code(s) for a given assessment.
     * Returns the first active coupon that applies to this assessment and is for all users.
     */
    public function getCouponForAssessment(Assessment $assessment): JsonResponse
    {
        // Block if the admin disabled the coupon field for this assessment
        if ($assessment->hide_coupon_field) {
            return response()->json([
                'found'   => false,
                'message' => 'الكوبون غير مقبول لهذا المقياس.',
            ]);
        }

        $user = auth()->user();

        $coupons = Coupon::where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>=', now()->toDateString());
            })
            ->where(function ($q) use ($assessment) {
                // Either applies to all assessments, or specifically to this one
                $q->where('applies_to_all_assessments', true)
                  ->orWhereHas('assessments', fn ($a) => $a->where('assessment_id', $assessment->id));
            })
            ->where(function ($q) use ($user) {
                // Either applies to all users, or specifically to this user
                $q->where('applies_to_all_users', true)
                  ->orWhereHas('permittedUsers', fn ($u) => $u->where('user_id', $user->id));
            })
            ->get();

        if ($coupons->isEmpty()) {
            return response()->json([
                'found' => false,
                'message' => 'لا يوجد كوبون متاح لهذا المقياس حالياً.',
            ]);
        }

        return response()->json([
            'found'    => true,
            'coupons'  => $coupons->map(function($c) {
                return [
                    'code'     => $c->code,
                    'title'    => $c->title,
                    'discount' => $c->discount_percentage,
                    'expires'  => $c->expires_at ? $c->expires_at->format('Y-m-d') : null,
                ];
            })
        ]);
    }

    public function start(Request $request, Assessment $assessment): RedirectResponse
    {
        $userId = auth()->id();
        $user   = auth()->user();

        // If user already has ANY session for this assessment, resume/restart for free
        $hasAnySession = ExamSession::where('user_id', $userId)
            ->where('assessment_id', $assessment->id)
            ->exists();

        $couponId        = null;
        $discountApplied = null;

        if (!$hasAnySession) {
            // New assessment — needs coupon or payment
            if (!$request->filled('coupon_code') && $assessment->price > 0) {
                return redirect()->back()->with('error', 'يجب الدفع أو استخدام كوبون للوصول إلى هذا المقياس.');
            }

            // Block coupon usage if the admin has disabled it for this assessment
            if ($request->filled('coupon_code') && $assessment->hide_coupon_field) {
                return redirect()->back()->with('error', 'الكوبون غير مقبول لهذا المقياس.');
            }

            if ($request->filled('coupon_code')) {
                $result = $this->couponService->validateCouponForUser($request->coupon_code, $assessment, $user);

                if (!$result['valid']) {
                    return redirect()->back()->with('error', $result['message']);
                }

                if (!$result['is_free']) {
                    // If the coupon doesn't make it 100% free, we would normally redirect to the payment gateway here.
                    // For now, since payment gateway isn't implemented, we just return an error with the remaining amount.
                    return redirect()->back()->with('error', 'يجب استكمال الدفع للمبلغ المتبقي: ' . $result['final_price'] . ' ر.س. (بوابة الدفع غير مفعلة حالياً)');
                }

                $couponId        = $result['coupon']->id;
                $discountApplied = $result['discount'];

                // Record usage
                $this->couponService->recordUsage($result['coupon'], $userId);
            }
        }

        $result  = $this->examService->startOrResume($assessment, $userId);
        $session = $result['session'];

        // Store coupon info on session if this is a new session
        if ($couponId && !$result['resumed']) {
            $session->update([
                'coupon_id'        => $couponId,
                'discount_applied' => $discountApplied,
            ]);
        }

        if ($result['resumed']) {
            return redirect()->route('exam.show', $session->id)
                ->with('info', 'لديك جلسة اختبار قيد التقدم، يمكنك الاستمرار من حيث توقفت.');
        }

        return redirect()->route('exam.show', $session->id);
    }

    public function show(ExamSession $session): View|RedirectResponse
    {
        $this->authorizeSession($session);

        if ($session->status === 'completed') {
            return redirect()->route('exam.result', $session->id);
        }

        $data         = $this->examService->getSessionData($session);
        $nextQuestion = $data['nextQuestion'];

        if (!$nextQuestion) {
            $this->examService->getResult($session);
            return redirect()->route('exam.result', $session->id);
        }

        return view('user.exam', [
            'session'      => $session,
            'assessment'   => $data['assessment'],
            'nextQuestion' => $nextQuestion,
            'progress'     => $data['progress'],
        ]);
    }

    public function answer(AnswerQuestionRequest $request, ExamSession $session): JsonResponse
    {
        $this->authorizeSession($session);

        $result = $this->examService->submitAnswer(
            $session,
            $request->validated('question_id'),
            $request->validated('selected_option_id')
        );

        return response()->json(array_merge(['success' => true], $result));
    }

    public function previous(Request $request, ExamSession $session): JsonResponse
    {
        $this->authorizeSession($session);
        $result = $this->examService->previousQuestion($session);
        return response()->json($result);
    }

    public function result(Request $request, ExamSession $session): View|RedirectResponse|JsonResponse
    {
        $this->authorizeSession($session);

        if ($session->status !== 'completed' || !$session->result) {
            return redirect()->route('exam.show', $session->id);
        }

        $data = $this->examService->getResult($session);

        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json($data);
        }

        return view('user.result', array_merge(['session' => $session], $data));
    }

    private function authorizeSession(ExamSession $session): void
    {
        if ($session->user_id !== auth()->id() && !optional(auth()->user())->isAdmin()) {
            abort(403);
        }
    }
}
```

## File: routes/web.php
```php
<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

// Auth
Route::get('/', fn () => redirect()->route('login'));
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:5,1')->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/coupon/validate', [ExamController::class, 'validateCoupon'])->name('coupon.validate');
    Route::get('/coupon/for-assessment/{assessment}', [ExamController::class, 'getCouponForAssessment'])->name('coupon.for-assessment');
    Route::post('/exam/{assessment}/start', [ExamController::class, 'start'])->name('exam.start');
    Route::get('/exam/{session}', [ExamController::class, 'show'])->name('exam.show');
    Route::post('/exam/{session}/answer', [ExamController::class, 'answer'])->name('exam.answer');
    Route::post('/exam/{session}/previous', [ExamController::class, 'previous'])->name('exam.previous');
    Route::get('/exam/{session}/result', [ExamController::class, 'result'])->name('exam.result');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings', [Admin\SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [Admin\SettingController::class, 'update'])->name('settings.update');

    Route::get('/assessments', [Admin\AssessmentController::class, 'index'])->name('assessments.index');
    Route::post('/assessments', [Admin\AssessmentController::class, 'store'])->name('assessments.store');
    Route::put('/assessments/{assessment}', [Admin\AssessmentController::class, 'update'])->name('assessments.update');
    Route::delete('/assessments/{assessment}', [Admin\AssessmentController::class, 'destroy'])->name('assessments.destroy');
    Route::post('/assessments/{assessment}/toggle', [Admin\AssessmentController::class, 'toggle'])->name('assessments.toggle');
    Route::get('/assessments/{assessment}', [Admin\AssessmentController::class, 'show'])->name('assessments.show');
    Route::get('/assessments/{assessment}/preview/{level}', [Admin\AssessmentController::class, 'previewResult'])->name('assessments.preview');
    Route::patch('/assessments/{assessment}/settings', [Admin\AssessmentController::class, 'updateSettings'])->name('assessments.settings');

    Route::get('/questions', [Admin\QuestionController::class, 'index'])->name('questions.index');
    Route::post('/questions', [Admin\QuestionController::class, 'store'])->name('questions.store');
    Route::post('/questions/bulk', [Admin\QuestionController::class, 'bulkStore'])->name('questions.bulk');
    Route::get('/questions/by-assessment/{assessment}', [Admin\QuestionController::class, 'byAssessment'])->name('questions.byAssessment');
    Route::post('/assessments/{assessment}/questions/import-csv', [Admin\QuestionController::class, 'importCsv'])->name('questions.importCsv');
    Route::get('/questions/template', [Admin\QuestionController::class, 'downloadTemplate'])->name('questions.template');

    // Admin UX Improvements Routes
    Route::patch('/questions/reorder', [Admin\QuestionController::class, 'reorder'])->name('questions.reorder');
    Route::patch('/questions/bulk-dimension', [Admin\QuestionController::class, 'bulkAssignDimension'])->name('questions.bulkAssignDimension');
    Route::delete('/questions/bulk-delete', [Admin\QuestionController::class, 'bulkDelete'])->name('questions.bulkDelete');
    Route::patch('/questions/{question}/dimension', [Admin\QuestionController::class, 'assignDimension'])->name('questions.assignDimension');
    Route::patch('/questions/{question}', [Admin\QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/questions/{question}', [Admin\QuestionController::class, 'destroy'])->name('questions.destroy');

    // Answer Options Routes
    Route::get('/questions/{question}/options', [Admin\AnswerOptionController::class, 'index'])->name('options.index');
    Route::post('/questions/{question}/options', [Admin\AnswerOptionController::class, 'store'])->name('options.store');
    Route::put('/options/{option}', [Admin\AnswerOptionController::class, 'update'])->name('options.update');
    Route::delete('/options/{option}', [Admin\AnswerOptionController::class, 'destroy'])->name('options.destroy');
    Route::post('/questions/{question}/sync-options', [Admin\AnswerOptionController::class, 'syncToAssessment'])->name('options.sync');

    Route::get('/exams/create', [Admin\ExamController::class, 'create'])->name('exams.create');
    Route::post('/exams', [Admin\ExamController::class, 'store'])->name('exams.store');

    Route::get('/dimensions/by-assessment/{assessment}', [Admin\DimensionController::class, 'byAssessment'])->name('dimensions.byAssessment');
    Route::patch('/dimensions/reorder', [Admin\DimensionController::class, 'reorder'])->name('dimensions.reorder');
    Route::post('/assessments/{assessment}/dimensions', [Admin\DimensionController::class, 'store'])->name('dimensions.store');
    Route::patch('/dimensions/{dimension}', [Admin\DimensionController::class, 'update'])->name('dimensions.update');
    Route::delete('/dimensions/{dimension}', [Admin\DimensionController::class, 'destroy'])->name('dimensions.destroy');
    Route::post('/dimensions/{dimension}/interpretations', [Admin\DimensionController::class, 'storeInterpretations'])->name('dimensions.interpretations.store');

    Route::get('/recommendations', [Admin\RecommendationController::class, 'index'])->name('recommendations.index');
    Route::post('/recommendations', [Admin\RecommendationController::class, 'store'])->name('recommendations.store');
    Route::delete('/recommendations/{recommendation}', [Admin\RecommendationController::class, 'destroy'])->name('recommendations.destroy');

    Route::get('/statistics', [Admin\StatisticsController::class, 'index'])->name('statistics.index');
    Route::get('/statistics/data', [Admin\StatisticsController::class, 'data'])->name('statistics.data');
    Route::get('/statistics/export-csv', [Admin\StatisticsController::class, 'exportCsv'])->name('statistics.exportCsv');

    Route::resource('coupons', Admin\CouponController::class)->except(['show']);
    Route::resource('icons', Admin\IconController::class)->only(['index', 'store', 'destroy']);

    Route::get('/users', [Admin\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/results', [Admin\UserController::class, 'userResults'])->name('users.results');
});
```

## File: app/Http/Requests/Admin/UpdateSettingsRequest.php
```php
<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'scoring_type' => 'required|in:overall_score,highest_dimension,dimension_only,perceptual_styles',
            'description_ar' => 'nullable|string',
            'time_limit_min' => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|numeric|min:0',
            'rating' => 'nullable|numeric|min:1|max:5',
            'is_active' => 'nullable|boolean',
            'hide_coupon_field' => 'nullable|boolean',
            'icon' => 'nullable|string|max:100',
            'icon_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'report_code' => 'nullable|string|max:50',
        ];
    }

    /**
     * Prepare the data for validation (cast checkbox boolean).
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_active' => $this->boolean('is_active'),
            'hide_coupon_field' => $this->boolean('hide_coupon_field'),
        ]);
    }
}
```

## File: app/Models/Assessment.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assessment extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'category',
        'type',
        'time_limit_min',
        'is_active',
        'created_by',
        'image_url',
        'subtitle_ar',
        'scoring_type',
        'price',
        'rating',
        'rating_count',
        'hide_coupon_field',
        'icon',
        'report_code',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'hide_coupon_field' => 'boolean',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_assessment');
    }

    public function dimensions()
    {
        return $this->hasMany(Dimension::class)->orderBy('order_index');
    }

    public function questions()
    {
        return $this->hasMany(Question::class)->orderBy('order_index');
    }

    public function examSessions()
    {
        return $this->hasMany(ExamSession::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }
}
```

## File: app/Services/ExamResultService.php
```php
<?php

namespace App\Services;

use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Models\Result;
use App\Services\Result\DimensionInterpreter;
use App\Services\Result\RecommendationSelector;
use App\Services\Result\ResultFormatter;
use App\Services\Result\ScoreCalculator;
use Carbon\Carbon;

class ExamResultService
{
    public function __construct(
        private readonly ScoreCalculator $scoreCalculator,
        private readonly RecommendationSelector $recommendationSelector,
        private readonly DimensionInterpreter $dimensionInterpreter,
        private readonly ResultFormatter $resultFormatter
    ) {}

    /**
     * Calculate and persist the result for a completed exam session.
     */
    public function calculate(ExamSession $session): Result
    {
        if ($session->result) {
            return $session->result->load('dimensionScores.dimension');
        }

        $session->load([
            'assessment.questions.answerOptions',
            'assessment.dimensions.interpretations',
            'assessment.recommendations',
            'userAnswers',
        ]);

        $assessment = $session->assessment;

        // 1. Calculate Scores
        $scoreData = $this->scoreCalculator->calculate($session);

        // 2. Select Recommendation
        $recommendation = $this->recommendationSelector->select($assessment, $scoreData);
        $level = $recommendation ? $recommendation->level : null;

        // 3. Persist Result
        $result = Result::create([
            'session_id' => $session->id,
            'total_score' => $scoreData['total_score'],
            'max_possible_score' => $scoreData['max_score'],
            'level' => $level,
            'calculated_at' => Carbon::now(),
        ]);

        // 4. Persist Dimension Scores with Interpretation
        foreach ($scoreData['dimensions'] as $dimData) {
            $dimension = $assessment->dimensions->firstWhere('id', $dimData['dimension_id']);
            $interp = $this->dimensionInterpreter->interpret($dimension, $dimData['score']);
            
            DimensionScore::create([
                'result_id' => $result->id,
                'dimension_id' => $dimData['dimension_id'],
                'score' => $dimData['score'],
                'max_score' => $dimData['max_score'],
                'level' => $interp ? $interp->level : 'medium',
            ]);
        }

        $session->update([
            'status' => 'completed',
            'completed_at' => Carbon::now(),
        ]);

        return $result->load('dimensionScores.dimension.interpretations');
    }

    /**
     * Get the result formatted as a clean structured array (JSON ready).
     */
    public function getFormattedResult(ExamSession $session): array
    {
        $result = $session->result;

        if (! $result) {
            $result = $this->calculate($session);
        } else {
            $result->load('dimensionScores.dimension.interpretations');
        }

        $assessment = $session->assessment()->with(['recommendations'])->first();
        if (! $assessment) {
            abort(404, 'المقياس المرتبط بهذه الجلسة غير موجود. ربما تمت إعادة تهيئة قاعدة البيانات.');
        }
        $recommendation = $assessment->recommendations->where('level', $result->level)->first();

        return $this->resultFormatter->format($assessment, $result, $recommendation);
    }
}
```

## File: database/seeders/PerceptualStylesSeeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\AnswerOption;
use App\Models\Recommendation;
use App\Models\User;

class PerceptualStylesSeeder extends Seeder
{
    public function run(): void
    {
        $dir = database_path('data/assessments/perceptual_styles');
        $meta = require $dir . '/meta.php';
        
        $adminUser = User::where('role', 'admin')->first() ?? User::first();
        $meta['created_by'] = $adminUser?->id;

        // Delete old version if exists to ensure clean idempotent seed
        $existingList = Assessment::where('report_code', 'REP-PERCEPTUAL')
            ->orWhere('report_code', 'REP-28')
            ->orWhere('title_ar', 'LIKE', '%الأنماط الإدراكية%')
            ->orWhere('scoring_type', 'perceptual_styles')
            ->get();

        foreach ($existingList as $oldAss) {
            $sessions = \App\Models\ExamSession::where('assessment_id', $oldAss->id)->get();
            foreach ($sessions as $s) {
                \App\Models\UserAnswer::where('session_id', $s->id)->forceDelete();
                $res = \App\Models\Result::where('exam_session_id', $s->id)->first();
                if ($res) {
                    \App\Models\DimensionScore::where('result_id', $res->id)->forceDelete();
                    $res->forceDelete();
                }
                $s->forceDelete();
            }
            Recommendation::where('assessment_id', $oldAss->id)->forceDelete();

            $dimIds = Dimension::where('assessment_id', $oldAss->id)->pluck('id');
            \App\Models\DimensionInterpretation::whereIn('dimension_id', $dimIds)->forceDelete();
            Dimension::where('assessment_id', $oldAss->id)->forceDelete();

            $qIds = Question::where('assessment_id', $oldAss->id)->pluck('id');
            AnswerOption::whereIn('question_id', $qIds)->forceDelete();
            Question::where('assessment_id', $oldAss->id)->forceDelete();

            $oldAss->forceDelete();
        }

        $assessment = Assessment::create($meta);

        $dimensions = require $dir . '/dimensions.php';
        foreach ($dimensions as $dimData) {
            $dimension = Dimension::create([
                'assessment_id' => $assessment->id,
                'name_ar' => $dimData['name_ar'],
                'max_score' => $dimData['max_score'],
                'order_index' => $dimData['order_index'],
            ]);

            if (isset($dimData['questions'])) {
                foreach ($dimData['questions'] as $qData) {
                    $question = Question::create([
                        'assessment_id' => $assessment->id,
                        'dimension_id' => $dimension->id,
                        'text_ar' => $qData['text_ar'],
                        'order_index' => $qData['order_index'],
                    ]);

                    if (isset($qData['options'])) {
                        foreach ($qData['options'] as $optData) {
                            AnswerOption::create([
                                'question_id' => $question->id,
                                'label_ar' => $optData['label_ar'],
                                'score_value' => $optData['score_value'],
                                'order_index' => $optData['order_index'],
                            ]);
                        }
                    }
                }
            }
        }

        $recommendations = require $dir . '/recommendations.php';
        foreach ($recommendations as $recData) {
            Recommendation::create([
                'assessment_id' => $assessment->id,
                'level' => $recData['level'],
                'title_ar' => $recData['title_ar'] ?? null,
                'description_ar' => $recData['description_ar'],
                'strengths_ar' => $recData['strengths_ar'] ?? null,
                'development_areas_ar' => $recData['development_areas_ar'] ?? null,
                'how_to_learn_ar' => $recData['how_to_learn_ar'] ?? null,
                'practical_tips_ar' => $recData['practical_tips_ar'] ?? null,
                'certificates_intro_ar' => $recData['certificates_intro_ar'] ?? null,
                'certificates_ar' => $recData['certificates_ar'] ?? null,
                'programs_intro_ar' => $recData['programs_intro_ar'] ?? null,
                'programs_ar' => $recData['programs_ar'] ?? null,
                'programs_outro_ar' => $recData['programs_outro_ar'] ?? null,
                'plan_30_days_intro_ar' => $recData['plan_30_days_intro_ar'] ?? null,
                'plan_30_days_ar' => $recData['plan_30_days_ar'] ?? null,
            ]);
        }
    }
}
```

## File: database/seeders/DatabaseSeeder.php
```php
<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\Dimension;
use App\Models\DimensionInterpretation;
use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\Recommendation;
use App\Models\Result;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign keys for truncation
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::statement('PRAGMA foreign_keys = OFF;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        }

        // Truncate all tables in proper order
        DB::table('coupon_user')->delete();
        DB::table('coupon_assessment')->delete();
        Coupon::query()->forceDelete();
        DimensionScore::query()->forceDelete();
        Result::query()->forceDelete();
        UserAnswer::query()->forceDelete();
        ExamSession::query()->forceDelete();
        AnswerOption::query()->forceDelete();
        Question::query()->forceDelete();
        DimensionInterpretation::query()->forceDelete();
        Dimension::query()->forceDelete();
        Recommendation::query()->forceDelete();
        Assessment::query()->forceDelete();

        // Enable foreign keys
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::statement('PRAGMA foreign_keys = ON;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        }

        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@alroaya.sa'],
            [
                'name' => 'مدير النظام',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'national_id' => '1000000000',
                'phone' => '0500000000',
            ]
        );

        // Demo User
        $demoUser = User::firstOrCreate(
            ['email' => 'user@alroaya.sa'],
            [
                'name' => 'محمد أحمد',
                'password' => Hash::make('password'),
                'role' => 'user',
                'national_id' => '1111111111',
                'phone' => '0511111111',
            ]
        );

        // Include all finalized comprehensive assessments
        $this->call(AssessmentsDatabaseSeeder::class);
        $this->call(PerceptualStylesSeeder::class);

        // Seed some demo coupons
        $assessment = Assessment::first();

        // 1. FREE100: 100% discount, single use
        Coupon::firstOrCreate(
            ['code' => 'FREE100'],
            [
                'title' => 'كوبون خصم كامل 100%',
                'discount_percentage' => 100,
                'assessments_limit' => 1,
                'is_active' => true,
                'applies_to_all_assessments' => true,
            ]
        );

        // 2. TIERED: 1st 100%, 2nd 50%, 3rd 10%
        Coupon::firstOrCreate(
            ['code' => 'TIERED'],
            [
                'title' => 'كوبون الخصم المتدرج للمبادرة',
                'discount_percentage' => 100,
                'discount_percentage_2nd' => 50,
                'discount_percentage_3rd' => 10,
                'assessments_limit' => 3,
                'is_active' => true,
                'applies_to_all_assessments' => true,
            ]
        );

        // 3. SPECIFIC: Only for the first assessment
        if ($assessment) {
            $specificCoupon = Coupon::firstOrCreate(
                ['code' => 'SPECIFIC'],
                [
                    'title' => 'كوبون مقياس محدد',
                    'discount_percentage' => 100,
                    'assessments_limit' => 1,
                    'is_active' => true,
                    'applies_to_all_assessments' => false,
                ]
            );
            $specificCoupon->assessments()->syncWithoutDetaching([$assessment->id]);
        }
    }
}
```
