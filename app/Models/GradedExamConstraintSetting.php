<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class GradedExamConstraintSetting extends Model
{
    use HasUuids;

    protected $fillable = [
        'graded_exam_id', 'total_questions', 'easy_percentage', 'medium_percentage',
        'hard_percentage', 'type_distribution_mode', 'mc_position_balance_mode',
        'max_multi_correct_questions', 'max_consecutive_same_answer',
        'max_consecutive_same_unit', 'advanced_settings', 'updated_by',
    ];

    protected $casts = [
        'total_questions' => 'integer',
        'easy_percentage' => 'decimal:2',
        'medium_percentage' => 'decimal:2',
        'hard_percentage' => 'decimal:2',
        'max_multi_correct_questions' => 'integer',
        'max_consecutive_same_answer' => 'integer',
        'max_consecutive_same_unit' => 'integer',
        'advanced_settings' => 'array',
    ];

    public function gradedExam()
    {
        return $this->belongsTo(GradedExam::class);
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * عدد الأسئلة المطلوب فعليًا لكل مستوى، محسوب من النسب الحالية.
     */
    public function targetCounts(): array
    {
        return [
            'easy'   => (int) round($this->total_questions * $this->easy_percentage / 100),
            'medium' => (int) round($this->total_questions * $this->medium_percentage / 100),
            'hard'   => (int) round($this->total_questions * $this->hard_percentage / 100),
        ];
    }

    /**
     * تحقق Live من إن النسب المطلوبة أصلاً ممكنة فعليًا بناءً على
     * المخزون الحالي لبنك الأسئلة (مش من ملف تابت) — يُستدعى وقت
     * حفظ الأدمن للإعدادات عشان يمنعه يحط نسبة مستحيلة.
     */
    public function isFeasible(): array
    {
        $targets = $this->targetCounts();
        $errors = [];

        $available = [
            'easy'   => GradedExamQuestion::where('graded_exam_id', $this->graded_exam_id)->easy()->count(),
            'medium' => GradedExamQuestion::where('graded_exam_id', $this->graded_exam_id)->medium()->count(),
            'hard'   => GradedExamQuestion::where('graded_exam_id', $this->graded_exam_id)->hard()->count(),
        ];

        foreach ($targets as $level => $needed) {
            if ($needed > $available[$level]) {
                $errors[] = "المطلوب {$needed} سؤال مستوى '{$level}' لكن المتاح فعليًا في البنك {$available[$level]} فقط.";
            }
        }

        if (abs(($this->easy_percentage + $this->medium_percentage + $this->hard_percentage) - 100) > 0.01) {
            $errors[] = 'مجموع النسب الثلاثة يجب أن يساوي 100%.';
        }

        return [
            'feasible' => empty($errors),
            'errors' => $errors,
            'target_counts' => $targets,
            'available_counts' => $available,
        ];
    }
}
