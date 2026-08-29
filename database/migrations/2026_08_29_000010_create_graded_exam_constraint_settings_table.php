<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// إعدادات قابلة للتعديل من لوحة تحكم الأدمن (Runtime settings).
// علاقة 1:1 مع graded_exams. القيم الوصفية/الإحصائية (مثل عدد الأسئلة
// الصعبة المتاحة فعليًا في البنك) تُحسب Live من graded_exam_questions
// وقت التحقق، ولا تُخزَّن هنا أبدًا حتى لا تصبح قديمة (stale).
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('graded_exam_constraint_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('graded_exam_id')->unique();

            // === القيم اللي الأدمن هيتحكم فيها من الداشبورد ===
            $table->integer('total_questions')->default(50);
            $table->decimal('easy_percentage', 5, 2)->default(50.00);
            $table->decimal('medium_percentage', 5, 2)->default(40.00);
            $table->decimal('hard_percentage', 5, 2)->default(10.00);

            // === إعدادات إضافية (اختيارية دلوقتي، جاهزة للمستقبل) ===
            $table->enum('type_distribution_mode', ['proportional', 'balanced'])->default('proportional');
            $table->enum('mc_position_balance_mode', ['mirror_bank_bias', 'forced_balanced'])->default('forced_balanced');
            $table->integer('max_multi_correct_questions')->default(3);
            $table->integer('max_consecutive_same_answer')->default(3);
            $table->integer('max_consecutive_same_unit')->default(2);

            // مساحة مرنة لأي إعداد مستقبلي تاني من غير ما تحتاج migration جديدة كل مرة
            $table->json('advanced_settings')->nullable();

            $table->uuid('updated_by')->nullable();
            $table->timestamps();

            // القيمة دي بتتفحص في التطبيق (FormRequest) لكن نضيفها هنا للتوثيق:
            // easy_percentage + medium_percentage + hard_percentage يجب أن يساوي 100
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('graded_exam_constraint_settings');
    }
};
