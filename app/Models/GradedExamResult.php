<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradedExamResult extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'session_id', 'correct_count', 'incorrect_count', 'total_questions',
        'percentage', 'pass_status', 'calculated_at',
    ];

    protected $casts = [
        'correct_count' => 'integer',
        'incorrect_count' => 'integer',
        'total_questions' => 'integer',
        'percentage' => 'decimal:2',
        'calculated_at' => 'datetime',
    ];

    public function session()
    {
        return $this->belongsTo(GradedExamSession::class, 'session_id');
    }
}
