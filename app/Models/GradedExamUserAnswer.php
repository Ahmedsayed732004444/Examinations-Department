<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class GradedExamUserAnswer extends Model
{
    use HasUuids;

    protected $fillable = [
        'session_id', 'question_id', 'is_correct', 'points_earned', 'answered_at',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
        'answered_at' => 'datetime',
    ];

    public function session()
    {
        return $this->belongsTo(GradedExamSession::class, 'session_id');
    }

    public function question()
    {
        return $this->belongsTo(GradedExamQuestion::class, 'question_id');
    }

    // الخيار/الخيارات اللي المستخدم اختارها (يدعم أكتر من خيار للأسئلة متعددة الإجابات)
    public function selectedOptions()
    {
        return $this->hasMany(GradedExamUserAnswerOption::class, 'user_answer_id');
    }
}
