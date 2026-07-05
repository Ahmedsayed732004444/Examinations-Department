<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasUuids;

    protected $fillable = [
        'title_ar',
        'subtitle_ar',
        'category',
        'scoring_type',
        'description_ar',
        'image_url',
        'time_limit_min',
        'is_active',
        'price',
        'rating',
        'rating_count',
        'created_by',
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
