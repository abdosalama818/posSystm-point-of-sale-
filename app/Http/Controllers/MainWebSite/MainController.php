<?php

namespace App\Http\Controllers\MainWebSite;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('home.index');
    }

    public function cat_Show($id){
        $cats = Cat::all();
        $cat = Cat::findOrFail($id);
        return view('home.cat',[
            'cat' =>$cat,
            'cats' =>$cats
        ]);
    }

    public function product_Show($id){
        $products = Product::all();
        $product = Product::findOrFail($id);
        return view('home.product',[
            'product' =>$product,
            'products' =>$products
        ]);
    }
}

