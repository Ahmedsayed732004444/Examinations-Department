<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class GradedExamSessionQuestion extends Model
{
    use HasUuids;

    protected $fillable = [
        'session_id', 'question_id', 'position_in_exam', 'shuffled_options_order',
    ];

    protected $casts = [
        'position_in_exam' => 'integer',
        'shuffled_options_order' => 'array',
    ];

    public function session()
    {
        return $this->belongsTo(GradedExamSession::class, 'session_id');
    }

    public function question()
    {
        return $this->belongsTo(GradedExamQuestion::class, 'question_id');
    }
}
