<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class GradedExamUserAnswerOption extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_answer_id', 'option_id',
    ];

    public function userAnswer()
    {
        return $this->belongsTo(GradedExamUserAnswer::class, 'user_answer_id');
    }

    public function option()
    {
        return $this->belongsTo(GradedExamOption::class, 'option_id');
    }
}
