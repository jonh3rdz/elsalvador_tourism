<?php

namespace App\Http\Resources\API\V1\Review;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'comment' => $this->comment,
            'rating' => $this->rating,
            'destination_id' => $this->destination_id,
            'hotel_id' => $this->hotel_id,
            'restaurant_id' => $this->restaurant_id,
            'activity_id' => $this->activity_id
        ];
    }
}
