<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResource extends JsonResource
{
    
    public function toArray($request)
    {
        return  [
            'name'=> (string)$this->name,
            'parent_category'=>(string)$this->description,


    ];

    }
}
