@extends('dashboard.layout')


@section('body')
<div class="container">

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">edit client</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action = "{{url('dashboard/update/client',$client->id)}}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">client name </label>
                <input type="text" value = "{{$client->name}}" name="client_name" class="form-control" id="exampleInputEmail1" placeholder="Enter clientegory name">
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">phone </label>
                <input type="text" name="phone" value="{{$client->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter your phone">
              </div>








              <div class="form-group">
                <label>address</label>
                <textarea  name="address" class="form-control ckeditor" rows="3" placeholder="Enter the address ">{{$client->address}}</textarea>
              </div>












            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">update</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

        <!-- Form Element sizes -->

      </div>

</div>
</div>

@endsection



