<?php

namespace App\Services;

use App\Models\Assessment;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class StatisticsService
{
    /**
     * Get all assessments for the filter dropdown.
     *
     * @return \Illuminate\Database\Eloquent\Collection<int, Assessment>
     */
    public function getAssessments()
    {
        return Assessment::all();
    }

    /**
     * Build the full statistics data payload.
     * Uses DB JOINs to avoid N+1 queries.
     *
     * @param  int  $range  Number of days
     * @return array<string, mixed>
     */
    public function getData(int $range): array
    {
        return [
            'dailyData' => $this->getDailySessionData($range),
            'assessments' => $this->getLevelDistribution(),
            'avgScores' => $this->getAverageScores(),
            'topUsers' => $this->getTopUsers(),
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getDailySessionData(int $range): array
    {
        $from = now()->subDays($range - 1)->startOfDay();

        $rows = DB::table('exam_sessions')
            ->where('status', 'completed')
            ->where('completed_at', '>=', $from)
            ->selectRaw('DATE(completed_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        $data = [];
        for ($i = 0; $i < $range; $i++) {
            $date = now()->subDays($range - 1 - $i)->format('Y-m-d');
            $data[] = [
                'date' => $date,
                'count' => $rows->get($date)?->count ?? 0,
            ];
        }

        return $data;
    }

    /**
     * Use a single JOIN query to aggregate level counts per assessment.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getLevelDistribution(): array
    {
        $rows = DB::table('assessments as a')
            ->join('exam_sessions as es', 'es.assessment_id', '=', 'a.id')
            ->join('results as r', 'r.session_id', '=', 'es.id')
            ->select([
                'a.id',
                'a.title_ar as title',
                DB::raw("SUM(CASE WHEN r.level = 'high'   THEN 1 ELSE 0 END) as high"),
                DB::raw("SUM(CASE WHEN r.level = 'medium' THEN 1 ELSE 0 END) as medium"),
                DB::raw("SUM(CASE WHEN r.level = 'low'    THEN 1 ELSE 0 END) as low"),
            ])
            ->groupBy('a.id', 'a.title_ar')
            ->get();

        return $rows->map(fn ($r) => [
            'id' => $r->id,
            'title' => $r->title,
            'high' => (int) $r->high,
            'medium' => (int) $r->medium,
            'low' => (int) $r->low,
        ])->values()->toArray();
    }

    /**
     * Use a JOIN to compute average score per assessment in a single query.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getAverageScores(): array
    {
        $rows = DB::table('assessments as a')
            ->leftJoin('exam_sessions as es', 'es.assessment_id', '=', 'a.id')
            ->leftJoin('results as r', 'r.session_id', '=', 'es.id')
            ->select([
                'a.title_ar as title',
                DB::raw('ROUND(AVG(r.total_score), 1) as avg'),
            ])
            ->groupBy('a.id', 'a.title_ar')
            ->get();

        return $rows->map(fn ($r) => [
            'title' => $r->title,
            'avg' => (float) ($r->avg ?? 0),
        ])->values()->toArray();
    }

    /**
     * @return Collection<int, object>
     */
    private function getTopUsers()
    {
        return DB::table('users as u')
            ->leftJoin('exam_sessions as es', fn ($j) => $j->on('es.user_id', '=', 'u.id')->where('es.status', 'completed')
            )
            ->where('u.role', 'user')
            ->select([
                'u.id',
                'u.name',
                'u.email',
                DB::raw('COUNT(es.id) as exam_sessions_count'),
            ])
            ->groupBy('u.id', 'u.name', 'u.email')
            ->orderByDesc('exam_sessions_count')
            ->limit(10)
            ->get();
    }

    /**
     * Export all completed exam sessions and results to a CSV string.
     */
    public function exportResultsCsv(): string
    {
        $rows = DB::table('exam_sessions as es')
            ->join('users as u', 'u.id', '=', 'es.user_id')
            ->join('assessments as a', 'a.id', '=', 'es.assessment_id')
            ->join('results as r', 'r.session_id', '=', 'es.id')
            ->where('es.status', 'completed')
            ->select([
                'es.id as session_id',
                'u.name as user_name',
                'u.email as user_email',
                'a.title_ar as assessment_title',
                'r.total_score',
                'r.max_possible_score',
                'r.level',
                'es.completed_at',
            ])
            ->orderByDesc('es.completed_at')
            ->get();

        $output = fopen('php://temp', 'r+');

        // Prepend UTF-8 BOM so Excel opens Arabic letters correctly
        fwrite($output, "\xEF\xBB\xBF");

        // Headers
        fputcsv($output, [
            'معرف الجلسة',
            'اسم المستخدم',
            'البريد الإلكتروني',
            'اسم المقياس',
            'الدرجة المحرزة',
            'الدرجة القصوى',
            'النسبة المئوية',
            'المستوى',
            'تاريخ الإكمال',
        ]);

        foreach ($rows as $row) {
            $percentage = $row->max_possible_score > 0
                ? round(($row->total_score / $row->max_possible_score) * 100).'%'
                : '0%';

            $levelLabel = match ($row->level) {
                'high' => 'مرتفع',
                'medium' => 'متوسط',
                default => 'منخفض',
            };

            fputcsv($output, [
                $row->session_id,
                $row->user_name,
                $row->user_email,
                $row->assessment_title,
                $row->total_score,
                $row->max_possible_score,
                $percentage,
                $levelLabel,
                $row->completed_at,
            ]);
        }

        rewind($output);
        $csvContent = stream_get_contents($output);
        fclose($output);

        return $csvContent;
    }
}
