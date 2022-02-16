@extends('dashboard.layout')


@section('body')
<div class="container">

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">edit category</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action = "{{url('dashboard/update/cat',$cat->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">category name </label>
                <input type="text" value = "{{$cat->name}}" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
              </div>

              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
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



