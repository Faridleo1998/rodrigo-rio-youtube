<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:255', Rule::unique('products')->ignore($this->product)],
            'description' => ['nullable', 'string', 'min:4', 'max:255'],
            'category_id' => ['nullable', 'exists:categories,id']
        ];
    }
}
