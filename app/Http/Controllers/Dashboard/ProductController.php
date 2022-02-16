<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function products_show()
    {
        $products = Product::all();
        return view('dashboard.products.products',[
            'products'=>$products
        ]);
    }
    public function add_products()
        {
            $cats = Cat::all();
            return view('dashboard.products.add_product',[
                'cats'=>$cats
            ]);
        }
    public function products_store(Request $request){
        $validated =  $request->validate([
            'product_name' =>'required|string|max:255',
            'price' =>'required|numeric',
            'piceas_number' =>'required|numeric',
            'desc' =>'required|string|max:255',
            'img' =>'required|image|mimes:png,jpg',

        ]);

        $img_path = Storage::putFile('product',$request->img);
        $product = Product::create([
            'name'=>$request->product_name,
            'price'=>$request->price,
            'piceas_number'=>$request->piceas_number,
            'desc'=>$request->desc,
            'img'=> $img_path,
            'cat_id'=>$request->cat_name,
        ]);
        return redirect(url('dashboard/products'));

    }



    public function edit_product($id)
    {
         $product = Product::findOrFail($id);
         $cats = Cat::all();
         return view('dashboard.products.edit_product',[
            'product'=>$product,
            'cats'=>$cats
        ]);

    }








    public function update_product ($id , Request $request)
    {
        $product = Product::findOrFail($id);
        if($request->hasFile('img')){
            Storage::delete($product->img);
            $img_path = Storage::putFile('product',$request->img);

        }

        $img_path = $product->img;

        $product->update([
            'name'=>$request->product_name,
            'price'=>$request->price,
            'piceas_number'=>$request->piceas_number,
            'desc'=>$request->desc,
            'img'=> $img_path,
            'cat_id'=>$request->cat_name,
        ]);
    return redirect(url('dashboard/products'));


    }










    public function product_delete($id){
        $product = Product::findOrFail($id);
        Storage::delete($product->img);
        $product->delete();
        return redirect(url('dashboard/products'));

    }





    public function search_product(Request $request)
    {
        $name = $request->search;
        $product = Product::where('name','like',"%$name%")->get();
        return view('dashboard.products.products',[
            'products' => $product,


        ]);
    }




}
