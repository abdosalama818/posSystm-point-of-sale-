@extends('dashboard.layout')


@section('body')
<div class="container">

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">edit product</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action = "{{url('dashboard/update/product',$product->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">product name </label>
                <input type="text" value = "{{$product->name}}" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter productegory name">
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">price </label>
                <input type="number" name="price" value="{{$product->price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter product price">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">piceas number </label>
                <input type="number" name="piceas_number" value="{{$product->piceas_number}}" class="form-control" id="exampleInputEmail1" placeholder="Enter piceas_number ">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1"> categories </label>

                <select name="cat_name" class="form-control" id="">
                    <option value="">select category</option>
                    @foreach ( $cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
              </div>



              <div class="form-group">
                <label>Textarea</label>
                <textarea  name="desc" class="form-control ckeditor" rows="3" placeholder="Enter the description ">{{$product->desc}}</textarea>
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



