<?php

namespace App\Http\Resources\API\V2\Destination;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
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
            'nombre' => $this->name,
            'description' => $this->description,
            'horario' => $this->horario,
            'location' => $this->location,
            'image_url' => $this->image_url,
        ];
    }
}
