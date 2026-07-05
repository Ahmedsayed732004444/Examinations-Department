<?php

namespace Tests\Feature;

use App\Models\AnswerOption;
use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\DimensionInterpretation;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\User;
use App\Models\UserAnswer;
use App\Services\ExamResultService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AssessmentDetailTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected Assessment $assessment;

    protected function setUp(): void
    {
        parent::setUp();

        // Create admin user
        $this->admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create initial assessment
        $this->assessment = Assessment::create([
            'title_ar' => 'مقياس تجريبي',
            'category' => 'الفئة التجريبية',
            'description_ar' => 'وصف تجريبي للمقياس',
            'time_limit_min' => 30,
            'is_active' => true,
            'created_by' => $this->admin->id,
        ]);
    }

    public function test_admin_can_view_assessment_detail_page(): void
    {
        // Add dimension and question to test relationship load
        $dimension = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد الأول',
            'max_score' => 10,
            'order_index' => 0,
        ]);

        Question::create([
            'assessment_id' => $this->assessment->id,
            'dimension_id' => $dimension->id,
            'text_ar' => 'سؤال البعد الأول؟',
            'order_index' => 0,
        ]);

        Question::create([
            'assessment_id' => $this->assessment->id,
            'dimension_id' => null,
            'text_ar' => 'سؤال عام بدون بعد؟',
            'order_index' => 1,
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.assessments.show', $this->assessment->id));

        $response->assertStatus(200);
        $response->assertSee('مقياس تجريبي');
        $response->assertSee('البعد الأول');
        $response->assertSee('سؤال البعد الأول؟');
        $response->assertSee('سؤال عام بدون بعد؟');
    }

    public function test_admin_can_update_assessment_settings(): void
    {
        $payload = [
            'title_ar' => 'مقياس جديد',
            'category' => 'فئة جديدة',
            'description_ar' => 'وصف جديد',
            'time_limit_min' => 45,
            'is_active' => 0,
            'scoring_type' => 'overall_score',
        ];

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.assessments.settings', $this->assessment->id), $payload);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertDatabaseHas('assessments', [
            'id' => $this->assessment->id,
            'title_ar' => 'مقياس جديد',
            'category' => 'فئة جديدة',
            'description_ar' => 'وصف جديد',
            'time_limit_min' => 45,
            'is_active' => false,
        ]);
    }

    public function test_admin_can_create_dimension(): void
    {
        $payload = [
            'name_ar' => 'البعد المضاف',
            'max_score' => 20,
        ];

        $response = $this->actingAs($this->admin)
            ->post(route('admin.dimensions.store', $this->assessment->id), $payload);

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);

        $this->assertDatabaseHas('dimensions', [
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد المضاف',
            'max_score' => 20,
            'order_index' => 0, // Since it's the first one
        ]);
    }

    public function test_admin_can_update_dimension(): void
    {
        $dimension = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد القديم',
            'max_score' => 10,
            'order_index' => 0,
        ]);

        $payload = [
            'name_ar' => 'البعد المحدث',
            'max_score' => 15,
        ];

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.dimensions.update', $dimension->id), $payload);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertDatabaseHas('dimensions', [
            'id' => $dimension->id,
            'name_ar' => 'البعد المحدث',
            'max_score' => 15,
        ]);
    }

    public function test_admin_can_reorder_dimensions(): void
    {
        $dim1 = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد 1',
            'max_score' => 10,
            'order_index' => 0,
        ]);

        $dim2 = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد 2',
            'max_score' => 10,
            'order_index' => 1,
        ]);

        $payload = [
            'order' => [$dim2->id, $dim1->id],
        ];

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.dimensions.reorder'), $payload);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertDatabaseHas('dimensions', ['id' => $dim2->id, 'order_index' => 0]);
        $this->assertDatabaseHas('dimensions', ['id' => $dim1->id, 'order_index' => 1]);
    }

    public function test_admin_can_delete_dimension_and_associated_questions_are_unassigned(): void
    {
        $dimension = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد المحذوف',
            'max_score' => 10,
            'order_index' => 0,
        ]);

        $question = Question::create([
            'assessment_id' => $this->assessment->id,
            'dimension_id' => $dimension->id,
            'text_ar' => 'سؤال تابع للبعد؟',
            'order_index' => 0,
        ]);

        $response = $this->actingAs($this->admin)
            ->delete(route('admin.dimensions.destroy', $dimension->id));

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertDatabaseMissing('dimensions', ['id' => $dimension->id]);
        $this->assertDatabaseHas('questions', [
            'id' => $question->id,
            'dimension_id' => null, // Asserts question dimension_id has been set to null
        ]);
    }

    public function test_admin_can_save_dimension_interpretations(): void
    {
        $dimension = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد المستهدف',
            'max_score' => 10,
            'order_index' => 0,
        ]);

        $payload = [
            'high_threshold' => 8,
            'low_threshold' => 4,
            'interpretations' => [
                'high' => 'تفسير مرتفع تجريبي',
                'medium' => 'تفسير متوسط تجريبي',
                'low' => 'تفسير منخفض تجريبي',
            ],
        ];

        $response = $this->actingAs($this->admin)
            ->post(route('admin.dimensions.interpretations.store', $dimension->id), $payload);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertDatabaseHas('dimension_interpretations', [
            'dimension_id' => $dimension->id,
            'level' => 'high',
            'interpretation_text_ar' => 'تفسير مرتفع تجريبي',
            'high_threshold' => 8,
            'low_threshold' => 4,
        ]);

        $this->assertDatabaseHas('dimension_interpretations', [
            'dimension_id' => $dimension->id,
            'level' => 'low',
            'interpretation_text_ar' => 'تفسير منخفض تجريبي',
            'high_threshold' => 8,
            'low_threshold' => 4,
        ]);
    }

    public function test_result_page_displays_dimension_interpretations(): void
    {
        // Create user with 'user' role for the exam route middleware
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        $dimension = Dimension::create([
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد التجريبي',
            'max_score' => 10,
            'order_index' => 0,
        ]);

        // Create interpretations for this dimension
        DimensionInterpretation::create([
            'dimension_id' => $dimension->id,
            'level' => 'high',
            'interpretation_text_ar' => 'أداء متميز في البعد التجريبي',
            'high_threshold' => 8,
            'low_threshold' => 4,
        ]);
        DimensionInterpretation::create([
            'dimension_id' => $dimension->id,
            'level' => 'medium',
            'interpretation_text_ar' => 'أداء متوسط في البعد التجريبي',
            'high_threshold' => 8,
            'low_threshold' => 4,
        ]);
        DimensionInterpretation::create([
            'dimension_id' => $dimension->id,
            'level' => 'low',
            'interpretation_text_ar' => 'أداء ضعيف في البعد التجريبي',
            'high_threshold' => 8,
            'low_threshold' => 4,
        ]);

        // Create question
        $question = Question::create([
            'assessment_id' => $this->assessment->id,
            'dimension_id' => $dimension->id,
            'text_ar' => 'سؤال البعد؟',
            'order_index' => 0,
        ]);

        // Create answer options
        $opt = AnswerOption::create([
            'question_id' => $question->id,
            'label_ar' => 'نعم',
            'score_value' => 9, // earning 9 score which is >= high_threshold (8)
            'order_index' => 0,
        ]);

        // Create exam session
        $session = ExamSession::create([
            'user_id' => $user->id,
            'assessment_id' => $this->assessment->id,
            'status' => 'in_progress',
            'started_at' => now(),
        ]);

        // Submit answer
        UserAnswer::create([
            'session_id' => $session->id,
            'question_id' => $question->id,
            'selected_option_id' => $opt->id,
            'score_earned' => 9,
        ]);

        // Calculate score
        $service = resolve(ExamResultService::class);
        $result = $service->calculate($session);

        $this->assertEquals('high', $result->dimensionScores->first()->level);

        $response = $this->actingAs($user)
            ->get(route('exam.result', $session->id));

        $response->assertStatus(200);
        $response->assertSee('أداء متميز في البعد التجريبي');
    }

    public function test_admin_can_create_assessment_without_dimensions(): void
    {
        $payload = [
            'title_ar' => 'مقياس بدون أبعاد',
            'category' => 'الفئة العامة',
            'description_ar' => 'وصف مقياس بدون أبعاد',
            'time_limit_min' => 15,
            'dimensions' => [], // Empty array
        ];

        $response = $this->actingAs($this->admin)
            ->post(route('admin.assessments.store'), $payload);

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);

        $this->assertDatabaseHas('assessments', [
            'title_ar' => 'مقياس بدون أبعاد',
            'category' => 'الفئة العامة',
        ]);

        $assessment = Assessment::where('title_ar', 'مقياس بدون أبعاد')->first();
        $this->assertTrue($assessment->dimensions->isEmpty());
    }
}
