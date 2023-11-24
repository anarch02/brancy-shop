<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('is_admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => ['required', 'int'],
            'name' => ['reqired', 'string', 'unique:products'],
            'category_id' => ['required'],
            'image' => ['required', 'file', 'image'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'text']
        ];
    }
}
