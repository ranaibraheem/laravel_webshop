<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserAddressResource extends JsonResource
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
            'user_id'        => $this->user_id,
            'street'         => $this->street,
            'zip_code'       => $this->zip_code,
            'house_number'   => $this->house_number,
            'city'           => $this->city,
            'country'        => $this->country,
                ];
        }
}
