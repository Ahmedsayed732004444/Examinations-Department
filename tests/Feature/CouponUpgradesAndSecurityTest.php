<?php

namespace Tests\Feature;

use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CouponUpgradesAndSecurityTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;
    protected User $admin;
    protected Assessment $assessment1;
    protected Assessment $assessment2;

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
            'name' => 'محمد أحمد',
            'email' => 'user@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
            'national_id' => '1111111111',
            'phone' => '0511111111',
        ]);

        $this->assessment1 = Assessment::create([
            'title_ar' => 'المقياس الأول',
            'category' => 'الفئة الأولى',
            'description_ar' => 'وصف تجريبي للمقياس الأول',
            'time_limit_min' => 30,
            'price' => 100.0,
            'is_active' => true,
            'created_by' => $this->admin->id,
        ]);
        $this->assessment1->refresh();

        $this->assessment2 = Assessment::create([
            'title_ar' => 'المقياس الثاني',
            'category' => 'الفئة الثانية',
            'description_ar' => 'وصف تجريبي للمقياس الثاني',
            'time_limit_min' => 30,
            'price' => 200.0,
            'is_active' => true,
            'created_by' => $this->admin->id,
        ]);
        $this->assessment2->refresh();
    }

    public function test_validate_coupon_works_for_valid_all_assessments_coupon(): void
    {
        $coupon = Coupon::create([
            'title' => 'خصم عام 100%',
            'code' => 'GENERAL100',
            'discount_percentage' => 100,
            'assessments_limit' => 2,
            'is_active' => true,
            'applies_to_all_assessments' => true,
        ]);

        $response = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'GENERAL100',
                'assessment_id' => $this->assessment1->id,
            ]);

        $response->assertStatus(200);
        $response->assertJson([
            'valid' => true,
            'discount' => 100,
            'price' => 100.0,
            'discount_amount' => 100.0,
            'final_price' => 0.0,
            'is_free' => true,
            'usage_number' => 1,
        ]);
    }

    public function test_validate_coupon_restricts_specific_assessments(): void
    {
        $coupon = Coupon::create([
            'title' => 'كوبون خاص بالمقياس الأول',
            'code' => 'ONLY_FIRST',
            'discount_percentage' => 50,
            'assessments_limit' => 1,
            'is_active' => true,
            'applies_to_all_assessments' => false,
        ]);
        $coupon->assessments()->attach($this->assessment1->id);

        // Try on assessment1 (should succeed)
        $response1 = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'ONLY_FIRST',
                'assessment_id' => $this->assessment1->id,
            ]);
        $response1->assertStatus(200);
        $response1->assertJsonPath('valid', true);
        $response1->assertJsonPath('discount', 50);

        // Try on assessment2 (should fail)
        $response2 = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'ONLY_FIRST',
                'assessment_id' => $this->assessment2->id,
            ]);
        $response2->assertStatus(422);
        $response2->assertJsonPath('valid', false);
    }

    public function test_tiered_coupon_discounts_increment_per_use(): void
    {
        $coupon = Coupon::create([
            'title' => 'كوبون متدرج',
            'code' => 'TIERED_COUPON',
            'discount_percentage' => 100,
            'discount_percentage_2nd' => 50,
            'discount_percentage_3rd' => 10,
            'assessments_limit' => 3,
            'is_active' => true,
            'applies_to_all_assessments' => true,
        ]);

        // First validation: should be 100%
        $response1 = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'TIERED_COUPON',
                'assessment_id' => $this->assessment1->id,
            ]);
        $response1->assertStatus(200);
        $response1->assertJsonPath('discount', 100);
        $response1->assertJsonPath('usage_number', 1);

        // Start exam with the coupon to record usage
        $responseStart = $this->actingAs($this->user)
            ->post(route('exam.start', $this->assessment1->id), [
                'coupon_code' => 'TIERED_COUPON'
            ]);
        $responseStart->assertRedirect();

        // Second validation: should be 50%
        $response2 = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'TIERED_COUPON',
                'assessment_id' => $this->assessment2->id,
            ]);
        $response2->assertStatus(200);
        $response2->assertJsonPath('discount', 50);
        $response2->assertJsonPath('usage_number', 2);

        // Start second exam with the coupon
        $this->actingAs($this->user)
            ->post(route('exam.start', $this->assessment2->id), [
                'coupon_code' => 'TIERED_COUPON'
            ]);

        // Third validation: should be 10%
        $response3 = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'TIERED_COUPON',
                'assessment_id' => $this->assessment2->id,
            ]);
        $response3->assertStatus(200);
        $response3->assertJsonPath('discount', 10);
        $response3->assertJsonPath('usage_number', 3);
    }

    public function test_coupon_usage_limits_are_enforced(): void
    {
        $coupon = Coupon::create([
            'title' => 'كوبون لمرة واحدة',
            'code' => 'ONCE',
            'discount_percentage' => 100,
            'assessments_limit' => 1,
            'is_active' => true,
            'applies_to_all_assessments' => true,
        ]);

        // Use it once
        $this->actingAs($this->user)
            ->post(route('exam.start', $this->assessment1->id), [
                'coupon_code' => 'ONCE'
            ]);

        // Validate again: should fail because limit is exhausted
        $response = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'ONCE',
                'assessment_id' => $this->assessment2->id,
            ]);

        $response->assertStatus(422);
        $response->assertJsonPath('valid', false);
        $response->assertJsonPath('message', 'لقد استنفدت جميع فرص الاستخدام لهذا الكوبون.');
    }

    public function test_anti_fraud_cross_identity_restrictions(): void
    {
        $coupon = Coupon::create([
            'title' => 'كوبون محمي',
            'code' => 'SECURE',
            'discount_percentage' => 100,
            'assessments_limit' => 1,
            'is_active' => true,
            'applies_to_all_assessments' => true,
        ]);

        // First user uses the coupon once
        $this->actingAs($this->user)
            ->post(route('exam.start', $this->assessment1->id), [
                'coupon_code' => 'SECURE'
            ]);

        // Create a new user with the SAME NAME (representing cross-identity fraud attempt)
        $fraudUser = User::create([
            'name' => 'محمد أحمد', // Same name as $this->user
            'email' => 'fraud@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
            'national_id' => '2222222222', // Unique
            'phone' => '0522222222',       // Unique
        ]);

        // Validate for fraudUser: should be rejected
        $response = $this->actingAs($fraudUser)
            ->postJson(route('coupon.validate'), [
                'code' => 'SECURE',
                'assessment_id' => $this->assessment2->id,
            ]);

        $response->assertStatus(422);
        $response->assertJsonPath('valid', false);
        $response->assertJsonPath('message', 'لقد استنفدت جميع فرص الاستخدام لهذا الكوبون.');
    }

    public function test_hide_coupon_field_setting_toggles_correctly(): void
    {
        // Assert default
        $this->assertFalse($this->assessment1->hide_coupon_field);

        // Update setting to true
        $payload = [
            'title_ar' => $this->assessment1->title_ar,
            'category' => $this->assessment1->category,
            'description_ar' => $this->assessment1->description_ar,
            'time_limit_min' => $this->assessment1->time_limit_min,
            'scoring_type' => 'overall_score',
            'hide_coupon_field' => 1,
        ];

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.assessments.settings', $this->assessment1->id), $payload);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assessment1->refresh();
        $this->assertTrue($this->assessment1->hide_coupon_field);
    }
    public function test_validate_coupon_works_for_all_users_coupon(): void
    {
        $coupon = Coupon::create([
            'title' => 'خصم لجميع المستخدمين',
            'code' => 'ALL_USERS',
            'discount_percentage' => 100,
            'assessments_limit' => 1,
            'is_active' => true,
            'applies_to_all_assessments' => true,
            'applies_to_all_users' => true,
        ]);

        $response = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'ALL_USERS',
                'assessment_id' => $this->assessment1->id,
            ]);

        $response->assertStatus(200);
        $response->assertJsonPath('valid', true);
    }

    public function test_validate_coupon_restricts_specific_users(): void
    {
        $coupon = Coupon::create([
            'title' => 'كوبون مخصص',
            'code' => 'ONLY_USER',
            'discount_percentage' => 100,
            'assessments_limit' => 1,
            'is_active' => true,
            'applies_to_all_assessments' => true,
            'applies_to_all_users' => false,
        ]);

        // Attach $this->user to permitted users
        $coupon->permittedUsers()->attach($this->user->id);

        // Try with $this->user (should succeed)
        $response1 = $this->actingAs($this->user)
            ->postJson(route('coupon.validate'), [
                'code' => 'ONLY_USER',
                'assessment_id' => $this->assessment1->id,
            ]);
        $response1->assertStatus(200);
        $response1->assertJsonPath('valid', true);

        // Try with another user not attached (should fail)
        $otherUser = User::create([
            'name' => 'Other User',
            'email' => 'other@alroaya.test',
            'password' => bcrypt('password'),
            'role' => 'user',
            'national_id' => '3333333333',
            'phone' => '0533333333',
        ]);

        $response2 = $this->actingAs($otherUser)
            ->postJson(route('coupon.validate'), [
                'code' => 'ONLY_USER',
                'assessment_id' => $this->assessment1->id,
            ]);
        $response2->assertStatus(422);
        $response2->assertJsonPath('valid', false);
        $response2->assertJsonPath('message', 'هذا الكوبون مخصص لمستخدمين محددين فقط وليس لحسابك.');
    }
}
