<?php

namespace App\Services;

use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\Result;
use Carbon\Carbon;

class ExamResultService
{
    /**
     * Calculate and persist the result for a completed exam session.
     * Handles reversed questions (is_reversed = true) by inverting the score.
     */
    public function calculate(ExamSession $session): Result
    {
        if ($session->result) {
            return $session->result->load('dimensionScores.dimension');
        }

        $session->load([
            'assessment.questions.answerOptions',
            'assessment.dimensions.interpretations',
            'assessment.recommendations',
            'userAnswers',
        ]);

        $assessment = $session->assessment;

        // Map answers by question_id for fast lookup
        $answeredByQuestion = $session->userAnswers->keyBy('question_id');

        // Calculate total score (respecting reversed questions)
        $totalScore = $assessment->questions->sum(function ($q) use ($answeredByQuestion) {
            $answer = $answeredByQuestion->get($q->id);
            if (! $answer) {
                return 0;
            }

            return $this->resolveScore($q, $answer->score_earned);
        });

        // Calculate max possible score (for reversed Qs it's still the same max)
        $maxScore = $assessment->questions->sum(
            fn ($q) => $q->answerOptions->max('score_value') ?? 0
        );

        // Determine overall level from recommendation thresholds (treat DB values as percentages)
        $recommendation = $assessment->recommendations->first();
        $highPct = $recommendation && $recommendation->high_threshold > 0 ? $recommendation->high_threshold : 70;
        $lowPct = $recommendation && $recommendation->low_threshold > 0 ? $recommendation->low_threshold : 33;
        
        $highThreshold = (int) ($maxScore * ($highPct / 100));
        $lowThreshold = (int) ($maxScore * ($lowPct / 100));

        $level = $this->determineLevel($totalScore, $highThreshold, $lowThreshold);

        // Persist result
        $result = Result::create([
            'session_id' => $session->id,
            'total_score' => $totalScore,
            'max_possible_score' => $maxScore,
            'level' => $level,
            'calculated_at' => Carbon::now(),
        ]);

        // Per-dimension scores
        foreach ($assessment->dimensions as $dimension) {
            $dimQuestions = $assessment->questions->where('dimension_id', $dimension->id);

            $dimScore = $dimQuestions->sum(function ($q) use ($answeredByQuestion) {
                $answer = $answeredByQuestion->get($q->id);
                if (! $answer) {
                    return 0;
                }

                return $this->resolveScore($q, $answer->score_earned);
            });

            $dimMax = $dimQuestions->sum(
                fn ($q) => $q->answerOptions->max('score_value') ?? 0
            );

            $interpretation = $dimension->interpretations->first();
            $dimHighPct = $interpretation && $interpretation->high_threshold > 0 ? $interpretation->high_threshold : 70;
            $dimLowPct = $interpretation && $interpretation->low_threshold > 0 ? $interpretation->low_threshold : 33;
            
            $dimHighThreshold = (int) ($dimMax * ($dimHighPct / 100));
            $dimLowThreshold = (int) ($dimMax * ($dimLowPct / 100));

            DimensionScore::create([
                'result_id' => $result->id,
                'dimension_id' => $dimension->id,
                'score' => $dimScore,
                'max_score' => $dimMax ?: $dimension->max_score,
                'level' => $this->determineLevel($dimScore, $dimHighThreshold, $dimLowThreshold),
            ]);
        }

        $session->update([
            'status' => 'completed',
            'completed_at' => Carbon::now(),
        ]);

        return $result->load('dimensionScores.dimension');
    }

    /**
     * For reversed questions: invert the earned score.
     * Example: if max=2 and user earned 2 (نعم), reversed score = 0.
     */
    private function resolveScore(Question $question, int $earnedScore): int
    {
        if (! $question->is_reversed) {
            return $earnedScore;
        }

        $maxOptionScore = $question->answerOptions->max('score_value') ?? 0;

        return max(0, $maxOptionScore - $earnedScore);
    }

    private function determineLevel(int $score, int $highThreshold, int $lowThreshold): string
    {
        if ($score >= $highThreshold) {
            return 'high';
        }
        if ($score <= $lowThreshold) {
            return 'low';
        }

        return 'medium';
    }
}
