@extends('home.home_layout')

@section('body')
<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="uploads/shop_background.jpg"></div>
	<div class="home_overlay"></div>
	<div class="home_content d-flex flex-column align-items-center justify-content-center">
		<h2 class="home_title">

			{{$cat->name}}

		</h2>
	</div>
</div>

<!-- Shop -->

<div class="shop">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">

				<!-- Shop Sidebar -->
				<div class="shop_sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">Categories</div>
						<ul class="sidebar_categories">
							{{-- loop --}}
                            @foreach ($cats as $cat2)
                            <li><a href='{{url("cat/$cat2->id")}}'>{{$cat2->name}} <i class="fas fa-chevron-right ml-auto"></i></a></li>
                            @endforeach


						</ul>
					</div>

				</div>

			</div>

			<div class="col-lg-9">

				<!-- Shop Content -->

				<div class="shop_content">

					<div class="product_grid">
						<div class="product_grid_border"></div>


						<!-- Product Item  looop -->
                        @foreach ($cat->products as $product)

                        <div style="float: left" class="product_item">
                            <div class="product_border"></div>
                            {{--d-flex flex-column align-items-center justify-content-center--}}
                            <div class="product_image "><img src='{{asset("uploads/$product->img")}}' alt=""></div>
                            <div class="product_content">
                                <div class="product_price">{{$product->price}}</div>
                                <div class="product_name">
                                    <div><a href="{{url('product',$product->id)}}" tabindex="0">{{$product->name}}</a></div>
                                </div>
                            </div>

                        </div>


                        @endforeach







					</div>

					<!-- Shop Page Navigation -->

					<div class="shop_page_nav d-flex flex-row">
						<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
						<ul class="page_nav d-flex flex-row">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">21</a></li>
						</ul>
						<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
					</div>

				</div>

			</div>


		</div>
	</div>
</div>









@endsection

