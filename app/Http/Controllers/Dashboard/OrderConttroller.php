<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderConttroller extends Controller
{
    public function show_orders()
    {
        $orders = Order::all();

 /***
        // $total = 0 ;
        $sub_total=0;
        foreach ($orders as $order)
        {

          foreach ($order->user->carts as $cart)
            {
                $sub_total= $cart->product->price * $cart->qty;
                $total +=$sub_total;
           }
        }*/

        return view('dashboard.orders.orders',[
            'orders' =>$orders
        ]);
    }


    public function show_order($id)
    {
        $order = Order::findOrFail($id);
        $total = 0 ;
        $sub_total=0;

        foreach ($order->user->carts as $cart)
        {
            $sub_total = $cart->product->price * $cart->qty;
           $total +=$sub_total;

       }


        return view('dashboard.orders.order',[
            'order'=>$order,
            'total'=>$total,

        ]);
    }

    public function approved_order($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status'=>'approved'
        ]);
        return back();
    }

    public function canceled_order($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status'=>'canceled'
        ]);
        return back();
    }
}
