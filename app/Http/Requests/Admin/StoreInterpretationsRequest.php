<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreInterpretationsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'high_threshold' => 'required|integer|min:0',
            'low_threshold' => 'required|integer|min:0',
            'interpretations' => 'required|array|size:3',
            'interpretations.high' => 'required|string',
            'interpretations.medium' => 'required|string',
            'interpretations.low' => 'required|string',
        ];
    }
}
