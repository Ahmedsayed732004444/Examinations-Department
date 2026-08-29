<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradedExamQuestion extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'graded_exam_id', 'unit_id', 'original_number', 'level', 'question_type',
        'text_ar', 'explanation_ar', 'is_multi_correct', 'source_page_ref', 'order_index',
    ];

    protected $casts = [
        'original_number' => 'integer',
        'is_multi_correct' => 'boolean',
        'order_index' => 'integer',
    ];

    public function gradedExam(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(GradedExam::class);
    }

    public function unit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(GradedExamUnit::class, 'unit_id');
    }

    public function options(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(GradedExamOption::class, 'question_id')->orderBy('order_index');
    }

    public function correctOptions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(GradedExamOption::class, 'question_id')->where('is_correct', true);
    }

    public function userAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(GradedExamUserAnswer::class, 'question_id');
    }

    public function scopeEasy($query)
    {
        return $query->where('level', 'easy');
    }

    public function scopeMedium($query)
    {
        return $query->where('level', 'medium');
    }

    public function scopeHard($query)
    {
        return $query->where('level', 'hard');
    }

    public function scopeMcq($query)
    {
        return $query->where('question_type', 'mcq');
    }

    public function scopeTrueFalse($query)
    {
        return $query->where('question_type', 'true_false');
    }
}
