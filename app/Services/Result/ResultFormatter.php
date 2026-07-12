<?php

namespace App\Services\Result;

use App\Models\Assessment;
use App\Models\Recommendation;
use App\Models\Result;

class ResultFormatter
{
    /**
     * Formats the final result API response into a strictly structured format.
     */
    public function format(Assessment $assessment, Result $result, ?Recommendation $recommendation): array
    {
        $response = [
            'result_id' => $result->id,
            'created_at' => clone $result->calculated_at,
            'assessment' => [
                'id' => $assessment->id,
                'title_ar' => $assessment->title_ar,
                'scoring_type' => $assessment->scoring_type,
            ],
            'category' => $assessment->category,
            'total_score' => $result->total_score,
            'max_score' => $result->max_possible_score,
            'level' => $result->level,
            'recommendation' => $recommendation ? $recommendation->description_ar : null,
        ];
        // Use fields directly from Recommendation if available
        $progIntro = $recommendation ? $recommendation->programs_intro_ar : null;
        $progOutro = $recommendation ? $recommendation->programs_outro_ar : null;
        $progText = $recommendation ? $recommendation->programs_ar : null;
        
        $programs = is_array($progText) ? $progText : $this->parseList($progText);
        
        if (!empty($progIntro)) $response['programs_intro'] = $progIntro;
        if (!empty($programs)) $response['programs'] = $programs;
        if (!empty($progOutro)) $response['programs_outro'] = $progOutro;
        
        $certs_ar = $recommendation ? $recommendation->certificates_ar : null;
        $certsIntro = $recommendation ? $recommendation->certificates_intro_ar : null;
        $certificates = is_array($certs_ar) ? $this->formatCertificatesArray($certs_ar) : $this->parseCertificates($certs_ar);
        if (!empty($certsIntro)) $response['certificates_intro'] = $certsIntro;
        if (!empty($certificates)) $response['certificates'] = $certificates;

        $roadmap_ar = $recommendation ? $recommendation->plan_30_days_ar : null;
        $roadmapIntro = $recommendation ? $recommendation->plan_30_days_intro_ar : null;
        $roadmap = is_array($roadmap_ar) ? $roadmap_ar : $this->parseList($roadmap_ar);
        if (!empty($roadmapIntro)) $response['roadmap_intro'] = $roadmapIntro;
        if (!empty($roadmap)) $response['roadmap'] = $roadmap;

        $dimensions = [];
        $chartLabels = [];
        $chartData = [];

        foreach ($result->dimensionScores as $ds) {
            // Skip the "عام" dimension as it is a fallback placeholder
            if (trim($ds->dimension->name_ar) === 'عام') {
                continue;
            }

            $interp = $ds->dimension->interpretations->where('level', $ds->level)->first();
            $pct = $ds->max_score > 0 ? round(($ds->score / $ds->max_score) * 100) : 0;

            $dimensions[] = [
                'id' => $ds->dimension->id,
                'name' => $ds->dimension->name_ar,
                'score' => $ds->score,
                'max_score' => $ds->max_score,
                'percentage' => $pct,
                'level' => $ds->level,
                'display_level' => $this->getDisplayLevel($ds->level),
                'interpretation' => $interp ? $interp->interpretation_text_ar : null,
            ];

            // Chart Data using score / max_score
            $chartLabels[] = $ds->dimension->name_ar;
            $chartData[] = $pct;
        }

        if (!empty($dimensions)) {
            $response['dimensions'] = $dimensions;
            if (!empty($chartLabels)) {
                $response['chart_data'] = [
                    'labels' => $chartLabels,
                    'data' => $chartData
                ];
            }
        }

        return $response;
    }

    private function parseList(?string $text): array
    {
        if (empty(trim($text ?? ''))) return [];
        // Clean invalid UTF-8 bytes that might cause preg_split to fail
        $text = mb_convert_encoding($text, 'UTF-8', 'UTF-8');
        $split = preg_split('/[,\n،]+/u', $text);
        if (!is_array($split)) return [];
        
        $items = array_map(function($item) {
            return trim(preg_replace('/^[\d\-\.\*\s]+/u', '', $item));
        }, $split);
        return array_values(array_filter($items, fn($i) => !empty($i)));
    }

    private function getDisplayLevel(string $level): string
    {
        $map = [
            'excellent' => 'متميز',
            'advanced'  => 'متقدم',
            'good'      => 'جيد',
            'average'   => 'متوسط',
            'weak'      => 'ضعيف',
            // Legacy/alternative keys
            'high'      => 'مرتفع',
            'medium'    => 'متوسط',
            'low'       => 'منخفض',
        ];
        
        return $map[$level] ?? $level;
    }

    private function parseCertificates(?string $text): array
    {
        if (empty($text)) return [];
        $items = array_map('trim', preg_split('/[,\n،]+/u', $text));
        $items = array_values(array_filter($items, fn($i) => !empty($i)));
        
        return $this->formatCertificatesArray($items);
    }

    private function formatCertificatesArray(array $items): array
    {
        return array_map(function($cert) {
            if (is_array($cert)) {
                return $cert;
            }
            if (is_object($cert)) {
                return (array) $cert;
            }
            return [
                'title' => trim(preg_replace('/^[\d\-\.\*\s]+/u', '', $cert)),
                'description' => 'شهادة احترافية'
            ];
        }, array_filter($items));
    }
}
