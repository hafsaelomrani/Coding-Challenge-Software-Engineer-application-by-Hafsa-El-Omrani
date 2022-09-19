<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [

        'name',
        'description',
        'price',
        'image',
        'cat_id'
    ];
    public function Category(){
        return $this-> hasMany(Category::class);
    }
}
