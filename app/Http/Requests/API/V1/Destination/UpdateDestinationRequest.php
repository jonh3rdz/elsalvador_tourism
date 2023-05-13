<?php

namespace App\Http\Requests\API\V1\Destination;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDestinationRequest extends FormRequest
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
            'name.required'    => 'El nombre es requerido.',
            'description.required'    => 'El nombre es requerido.',
            'location.required'    => 'El nombre es requerido.',
            'image_url.required'    => 'El nombre es requerido.',
        ];
    }
}
