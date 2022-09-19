<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    print_r(Artisan::call('show:product'));
    return view('welcome');
});

Route::get('/{pathMatch}',function()
{
    return view('Welcome') ; 
})->where('pathMatch',".*");

Route::get('/add_product',[ProductController::class,'get_all_products']);
Route::post('/add_product',[ProductController::class,'add_product']);

