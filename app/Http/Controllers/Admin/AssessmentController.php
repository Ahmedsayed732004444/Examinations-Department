<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssessmentRequest;
use App\Http\Requests\Admin\UpdateAssessmentRequest;
use App\Http\Requests\Admin\UpdateSettingsRequest;
use App\Models\Assessment;
use App\Services\AssessmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
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

        return view('admin.assessments.show', compact('assessment'));
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
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $file = $request->file('image');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/dashboard'), $filename);
            $data['image_url'] = $filename;
        }
        unset($data['image']);

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
}
