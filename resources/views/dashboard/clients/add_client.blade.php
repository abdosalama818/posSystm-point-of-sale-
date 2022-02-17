@extends('dashboard.layout')


@section('body')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add client</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action = "{{url('dashboard/store/client')}}" >
            @csrf
            <div class="card-body">
              <div class="form-group">

                <label for="exampleInputEmail1">client name </label>
                <input type="text" name="client_name" class="form-control" id="exampleInputEmail1" placeholder="Enter client name">
              </div>

              <div class="form-group">

                <label for="exampleInputEmail1">phone</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone">
              </div>


              <div class="form-group">

                <label for="exampleInputEmail1">Address</label>
                <textarea  name="address" class="form-control ckeditor" rows="3" placeholder="Enter the address "></textarea>
              </div>



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

        <!-- Form Element sizes -->

      </div>

</div>
</div>

@endsection



