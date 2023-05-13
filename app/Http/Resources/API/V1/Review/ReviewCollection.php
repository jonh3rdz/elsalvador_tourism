<?php

namespace App\Http\Resources\API\V1\Review;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ReviewCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request)
    {
        return [
            'data' => ReviewResource::collection($this->collection),
            'meta' => [
                'Group' => '1',
                'Authors' => [
                    'Diego',
                    'Alessandro',
                    'Carolina'
                ],
            ],
            'type' => 'Reviews'
        ];
    }
}
