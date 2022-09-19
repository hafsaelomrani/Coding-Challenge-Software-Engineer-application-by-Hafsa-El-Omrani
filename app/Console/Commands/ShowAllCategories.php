<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class ShowAllCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all available categories';

    /**
     * Execute the console command.
     *
     * @return array
     */
    public function handle()
    {
        print_r(Category::all()->toArray());
    }
}
