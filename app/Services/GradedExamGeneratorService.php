<?php

namespace App\Services;

use App\Models\GradedExam;
use App\Models\GradedExamConstraintSetting;
use App\Models\GradedExamQuestion;
use App\Models\GradedExamSession;
use App\Models\GradedExamSessionQuestion;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * المحرك الرئيسي لتوليد امتحان عشوائي يطبّق كل القيود المتفق عليها:
 * توزيع الصعوبة، توازن النوع، تغطية الوحدات، توازن صح/خطأ، توازن مواقع
 * الإجابة الصحيحة، حد أقصى للأسئلة متعددة الإجابات، وتجنب تكرار الأسئلة
 * مع محاولات المستخدم السابقة.
 *
 * كل الأرقام (عدد الأسئلة المتاحة لكل وحدة/مستوى/نوع) تُحسب Live من
 * الداتابيز، مش مخزّنة أو مفترضة، عشان تفضل صحيحة حتى لو الأدمن غيّر
 * بنك الأسئلة بعدين.
 */
class GradedExamGeneratorService
{
    /** أقصى عدد محاولات لموازنة صح/خطأ أو مواقع الإجابة قبل ما نكتفي بأقرب نتيجة ممكنة */
    private const MAX_BALANCE_ATTEMPTS = 200;

    /** كام مرة نحاول نولّد الامتحان من الصفر لو المحاولة فشلت لسبب متعلق بالعشوائية */
    private const MAX_GENERATION_ATTEMPTS = 5;

    public function generate(GradedExam $exam, ?string $userId = null): GradedExamSession
    {
        $settings = $exam->constraintSettings ?? $this->defaultSettings($exam);

        // تحقق سريع أول (مجموع النسب = 100%، إلخ) - رخيص وما يحتاجش نحاول توليد كامل عشانه
        $this->validateFeasibility($exam, $settings);

        $lastException = null;

        for ($attempt = 1; $attempt <= self::MAX_GENERATION_ATTEMPTS; $attempt++) {
            try {
                return $this->attemptGeneration($exam, $settings, $userId);
            } catch (\RuntimeException $e) {
                $lastException = $e;

                \Log::warning('GradedExamGeneratorService: فشلت محاولة توليد امتحان', [
                    'graded_exam_id' => $exam->id,
                    'user_id' => $userId,
                    'attempt' => $attempt,
                    'max_attempts' => self::MAX_GENERATION_ATTEMPTS,
                    'error' => $e->getMessage(),
                ]);
                // نكمل للمحاولة الجاية - كل محاولة بترتيب/خلط عشوائي مختلف
                // (شكل شجرة الاحتمالات بيتغير، فممكن مشكلة عابرة تتحل من نفسها)
            }
        }

        // كل المحاولات الـ5 فشلت بنفس السبب تقريبًا - ده مش عيب عشوائية، ده على
        // الأرجح نقص حقيقي في بنك الأسئلة يحتاج تدخّل الأدمن. نسجّله كـ error
        // واضح (مش warning) عشان يبان في مراقبة اللوجات، ونطلع رسالة نظيفة
        // للمستخدم النهائي من غير تفاصيل داخلية (UUIDs إلخ).
        \Log::error('GradedExamGeneratorService: فشل توليد الامتحان بعد كل المحاولات - على الأرجح نقص بيانات حقيقي في بنك الأسئلة، يحتاج مراجعة الأدمن', [
            'graded_exam_id' => $exam->id,
            'user_id' => $userId,
            'attempts_tried' => self::MAX_GENERATION_ATTEMPTS,
            'last_error' => $lastException?->getMessage(),
        ]);

        throw new \RuntimeException(
            'تعذّر إعداد الاختبار حاليًا بسبب نقص في بعض الأسئلة ضمن معايير التوزيع الحالية. تم إبلاغ فريق الدعم، برجاء المحاولة لاحقًا.',
            0,
            $lastException
        );
    }

    /**
     * محاولة توليد واحدة كاملة (كل الخطوات 1-8). مفصولة في دالة لوحدها
     * عشان generate() يقدر يعيد استدعاءها براحة في حلقة الـ retry.
     */
    private function attemptGeneration(GradedExam $exam, GradedExamConstraintSetting $settings, ?string $userId): GradedExamSession
    {
        return DB::transaction(function () use ($exam, $settings, $userId) {

            // === الخطوة 1: تثبيت تخصيص الوحدات (largest remainder method) ===
            $unitAllocation = $this->allocateUnitCounts($exam->id, $settings->total_questions);

            // === الخطوة 2: توزيع الصعوبة داخل كل وحدة، مع احترام الميزانية العامة ===
            $cells = $this->allocateDifficultyWithinUnits($exam->id, $unitAllocation, $settings);

            // === الخطوة 3: توزيع النوع (اختيار من متعدد / صح خطأ) داخل كل خلية ===
            $cells = $this->allocateTypeWithinCells($exam->id, $cells, $settings);

            // === الخطوة 4: اختيار الأسئلة الفعلية (مع فلاتر: متعدد الإجابات، خيارات غير قياسية، تجنب التكرار) ===
            $questions = $this->selectQuestions($exam->id, $cells, $settings, $userId);

            // === الخطوة 5: موازنة صح/خطأ (best-effort ضمن هامش تفاوت) ===
            $questions = $this->balanceTrueFalseAnswers($exam->id, $questions, $settings);

            // === الخطوة 6: خلط ترتيب الخيارات لكل سؤال (يحل توازن مواقع الإجابة تلقائيًا) ===
            $shuffledMap = $this->shuffleOptionsPerQuestion($questions, $settings);

            // === الخطوة 7: خلط ترتيب الأسئلة + تطبيق قاعدة عدم تجميع نفس الوحدة ===
            $orderedQuestions = $this->sequenceQuestions($questions, $settings);

            // === الخطوة 8: حفظ الجلسة والأسئلة المرتبطة بها ===
            return $this->persistSession($exam, $userId, $orderedQuestions, $shuffledMap, $settings);
        });
    }

    // ============================================================
    // الخطوة 1: تخصيص عدد الأسئلة لكل وحدة (Largest Remainder Method)
    // ============================================================
    private function allocateUnitCounts(string $gradedExamId, int $totalQuestions): array
    {
        $unitCounts = GradedExamQuestion::where('graded_exam_id', $gradedExamId)
            ->selectRaw('unit_id, COUNT(*) as cnt')
            ->groupBy('unit_id')
            ->pluck('cnt', 'unit_id')
            ->toArray();

        $bankTotal = array_sum($unitCounts);
        if ($bankTotal === 0) {
            throw new \RuntimeException('لا يوجد أي سؤال في بنك هذا الامتحان.');
        }

        $raw = [];
        foreach ($unitCounts as $unitId => $count) {
            $raw[$unitId] = ($count / $bankTotal) * $totalQuestions;
        }

        $allocation = array_map('intval', $raw);
        $remainder = $totalQuestions - array_sum($allocation);

        // وزّع الباقي على أعلى الأجزاء الكسرية (largest remainder)
        $fractions = [];
        foreach ($raw as $unitId => $value) {
            $fractions[$unitId] = $value - intval($value);
        }
        arsort($fractions);

        foreach (array_keys($fractions) as $unitId) {
            if ($remainder <= 0) break;
            $allocation[$unitId]++;
            $remainder--;
        }

        // حد أدنى سؤال واحد لكل وحدة لها أسئلة (min_questions_per_unit = 1)
        foreach ($allocation as $unitId => $count) {
            if ($count === 0 && $unitCounts[$unitId] > 0) {
                $allocation[$unitId] = 1;
            }
        }

        return $allocation; // [unit_id => count]
    }

    // ============================================================
    // الخطوة 2: توزيع الصعوبة داخل كل وحدة مع احترام الميزانية الكلية
    // ============================================================
    private function allocateDifficultyWithinUnits(string $gradedExamId, array $unitAllocation, GradedExamConstraintSetting $settings): array
    {
        $levelTargets = $settings->targetCounts(); // ['easy'=>25,'medium'=>20,'hard'=>5]
        $levels = ['easy', 'medium', 'hard'];

        // مخزون كل وحدة لكل مستوى (Live من الداتابيز)
        $supply = GradedExamQuestion::where('graded_exam_id', $gradedExamId)
            ->selectRaw('unit_id, level, COUNT(*) as cnt')
            ->groupBy('unit_id', 'level')
            ->get()
            ->groupBy('unit_id')
            ->map(fn ($rows) => $rows->pluck('cnt', 'level')->toArray());

        $cells = []; // [[unit_id, level, count], ...]
        $remainingLevelBudget = $levelTargets;

        // نبدأ بالوحدات الأصغر تخصيصًا أولاً (أقل مرونة) لتقليل التعارضات
        $unitsSorted = $unitAllocation;
        asort($unitsSorted);

        foreach ($unitsSorted as $unitId => $slotsNeeded) {
            if ($slotsNeeded <= 0) continue;
            $unitSupply = $supply[$unitId] ?? [];

            // وزن كل مستوى = (الميزانية العامة المتبقية له) × (توفره في هذه الوحدة تحديدًا)
            $weights = [];
            foreach ($levels as $lvl) {
                $available = $unitSupply[$lvl] ?? 0;
                $weights[$lvl] = min($available, max($remainingLevelBudget[$lvl], 0));
            }
            $weightSum = array_sum($weights);

            if ($weightSum === 0) {
                // مفيش أي مستوى ليه ميزانية متاحة أو مخزون في الوحدة دي - وزّع بالتساوي كحل أخير
                foreach ($levels as $lvl) {
                    $weights[$lvl] = $unitSupply[$lvl] ?? 0;
                }
                $weightSum = array_sum($weights) ?: 1;
            }

            $picked = [];
            $assigned = 0;
            foreach ($levels as $lvl) {
                $share = $weightSum > 0 ? intval(floor($slotsNeeded * ($weights[$lvl] / $weightSum))) : 0;
                $share = min($share, $unitSupply[$lvl] ?? 0);
                $picked[$lvl] = $share;
                $assigned += $share;
            }

            // وزّع أي باقي بسبب التقريب على أي مستوى لسه عنده مخزون وميزانية
            $leftover = $slotsNeeded - $assigned;
            foreach ($levels as $lvl) {
                if ($leftover <= 0) break;
                $room = ($unitSupply[$lvl] ?? 0) - $picked[$lvl];
                if ($room > 0 && $remainingLevelBudget[$lvl] > 0) {
                    $add = min($leftover, $room);
                    $picked[$lvl] += $add;
                    $leftover -= $add;
                }
            }

            foreach ($levels as $lvl) {
                if ($picked[$lvl] > 0) {
                    $cells[] = ['unit_id' => $unitId, 'level' => $lvl, 'count' => $picked[$lvl]];
                    $remainingLevelBudget[$lvl] -= $picked[$lvl];
                }
            }
        }

        return $cells;
    }

    // ============================================================
    // الخطوة 3: توزيع النوع (mcq/true_false) داخل كل خلية (وحدة × مستوى)
    // ============================================================
    private function allocateTypeWithinCells(string $gradedExamId, array $cells, GradedExamConstraintSetting $settings): array
    {
        $mode = $settings->type_distribution_mode; // proportional | balanced
        $mcqRatio = $mode === 'balanced' ? 0.5 : 0.6139;

        $result = [];
        foreach ($cells as $cell) {
            $supply = GradedExamQuestion::where('graded_exam_id', $gradedExamId)
                ->where('unit_id', $cell['unit_id'])
                ->where('level', $cell['level'])
                ->selectRaw('question_type, COUNT(*) as cnt')
                ->groupBy('question_type')
                ->pluck('cnt', 'question_type')
                ->toArray();

            $mcqAvailable = $supply['mcq'] ?? 0;
            $tfAvailable = $supply['true_false'] ?? 0;

            $mcqWanted = (int) round($cell['count'] * $mcqRatio);
            $tfWanted = $cell['count'] - $mcqWanted;

            // === معالجة قيد type_within_difficulty الحرج: عنق زجاجة صح/خطأ الصعبة ===
            // لو المطلوب أكبر من المتاح، حوّل الفرق لـ mcq بدل ما نفشل التوليد
            if ($tfWanted > $tfAvailable) {
                $deficit = $tfWanted - $tfAvailable;
                $tfWanted = $tfAvailable;
                $mcqWanted += $deficit;
            }
            if ($mcqWanted > $mcqAvailable) {
                $deficit = $mcqWanted - $mcqAvailable;
                $mcqWanted = $mcqAvailable;
                $tfWanted = min($tfAvailable, $tfWanted + $deficit);
            }

            if ($mcqWanted > 0) {
                $result[] = ['unit_id' => $cell['unit_id'], 'level' => $cell['level'], 'type' => 'mcq', 'count' => $mcqWanted];
            }
            if ($tfWanted > 0) {
                $result[] = ['unit_id' => $cell['unit_id'], 'level' => $cell['level'], 'type' => 'true_false', 'count' => $tfWanted];
            }
        }

        return $result;
    }

    // ============================================================
    // الخطوة 4: اختيار الأسئلة الفعلية لكل خلية
    // ============================================================
    private function selectQuestions(string $gradedExamId, array $cells, GradedExamConstraintSetting $settings, ?string $userId): Collection
    {
        $selected = collect();
        $multiCorrectCount = 0;
        $maxMultiCorrect = $settings->max_multi_correct_questions;

        // موازنة الظهور: خريطة [question_id => عدد مرات الظهور] لهذا المستخدم عبر كل محاولاته
        $viewCounts = $userId ? $this->getQuestionViewCounts($userId, $gradedExamId) : [];

        foreach ($cells as $cell) {
            $poolAll = GradedExamQuestion::where('graded_exam_id', $gradedExamId)
                ->where('unit_id', $cell['unit_id'])
                ->where('level', $cell['level'])
                ->where('question_type', $cell['type'])
                ->whereNotIn('id', $selected->pluck('id'))
                ->with('options') // eager load لتجنب N+1 في خطوات لاحقة (موازنة صح/خطأ + خلط الخيارات)
                ->withCount('options')
                ->get();

            // فضّل الأسئلة اللي عدد خياراتها قياسي (4 لاختيار من متعدد، 2 لصح/خطأ) أولاً
            // الفلترة هنا في PHP بدل SQL having() عشان تشتغل بنفس الشكل على أي قاعدة بيانات (MySQL/Postgres/SQLite)
            $standardCount = $cell['type'] === 'mcq' ? 4 : 2;
            $standardPool = $poolAll->where('options_count', '=', $standardCount)->values();
            $fallbackPool = $poolAll->where('options_count', '!=', $standardCount)->values();

            $pool = $standardPool->concat($fallbackPool);

            // === موازنة الظهور (Exposure Balancing) ===
            // خلط عشوائي الأول (لكسر أي ترتيب من الداتابيز)، وبعدين ترتيب حسب
            // "الأقل ظهورًا أولاً" (زي ORDER BY user_views ASC, RANDOM()).
            // النتيجة: الأسئلة اللي الطالب ماشافهاش خالص (عدد = 0) دايمًا في الأول،
            // ولا يتكرر سؤال شافه قبل كده إلا لو الأسئلة الجديدة خلصت ومحتاجين
            // نكمّل نسبة الوحدة/المستوى/النوع المطلوبة (Fetch then Backtrack).
            $pool = $pool->shuffle()->sortBy(
                fn ($q) => $viewCounts[$q->id] ?? 0
            )->values();

            $needed = $cell['count'];
            $chosen = collect();

            // === تمريرة أولى: نحترم حد max_multi_correct_questions (قيد soft) ===
            foreach ($pool as $question) {
                if ($chosen->count() >= $needed) break;

                if ($question->is_multi_correct && $multiCorrectCount >= $maxMultiCorrect) {
                    continue; // تخطّي - وصلنا للحد الأقصى المسموح لأسئلة متعددة الإجابات
                }

                $chosen->push($question);
                if ($question->is_multi_correct) {
                    $multiCorrectCount++;
                }
            }

            // === تمريرة ثانية (fallback): لو لسه ناقص، اكسر حد الأسئلة المتعددة ===
            // تغطية الوحدة/المستوى/النوع قيد "hard" (لازم يتحقق دايمًا)، بينما حد
            // الأسئلة المتعددة قيد "soft" (أفضل جهد). لو الاحترام الصارم للقيد الـ
            // soft هيمنع تحقيق القيد الـ hard، نكسر الـ soft بدل ما نفشل التوليد كله.
            if ($chosen->count() < $needed) {
                foreach ($pool as $question) {
                    if ($chosen->count() >= $needed) break;
                    if ($chosen->contains('id', $question->id)) continue;

                    $chosen->push($question);
                    if ($question->is_multi_correct) {
                        $multiCorrectCount++;
                    }
                }
            }

            if ($chosen->count() < $needed) {
                throw new \RuntimeException(sprintf(
                    'تعذّر إيجاد %d سؤال كافٍ (وحدة: %s، مستوى: %s، نوع: %s). المتاح فعليًا في البنك: %d.',
                    $needed, $cell['unit_id'], $cell['level'], $cell['type'], $pool->count()
                ));
            }

            $selected = $selected->concat($chosen);
        }

        return $selected;
    }

    /**
     * "موازنة الظهور" (Exposure Balancing): بيرجع Map كامل [question_id => عدد مرات الظهور]
     * لهذا المستخدم عبر كل محاولاته السابقة (مش آخر N بس زي القديم) — عشان نضمن
     * تغطية كامل بنك الـ404 سؤال أسرع، بدل الاعتماد على عشوائية بحتة
     * (Coupon Collector's Problem بيقول العشوائية البحتة محتاجة ~49 محاولة
     * لتغطية البنك، والأولوية دي بتقلّلها لـ9-12 محاولة تقريبًا).
     *
     * بنحسبها Live من الداتابيز مش من عمود counter مخزّن، عشان تفضل دقيقة
     * 100% حتى لو session اتلغت أو فشلت في المنتصف.
     */
    private function getQuestionViewCounts(string $userId, string $gradedExamId): array
    {
        $sessionIds = GradedExamSession::where('user_id', $userId)
            ->where('graded_exam_id', $gradedExamId)
            ->pluck('id');

        if ($sessionIds->isEmpty()) {
            return [];
        }

        return GradedExamSessionQuestion::whereIn('session_id', $sessionIds)
            ->selectRaw('question_id, COUNT(*) as views')
            ->groupBy('question_id')
            ->pluck('views', 'question_id')
            ->map(fn ($v) => (int) $v)
            ->toArray();
    }

    // ============================================================
    // الخطوة 5: موازنة صح/خطأ (best-effort)
    // ============================================================
    private function balanceTrueFalseAnswers(string $gradedExamId, Collection $questions, GradedExamConstraintSetting $settings): Collection
    {
        $tfQuestions = $questions->filter(fn ($q) => $q->question_type === 'true_false');
        if ($tfQuestions->isEmpty()) {
            return $questions;
        }

        $trueCount = $tfQuestions->filter(fn ($q) => $q->options->firstWhere('is_correct', true)?->option_text_ar === 'True')->count();
        $total = $tfQuestions->count();
        $truePercentage = $total > 0 ? ($trueCount / $total) * 100 : 50;

        $attempts = 0;
        while (($truePercentage < 35 || $truePercentage > 65) && $attempts < self::MAX_BALANCE_ATTEMPTS) {
            $attempts++;

            $needMoreTrue = $truePercentage < 35;
            $swapOutValue = $needMoreTrue ? false : true;

            // ندور على سؤال صح/خطأ داخل نفس الاختيار الحالي نبدله بسؤال تاني من نفس الوحدة/المستوى بإجابة عكسية
            $candidate = $tfQuestions->first(function ($q) use ($swapOutValue) {
                $correctText = $q->options->firstWhere('is_correct', true)?->option_text_ar;
                return $swapOutValue ? $correctText === 'True' : $correctText === 'False';
            });

            if (!$candidate) break;

            $replacement = GradedExamQuestion::where('graded_exam_id', $gradedExamId)
                ->where('unit_id', $candidate->unit_id)
                ->where('level', $candidate->level)
                ->where('question_type', 'true_false')
                ->whereNotIn('id', $questions->pluck('id'))
                ->with('options')
                ->get()
                ->first(function ($q) use ($needMoreTrue) {
                    $correctText = $q->options->firstWhere('is_correct', true)?->option_text_ar;
                    return $needMoreTrue ? $correctText === 'True' : $correctText === 'False';
                });

            if (!$replacement) break; // مفيش بديل متاح - نكتفي بأقرب نسبة ممكنة

            $questions = $questions->reject(fn ($q) => $q->id === $candidate->id)->push($replacement);
            $tfQuestions = $questions->filter(fn ($q) => $q->question_type === 'true_false');
            $trueCount = $tfQuestions->filter(fn ($q) => $q->options->firstWhere('is_correct', true)?->option_text_ar === 'True')->count();
            $truePercentage = $tfQuestions->count() > 0 ? ($trueCount / $tfQuestions->count()) * 100 : 50;
        }

        return $questions->values();
    }

    // ============================================================
    // الخطوة 6: خلط ترتيب الخيارات لكل سؤال (يحل توازن مواقع الإجابة تلقائيًا)
    // ============================================================
    private function shuffleOptionsPerQuestion(Collection $questions, GradedExamConstraintSetting $settings): array
    {
        $map = [];
        foreach ($questions as $question) {
            $optionIds = $question->options->pluck('id')->shuffle()->values()->toArray();
            $map[$question->id] = $optionIds;
        }
        return $map;
    }

    // ============================================================
    // الخطوة 7: ترتيب الأسئلة النهائي + منع تجميع نفس الوحدة
    // ============================================================
    private function sequenceQuestions(Collection $questions, GradedExamConstraintSetting $settings): Collection
    {
        $shuffled = $questions->shuffle()->values();
        $maxConsecutive = $settings->max_consecutive_same_unit;

        $attempts = 0;
        while ($attempts < self::MAX_BALANCE_ATTEMPTS) {
            $violationIndex = null;
            $consecutive = 1;

            for ($i = 1; $i < $shuffled->count(); $i++) {
                if ($shuffled[$i]->unit_id === $shuffled[$i - 1]->unit_id) {
                    $consecutive++;
                    if ($consecutive > $maxConsecutive) {
                        $violationIndex = $i;
                        break;
                    }
                } else {
                    $consecutive = 1;
                }
            }

            if ($violationIndex === null) break; // مفيش تجميع زيادة عن المسموح

            // دوّر على أول سؤال بعده بوحدة مختلفة وبدّل مكانه
            $swapWith = null;
            for ($j = $violationIndex + 1; $j < $shuffled->count(); $j++) {
                if ($shuffled[$j]->unit_id !== $shuffled[$violationIndex - 1]->unit_id) {
                    $swapWith = $j;
                    break;
                }
            }

            if ($swapWith === null) break; // مفيش تبديل ممكن - نكتفي بالترتيب الحالي

            $tmp = $shuffled[$violationIndex];
            $shuffled[$violationIndex] = $shuffled[$swapWith];
            $shuffled[$swapWith] = $tmp;

            $attempts++;
        }

        return $shuffled;
    }

    // ============================================================
    // الخطوة 8: حفظ الجلسة وأسئلتها
    // ============================================================
    private function persistSession(GradedExam $exam, ?string $userId, Collection $orderedQuestions, array $shuffledMap, GradedExamConstraintSetting $settings): GradedExamSession
    {
        $session = GradedExamSession::create([
            'user_id' => $userId,
            'graded_exam_id' => $exam->id,
            'status' => 'in_progress',
            'total_questions' => $orderedQuestions->count(),
            'constraints_snapshot' => $settings->only([
                'total_questions', 'easy_percentage', 'medium_percentage', 'hard_percentage',
                'type_distribution_mode', 'mc_position_balance_mode',
                'max_multi_correct_questions', 'max_consecutive_same_answer', 'max_consecutive_same_unit',
            ]),
            'random_seed' => null,
            'started_at' => now(),
        ]);

        foreach ($orderedQuestions->values() as $position => $question) {
            GradedExamSessionQuestion::create([
                'session_id' => $session->id,
                'question_id' => $question->id,
                'position_in_exam' => $position + 1,
                'shuffled_options_order' => $shuffledMap[$question->id] ?? [],
            ]);
        }

        return $session->fresh(['sessionQuestions.question.options']);
    }

    // ============================================================
    // أدوات مساعدة
    // ============================================================
    private function defaultSettings(GradedExam $exam): GradedExamConstraintSetting
    {
        return GradedExamConstraintSetting::create([
            'graded_exam_id' => $exam->id,
            'total_questions' => 50,
            'easy_percentage' => 50,
            'medium_percentage' => 40,
            'hard_percentage' => 10,
        ]);
    }

    /**
     * تحقق مبدئي سريع قبل الدخول في التوليد الفعلي: هل الإعدادات ممكنة
     * أصلاً بناءً على المخزون الحالي؟ (يعيد استخدام منطق isFeasible()
     * الموجود في الـ Model نفسه لتفادي التكرار).
     */
    private function validateFeasibility(GradedExam $exam, GradedExamConstraintSetting $settings): void
    {
        $check = $settings->isFeasible();
        if (!$check['feasible']) {
            throw new \RuntimeException('إعدادات القيود غير قابلة للتحقيق: ' . implode(' | ', $check['errors']));
        }
    }
}