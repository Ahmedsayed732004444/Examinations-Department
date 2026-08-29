<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GradedExam;
use App\Models\GradedExamUnit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GradedExamController extends Controller
{
    public function index(): View
    {
        $exams = GradedExam::withCount(['units', 'questions'])->orderBy('created_at', 'desc')->get();
        return view('admin.graded_exams.index', compact('exams'));
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'category' => 'nullable|string',
            'total_questions' => 'nullable|integer|min:1',
            'time_limit_min' => 'nullable|integer|min:1',
            'is_active' => 'boolean',
        ]);

        $validated['created_by'] = auth()->id();
        
        GradedExam::create($validated);

        return response()->json(['success' => true, 'message' => 'تم إنشاء الشهادة بنجاح.']);
    }

    public function update(Request $request, GradedExam $exam): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'category' => 'nullable|string',
            'total_questions' => 'nullable|integer|min:1',
            'time_limit_min' => 'nullable|integer|min:1',
            'is_active' => 'boolean',
        ]);

        $exam->update($validated);

        return response()->json(['success' => true, 'message' => 'تم تحديث الشهادة بنجاح.']);
    }

    public function destroy(GradedExam $exam): JsonResponse
    {
        $exam->delete();
        return response()->json(['success' => true, 'message' => 'تم حذف الشهادة بنجاح.']);
    }
    
    // Settings Management
    public function settings(GradedExam $exam): JsonResponse
    {
        $settings = $exam->constraintSettings()->firstOrCreate([
            'graded_exam_id' => $exam->id
        ], [
            'total_questions' => 50,
            'easy_percentage' => 50,
            'medium_percentage' => 40,
            'hard_percentage' => 10,
            'max_multi_correct_questions' => 5,
        ]);
        
        return response()->json(['success' => true, 'settings' => $settings]);
    }

    public function updateSettings(Request $request, GradedExam $exam): JsonResponse
    {
        $validated = $request->validate([
            'total_questions' => 'required|integer|min:1',
            'easy_percentage' => 'required|numeric|min:0|max:100',
            'medium_percentage' => 'required|numeric|min:0|max:100',
            'hard_percentage' => 'required|numeric|min:0|max:100',
            'max_multi_correct_questions' => 'required|integer|min:0',
            'max_consecutive_same_answer' => 'nullable|integer|min:0',
            'max_consecutive_same_unit' => 'nullable|integer|min:0',
        ]);

        if (abs(($validated['easy_percentage'] + $validated['medium_percentage'] + $validated['hard_percentage']) - 100) > 0.01) {
            return response()->json(['success' => false, 'message' => 'مجموع النسب يجب أن يساوي 100%.'], 422);
        }

        $settings = $exam->constraintSettings()->firstOrCreate(['graded_exam_id' => $exam->id]);
        $validated['updated_by'] = auth()->id();
        $settings->update($validated);

        return response()->json(['success' => true, 'message' => 'تم تحديث الإعدادات بنجاح.']);
    }
    
    // Units Management
    public function showUnits(GradedExam $exam): JsonResponse
    {
        $units = $exam->units()->orderBy('order_index')->get();
        return response()->json(['success' => true, 'units' => $units]);
    }

    public function storeUnit(Request $request, GradedExam $exam): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'required|string|max:255',
        ]);
        
        $lastUnit = $exam->units()->max('unit_number') ?? 0;
        
        $exam->units()->create([
            'title_ar' => $validated['title_ar'],
            'unit_number' => $lastUnit + 1,
            'order_index' => $lastUnit + 1,
        ]);

        return response()->json(['success' => true, 'message' => 'تم إضافة الوحدة بنجاح.']);
    }

    public function updateUnit(Request $request, GradedExamUnit $unit): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'required|string|max:255',
        ]);

        $unit->update($validated);

        return response()->json(['success' => true, 'message' => 'تم تحديث الوحدة بنجاح.']);
    }

    public function destroyUnit(GradedExamUnit $unit): JsonResponse
    {
        $unit->delete();
        return response()->json(['success' => true, 'message' => 'تم حذف الوحدة بنجاح.']);
    }
}
