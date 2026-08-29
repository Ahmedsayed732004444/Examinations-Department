<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GradedExam;
use App\Models\GradedExamSession;
use App\Models\GradedExamUserAnswer;
use App\Models\GradedExamUserAnswerOption;
use App\Models\GradedExamResult;
use App\Services\GradedExamGeneratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserGradedExamController extends Controller
{
    public function index()
    {
        $exams = GradedExam::where('is_active', true)->get();
        return view('user.graded_exams.index', compact('exams'));
    }

    public function start(Request $request, GradedExam $exam, GradedExamGeneratorService $generator)
    {
        $activeSession = GradedExamSession::where('user_id', Auth::id())
            ->where('graded_exam_id', $exam->id)
            ->where('status', 'in_progress')
            ->first();

        if ($activeSession) {
            return redirect()->route('user.graded_exams.show', $activeSession->id);
        }

        try {
            $session = $generator->generate($exam, Auth::id());
            return redirect()->route('user.graded_exams.show', $session->id);
        } catch (\Exception $e) {
            return back()->with('error', 'حدث خطأ أثناء إعداد الاختبار: ' . $e->getMessage());
        }
    }

    public function show(GradedExamSession $session)
    {
        if ($session->user_id !== Auth::id()) {
            abort(403);
        }

        if ($session->status !== 'in_progress') {
            return redirect()->route('user.graded_exams.result', $session->id);
        }

        $session->load(['sessionQuestions.question.options' => function ($q) {
            $q->orderBy('order_index');
        }]);

        return view('user.graded_exams.show', compact('session'));
    }

    /**
     * تصحيح الإجابات فعليًا وحفظها + حساب النتيجة النهائية.
     *
     * صيغة الإدخال من الفورم:
     *   answers[{session_question_id}]   = option_id            (سؤال إجابة واحدة)
     *   answers[{session_question_id}][] = [option_id, option_id, ...]  (سؤال متعدد الإجابات)
     */
    public function answer(Request $request, GradedExamSession $session)
    {
        if ($session->user_id !== Auth::id()) abort(403);
        if ($session->status !== 'in_progress') return redirect()->route('user.graded_exams.result', $session->id);

        $submittedAnswers = $request->input('answers', []);

        $session->load(['sessionQuestions.question.options']);

        DB::transaction(function () use ($session, $submittedAnswers) {
            $correctCount = 0;
            $incorrectCount = 0;

            foreach ($session->sessionQuestions as $sq) {
                $question = $sq->question;

                // الخيارات اللي المستخدم اختارها لهذا السؤال (تدعم واحد أو أكتر)
                $raw = $submittedAnswers[$sq->id] ?? null;
                $selectedOptionIds = is_array($raw) ? array_values(array_filter($raw)) : array_filter([$raw]);

                // الخيارات الصحيحة فعليًا لهذا السؤال (من الداتابيز، مش من المستخدم)
                $correctOptionIds = $question->options
                    ->where('is_correct', true)
                    ->pluck('id')
                    ->map(fn ($id) => (string) $id)
                    ->sort()
                    ->values();

                $selectedSorted = collect($selectedOptionIds)
                    ->map(fn ($id) => (string) $id)
                    ->sort()
                    ->values();

                // صح فقط لو الاختيار مطابق تمامًا لمجموعة الإجابات الصحيحة
                // (مهم للأسئلة متعددة الإجابات: لازم يختار كل الصح وميختارش أي غلط)
                $isCorrect = $selectedSorted->count() > 0
                    && $selectedSorted->toArray() === $correctOptionIds->toArray();

                $userAnswer = GradedExamUserAnswer::create([
                    'session_id' => $session->id,
                    'question_id' => $question->id,
                    'is_correct' => $isCorrect,
                    'answered_at' => now(),
                ]);

                foreach ($selectedOptionIds as $optionId) {
                    GradedExamUserAnswerOption::create([
                        'user_answer_id' => $userAnswer->id,
                        'option_id' => $optionId,
                    ]);
                }

                $isCorrect ? $correctCount++ : $incorrectCount++;
            }

            $total = $session->sessionQuestions->count();
            $percentage = $total > 0 ? round(($correctCount / $total) * 100, 2) : 0;

            // حد النجاح الافتراضي 60% - عدّله حسب سياسة الشهادة لو مختلف
            $passThreshold = 60;

            GradedExamResult::create([
                'session_id' => $session->id,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
                'total_questions' => $total,
                'percentage' => $percentage,
                'pass_status' => $percentage >= $passThreshold ? 'ناجح' : 'راسب',
                'calculated_at' => now(),
            ]);

            $session->update([
                'status' => 'completed',
                'completed_at' => now(),
            ]);
        });

        return redirect()->route('user.graded_exams.result', $session->id);
    }

    public function result(GradedExamSession $session)
    {
        if ($session->user_id !== Auth::id()) abort(403);

        $session->load(['result', 'gradedExam']);

        return view('user.graded_exams.result', compact('session'));
    }
}