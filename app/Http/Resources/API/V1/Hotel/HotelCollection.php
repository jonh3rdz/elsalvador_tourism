<?php

namespace App\Http\Resources\API\V1\Hotel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HotelCollection extends ResourceCollection
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
            'type' => 'Hotels'
        ];
    }
}
