<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'scoring_type' => 'required|in:overall_score,highest_dimension,dimension_only',
            'description_ar' => 'nullable|string',
            'time_limit_min' => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|numeric|min:0',
            'rating' => 'nullable|numeric|min:1|max:5',
            'is_active' => 'nullable|boolean',
            'hide_coupon_field' => 'nullable|boolean',
            'icon' => 'nullable|string|max:100',
            'icon_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }

    /**
     * Prepare the data for validation (cast checkbox boolean).
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_active' => $this->boolean('is_active'),
            'hide_coupon_field' => $this->boolean('hide_coupon_field'),
        ]);
    }
}
