<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'id' => $this->id,
            'region' => $this->region,
            'locality' => $this->locality,
            'street' => $this->street,
            'houseNumber' => $this->houseNumber,
            'postcode' => $this->postcode,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
        ];
    }
}
