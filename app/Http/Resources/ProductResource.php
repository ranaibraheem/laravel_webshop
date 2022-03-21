<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'description'   =>$this->description,
            'info'          =>$this->info,
            'price'         =>$this->price,
            'onsale30'      =>$this->onsale30,
            'onsale50'      =>$this->onsale50,
            'category'      =>$this->category,
            'stock'         =>$this->stock,
            'quantity'      =>$this->quantity,
            'image'         =>$this->image,
            'alt'           =>$this->alt,
            'showstatus'    =>$this->showstatus
        ];
    }
}
