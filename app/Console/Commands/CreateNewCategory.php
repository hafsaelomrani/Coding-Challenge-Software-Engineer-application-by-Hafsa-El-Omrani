<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class CreateNewCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new category through Artisan';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name =$this->ask('What is the catgory name');
        $parent_category =$this->ask('What is the parent category');
       
        Category::create([
        'name'=>$name,
        'parent_category'=>$parent_category
        ]);

        $this->info('Category has been created');
    }
}
