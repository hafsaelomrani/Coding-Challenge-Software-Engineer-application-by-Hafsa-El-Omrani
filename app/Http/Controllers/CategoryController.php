<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesResource;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    
    public function get_all_categories()
    {
        $categries= Category::all();
        return $categries;
    }

    public function show_category(Category $categrie)
    {
        return $categrie;
    }

    public function add_category(Request $request)
    {
       $categrie=Category::create($request->all());

        return new CategoriesResource($categrie);
    }

    public function update_category(Request $request, Category $categrie)
    {
        $categrie ->update([
            'name' => ($request->name)?$request->name:$categrie->name,
            'parent_category' =>($request->parent_category)?$request->parent_category:$categrie->parent_category,
           ]);
           return $categrie;
    }


    public function delete_category(Category $categrie)
    {
        $categrie->delete();
        return response('Deleted',200);
    }
}
