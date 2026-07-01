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
            'level' => 'required|in:high,medium,low',
            'description_ar' => 'required|string',
            'programs_ar' => 'required|string',
            'high_threshold' => 'required|integer|min:0',
            'low_threshold' => 'required|integer|min:0',
        ];
    }
}
