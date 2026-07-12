<?php

namespace App\Services\Result;

use App\Models\Assessment;
use App\Models\Recommendation;

class RecommendationSelector
{
    /**
     * Select the appropriate recommendation based on scoring type and thresholds.
     */
    public function select(Assessment $assessment, array $scoreData): ?Recommendation
    {
        $scoringType = $assessment->scoring_type ?? 'overall_score';

        if ($scoringType === 'highest_dimension') {
            return $this->selectByHighestDimension($assessment, $scoreData['dimensions']);
        }

        if ($scoringType === 'overall_score') {
            return $this->selectByThresholds($assessment, $scoreData['total_score']);
        }

        return null;
    }

    /**
     * Finds the highest scoring dimension and matches a recommendation by name.
     */
    private function selectByHighestDimension(Assessment $assessment, array $dimensions): ?Recommendation
    {
        if (empty($dimensions)) {
            return null;
        }

        // Find the dimension with the highest score
        $highestDim = null;
        $highestScore = -1;

        foreach ($dimensions as $dim) {
            if ($dim['score'] > $highestScore) {
                $highestScore = $dim['score'];
                $highestDim = $dim;
            }
        }

        if (!$highestDim) {
            return null;
        }

        $highestDimName = trim(str_replace('محور', '', $highestDim['name']));

        return $assessment->recommendations->first(function($rec) use ($highestDimName) {
            return strpos(trim($rec->level), $highestDimName) !== false 
                || strpos($highestDimName, trim($rec->level)) !== false;
        });
    }

    /**
     * Selects recommendation strictly based on database thresholds.
     */
    private function selectByThresholds(Assessment $assessment, int $totalScore): ?Recommendation
    {
        foreach ($assessment->recommendations as $rec) {
            if ($rec->low_threshold !== null && $rec->high_threshold !== null) {
                if ($totalScore >= $rec->low_threshold && $totalScore <= $rec->high_threshold) {
                    return $rec;
                }
            }
        }

        return null;
    }
}
