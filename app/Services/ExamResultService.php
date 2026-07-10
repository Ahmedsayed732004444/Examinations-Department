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
                    $dimLevel = $this->determineLevel($dimScore, $dimMax);
                }
            } else {
                // Old percentage fallback
                $dimLevel = $this->determineLevel($dimScore, $dimMax);
            }

            if ($dimScore > $highestDimScore) {
                $highestDimScore = $dimScore;
                $highestDimName = trim(str_replace('محور', '', $dimension->name_ar));
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
                    $level = $this->determineLevel($totalScore, $maxScore);
                }
            } else {
                $level = $this->determineLevel($totalScore, $maxScore);
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

    private function determineLevel(int $score, int $maxScore): string
    {
        if ($maxScore <= 0) return 'weak';
        
        $pct = ($score / $maxScore) * 100;
        
        if ($pct >= 80) return 'excellent';
        if ($pct >= 60) return 'advanced';
        if ($pct >= 40) return 'good';
        if ($pct >= 20) return 'average';
        
        return 'weak';
    }
}
