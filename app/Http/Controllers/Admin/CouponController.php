<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->paginate(10);

        return view('admin.coupons.index', compact('coupons'));
    }

    public function create()
    {
        $assessments = \App\Models\Assessment::orderBy('title_ar')->get();
        $users = \App\Models\User::orderBy('name')->get();
        return view('admin.coupons.create', compact('assessments', 'users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:coupons,code',
            'assessments_limit' => 'required|integer|min:1',
            'expires_at' => 'nullable|date',
            'is_active' => 'boolean',
            'discount_percentage' => 'required|integer|min:0|max:100',
            'discount_percentage_2nd' => 'nullable|integer|min:0|max:100',
            'discount_percentage_3rd' => 'nullable|integer|min:0|max:100',
            'applies_to_all_assessments' => 'boolean',
            'assessment_ids' => 'nullable|array',
            'assessment_ids.*' => 'exists:assessments,id',
            'applies_to_all_users' => 'boolean',
            'permitted_user_ids' => 'nullable|array',
            'permitted_user_ids.*' => 'exists:users,id',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['applies_to_all_assessments'] = $request->has('applies_to_all_assessments');
        $validated['applies_to_all_users'] = $request->has('applies_to_all_users');

        $coupon = Coupon::create($validated);

        if (!$coupon->applies_to_all_assessments && $request->has('assessment_ids')) {
            $coupon->assessments()->sync($request->assessment_ids);
        }

        if (!$coupon->applies_to_all_users && $request->has('permitted_user_ids')) {
            $coupon->permittedUsers()->sync($request->permitted_user_ids);
        }

        return redirect()->route('admin.coupons.index')->with('success', 'تم إضافة الكوبون بنجاح');
    }

    public function edit(Coupon $coupon)
    {
        $assessments = \App\Models\Assessment::orderBy('title_ar')->get();
        $couponAssessmentIds = $coupon->assessments()->pluck('assessment_id')->toArray();
        $users = \App\Models\User::orderBy('name')->get();
        $couponPermittedUserIds = $coupon->permittedUsers()->pluck('user_id')->toArray();
        return view('admin.coupons.edit', compact('coupon', 'assessments', 'couponAssessmentIds', 'users', 'couponPermittedUserIds'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:coupons,code,' . $coupon->id,
            'assessments_limit' => 'required|integer|min:1',
            'expires_at' => 'nullable|date',
            'is_active' => 'boolean',
            'discount_percentage' => 'required|integer|min:0|max:100',
            'discount_percentage_2nd' => 'nullable|integer|min:0|max:100',
            'discount_percentage_3rd' => 'nullable|integer|min:0|max:100',
            'applies_to_all_assessments' => 'boolean',
            'assessment_ids' => 'nullable|array',
            'assessment_ids.*' => 'exists:assessments,id',
            'applies_to_all_users' => 'boolean',
            'permitted_user_ids' => 'nullable|array',
            'permitted_user_ids.*' => 'exists:users,id',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['applies_to_all_assessments'] = $request->has('applies_to_all_assessments');
        $validated['applies_to_all_users'] = $request->has('applies_to_all_users');

        $coupon->update($validated);

        if ($coupon->applies_to_all_assessments) {
            $coupon->assessments()->detach();
        } else {
            $coupon->assessments()->sync($request->input('assessment_ids', []));
        }

        if ($coupon->applies_to_all_users) {
            $coupon->permittedUsers()->detach();
        } else {
            $coupon->permittedUsers()->sync($request->input('permitted_user_ids', []));
        }

        return redirect()->route('admin.coupons.index')->with('success', 'تم تحديث الكوبون بنجاح');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('admin.coupons.index')->with('success', 'تم حذف الكوبون بنجاح');
    }
}
