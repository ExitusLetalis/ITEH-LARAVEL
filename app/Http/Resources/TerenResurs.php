<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TerenResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Naziv - ' => $this->resource->naziv,
            'Lokacija - ' => $this->resource->lokacija,
            'Kapacitet - ' => $this->resource->kapacitet,
        ];
    }
}
