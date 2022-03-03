<?php

namespace App\Http\Controllers\MainWebSite;

use App\Models\Cat;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        $product = Product::findOrFail($id);
        return view('home.product',[
            'product' =>$product,

        ]);
    }
    public function cart_Show(){
        $carts =Cart::all();
        foreach($carts as $cart){
            $user_id = $cart->user_id;
            $cart_id = $cart->id;
        }

        return view('home.cart',[

            'carts'=>$carts,
            'user_id'=>$user_id,


        ]);
    }


    public function cart_store($id, Request $request){
        $cart = Cart::create([
            'qty' =>$request->qty,
            'product_id'=>$id,
            'user_id'=>Auth::id()
        ]);
        return redirect(url("/carts"));
    }

    public function order_store(Request $request)
    {
        Order::create([
            'name'=>$request->name,
            'phone'=> $request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'user_id'=>Auth::id()
        ]);


        /*
        $order = Order::where('user_id','=',Auth::id())->first();

        OrderDetails::create([
            "order_id"=>$order->id,
            'product_id'=>1,
            'price'=>"2000",
            'qty' =>'2'

        ]);*/

        return redirect(url('/'));
    }


    public function test(){

        $orders = Order::all();
        

        return view('home.test',[
            'orders'=>$orders
        ]);
    }
}


/*****
 *        $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('qty');
            $table->string('price');
 *
 *
 *
 *
 *





 *         $table->string('name',255);
            $table->string('phone',15);
            $table->text('address');
            $table->string('email',255);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
 */
