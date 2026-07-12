<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Http\Requests\Admin\SaveCouponRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->paginate(10);

        return view('admin.coupons.index', compact('coupons'));
    }

    public function create(): View
    {
        $assessments = \App\Models\Assessment::orderBy('title_ar')->get();
        $users = \App\Models\User::orderBy('name')->get();
        return view('admin.coupons.create', compact('assessments', 'users'));
    }

    public function store(SaveCouponRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $coupon = Coupon::create($validated);

        if (!$coupon->applies_to_all_assessments && !empty($validated['assessment_ids'])) {
            $coupon->assessments()->sync($validated['assessment_ids']);
        }

        if (!$coupon->applies_to_all_users && !empty($validated['permitted_user_ids'])) {
            $coupon->permittedUsers()->sync($validated['permitted_user_ids']);
        }

        return redirect()->route('admin.coupons.index')->with('success', 'تم إضافة الكوبون بنجاح');
    }

    public function edit(Coupon $coupon): View
    {
        $assessments = \App\Models\Assessment::orderBy('title_ar')->get();
        $couponAssessmentIds = $coupon->assessments()->pluck('assessment_id')->toArray();
        $users = \App\Models\User::orderBy('name')->get();
        $couponPermittedUserIds = $coupon->permittedUsers()->pluck('user_id')->toArray();
        return view('admin.coupons.edit', compact('coupon', 'assessments', 'couponAssessmentIds', 'users', 'couponPermittedUserIds'));
    }

    public function update(SaveCouponRequest $request, Coupon $coupon): RedirectResponse
    {
        $validated = $request->validated();

        $coupon->update($validated);

        if ($coupon->applies_to_all_assessments) {
            $coupon->assessments()->detach();
        } else {
            $coupon->assessments()->sync($validated['assessment_ids'] ?? []);
        }

        if ($coupon->applies_to_all_users) {
            $coupon->permittedUsers()->detach();
        } else {
            $coupon->permittedUsers()->sync($validated['permitted_user_ids'] ?? []);
        }

        return redirect()->route('admin.coupons.index')->with('success', 'تم تحديث الكوبون بنجاح');
    }

    public function destroy(Coupon $coupon): RedirectResponse
    {
        $coupon->delete();

        return redirect()->route('admin.coupons.index')->with('success', 'تم حذف الكوبون بنجاح');
    }
}
