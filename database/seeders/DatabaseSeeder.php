<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Category::factory()->count(5)->create();

        Product::factory()->count(3)->create();
        
        // DB::table('categories')->insert([
        //     'name'=>Str::random(10),
        //     'parent_category'=>Str::random(10),]);

        // DB::table('products')->insert([
        //     'name'=>Str::random(10),
        //     'description'=>Str::random(10),
        //     'price'=>Str::random(10),
        //     'image'=>Str::random(10),
        //     'cat_id'=>Str::random(10),]);
    }
}  


