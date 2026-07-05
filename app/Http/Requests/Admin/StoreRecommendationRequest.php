<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecommendationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'assessment_id' => 'required|uuid|exists:assessments,id',
            'level' => 'required|string',
            'description_ar' => 'required|string',
            'programs_ar' => 'nullable|string',
            'high_threshold' => 'nullable|integer|min:0',
            'low_threshold' => 'nullable|integer|min:0',
        ];
    }
}
