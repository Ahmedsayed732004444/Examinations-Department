<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaveCouponRequest;
use App\Models\Coupon;
use App\Services\CouponService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CouponController extends Controller
{
    public function __construct(
        private readonly CouponService $couponService,
    ) {}

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
        $this->couponService->createCoupon($request->validated());

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
        $this->couponService->updateCoupon($coupon, $request->validated());

        return redirect()->route('admin.coupons.index')->with('success', 'تم تحديث الكوبون بنجاح');
    }

    public function destroy(Coupon $coupon): RedirectResponse
    {
        $this->couponService->deleteCoupon($coupon);

        return redirect()->route('admin.coupons.index')->with('success', 'تم حذف الكوبون بنجاح');
    }
}
