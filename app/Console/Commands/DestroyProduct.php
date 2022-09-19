<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class DestroyProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destroy:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete product';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        $id =$this->ask('What is the product id');
        $product = Product::find($id);
        $product-> delete();
        session()->flash('message','Product has been deleted successfully !');
    }
}
