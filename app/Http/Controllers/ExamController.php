<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerQuestionRequest;
use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
use App\Services\CouponService;
use App\Services\ExamService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExamController extends Controller
{
    public function __construct(
        private readonly ExamService $examService,
        private readonly CouponService $couponService,
    ) {}

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

        $hasAnySession = ExamSession::where('user_id', $user->id)
            ->where('assessment_id', $assessment->id)
            ->exists();

        if ($hasAnySession) {
            return response()->json([
                'valid'            => true,
                'coupon_id'        => null,
                'discount'         => 100,
                'price'            => (float) $assessment->price,
                'discount_amount'  => (float) $assessment->price,
                'final_price'      => 0,
                'is_free'          => true,
                'usage_number'     => 1,
                'message'          => 'لديك دخول مسبق لهذا المقياس، سيتم استئنافه فوراً.',
            ]);
        }

        $result = $this->couponService->validateCouponForUser($request->code, $assessment, $user);

        if (!$result['valid']) {
            return response()->json(['valid' => false, 'message' => $result['message']], 422);
        }

        return response()->json([
            'valid'            => true,
            'coupon_id'        => $result['coupon']->id,
            'discount'         => $result['discount'],
            'price'            => $result['price'],
            'discount_amount'  => $result['discount_amount'],
            'final_price'      => $result['final_price'],
            'is_free'          => $result['is_free'],
            'usage_number'     => $result['usage_number'],
            'message'          => $result['message'],
        ]);
    }

    /**
     * AJAX endpoint: get the available public coupon code(s) for a given assessment.
     * Returns the first active coupon that applies to this assessment and is for all users.
     */
    public function getCouponForAssessment(Assessment $assessment): JsonResponse
    {
        $user = auth()->user();

        $coupons = Coupon::where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>=', now()->toDateString());
            })
            ->where(function ($q) use ($assessment) {
                // Either applies to all assessments, or specifically to this one
                $q->where('applies_to_all_assessments', true)
                  ->orWhereHas('assessments', fn ($a) => $a->where('assessment_id', $assessment->id));
            })
            ->where(function ($q) use ($user) {
                // Either applies to all users, or specifically to this user
                $q->where('applies_to_all_users', true)
                  ->orWhereHas('permittedUsers', fn ($u) => $u->where('user_id', $user->id));
            })
            ->get();

        if ($coupons->isEmpty()) {
            return response()->json([
                'found' => false,
                'message' => 'لا يوجد كوبون متاح لهذا المقياس حالياً.',
            ]);
        }

        return response()->json([
            'found'    => true,
            'coupons'  => $coupons->map(function($c) {
                return [
                    'code'     => $c->code,
                    'title'    => $c->title,
                    'discount' => $c->discount_percentage,
                    'expires'  => $c->expires_at ? $c->expires_at->format('Y-m-d') : null,
                ];
            })
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
                $result = $this->couponService->validateCouponForUser($request->coupon_code, $assessment, $user);

                if (!$result['valid']) {
                    return redirect()->back()->with('error', $result['message']);
                }

                if (!$result['is_free']) {
                    // If the coupon doesn't make it 100% free, we would normally redirect to the payment gateway here.
                    // For now, since payment gateway isn't implemented, we just return an error with the remaining amount.
                    return redirect()->back()->with('error', 'يجب استكمال الدفع للمبلغ المتبقي: ' . $result['final_price'] . ' ر.س. (بوابة الدفع غير مفعلة حالياً)');
                }

                $couponId        = $result['coupon']->id;
                $discountApplied = $result['discount'];

                // Record usage
                $this->couponService->recordUsage($result['coupon'], $userId);
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

    public function result(Request $request, ExamSession $session): View|RedirectResponse|JsonResponse
    {
        $this->authorizeSession($session);

        if ($session->status !== 'completed' || !$session->result) {
            return redirect()->route('exam.show', $session->id);
        }

        $data = $this->examService->getResult($session);

        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json($data);
        }

        return view('user.result', array_merge(['session' => $session], $data));
    }

    private function authorizeSession(ExamSession $session): void
    {
        if ($session->user_id !== auth()->id() && !optional(auth()->user())->isAdmin()) {
            abort(403);
        }
    }
}
