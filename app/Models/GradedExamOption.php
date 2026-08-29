<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradedExamOption extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'question_id', 'option_label', 'option_text_ar', 'order_index', 'is_correct',
    ];

    protected $casts = [
        'order_index' => 'integer',
        'is_correct' => 'boolean',
    ];

    public function question()
    {
        return $this->belongsTo(GradedExamQuestion::class, 'question_id');
    }

    public function selectedByAnswers()
    {
        return $this->hasMany(GradedExamUserAnswerOption::class, 'option_id');
    }
}
