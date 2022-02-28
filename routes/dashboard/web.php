<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CatController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {

        Route::prefix('dashboard')->group(function () {
            Route::view('/','dashboard.index');
            Route::view('/add/cat','dashboard.add_cat');
            Route::post('/store/cat',[CatController::class,'store']);
            Route::get('/cats',[CatController::class,'show']);
            Route::get('/edit/cat/{id}',[CatController::class,'edit_cat']);
            Route::post('/update/cat/{id}',[CatController::class,'update']);

            Route::get('/delete/cat/{id}',[CatController::class,'cat_delete']);
            Route::get('/serch/cat/',[CatController::class,'search_cat']);


            Route::get('/add/product',[ProductController::class,'add_products']);
            Route::get('/products',[ProductController::class,'products_show']);
            Route::post('/store/product',[ProductController::class,'products_store']);
            Route::get('/edit/product/{id}',[ProductController::class,'edit_product']);
            Route::post('/update/product/{id}',[ProductController::class,'update_product']);

            Route::get('/delete/product/{id}',[ProductController::class,'product_delete']);
            Route::get('/serch/product/',[ProductController::class,'search_product']);

            // clients toute
            Route::view('/add/client','dashboard.clients.add_client');
            Route::post('/store/client',[ClientController::class,'client_store']);
            Route::get('/clients',[ClientController::class,'clients_show']);
            Route::get('/edit/client/{id}',[ClientController::class,'client_edit']);

            Route::post('/update/client/{id}',[ClientController::class,'update_client']);

            Route::get('/delete/client/{id}',[ClientController::class,'client_delete']);

            Route::get('/serch/clients/',[ClientController::class,'search_client']);


        });


    });



