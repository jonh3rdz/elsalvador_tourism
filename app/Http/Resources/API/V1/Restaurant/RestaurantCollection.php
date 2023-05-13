<?php

namespace App\Http\Resources\API\V1\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RestaurantCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'Group' => '1',
                'Authors' => [
                    'Diego',
                    'Allessandro',
                    'Carolina'
                ],
            ],
            'type' => 'Restaurants'
        ];
    }
}
