<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct(
        private readonly SettingService $settingService,
    ) {}

    public function index()
    {
        $settings = $this->settingService->getAllAsKeyValue();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'stats_mode' => 'required|in:manual,auto',
            'stat_users' => 'required|string|max:255',
            'stat_exams' => 'required|string|max:255',
            'stat_assessments' => 'required|string|max:255',
            'stat_fields' => 'required|string|max:255',
            'stat_users_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'stat_exams_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'stat_assessments_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'stat_fields_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $this->settingService->updateFromRequest($request, $data);

        return redirect()->back()->with('success', 'تم تحديث الإحصائيات والإعدادات بنجاح.');
    }
}
