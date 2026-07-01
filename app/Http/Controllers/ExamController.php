<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerQuestionRequest;
use App\Models\Assessment;
use App\Models\Coupon;
use App\Models\ExamSession;
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

    public function start(Request $request, Assessment $assessment): RedirectResponse
    {
        $userId = auth()->id();

        // Check if user already has ANY session for this assessment (completed or in_progress)
        // If they do, they can enter for free.
        $hasAnySession = ExamSession::where('user_id', $userId)
            ->where('assessment_id', $assessment->id)
            ->exists();

        if (! $hasAnySession) {
            // New assessment! Needs payment or coupon
            if (! $request->filled('coupon_id')) {
                return redirect()->back()->with('error', 'يجب الدفع أو استخدام كوبون للوصول إلى هذا المقياس.');
            }

            $coupon = Coupon::where('id', $request->coupon_id)
                ->where('is_active', true)
                ->where(function ($q) {
                    $q->whereNull('expires_at')
                        ->orWhere('expires_at', '>=', now()->toDateString());
                })
                ->first();

            if (! $coupon) {
                return redirect()->back()->with('error', 'الكوبون المحدد غير صالح أو منتهي الصلاحية.');
            }

            // Check usage limit
            $pivot = $coupon->users()->where('user_id', $userId)->first();
            $usedCount = $pivot ? $pivot->pivot->used_count : 0;

            if ($usedCount >= $coupon->assessments_limit) {
                return redirect()->back()->with('error', 'لقد استنفدت رصيد هذا الكوبون.');
            }

            // Increment usage
            if ($pivot) {
                $coupon->users()->updateExistingPivot($userId, ['used_count' => $usedCount + 1]);
            } else {
                $coupon->users()->attach($userId, ['used_count' => 1]);
            }
        }

        $result = $this->examService->startOrResume($assessment, $userId);
        $session = $result['session'];

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

        $data = $this->examService->getSessionData($session);
        $nextQuestion = $data['nextQuestion'];

        if (! $nextQuestion) {
            // All answered — calculate and redirect
            $this->examService->getResult($session);

            return redirect()->route('exam.result', $session->id);
        }

        return view('user.exam', [
            'session' => $session,
            'assessment' => $data['assessment'],
            'nextQuestion' => $nextQuestion,
            'progress' => $data['progress'],
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

        if ($session->status !== 'completed' && ! $session->result) {
            return redirect()->route('exam.show', $session->id);
        }

        $data = $this->examService->getResult($session);

        return view('user.result', array_merge(['session' => $session], $data));
    }

    private function authorizeSession(ExamSession $session): void
    {
        if ($session->user_id !== auth()->id() && ! auth()->user()->isAdmin()) {
            abort(403);
        }
    }
}
