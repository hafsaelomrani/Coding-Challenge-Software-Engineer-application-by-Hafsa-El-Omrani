<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;

class ProductController extends Controller
{
    
    public function get_all_products()
    {
        $products= Product::all();
        return $products;
    }

    public function add_product(Request $request)
    {
        $product = new Product();
        $product -> name =$request->name;
        $product -> category =$request->category;
        $product -> price =$request->price;
        if ($request->photo="")
        {
            $strpos =strpos($request->photo,';');
            $su=substr($request->photo,0,$strpos);
            $ex=exlode('/',$sub)[1];
            $name=time().".".$ex;
            $imgÎmage::make($request->photo)->resize(200,200);
            $upload_path=piblic_path()."/upload/";
            $img->save($upload_path.$name);
            $product->photo=$name;
        }
        else
        {
            $product->phtp='image.png';
        }
        $product -> description =$request->description;
        $product ->photo =$name;
        $product -> category = $category;
        $product -> price = $price;
        $product -> description =$description;
        $product ->name =$name;
        
    }
     
    public function show_product(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
       $product=Product::create($request->all());
       
        return new ProductsResource($product);
    }

    public function update_product(Request $request, Product $product)
    {
        $product ->update([
            'name' => ($request->name)?$request->name:$product->name,
            'description' =>($request->description)?$request->description:$product->description,
            'price' => ($request->price)?$request->price:$product->price,
            'image' => ($request->image)?$request->image:$product->image,
            'cat_id' => ($request->cat_id)?$request->cat_id:$product->cat_id,
           ]);
           return $product;
    }


    public function delete_product(Product $product)
    {
        $product->delete();
        return response('Deleted',200);
    }
}
