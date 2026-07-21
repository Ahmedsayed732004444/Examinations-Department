<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
use App\Models\User;

class CouponService
{
    /**
     * Validates a coupon code for a specific user and assessment.
     * Returns an array with validation status, message, and pricing details.
     */
    public function validateCouponForUser(string $code, Assessment $assessment, User $user): array
    {
        $coupon = Coupon::where('code', $code)
            ->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>=', now()->toDateString());
            })
            ->first();

        if (!$coupon) {
            return ['valid' => false, 'message' => 'الكوبون غير صالح أو منتهي الصلاحية.'];
        }

        // Check assessment scope
        if (!$coupon->applies_to_all_assessments) {
            $appliesToAssessment = $coupon->assessments()->where('assessment_id', $assessment->id)->exists();
            if (!$appliesToAssessment) {
                return ['valid' => false, 'message' => 'هذا الكوبون لا ينطبق على هذا المقياس.'];
            }
        }

        // Check user scope
        if (!$coupon->applies_to_all_users) {
            $appliesToUser = $coupon->permittedUsers()->where('user_id', $user->id)->exists();
            if (!$appliesToUser) {
                return ['valid' => false, 'message' => 'هذا الكوبون مخصص لمستخدمين محددين فقط وليس لحسابك.'];
            }
        }

        $resolved = $this->resolveDiscount($coupon, $user);

        if ($resolved['exhausted']) {
            return ['valid' => false, 'message' => 'لقد استنفدت جميع فرص الاستخدام لهذا الكوبون.'];
        }

        if ($resolved['discount'] === null) {
            return ['valid' => false, 'message' => 'لا يوجد خصم متاح لك على هذا الكوبون في هذه المرحلة.'];
        }

        $price = (float) ($assessment->price ?? 0);
        $discountAmount = round($price * $resolved['discount'] / 100, 2);
        $finalPrice = max(0, $price - $discountAmount);

        return [
            'valid' => true,
            'coupon' => $coupon,
            'discount' => $resolved['discount'],
            'price' => $price,
            'discount_amount' => $discountAmount,
            'final_price' => $finalPrice,
            'is_free' => $finalPrice <= 0,
            'usage_number' => $resolved['total_used'] + 1,
            'message' => "الكوبون صالح! خصم {$resolved['discount']}% سيُطبق.",
        ];
    }

    /**
     * Records the usage of a coupon for a specific user.
     */
    public function recordUsage(Coupon $coupon, string $userId): void
    {
        $pivot = $coupon->users()->where('user_id', $userId)->first();
        if ($pivot) {
            $coupon->users()->updateExistingPivot($userId, ['used_count' => $pivot->pivot->used_count + 1]);
        } else {
            $coupon->users()->attach($userId, ['used_count' => 1]);
        }
    }

    /**
     * Resolve the actual discount percentage a user should get for a given coupon.
     * Checks usage across all identities (email, phone, national_id) to prevent fraud.
     */
    private function resolveDiscount(Coupon $coupon, User $user): array
    {
        $totalUsed = $this->countLinkedUsage($coupon, $user);

        $discount = null;
        if ($totalUsed === 0) {
            $discount = $coupon->discount_percentage;
        } elseif ($totalUsed === 1 && $coupon->discount_percentage_2nd !== null) {
            $discount = $coupon->discount_percentage_2nd;
        } elseif ($totalUsed === 2 && $coupon->discount_percentage_3rd !== null) {
            $discount = $coupon->discount_percentage_3rd;
        } elseif ($totalUsed === 3 && $coupon->discount_percentage_4th !== null) {
            $discount = $coupon->discount_percentage_4th;
        } elseif ($totalUsed === 4 && $coupon->discount_percentage_5th !== null) {
            $discount = $coupon->discount_percentage_5th;
        } elseif ($totalUsed === 5 && $coupon->discount_percentage_6th !== null) {
            $discount = $coupon->discount_percentage_6th;
        } elseif ($totalUsed === 6 && $coupon->discount_percentage_7th !== null) {
            $discount = $coupon->discount_percentage_7th;
        } elseif ($totalUsed === 7 && $coupon->discount_percentage_8th !== null) {
            $discount = $coupon->discount_percentage_8th;
        } elseif ($totalUsed === 8 && $coupon->discount_percentage_9th !== null) {
            $discount = $coupon->discount_percentage_9th;
        } elseif ($totalUsed === 9 && $coupon->discount_percentage_10th !== null) {
            $discount = $coupon->discount_percentage_10th;
        }

        // Fallback to base discount percentage if specific tier is not defined
        if ($discount === null) {
            $discount = $coupon->discount_percentage;
        }

        $exhausted = ($coupon->assessments_limit !== null) && ($totalUsed >= $coupon->assessments_limit);

        return [
            'total_used' => $totalUsed,
            'discount' => $discount,
            'exhausted' => $exhausted,
        ];
    }

    /**
     * Count exam sessions using this coupon across all users sharing
     * the same national_id, phone, or email as the requesting user.
     */
    private function countLinkedUsage(Coupon $coupon, User $user): int
    {
        $linkedUserIds = User::where(function ($q) use ($user) {
            $q->where('email', $user->email);
            if ($user->name) {
                $q->orWhere('name', $user->name);
            }
            if ($user->national_id) {
                $q->orWhere('national_id', $user->national_id);
            }
            if ($user->phone) {
                $q->orWhere('phone', $user->phone);
            }
        })->pluck('id');

        return ExamSession::whereIn('user_id', $linkedUserIds)
            ->where('coupon_id', $coupon->id)
            ->count();
    }
}
