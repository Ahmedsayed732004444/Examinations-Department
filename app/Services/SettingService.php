<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingService
{
    public function __construct(
        private readonly FileUploadService $fileUploadService,
    ) {}

    public function getAllAsKeyValue(): array
    {
        return Setting::pluck('value', 'key')->toArray();
    }

    public function updateFromRequest(Request $request, array $validatedData): void
    {
        $textData = collect($validatedData)->except(['stat_users_icon', 'stat_exams_icon', 'stat_assessments_icon', 'stat_fields_icon'])->toArray();

        foreach ($textData as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $iconKeys = ['stat_users_icon', 'stat_exams_icon', 'stat_assessments_icon', 'stat_fields_icon'];
        foreach ($iconKeys as $key) {
            if ($request->hasFile($key)) {
                $oldSetting = Setting::where('key', $key)->first();
                $oldUrl = $oldSetting ? $oldSetting->value : null;

                $newUrl = $this->fileUploadService->uploadPublicImage(
                    $request->file($key),
                    'images/icons',
                    $oldUrl,
                    'sysicon'
                );

                Setting::updateOrCreate(['key' => $key], ['value' => $newUrl]);
            }
        }

        Cache::forget('site_settings');
    }
}
