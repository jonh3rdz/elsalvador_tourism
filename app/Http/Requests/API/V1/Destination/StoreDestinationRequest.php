<?php

namespace App\Http\Requests\API\V1\Destination;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'description' => 'nullable|max:255',
            'location' => 'nullable|max:255',
            'image_url' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no debe tener más de :max caracteres.',
            'exists' => 'El valor seleccionado para :attribute no es válido.',
            'numeric' => 'El campo :attribute debe ser numérico.',
            'integer' => 'El campo :attribute debe ser un número entero.',
            'min' => 'El valor mínimo permitido para :attribute es :min.',
            'image' => 'El archivo seleccionado para :attribute debe ser una imagen.',
            'in' => 'El valor seleccionado para :attribute no es válido.',
        ];
    }
}
