<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspeciePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'clima' => 'required|string|max:255',
            'tiempo' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages result of validation
     * 
     * 
     */
    public function messages() {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'clima.required' => 'El clima es obligatorio.',
            'tiempo.required' => 'El tiempo es obligatorio.',
        ];
    }
}