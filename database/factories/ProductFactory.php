<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model =Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->string,
            'description' =>$this->faker->string,
            'price' =>$this->faker->float,
            'image' =>$this->faker->string,
            'cat_id' =>$this->faker->number,
         ];
    }
}
