<?php

namespace App\Http\Requests\API\V1\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            'image_url' => 'required|max:255',
            'price' => 'required|numeric',
            'opening_hours' => 'required|max:255',
            'contact_address' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|email|max:255',
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

            'accepted' => 'Debes aceptar los términos y condiciones.',
            'alpha_num' => 'El campo :attribute debe contener solo letras y números.',
            'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
            'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
            'date' => 'El campo :attribute debe ser una fecha válida.',
            'boolean' => 'El campo debe ser verdadero o falso.',
            'digits' => 'El campo :attribute debe tener :value dígitos.',
            'digits_between' => 'El campo :attribute debe tener entre :min y :max dígitos.',
            'file' => 'El campo :attribute debe ser un archivo.',
            'filled' => 'El campo debe tener un valor (no vacío).',
            'image' => 'El archivo seleccionado para :attribute debe ser una imagen.',
            'in' => 'El valor seleccionado para :attribute no es válido.',
            'integer' => 'El campo :attribute debe ser un número entero.',
            'nullable' => 'El campo :attribute puede ser nulo.',
            'required_if' => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
        ];
    }
}
