<?php

use App\Http\Controllers\MainWebSite\MainController;
use Illuminate\Support\Facades\Route;
;




Route::get('/',[MainController::class,'index']);
Route::get('/cat/{id}',[MainController::class,'cat_Show']);
Route::get('/product/{id}',[MainController::class,'product_Show']);


