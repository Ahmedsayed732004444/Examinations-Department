<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
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

        $textData = collect($data)->except(['stat_users_icon', 'stat_exams_icon', 'stat_assessments_icon', 'stat_fields_icon'])->toArray();

        foreach ($textData as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $iconKeys = ['stat_users_icon', 'stat_exams_icon', 'stat_assessments_icon', 'stat_fields_icon'];
        foreach ($iconKeys as $key) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $filename = 'sysicon_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/icons'), $filename);
                
                $oldSetting = Setting::where('key', $key)->first();
                $oldPath = null;
                if ($oldSetting && str_starts_with($oldSetting->value, '/images/icons/')) {
                    $oldPath = public_path(ltrim($oldSetting->value, '/'));
                }
                
                Setting::updateOrCreate(['key' => $key], ['value' => '/images/icons/' . $filename]);
                
                if ($oldPath && File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
        }

        Cache::forget('site_settings');

        return redirect()->back()->with('success', 'تم تحديث الإحصائيات والإعدادات بنجاح.');
    }
}
