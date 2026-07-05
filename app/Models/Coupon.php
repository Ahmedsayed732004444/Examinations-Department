<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
        'assessments_limit',
        'expires_at',
        'is_active',
        'discount_percentage',
        'discount_percentage_2nd',
        'discount_percentage_3rd',
        'discount_percentage_4th',
        'discount_percentage_5th',
        'discount_percentage_6th',
        'discount_percentage_7th',
        'discount_percentage_8th',
        'discount_percentage_9th',
        'discount_percentage_10th',
        'applies_to_all_assessments',
        'applies_to_all_users',
    ];

    protected $casts = [
        'expires_at' => 'date',
        'is_active' => 'boolean',
        'applies_to_all_assessments' => 'boolean',
        'applies_to_all_users' => 'boolean',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('used_count')->withTimestamps();
    }

    public function assessments()
    {
        return $this->belongsToMany(Assessment::class, 'coupon_assessment');
    }

    public function permittedUsers()
    {
        return $this->belongsToMany(User::class, 'coupon_permitted_user');
    }
}
