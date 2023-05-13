<?php

namespace App\Http\Requests\API\V1\Reservation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'destination_id' => 'nullable|exists:destinations,id',
            'hotel_id' => 'nullable|exists:hotels,id',
            'restaurant_id' => 'nullable|exists:restaurants,id',
            'activity_id' => 'nullable|exists:activities,id',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no debe tener más de :max caracteres.',
            'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
            'exists' => 'El valor seleccionado para :attribute no es válido.',
            'nullable' => 'El campo :attribute es opcional.',
        ];
    }
}
