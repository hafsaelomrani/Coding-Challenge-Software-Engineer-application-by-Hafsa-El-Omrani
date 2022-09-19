<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model =Category::class;
    public function definition()
    {
        return [
            'name' => $this->faker->string,
            'parent_category' => $this->faker->string,
        ];
    }
}
