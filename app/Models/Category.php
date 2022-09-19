<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $table = "Categories";
    protected $fillable = [

        'name',
        'parent_category'

    ];
    public function Category(){
        return $this-> hasMany(Product::class);
    }
}
