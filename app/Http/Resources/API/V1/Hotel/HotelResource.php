<?php

namespace App\Http\Resources\API\V1\Hotel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'location' => $this->location,
            'image_url' => $this->image_url,
            'price' => $this->price,
            'opening_hours' => $this->opening_hours,
            'contact_address' => $this->contact_address,
            'contact_phone' => $this->contact_phone,
            'contact_email' => $this->contact_email,
            'destination_id' => $this->destination_id
        ];
    }
}
