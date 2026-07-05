<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ExamSession extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id', 'assessment_id', 'status', 'started_at', 'completed_at', 'coupon_id', 'discount_applied',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class, 'session_id');
    }

    public function result()
    {
        return $this->hasOne(Result::class, 'session_id');
    }
}
