
@extends('dashboard.layout')


@section('body')
<div class="container">

<div class="row">
    <div class="col-12">
       <div class="add-cat m-2">
        <a class="btn btn-success " href="{{url('dashboard/add/product')}}">Add</a>
       </div>
            <div class="card">
                <div class="card-header">

                    <h3 class="card-title">show all products</h3>


                    <div class="card-tools ">
                  <form action="{{url('dashboard/serch/product/')}}" method="get">
                    <div class="form-group ">
                        <input type="text" name="search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                        <button type="submit" class="btn btn-success m-2"><i class="fas fa-search">search</i></button>
                        </div>
                    </div>
                  </form>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>imge</th>
                        <th>category</th>
                        <th>action</th>

                        </tr>
                    </thead>
                    <tbody>

                      @foreach ($products as $product )
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td><img src="{{asset('uploads') . '/' . $product->img}}" style="width: 100px" alt="" srcset=""></td>
                        <td>{{$product->cat->name}}</td>
                        <td>
                            <a href="{{url('dashboard/edit/product',$product->id)}}" target="_blank" class="btn btn-info" rel="noopener noreferrer">edit</a>
                            <a href="{{url('dashboard/delete/product',$product->id)}}" class="btn btn-danger" rel="noopener noreferrer">delete</a>
                        </td>
                        </tr>
                      @endforeach


                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
 </div>
</div>
</div>

@endsection














