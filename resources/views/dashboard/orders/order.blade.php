@extends('dashboard.layout')
@section('body')

<div class="container py-5">
    <div class="row">

        <div class="col-md-6 offset-md-3">
            <h3 class="mb-3">Show Order : </h3>
            <div class="card">
                <div class="card-body p-5">
                    <table class="table table-bordered">
                        <thead>
                            <th colspan="2" class="text-center">Customer</th>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Name</th>
                            <td>{{$order->name}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td>{{$order->email}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Phone</th>
                            <td>{{$order->phone}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Address</th>
                            <td>{{$order->address}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Time</th>
                            <td>{{$order->created_at}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Status</th>
                            <td>{{$order->status}}</td>
                          </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>sub_total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->user->carts as $cart)
                            <tr>
                                <td>{{$cart->product->name}}</td>
                                <td>{{$cart->qty}}</td>
                                <td>{{$cart->product->price}}</td>
                                <td>{{$cart->product->price * $cart->qty}}</td>
                              </tr>

                            @endforeach


                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Total</th>

                                <th>Change Status</th>

                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>${{$total}}</td>

                            <td>

                              <a class="btn btn-success"  href='{{url("/dashboard/order/approved/$order->id")}}'>Approve</a>
                              <a class="btn btn-danger" href='{{url("/dashboard/order/canceled/$order->id")}}'>Cancel</a>


                            </td>
                          </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-dark" href='{{url("/dashboard/orders")}}'>Back</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


