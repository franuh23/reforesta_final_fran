<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoPut extends FormRequest
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
        $eventoId = $this->route('evento')->id;

        return [
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'id_usuario' => 'required',
            'imagen' => 'nullable|extensions:jpg,png',
            'pdf' => 'nullable|extensions:pdf',
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
            'ubicacion.required' => 'La ubicación es obligatoria.',
            'id_usuario.required' => 'Hay que indicar un ID de usuario.',
            'imagen.extensions' => 'Formato de imagen inválido, sólo jpg y png.',
            'pdf.extensions' => 'Formato de pdf inválido.',
        ];
    }
}
