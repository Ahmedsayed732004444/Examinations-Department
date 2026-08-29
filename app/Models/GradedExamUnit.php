<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradedExamUnit extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'graded_exam_id', 'unit_number', 'title_ar', 'order_index',
    ];

    protected $casts = [
        'unit_number' => 'integer',
        'order_index' => 'integer',
    ];

    public function gradedExam()
    {
        return $this->belongsTo(GradedExam::class);
    }

    public function questions()
    {
        return $this->hasMany(GradedExamQuestion::class, 'unit_id')->orderBy('order_index');
    }
}
