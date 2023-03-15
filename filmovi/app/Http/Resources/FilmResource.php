<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
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
            'Naziv filma -> ' => $this->resource->naziv,
            'Zanr filma -> ' => $this->resource->zanr,
            'Broj sale u kojoj se odrzava projekcija -> ' => $this->resource->brojSale,
            'Nacin prevodjenja -> '=> $this->resource->nacinPrevodjenja,
        ];
    }
}
