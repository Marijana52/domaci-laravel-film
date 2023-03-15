<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GledalacResource extends JsonResource
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
            'Ime prezime gledaoca -> ' => $this->resource->imePrezime,
            'Broj telefona gledaoca-> ' => $this->resource->brojTelefona,
            'Broj godina gledaoca -> ' => $this->resource->godine
        ];
    }
}
