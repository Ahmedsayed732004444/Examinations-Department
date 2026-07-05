<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasUuids, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role', 'national_id', 'phone'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'role' => 'string',
        'password' => 'hashed',
    ];

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function examSessions()
    {
        return $this->hasMany(ExamSession::class);
    }

    public function createdAssessments()
    {
        return $this->hasMany(Assessment::class, 'created_by');
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class)->withPivot('used_count')->withTimestamps();
    }

    public function permittedCoupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_permitted_user');
    }
}
