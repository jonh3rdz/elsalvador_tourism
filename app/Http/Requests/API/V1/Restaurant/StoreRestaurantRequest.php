<?php

namespace App\Http\Requests\API\V1\Restaurant;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
            'image_url' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'opening_hours' => 'nullable|max:255',
            'destination_id' => 'required|exists:destinations,id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no debe tener más de :max caracteres.',
            'min' => 'El valor mínimo permitido para :attribute es :min.',
            'numeric' => 'El campo :attribute debe ser numérico.',
            'exists' => 'El valor seleccionado para :attribute no es válido.',
            'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
            'unique' => 'El valor ingresado para :attribute ya existe en la base de datos.',
        ];
    }
}
