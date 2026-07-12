<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\StatisticsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StatisticsController extends Controller
{
    public function __construct(
        private readonly StatisticsService $statisticsService,
    ) {}

    public function index(): View
    {
        $assessments = $this->statisticsService->getAssessments();

        return view('admin.statistics.index', compact('assessments'));
    }

    public function data(Request $request): JsonResponse
    {
        $range = max(1, min((int) $request->query('range', 30), 365));
        $data = $this->statisticsService->getData($range);

        return response()->json($data);
    }

    /**
     * Export completed exam results to a CSV file.
     */
    public function exportCsv(): StreamedResponse
    {
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="exam_results_export.csv"',
        ];

        $csvContent = $this->statisticsService->exportResultsCsv();

        return response()->streamDownload(function () use ($csvContent) {
            echo $csvContent;
        }, 'exam_results_export.csv', $headers);
    }
}
