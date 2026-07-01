<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserDashboardService
{
    /**
     * Build all data needed for the user dashboard in an optimised way.
     *
     * @return array<string, mixed>
     */
    public function getData(User $user): array
    {
        // 1. Cache Assessments (Global)
        $assessmentsMax = Assessment::max('updated_at') ?? 'none';
        $assessmentsCount = Assessment::count();
        $assessmentsKey = "active_assessments_{$assessmentsMax}_{$assessmentsCount}";
        $assessments = Cache::remember($assessmentsKey, 3600, function () {
            return Assessment::where('is_active', true)
                ->withCount('questions')
                ->orderBy('category')
                ->orderBy('title_ar')
                ->get();
        });

        // 2. Cache Active Coupons (Global)
        $couponsMax = Coupon::max('updated_at') ?? 'none';
        $couponsCount = Coupon::count();
        $couponsKey = "active_coupons_{$couponsMax}_{$couponsCount}";
        $activeCoupons = Cache::remember($couponsKey, 3600, function () {
            return Coupon::where('is_active', true)
                ->where(function ($query) {
                    $query->whereNull('expires_at')
                        ->orWhere('expires_at', '>=', now()->toDateString());
                })->get();
        });

        // 3. Cache User Sessions & Progress Map (User-specific)
        $sessionsMax = $user->examSessions()->max('updated_at') ?? 'none';
        $sessionsCount = $user->examSessions()->count();
        $sessionsKey = "user_sessions_{$user->id}_{$sessionsMax}_{$sessionsCount}";

        $userSessions = Cache::remember($sessionsKey, 3600, function () use ($user) {
            return $user->examSessions()
                ->with(['assessment', 'result'])
                ->orderByDesc('updated_at')
                ->get();
        });

        $progressKey = "user_progress_{$user->id}_{$sessionsMax}_{$sessionsCount}";
        $progressMap = Cache::remember($progressKey, 3600, function () use ($user) {
            $progressRows = DB::table('exam_sessions')
                ->where('user_id', $user->id)
                ->select([
                    'assessment_id',
                    DB::raw('COUNT(*) as total'),
                    DB::raw("SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed"),
                ])
                ->groupBy('assessment_id')
                ->get();

            $map = [];
            foreach ($progressRows as $row) {
                $map[$row->assessment_id] = [
                    'completed' => (int) $row->completed,
                    'total' => (int) $row->total,
                ];
            }

            return $map;
        });

        // 4. Load My Coupons (No need to cache as it's a very light query and pivot updates are tricky to track globally)
        $myCoupons = $user->coupons()->get();

        return compact('assessments', 'userSessions', 'progressMap', 'activeCoupons', 'myCoupons');
    }
}
