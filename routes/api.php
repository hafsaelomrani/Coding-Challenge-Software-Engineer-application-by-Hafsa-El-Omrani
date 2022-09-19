<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



Route::middleware('api')->prefix('v1')->group(function()
{
    Route::apiResource('/categories',CategoryController::class);
});

Route::middleware('api')->prefix('v1')->group(function()
{
    Route::apiResource('/products',ProductController::class);
});

Route::get('/get_all_products',[ProductController::class,'get_all_products']);

Route::get('/delete_product',[ProductController::class,'delete_product']);
