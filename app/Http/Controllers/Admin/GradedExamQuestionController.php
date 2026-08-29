<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GradedExam;
use App\Models\GradedExamUnit;
use App\Models\GradedExamQuestion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GradedExamQuestionController extends Controller
{
    public function index(Request $request): View
    {
        $exams = GradedExam::orderBy('title_ar')->get();
        $units = collect();

        $query = GradedExamQuestion::with(['gradedExam', 'unit'])
            ->withCount('options');

        if ($request->filled('graded_exam_id')) {
            $query->where('graded_exam_id', $request->graded_exam_id);
            $units = GradedExamUnit::where('graded_exam_id', $request->graded_exam_id)
                ->orderBy('order_index')
                ->get();
        } else {
            $units = GradedExamUnit::orderBy('order_index')->get();
        }

        if ($request->filled('unit_id')) {
            $query->where('unit_id', $request->unit_id);
        }

        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        if ($request->filled('question_type')) {
            if ($request->question_type === 'mcq_single') {
                $query->where('question_type', 'mcq')->where('is_multi_correct', false);
            } elseif ($request->question_type === 'mcq_multi') {
                $query->where('question_type', 'mcq')->where('is_multi_correct', true);
            } else {
                $query->where('question_type', $request->question_type);
            }
        }

        if ($request->filled('options_count')) {
            if ($request->options_count === 'other') {
                $query->has('options', '>', 5);
            } else {
                $query->has('options', '=', (int) $request->options_count);
            }
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('text_ar', 'like', "%{$search}%")
                  ->orWhere('explanation_ar', 'like', "%{$search}%");
            });
        }

        // Sort by unit and original number
        $query->orderBy('unit_id')->orderBy('original_number');

        $perPage = $request->input('per_page', 25);
        if ($perPage === 'all') {
            $perPage = $query->count() > 0 ? $query->count() : 1;
        }

        $questions = $query->paginate((int) $perPage);

        return view('admin.graded_exam_questions.index', compact('questions', 'exams', 'units'));
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'graded_exam_id' => 'required|uuid|exists:graded_exams,id',
            'unit_id' => 'required|uuid|exists:graded_exam_units,id',
            'text_ar' => 'required|string',
            'explanation_ar' => 'nullable|string',
            'level' => 'required|in:easy,medium,hard',
            'question_type' => 'required|in:true_false,mcq',
            'options' => 'required|array|min:2',
            'options.*.label_ar' => 'required|string',
            'options.*.is_correct' => 'required|boolean',
        ]);

        $isMultiCorrect = collect($request->options)->where('is_correct', true)->count() > 1;

        \DB::transaction(function () use ($validated, $isMultiCorrect, $request) {
            $lastNum = GradedExamQuestion::where('unit_id', $validated['unit_id'])->max('original_number') ?? 0;
            
            $question = GradedExamQuestion::create([
                'graded_exam_id' => $validated['graded_exam_id'],
                'unit_id' => $validated['unit_id'],
                'text_ar' => $validated['text_ar'],
                'explanation_ar' => $validated['explanation_ar'],
                'level' => $validated['level'],
                'question_type' => $validated['question_type'],
                'is_multi_correct' => $isMultiCorrect,
                'original_number' => $lastNum + 1,
            ]);

            foreach ($request->options as $index => $opt) {
                $question->options()->create([
                    'option_text_ar' => $opt['label_ar'],
                    'is_correct' => $opt['is_correct'],
                    'order_index' => $index,
                ]);
            }
        });

        return response()->json(['success' => true, 'message' => 'تم إضافة السؤال بنجاح.']);
    }

    public function update(Request $request, GradedExamQuestion $question): JsonResponse
    {
        $validated = $request->validate([
            'text_ar' => 'sometimes|string',
            'explanation_ar' => 'nullable|string',
            'level' => 'sometimes|in:easy,medium,hard',
            'question_type' => 'sometimes|in:true_false,mcq',
        ]);

        $question->update($validated);

        return response()->json(['success' => true, 'message' => 'تم تحديث السؤال بنجاح.']);
    }

    public function destroy(GradedExamQuestion $question): JsonResponse
    {
        $question->delete();

        return response()->json(['success' => true, 'message' => 'تم حذف السؤال.']);
    }

    public function options(GradedExamQuestion $question): JsonResponse
    {
        $options = $question->options()->orderBy('order_index')->get();
        
        return response()->json([
            'success' => true,
            'options' => $options
        ]);
    }
    
    public function getUnits(Request $request): JsonResponse
    {
        if ($request->filled('graded_exam_id')) {
            $units = GradedExamUnit::where('graded_exam_id', $request->graded_exam_id)->orderBy('order_index')->get();
        } else {
            $units = GradedExamUnit::orderBy('order_index')->get();
        }
        return response()->json($units);
    }
}
