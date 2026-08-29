<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradedExam extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'title_ar', 'description_ar', 'category', 'total_questions',
        'time_limit_min', 'is_active', 'created_by',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'total_questions' => 'integer',
        'time_limit_min' => 'integer',
    ];

    public function units()
    {
        return $this->hasMany(GradedExamUnit::class)->orderBy('order_index');
    }

    public function constraintSettings()
    {
    return $this->hasOne(GradedExamConstraintSetting::class);
    }
    public function questions()
    {
        return $this->hasMany(GradedExamQuestion::class);
    }

    public function sessions()
    {
        return $this->hasMany(GradedExamSession::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
