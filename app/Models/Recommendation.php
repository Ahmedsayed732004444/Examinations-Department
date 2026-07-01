<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasUuids;

    protected $fillable = [
        'assessment_id', 'level', 'description_ar',
        'programs_ar', 'high_threshold', 'low_threshold',
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }
}
