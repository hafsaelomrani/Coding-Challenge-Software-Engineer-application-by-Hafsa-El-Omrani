<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class CreateNewProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new product through Artisan';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name =$this->ask('What is the product name');
        $description =$this->ask('What is the product description');
        $price =$this->ask('What is the product price');
        $image =$this->ask('What is the product image');
        $cat_id =$this->ask('What is the product cat_id');

        Product::create([
        'name'=>$name,
        'description'=>$description,
        'price'=>$price,
        'image'=>$image,
        'cat_id'=>$cat_id,
        ]);

        $this->info('Product has been created');
     
    }
}
