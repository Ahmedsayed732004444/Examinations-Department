<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveCouponRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_active' => $this->has('is_active'),
            'applies_to_all_assessments' => $this->has('applies_to_all_assessments'),
            'applies_to_all_users' => $this->has('applies_to_all_users'),
        ]);
    }

    public function rules(): array
    {
        $couponId = $this->route('coupon') ? $this->route('coupon')->id : null;

        return [
            'title' => 'required|string|max:255',
            'code' => ['required', 'string', 'max:50', Rule::unique('coupons')->ignore($couponId)],
            'assessments_limit' => 'required|integer|min:1',
            'expires_at' => 'nullable|date',
            'is_active' => 'boolean',
            'discount_percentage' => 'required|integer|min:0|max:100',
            'discount_percentage_2nd' => 'nullable|integer|min:0|max:100',
            'discount_percentage_3rd' => 'nullable|integer|min:0|max:100',
            'discount_percentage_4th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_5th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_6th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_7th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_8th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_9th' => 'nullable|integer|min:0|max:100',
            'discount_percentage_10th' => 'nullable|integer|min:0|max:100',
            'applies_to_all_assessments' => 'boolean',
            'assessment_ids' => 'nullable|array',
            'assessment_ids.*' => 'exists:assessments,id',
            'applies_to_all_users' => 'boolean',
            'permitted_user_ids' => 'nullable|array',
            'permitted_user_ids.*' => 'exists:users,id',
        ];
    }
}
