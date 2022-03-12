<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainWebSite\MainController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/',[MainController::class,'index']);
    Route::get('/cat/{id}',[MainController::class,'cat_Show']);
    Route::get('/product/{id}',[MainController::class,'product_Show']);

    Route::get('/carts',[MainController::class,'cart_Show']);
    Route::post('/cart/store/{id}',[MainController::class,'cart_store']);
    Route::post('/order/store',[MainController::class,'order_store']);
});




Route::view('dashboard','dashboard');

Route::get('/test',[MainController::class,'test']);
