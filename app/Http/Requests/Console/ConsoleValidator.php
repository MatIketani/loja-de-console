<?php

namespace App\Http\Requests\Console;

use Illuminate\Foundation\Http\FormRequest;

class ConsoleValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'model' => ['required', 'string', 'max:100'],
            'brand' => ['required', 'int', 'exists:Brand,idBrand'],
            'price' => ['required', 'numeric']
        ];
    }
}