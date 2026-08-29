<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $user_id
 * @property string $status
 * @property string $graded_exam_id
 * @property \App\Models\GradedExam $gradedExam
 * @property \Illuminate\Database\Eloquent\Collection $sessionQuestions
 * @method void load(array|string $relations)
 * @method bool update(array $attributes = [], array $options = [])
 */
class GradedExamSession extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'user_id', 'graded_exam_id', 'status', 'total_questions',
        'constraints_snapshot', 'random_seed', 'started_at', 'completed_at',
    ];

    protected $casts = [
        'total_questions' => 'integer',
        'constraints_snapshot' => 'array',
        'random_seed' => 'integer',
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gradedExam()
    {
        return $this->belongsTo(GradedExam::class);
    }

    public function sessionQuestions()
    {
        return $this->hasMany(GradedExamSessionQuestion::class, 'session_id')->orderBy('position_in_exam');
    }

    public function userAnswers()
    {
        return $this->hasMany(GradedExamUserAnswer::class, 'session_id');
    }

    public function result()
    {
        return $this->hasOne(GradedExamResult::class, 'session_id');
    }
}
