<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
   
    public function toArray($request)
    {
        [
            
            'name'=> (string)$this->name,
            'description'=>(string)$this->description,
            'price'=> (float)$this->price,
            'image'=>(string)$this->image,
            'cat_id'=>$this->cat_id,

    ];
    }
}
