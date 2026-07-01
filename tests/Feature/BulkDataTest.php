<?php

namespace Tests\Feature;

use App\Models\Assessment;
use App\Models\Dimension;
use App\Models\ExamSession;
use App\Models\Result;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class BulkDataTest extends TestCase
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

        // Create assessment
        $this->assessment = Assessment::create([
            'title_ar' => 'مقياس تجريبي للدمج',
            'category' => 'مجال تجريبي',
            'description_ar' => 'وصف تجريبي',
            'time_limit_min' => 30,
            'is_active' => true,
            'created_by' => $this->admin->id,
        ]);
    }

    public function test_admin_can_download_question_csv_template(): void
    {
        $response = $this->actingAs($this->admin)
            ->get(route('admin.questions.template'));

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/csv; charset=UTF-8');
        $response->assertHeader('Content-Disposition', 'attachment; filename=questions_import_template.csv');

        $content = $response->streamedContent();
        $this->assertStringContainsString('اسم البعد', $content);
        $this->assertStringContainsString('نص السؤال', $content);
        $this->assertStringContainsString('معكوس', $content);
    }

    public function test_admin_can_import_questions_from_csv_file(): void
    {
        // Construct a sample CSV file contents
        $csvContent = "\xEF\xBB\xBF"; // BOM
        $csvContent .= "اسم البعد,نص السؤال,معكوس,الخيارات\n";
        $csvContent .= "البعد المستورد 1,السؤال المستورد الأول؟,0,نعم:2|لا:0\n";
        $csvContent .= "البعد المستورد 1,السؤال المستورد الثاني (معكوس)؟,1,\n";
        $csvContent .= ",سؤال عام بدون بعد؟,0,نعم:1|إلى حد ما:0\n";

        $tempFile = tempnam(sys_get_temp_dir(), 'csv');
        file_put_contents($tempFile, $csvContent);

        $uploadedFile = new UploadedFile(
            $tempFile,
            'questions_import.csv',
            'text/csv',
            null,
            true
        );

        $response = $this->actingAs($this->admin)
            ->post(route('admin.questions.importCsv', $this->assessment->id), [
                'csv_file' => $uploadedFile,
            ]);

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);

        // Assert dimensions were created
        $this->assertDatabaseHas('dimensions', [
            'assessment_id' => $this->assessment->id,
            'name_ar' => 'البعد المستورد 1',
        ]);

        $dimension = Dimension::where('name_ar', 'البعد المستورد 1')->first();

        // Assert questions were created
        $this->assertDatabaseHas('questions', [
            'assessment_id' => $this->assessment->id,
            'dimension_id' => $dimension->id,
            'text_ar' => 'السؤال المستورد الأول؟',
            'is_reversed' => false,
        ]);

        $this->assertDatabaseHas('questions', [
            'assessment_id' => $this->assessment->id,
            'dimension_id' => $dimension->id,
            'text_ar' => 'السؤال المستورد الثاني (معكوس)؟',
            'is_reversed' => true,
        ]);

        $this->assertDatabaseHas('questions', [
            'assessment_id' => $this->assessment->id,
            'dimension_id' => null,
            'text_ar' => 'سؤال عام بدون بعد؟',
            'is_reversed' => false,
        ]);

        unlink($tempFile);
    }

    public function test_admin_can_export_exam_results_csv(): void
    {
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        $session = ExamSession::create([
            'user_id' => $user->id,
            'assessment_id' => $this->assessment->id,
            'status' => 'completed',
            'started_at' => now()->subHour(),
            'completed_at' => now(),
        ]);

        Result::create([
            'session_id' => $session->id,
            'total_score' => 12,
            'max_possible_score' => 20,
            'level' => 'medium',
            'calculated_at' => now(),
        ]);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.statistics.exportCsv'));

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/csv; charset=UTF-8');
        $response->assertHeader('Content-Disposition', 'attachment; filename=exam_results_export.csv');

        $content = $response->streamedContent();
        $this->assertStringContainsString('معرف الجلسة', $content);
        $this->assertStringContainsString('اسم المستخدم', $content);
        $this->assertStringContainsString('Regular User', $content);
        $this->assertStringContainsString('user@alroaya.test', $content);
        $this->assertStringContainsString('مقياس تجريبي للدمج', $content);
    }
}
