<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerQuestionRequest;
use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
use App\Models\User;
use App\Services\ExamService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExamController extends Controller
{
    public function __construct(
        private readonly ExamService $examService,
    ) {}

    /**
     * Resolve the actual discount percentage a user should get for a given coupon.
     * Checks usage across all identities (email, phone, national_id) to prevent fraud.
     */
    private function resolveDiscount(Coupon $coupon, User $user): array
    {
        // Count total real usages across all linked identities (anti-fraud check)
        $totalUsed = $this->countLinkedUsage($coupon, $user);

        // Determine which tier applies
        $discount = null;
        if ($totalUsed === 0) {
            $discount = $coupon->discount_percentage;        // 1st use
        } elseif ($totalUsed === 1 && $coupon->discount_percentage_2nd !== null) {
            $discount = $coupon->discount_percentage_2nd;    // 2nd use
        } elseif ($totalUsed === 2 && $coupon->discount_percentage_3rd !== null) {
            $discount = $coupon->discount_percentage_3rd;    // 3rd use
        }

        $exhausted = $totalUsed >= $coupon->assessments_limit;

        return [
            'total_used'  => $totalUsed,
            'discount'    => $discount,
            'exhausted'   => $exhausted,
        ];
    }

    /**
     * Count exam sessions using this coupon across all users sharing
     * the same national_id, phone, or email as the requesting user.
     */
    private function countLinkedUsage(Coupon $coupon, User $user): int
    {
        // Collect all user IDs that share any identity document
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

    /**
     * AJAX endpoint: validate a coupon code for a given assessment,
     * returning discount tier and pricing info.
     */
    public function validateCoupon(Request $request): JsonResponse
    {
        $request->validate([
            'code'          => 'required|string',
            'assessment_id' => 'required|exists:assessments,id',
        ]);

        $user       = auth()->user();
        $assessment = Assessment::findOrFail($request->assessment_id);

        $coupon = Coupon::where('code', $request->code)
            ->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>=', now()->toDateString());
            })
            ->first();

        if (!$coupon) {
            return response()->json(['valid' => false, 'message' => 'الكوبون غير صالح أو منتهي الصلاحية.'], 422);
        }

        // Check if coupon applies to this assessment
        if (!$coupon->applies_to_all_assessments) {
            $appliesToAssessment = $coupon->assessments()->where('assessment_id', $assessment->id)->exists();
            if (!$appliesToAssessment) {
                return response()->json(['valid' => false, 'message' => 'هذا الكوبون لا ينطبق على هذا المقياس.'], 422);
            }
        }

        // Check if coupon applies to this user
        if (!$coupon->applies_to_all_users) {
            $appliesToUser = $coupon->permittedUsers()->where('user_id', $user->id)->exists();
            if (!$appliesToUser) {
                return response()->json(['valid' => false, 'message' => 'هذا الكوبون مخصص لمستخدمين محددين فقط وليس لحسابك.'], 422);
            }
        }

        // Resolve discount tier (with anti-fraud cross-referencing)
        $resolved = $this->resolveDiscount($coupon, $user);

        if ($resolved['exhausted']) {
            return response()->json(['valid' => false, 'message' => 'لقد استنفدت جميع فرص الاستخدام لهذا الكوبون.'], 422);
        }

        if ($resolved['discount'] === null) {
            return response()->json(['valid' => false, 'message' => 'لا يوجد خصم متاح لك على هذا الكوبون في هذه المرحلة.'], 422);
        }

        $price            = (float) ($assessment->price ?? 0);
        $discountAmount   = round($price * $resolved['discount'] / 100, 2);
        $finalPrice       = max(0, $price - $discountAmount);

        return response()->json([
            'valid'            => true,
            'coupon_id'        => $coupon->id,
            'discount'         => $resolved['discount'],
            'price'            => $price,
            'discount_amount'  => $discountAmount,
            'final_price'      => $finalPrice,
            'is_free'          => $finalPrice <= 0,
            'usage_number'     => $resolved['total_used'] + 1,
            'message'          => "الكوبون صالح! خصم {$resolved['discount']}% سيُطبق.",
        ]);
    }

    public function start(Request $request, Assessment $assessment): RedirectResponse
    {
        $userId = auth()->id();
        $user   = auth()->user();

        // If user already has ANY session for this assessment, resume/restart for free
        $hasAnySession = ExamSession::where('user_id', $userId)
            ->where('assessment_id', $assessment->id)
            ->exists();

        $couponId        = null;
        $discountApplied = null;

        if (!$hasAnySession) {
            // New assessment — needs coupon or payment
            if (!$request->filled('coupon_code') && $assessment->price > 0) {
                return redirect()->back()->with('error', 'يجب الدفع أو استخدام كوبون للوصول إلى هذا المقياس.');
            }

            if ($request->filled('coupon_code')) {
                $coupon = Coupon::where('code', $request->coupon_code)
                    ->where('is_active', true)
                    ->where(function ($q) {
                        $q->whereNull('expires_at')
                          ->orWhere('expires_at', '>=', now()->toDateString());
                    })
                    ->first();

                if (!$coupon) {
                    return redirect()->back()->with('error', 'الكوبون المحدد غير صالح أو منتهي الصلاحية.');
                }

                // Validate assessment scope
                if (!$coupon->applies_to_all_assessments) {
                    if (!$coupon->assessments()->where('assessment_id', $assessment->id)->exists()) {
                        return redirect()->back()->with('error', 'هذا الكوبون لا ينطبق على هذا المقياس.');
                    }
                }

                // Validate user scope
                if (!$coupon->applies_to_all_users) {
                    if (!$coupon->permittedUsers()->where('user_id', $userId)->exists()) {
                        return redirect()->back()->with('error', 'هذا الكوبون مخصص لمستخدمين محددين فقط وليس لحسابك.');
                    }
                }

                // Resolve tier (anti-fraud)
                $resolved = $this->resolveDiscount($coupon, $user);

                if ($resolved['exhausted'] || $resolved['discount'] === null) {
                    return redirect()->back()->with('error', 'لقد استنفدت جميع فرص الاستخدام لهذا الكوبون.');
                }

                $couponId        = $coupon->id;
                $discountApplied = $resolved['discount'];

                // Record usage: increment or attach on the pivot table for this exact user
                $pivot = $coupon->users()->where('user_id', $userId)->first();
                if ($pivot) {
                    $coupon->users()->updateExistingPivot($userId, ['used_count' => $pivot->pivot->used_count + 1]);
                } else {
                    $coupon->users()->attach($userId, ['used_count' => 1]);
                }
            }
        }

        $result  = $this->examService->startOrResume($assessment, $userId);
        $session = $result['session'];

        // Store coupon info on session if this is a new session
        if ($couponId && !$result['resumed']) {
            $session->update([
                'coupon_id'        => $couponId,
                'discount_applied' => $discountApplied,
            ]);
        }

        if ($result['resumed']) {
            return redirect()->route('exam.show', $session->id)
                ->with('info', 'لديك جلسة اختبار قيد التقدم، يمكنك الاستمرار من حيث توقفت.');
        }

        return redirect()->route('exam.show', $session->id);
    }

    public function show(ExamSession $session): View|RedirectResponse
    {
        $this->authorizeSession($session);

        if ($session->status === 'completed') {
            return redirect()->route('exam.result', $session->id);
        }

        $data         = $this->examService->getSessionData($session);
        $nextQuestion = $data['nextQuestion'];

        if (!$nextQuestion) {
            $this->examService->getResult($session);
            return redirect()->route('exam.result', $session->id);
        }

        return view('user.exam', [
            'session'      => $session,
            'assessment'   => $data['assessment'],
            'nextQuestion' => $nextQuestion,
            'progress'     => $data['progress'],
        ]);
    }

    public function answer(AnswerQuestionRequest $request, ExamSession $session): JsonResponse
    {
        $this->authorizeSession($session);

        $result = $this->examService->submitAnswer(
            $session,
            $request->validated('question_id'),
            $request->validated('selected_option_id')
        );

        return response()->json(array_merge(['success' => true], $result));
    }

    public function previous(Request $request, ExamSession $session): JsonResponse
    {
        $this->authorizeSession($session);
        $result = $this->examService->previousQuestion($session);
        return response()->json($result);
    }

    public function result(ExamSession $session): View|RedirectResponse
    {
        $this->authorizeSession($session);

        if ($session->status !== 'completed' && !$session->result) {
            return redirect()->route('exam.show', $session->id);
        }

        $data = $this->examService->getResult($session);

        return view('user.result', array_merge(['session' => $session], $data));
    }

    private function authorizeSession(ExamSession $session): void
    {
        if ($session->user_id !== auth()->id() && !auth()->user()->isAdmin()) {
            abort(403);
        }
    }
}
