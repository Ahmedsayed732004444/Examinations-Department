<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IconController extends Controller
{
    public function index()
    {
        $icons = Icon::orderBy('created_at', 'desc')->get()->groupBy('category');
        return view('admin.icons.index', compact('icons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:certificates,programs,plan_30_days,assessments,system',
            'icon_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:500', // max 500KB
        ], [
            'icon_file.max' => 'حجم الأيقونة يجب أن لا يتجاوز 500 كيلوبايت لضمان سرعة التقرير.',
            'icon_file.image' => 'يجب اختيار ملف صورة صالح.',
        ]);

        if ($request->hasFile('icon_file')) {
            $file = $request->file('icon_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Move to public/images/icons
            $destinationPath = public_path('images/icons');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            
            $file->move($destinationPath, $filename);
            
            $iconUrl = '/images/icons/' . $filename;

            Icon::create([
                'name' => $request->name,
                'category' => $request->category,
                'icon_url' => $iconUrl,
            ]);

            return back()->with('success', 'تم إضافة الأيقونة بنجاح.');
        }

        return back()->withErrors(['icon_file' => 'فشل في رفع الأيقونة.']);
    }

    public function destroy(Icon $icon)
    {
        // Extract filename from URL
        $filename = basename($icon->icon_url);
        $path = public_path('images/icons/' . $filename);
        
        if (File::exists($path)) {
            File::delete($path);
        }

        $icon->delete();

        return back()->with('success', 'تم حذف الأيقونة بنجاح.');
    }
}
