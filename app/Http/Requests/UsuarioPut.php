<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioPut extends FormRequest
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
        $userId = $this->route('usuario')->id; // Obtiene el ID del usuario que se está editando

        return [
            'nombre' => 'required|string|max:255',
            'nick' => "required|string|max:50|unique:usuarios,nick,{$userId}",
            'email' => "required|email|max:255|unique:usuarios,email,{$userId}",
            'password' => 'nullable|string|min:6',
            'avatar' => 'nullable|extensions:jpg,png',
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
            'password.min' => 'La contraseña debe tener al menos 6 carácteres.',
            'avatar.extensions' => 'Formato de imagen inválido, sólo jpg y png.',
        ];
    }
}
