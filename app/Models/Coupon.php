<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use HasFactory, SoftDeletes;

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

    public function delete()
    {
        return DB::transaction(fn () => parent::delete());
    }

    public function restore()
    {
        if ($this->code) {
            $pattern = '/_deleted_\d+$/';
            $originalCode = preg_replace($pattern, '', $this->code);

            if (static::where('code', $originalCode)->whereNull('deleted_at')->where('id', '!=', $this->id)->exists()) {
                throw new \Exception('لا يمكن استرجاع الكوبون لوجود كوبون نشط آخر بنفس الكود.');
            }
        }

        return DB::transaction(fn () => parent::restore());
    }

    public static function bulkSoftDelete(array $ids): void
    {
        DB::transaction(function () use ($ids) {
            static::whereIn('id', $ids)->get()->each->delete();
        });
    }

    protected static function booted(): void
    {
        static::deleting(function (Coupon $coupon) {
            if (!$coupon->isForceDeleting()) {
                $timestamp = now()->timestamp;
                if ($coupon->code) {
                    $coupon->code = $coupon->code . '_deleted_' . $timestamp;
                    $coupon->saveQuietly();
                }
            }
        });

        static::restoring(function (Coupon $coupon) {
            if ($coupon->code) {
                $pattern = '/_deleted_\d+$/';
                $coupon->code = preg_replace($pattern, '', $coupon->code);
                $coupon->saveQuietly();
            }
        });
    }

    public function getDisplayCodeAttribute(): ?string
    {
        return $this->code ? preg_replace('/_deleted_\d+$/', '', $this->code) : null;
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('used_count')->withTimestamps();
    }

    public function assessments(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Assessment::class, 'coupon_assessment');
    }

    public function permittedUsers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'coupon_permitted_user');
    }
}
