

<!DOCTYPE html>
<html lang="en">
<head>
<title>OmegaStore</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OmegaStore">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/shop_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/shop_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/product_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/product_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/cart_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">

</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">OmegaStore</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="search.php" method="GET" class="header_search_form clearfix">
										<input type="search" name="keyword" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="assets/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{asset('assets/assets/images/cart.png')}}" alt="">
										<div class="cart_count"><span>12</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.php">Cart</a></div>
										<div class="cart_price">$1200</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

	<x-Nav></x-Nav>

	</header>



    @yield('body')




    	<!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="{{asset('assets/images/logos_1.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/logos_2.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/logos_3.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/logos_4.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('assets/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/assets/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('assets/assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/assets/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/shop_custom.js')}}"></script>
    <script src="{{asset('assets/js/product_custom.js')}}"></script>
    <script src="{{asset('assets/js/cart_custom.js')}}"></script>

    </body>

    </html>










