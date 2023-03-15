<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RezervacijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ID -> ' => $this->resource->id,
            'Ukupna cena rezervacije -> ' => $this->resource->iznos,
            'Broj sedista -> ' => $this->resource->sediste,
            'Nacin placanja -> ' => $this->resource->nacinPlacanja,
            'Gledalac -> ' => new GledalacResource($this->resource->gledalac),
            'Film -> ' => new FilmResource($this->resource->film)
        ];
    }
}
