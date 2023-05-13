<?php

namespace App\Http\Resources\API\V1\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
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
            'destination_id' => $this->destination_id
        ];
    }
}
