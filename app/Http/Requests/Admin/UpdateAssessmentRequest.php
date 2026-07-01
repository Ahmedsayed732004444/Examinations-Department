<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssessmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'time_limit_min' => 'nullable|integer|min:1',
        ];
    }
}
