<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssessmentRequest;
use App\Http\Requests\Admin\UpdateAssessmentRequest;
use App\Http\Requests\Admin\UpdateSettingsRequest;
use App\Models\Assessment;
use App\Services\AssessmentService;
use App\Models\Icon;
use App\Models\Result;
use App\Models\DimensionScore;
use App\Models\ExamSession;
use App\Services\Result\ResultFormatter;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class AssessmentController extends Controller
{
    public function __construct(
        private readonly AssessmentService $assessmentService,
    ) {}

    public function index(\Illuminate\Http\Request $request): View
    {
        $filters = $request->only(['category', 'search']);
        $assessments = $this->assessmentService->list($filters);

        return view('admin.assessments.index', compact('assessments'));
    }

    public function store(StoreAssessmentRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/dashboard'), $filename);
            $data['image_url'] = $filename;
        }
        unset($data['image']);

        $assessment = $this->assessmentService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'تم إنشاء المقياس بنجاح.',
            'id' => $assessment->id,
        ]);
    }

    public function show(Assessment $assessment): View
    {
        $assessment = $this->assessmentService->getForManagement($assessment->id);
        $icons = Icon::all()->groupBy('category');
        return view('admin.assessments.show', compact('assessment', 'icons'));
    }

    public function update(UpdateAssessmentRequest $request, Assessment $assessment): JsonResponse
    {
        $this->assessmentService->update($assessment, $request->validated());

        return response()->json(['success' => true, 'message' => 'تم تحديث المقياس.']);
    }

    public function updateSettings(UpdateSettingsRequest $request, Assessment $assessment): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not one of the default seeded images
            if ($assessment->image_url && ! preg_match('/^([1-9]|1[0-9]|2[0-5])\.png$/', $assessment->image_url)) {
                $oldPath = public_path('images/dashboard/'.$assessment->image_url);
                if (\Illuminate\Support\Facades\File::exists($oldPath)) {
                    \Illuminate\Support\Facades\File::delete($oldPath);
                }
            }

            $file = $request->file('image');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/dashboard'), $filename);
            $data['image_url'] = $filename;
        }
        unset($data['image']);

        if ($request->hasFile('icon_file')) {
            // Delete old icon if it exists and is an uploaded file
            if ($assessment->icon && str_starts_with($assessment->icon, '/images/icons/')) {
                $oldIconPath = public_path(ltrim($assessment->icon, '/'));
                if (\Illuminate\Support\Facades\File::exists($oldIconPath)) {
                    \Illuminate\Support\Facades\File::delete($oldIconPath);
                }
            }

            $file = $request->file('icon_file');
            $filename = 'icon_'.time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/icons'), $filename);
            $data['icon'] = '/images/icons/' . $filename;
        }
        unset($data['icon_file']);


        $this->assessmentService->updateSettings($assessment, $data);

        return response()->json(['success' => true, 'message' => 'تم حفظ الإعدادات بنجاح.']);
    }

    public function destroy(Assessment $assessment): JsonResponse
    {
        $this->assessmentService->delete($assessment);

        return response()->json(['success' => true, 'message' => 'تم حذف المقياس.']);
    }

    public function toggle(Assessment $assessment): JsonResponse
    {
        $updated = $this->assessmentService->toggle($assessment);
        $status = $updated->is_active ? 'تم تفعيل' : 'تم إيقاف';

        return response()->json([
            'success' => true,
            'message' => "$status المقياس.",
            'is_active' => $updated->is_active,
        ]);
    }

    public function previewResult(Assessment $assessment, string $level): View
    {
        abort_unless(in_array($level, ['high', 'medium', 'low']), 422, 'مستوى غير صالح.');

        // Find the recommendation for this level
        $recommendation = $assessment->recommendations()->where('level', $level)->first();
        
        $score = $recommendation ? $recommendation->high_threshold : 100;
        
        // Mock a Result model
        $result = new Result([
            'id' => 'PREVIEW-'.time(),
            'assessment_id' => $assessment->id,
            'total_score' => $score,
            'max_possible_score' => 100,
            'level' => $level,
            'calculated_at' => now(),
        ]);

        // Mock DimensionScore models and load their related dimension
        $result->setRelation('dimensionScores', $assessment->dimensions->map(function ($dim) use ($level, $assessment) {
            $interp = $dim->interpretations()->where('level', $level)->first();
            $ds = new DimensionScore([
                'dimension_id' => $dim->id,
                'score' => $interp ? $interp->high_threshold : 10,
                'max_score' => 10,
                'level' => $level,
            ]);
            
            $clonedDim = clone $dim;
            $clonedDim->load('interpretations');
            $ds->setRelation('dimension', $clonedDim);
            
            return $ds;
        }));

        $formatter = app(ResultFormatter::class);
        $formattedData = $formatter->format($assessment, $result, $recommendation);
        
        // Create a dummy session for the view
        $session = tap(new ExamSession([
            'id' => 'PREVIEW-SESSION-'.time(),
            'status' => 'completed',
        ]))->setRelation('result', $result)
           ->setRelation('assessment', $assessment);

        return view('user.result', array_merge(['session' => $session], $formattedData));
    }
}
