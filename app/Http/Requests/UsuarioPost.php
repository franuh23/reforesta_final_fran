<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioPost extends FormRequest
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
            'nick' => 'required|string|max:50|unique:usuarios,nick',
            'email' => 'required|email|max:255|unique:usuarios,email',
            'password' => 'required|string|min:6', // como se añade el confirmed
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
            'nick.required' => 'El nick es obligatorio.',
            'nick.unique' => 'Ese nick ya está en uso.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',
            'email.unique' => 'Ese correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 6 carácteres.',
            //'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
