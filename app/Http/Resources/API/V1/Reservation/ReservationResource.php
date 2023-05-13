<?php

namespace App\Http\Resources\API\V1\Reservation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            'email' => $this->email,
            'phone' => $this->phone,
            'destination_id' => $this->destination_id,
            'hotel_id' => $this->hotel_id,
            'restaurant_id' => $this->restaurant_id,
            'activity_id' => $this->activity_id
        ];
    }
}
