<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasUuids;

    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'category',
        'type',
        'time_limit_minutes',
        'is_active',
        'created_by',
        'image_url',
        'certificates_ar',
        'programs_ar',
        'plan_30_days_ar',
        'subtitle_ar',
        'scoring_type',
        'price',
        'rating',
        'rating_count',
        'hide_coupon_field',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'hide_coupon_field' => 'boolean',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_assessment');
    }

    public function dimensions()
    {
        return $this->hasMany(Dimension::class)->orderBy('order_index');
    }

    public function questions()
    {
        return $this->hasMany(Question::class)->orderBy('order_index');
    }

    public function examSessions()
    {
        return $this->hasMany(ExamSession::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }
}
