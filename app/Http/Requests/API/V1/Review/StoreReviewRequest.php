<?php

namespace App\Http\Requests\API\V1\Review;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'comment' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'destination_id' => 'required|exists:destinations,id',
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
            'min' => 'El valor mínimo permitido para :attribute es :min.',
            'integer' => 'El campo :attribute debe ser un número entero.',
            'exists' => 'El valor seleccionado para :attribute no es válido.',
        ];
    }
}
