<?php

namespace Tests\Feature;

use App\Models\Assessment;
use App\Models\ExamSession;
use App\Models\Result;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminUserManagementTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected User $user;

    protected Assessment $assessment;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $this->user = User::create([
            'name' => 'Regular User',
            'email' => 'user@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        $this->assessment = Assessment::create([
            'title_ar' => 'مقياس تجريبي للمستخدمين',
            'category' => 'مجال تجريبي',
            'description_ar' => 'وصف تجريبي',
            'time_limit_min' => 30,
            'is_active' => true,
            'created_by' => $this->admin->id,
        ]);
    }

    public function test_admin_can_access_users_management_page(): void
    {
        $response = $this->actingAs($this->admin)
            ->get(route('admin.users.index'));

        $response->assertStatus(200);
        $response->assertSee('إدارة المستخدمين وجلسات الاختبار');
        $response->assertSee('Regular User');
        $response->assertSee('user@alroaya.test');
    }

    public function test_non_admin_cannot_access_users_management_page(): void
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.users.index'));

        $response->assertStatus(403);
    }

    public function test_admin_can_search_users(): void
    {
        $response = $this->actingAs($this->admin)
            ->get(route('admin.users.index', ['search' => 'Regular']));

        $response->assertStatus(200);
        $response->assertSee('Regular User');
        $response->assertDontSee('admin@alroaya.test'); // Since admin doesn't match "Regular"
    }

    public function test_admin_can_get_user_results_json(): void
    {
        $session = ExamSession::create([
            'user_id' => $this->user->id,
            'assessment_id' => $this->assessment->id,
            'status' => 'completed',
            'started_at' => now()->subHour(),
            'completed_at' => now(),
        ]);

        Result::create([
            'session_id' => $session->id,
            'total_score' => 15,
            'max_possible_score' => 20,
            'level' => 'high',
            'calculated_at' => now(),
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.users.results', $this->user->id));

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);
        $response->assertJsonPath('user.name', 'Regular User');
        $response->assertJsonPath('results.0.total_score', 15);
        $response->assertJsonPath('results.0.level', 'مرتفع');
    }

    public function test_admin_can_view_other_user_result_page(): void
    {
        $session = ExamSession::create([
            'user_id' => $this->user->id,
            'assessment_id' => $this->assessment->id,
            'status' => 'completed',
            'started_at' => now()->subHour(),
            'completed_at' => now(),
        ]);

        Result::create([
            'session_id' => $session->id,
            'total_score' => 15,
            'max_possible_score' => 20,
            'level' => 'high',
            'calculated_at' => now(),
        ]);

        // Access via Admin (should succeed due to authorized admin access)
        $response = $this->actingAs($this->admin)
            ->get(route('exam.result', $session->id));

        $response->assertStatus(200);
        $response->assertSee('نتيجة الاختبار');
    }

    public function test_user_cannot_view_other_user_result_page(): void
    {
        $otherUser = User::create([
            'name' => 'Other User',
            'email' => 'other@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        $session = ExamSession::create([
            'user_id' => $otherUser->id,
            'assessment_id' => $this->assessment->id,
            'status' => 'completed',
            'started_at' => now()->subHour(),
            'completed_at' => now(),
        ]);

        Result::create([
            'session_id' => $session->id,
            'total_score' => 15,
            'max_possible_score' => 20,
            'level' => 'high',
            'calculated_at' => now(),
        ]);

        // Regular user accessing other user's session should get 403
        $response = $this->actingAs($this->user)
            ->get(route('exam.result', $session->id));

        $response->assertStatus(403);
    }
}
