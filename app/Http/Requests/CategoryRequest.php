<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:255', Rule::unique('categories')->ignore($this->category)],
            'description' => ['nullable', 'string', 'min:4', 'max:255']
        ];
    }
}
