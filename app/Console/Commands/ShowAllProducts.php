<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ShowAllProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all available products';

    /**
     * Execute the console command.
     *
     * @return array
     */
    public function handle()
    {
          print_r(Product::all()->toArray());
    }
}
