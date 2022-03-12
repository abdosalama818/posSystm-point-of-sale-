@extends('dashboard.layout')
@section('body')



<div class="container-fluid py-5">
    <div class="row">

        <div class="col-md-10 offset-md-1">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>All Orders</h3>
            </div>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                  
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

@foreach ($orders as $order)


                <tr>
                    <th scope="row">1</th>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>

                    <
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href='{{url("dashboard/order/$order->id")}}'>
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>



@endforeach



                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection


