<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="nakul deb nath" content="">
    <title>NAKUL DEB<>Book Store</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/my.css')}}" rel="stylesheet">
     
    <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body style="background: url('{{ asset('frontend/images/bg.jpg') }}') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;"> 
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +880XXXXXXXXXX</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> nakuldeb.cse.ru.@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://github.com/NakulDeb"><i class="fa fa-github"></i></a></li>
								<li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="https://google.com"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-20">

						<div class="" style="float:left">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="/" class="active">Home</a></li>
									<li><a href="{{URL::to('/about')}}">about</a></li>
									<li><a href="{{URL::to('/contact')}}">Contact</a></li>
								</ul>
							</div>

						</div>
						<div class=""style="float:right">
							<div class="col-sm-15">
								<div class="mainmenu pull-right">
									<ul class="nav navbar-nav">
										<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
										<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
										<li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
										<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
										@if(Session::get('user_first_name'))
										<li class="dropdown">
											<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
												<i class="halflings-icon white user fa fa-user"></i> {{Session::get('user_first_name')}}
												<span class="caret"></span>
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-menu-title" style="background-color: black">
													<span style="color:white">Account Settings</span>
												</li>
												<li><a href="{{URL::to('/user-profile/'.Session::get('user_id'))}}"><i class="fa fa-user"></i> Profile</a></li>
												<li><a href="{{URL::to('/user-logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
											</ul>
										</li>
										@else

										<li><a href="{{URL::to('/users')}}"><i class="fa fa-lock"></i> Login</a></li>
										@endif
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="" style="float:right"><!--header-bottom-->		
			<div class=""style="padding-right: 100px; padding-top: 10px">
				<div class="search_box pull-right">
					<input type="text" placeholder="Search"/>
				</div>
			</div><!--/header-bottom-->
		</div>
	</header><!--/header-->
	
	
	
	<section>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php
							$category = DB::table('tbl_category')
									->where('publication_status',1)
									->get();
						?>

						@foreach($category as $result)  
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{URL::to('/show-product-by-category/'.$result->category_id)}}">{{$result->category_name}}</a></h4>
									</div>
								</div>
						@endforeach
						</div><!--/category-products-->

						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->


						<h2>Announcement</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php
							$announcement  = DB::table('tbl_announcements')
									->where('publication_status',1)
									->limit(5)
									->get();
						?>
						

						@foreach($announcement  as $ann)  
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$ann->announcement_hyperlink}}">{{$ann->announcement_title}}</a></h4>
										
									</div>
								</div>
						@endforeach
						</div><!--/category-products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items" style="padding-bottom: 200px;"><!--features_items-->
						<h2 class="title text-center">My Account</h2>

						<div class="col-sm-6 panel-group category-products">
						<h2 class="title text-center">My Profile : </h2>
						<button type="button" class="btn btn-fefault edit"><i class="fa title text-center"></i>Edit</button>
							<h4><strong>Name : </strong>{{$user->user_first_name}} {{ $user->user_last_name}}</h4>
							<h4><strong>Mail   : </strong>{{$user->user_email}}</h4>
							<h4><strong>Phone: </strong>{{$user->user_phone}}</h4>
							
						</div>
						<div class="col-sm-6 panel-group category-products">
						<h2 class="title text-center">My Address : </h2>
						<button type="button" class="btn btn-fefault edit">
							<i class="fa edit"></i>Edit</button>
							<h4><strong>Region : </strong>{{$user->user_Region}}</h4>
							<h4><strong>Address Line 1 : </strong>{{$user->user_Address}}</h4>
							<h4><strong>Address Line 2: </strong>{{$user->user_Address}}</h4>
							
						</div>
					</div><!--features_items-->

					

					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php 
										$rand_data1 = DB::table('tbl_product')
										   ->join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
										   ->select('tbl_product.*','tbl_category.category_name')
										   ->where('tbl_category.publication_status',1)
										   ->where('tbl_product.publication_status',1)
										   ->inRandomOrder()
										   ->limit(3)
										   ->get();
						   
									?>
									@foreach($rand_data1 as $randdata1)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="/{{$randdata1->product_image}}" style="height:200px; width:140px" alt="" />
													<h2>${{$randdata1->product_price}}</h2>
													<p>{{$randdata1->product_name}}</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach

								</div>

								<div class="item">	
									<?php 
										$rand_data2 = DB::table('tbl_product')
										   ->join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
										   ->select('tbl_product.*','tbl_category.category_name')
										   ->where('tbl_category.publication_status',1)
										   ->where('tbl_product.publication_status',1)
										   ->inRandomOrder()
										   ->limit(3)
										   ->get();
									?>
									@foreach($rand_data2 as $randdata2)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="/{{$randdata2->product_image}}" style="height:200px; width:140px" alt="" />
													<h2>${{$randdata2->product_price}}</h2>
													<p>{{$randdata2->product_name}}</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									@endforeach
									
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->

					
					
				</div>
			</div>
		</div>
	</section>
	
	
	<footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="{{URL::to('/contact')}}">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<?php
								$category_footer = DB::table('tbl_category')
									->where('publication_status',1)
									->limit(5)
									->get();
							?>
							@foreach($category_footer as $result)
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{URL::to('/show-product-by-category/'.$result->category_id)}}">{{$result->category_name}}</a></li>
							</ul>
							@endforeach
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 nakul deb nath. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://github.com/NakulDeb">NAKUL DEB NATH</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
	
</body>
</html>