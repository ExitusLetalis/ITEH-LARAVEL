<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeniserResurs extends JsonResource
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
            'Ime - ' => $this->resource->ime,
            'Prezime - ' => $this->resource->prezime,
            'Država - ' => $this->resource->drzava,
            'Godište -  ' => $this->resource->godiste,
            'Rank - ' => $this->resource->rank,
        ];
    }
}
