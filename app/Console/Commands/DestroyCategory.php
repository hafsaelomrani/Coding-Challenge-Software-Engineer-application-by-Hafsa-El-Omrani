<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class DestroyCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destroy:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete catgory';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id =$this->ask('What is the category id');
        $category = Category::find($id);
        $category-> delete();
        session()->flash('message','Category has been deleted successfully !');
    }
}
