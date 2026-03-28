<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspeciePut extends FormRequest
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
        $especieId = $this->route('especie')->id;

        return [
            'nombre' => 'required|string|max:255',
            'clima' => 'required|string|max:255',
            'tiempo' => 'required|string|max:255',
            'foto' => 'nullable|extensions:jpg,png',
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
            'foto.extensions' => 'Formato de imagen inválido, sólo jpg y png.',
        ];
    }
}
