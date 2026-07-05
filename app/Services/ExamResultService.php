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
        $scoringType = $assessment->scoring_type ?? 'overall_score';

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

        // Calculate max possible score
        $maxScore = $assessment->questions->sum(
            fn ($q) => $q->answerOptions->max('score_value') ?? 0
        );

        // Pre-calculate Dimension Scores
        $dimensionScoresData = [];
        $highestDimScore = -1;
        $highestDimName = null;

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

            // Determine dimension level based on its interpretations thresholds
            $dimLevel = 'medium'; // default
            if ($dimension->interpretations->count() > 0) {
                // Try to find the interpretation where score fits in threshold
                // If thresholds are missing, we fallback to old logic percentages
                $firstInterp = $dimension->interpretations->first();
                $usePercentageFallback = true;
                
                // Let's actually check if we can match an exact threshold range from DB
                foreach ($dimension->interpretations as $interp) {
                    if ($interp->low_threshold !== null && $interp->high_threshold !== null) {
                        $usePercentageFallback = false;
                        $dimLevel = $this->determineLevel($dimScore, $interp->high_threshold, $interp->low_threshold);
                        break;
                    }
                }
                
                if ($usePercentageFallback) {
                    $dimHighPct = $firstInterp->high_threshold > 0 ? $firstInterp->high_threshold : 70;
                    $dimLowPct = $firstInterp->low_threshold > 0 ? $firstInterp->low_threshold : 33;
                    $dimHighThreshold = (int) ($dimMax * ($dimHighPct / 100));
                    $dimLowThreshold = (int) ($dimMax * ($dimLowPct / 100));
                    $dimLevel = $this->determineLevel($dimScore, $dimHighThreshold, $dimLowThreshold);
                }
            } else {
                // Old percentage fallback
                $dimHighThreshold = (int) ($dimMax * 0.70);
                $dimLowThreshold = (int) ($dimMax * 0.33);
                $dimLevel = $this->determineLevel($dimScore, $dimHighThreshold, $dimLowThreshold);
            }

            if ($dimScore > $highestDimScore) {
                $highestDimScore = $dimScore;
                $highestDimName = trim(str_replace('محور', '', $dimension->title_ar));
            }

            $dimensionScoresData[] = [
                'dimension_id' => $dimension->id,
                'score' => $dimScore,
                'max_score' => $dimMax ?: $dimension->max_score,
                'level' => $dimLevel,
            ];
        }

        // Determine Overall Level based on Scoring Type
        $level = null;

        if ($scoringType === 'highest_dimension') {
            // Find the recommendation that matches the highest dimension's name
            $matchedRec = $assessment->recommendations->first(function($rec) use ($highestDimName) {
                return strpos(trim($rec->level), $highestDimName) !== false 
                    || strpos($highestDimName, trim($rec->level)) !== false;
            });
            if ($matchedRec) {
                $level = $matchedRec->level;
            } else {
                $level = $highestDimName;
            }
        } elseif ($scoringType === 'overall_score') {
            // Find matched recommendation based on thresholds
            if ($assessment->recommendations->count() > 0) {
                $usePercentageFallback = true;
                foreach ($assessment->recommendations as $rec) {
                    if ($rec->low_threshold !== null && $rec->high_threshold !== null) {
                        $usePercentageFallback = false;
                        if ($totalScore >= $rec->low_threshold && $totalScore <= $rec->high_threshold) {
                            $level = $rec->level;
                            break;
                        }
                    }
                }
                
                // Fallback if thresholds were zero or missing (treat as old percentage logic)
                if ($level === null && $usePercentageFallback) {
                    $firstRec = $assessment->recommendations->first();
                    $highPct = $firstRec->high_threshold > 0 ? $firstRec->high_threshold : 70;
                    $lowPct = $firstRec->low_threshold > 0 ? $firstRec->low_threshold : 33;
                    $highThreshold = (int) ($maxScore * ($highPct / 100));
                    $lowThreshold = (int) ($maxScore * ($lowPct / 100));
                    $level = $this->determineLevel($totalScore, $highThreshold, $lowThreshold);
                }
            } else {
                $highThreshold = (int) ($maxScore * 0.70);
                $lowThreshold = (int) ($maxScore * 0.33);
                $level = $this->determineLevel($totalScore, $highThreshold, $lowThreshold);
            }
        } elseif ($scoringType === 'dimension_only') {
            $level = null;
        }

        // Persist result
        $result = Result::create([
            'session_id' => $session->id,
            'total_score' => $totalScore,
            'max_possible_score' => $maxScore,
            'level' => $level,
            'calculated_at' => Carbon::now(),
        ]);

        // Persist Dimension Scores
        foreach ($dimensionScoresData as $dimData) {
            DimensionScore::create([
                'result_id' => $result->id,
                'dimension_id' => $dimData['dimension_id'],
                'score' => $dimData['score'],
                'max_score' => $dimData['max_score'],
                'level' => $dimData['level'],
            ]);
        }

        $session->update([
            'status' => 'completed',
            'completed_at' => Carbon::now(),
        ]);

        return $result->load('dimensionScores.dimension');
    }

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
