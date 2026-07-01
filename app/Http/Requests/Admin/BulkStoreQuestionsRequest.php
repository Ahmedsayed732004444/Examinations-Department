<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BulkStoreQuestionsRequest extends FormRequest
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
            'dimension_id' => 'nullable|uuid|exists:dimensions,id',
            'questions_text' => 'required|string',
        ];
    }
}
