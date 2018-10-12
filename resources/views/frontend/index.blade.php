@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
@if(Request::is('/index'))
<script>
$('#hide_bar').hide();
</script>
@endif
<div class="container" style="background: white;">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-offset-3 main_advertisement">
		<img :src="'frontend-assets/static-images/gallery/main_adv.png'" class="img-responsive" alt="Image">
	</div>
	<!-- Search Bar Start -->
	<div class="search_bar">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 category_btn_col">
					<button type="button" class="navbar-toggle collapsed category_btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 search_main" style="margin-left: 18px;">
					<ul class="nav navbar-nav search_nav" style="float: none;">
						<li style="float: none;">
							<form>
								<div class="search-box">
									<div class="select-sec">
										<label class="search_map_marker"><i class="fa fa-map-marker" style="padding-right: 5px;"></i></label>
										<select class="form-control">
											<option>Islamabad</option>
											<option>Karachi</option>
											<option>Islamabad</option>
											<option>Islamabad</option>
										</select>
									</div>
									<div class="input-group">
										<span class="input-group-btn input-search-btn">
											<input type="text" class="form-control" placeholder="Get free quotes...">
											<label class="search-bar" search_mic_marker style="left: 92% !important;"><i class="fa fa-microphone"></i></label>
										</span>
									</div>
								</div>
							</form>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1 view_icon">
					<a href="{{url('/home')}}"><img src="{{'frontend-assets/static-images/gallery/main_imageview.png'}}" class="img-responsive" alt="Image"></a>
				</div>
			</div>
			<div class="row" style="    margin-bottom: 111px;">
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1" style="margin-top: 75px;">
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href="{{url('/restaurant-list')}}"><img src="{{'frontend-assets/static-images/category_icons/images/main_cate1.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Restaurants</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate2.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Hotels</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate3.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Food Menu</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate4.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Hospitals</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate5.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Food Delivery</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate6.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Gold Booking</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate7.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Beauty</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate8.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Goods O2O</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<a href=""><img src="{{'frontend-assets/static-images/category_icons/images/main_cate9.png'}}" style="" class="" alt="Image"></a>
						</div>
						<!-- <p class="img-pha">Goods D2D</p> -->
					</div>
					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
						<div class="main-img-div">
							<label class="" for="g_image"><img src="{{'frontend-assets/static-images/category_icons/images/main_cate10.png'}}" style="" class="" alt="Image">
								<input type="file" name="g_image" id="g_image"></label>
							</div>
							<!-- <p class="img-pha">Add shortcuts</p> -->
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-2" style="margin-top: 75px;">
						
					</div>
				</div>
			</div>
		</div>
		<!-- Search Bar Ends -->
		
		<!-- Icons Start -->
		
		<!-- Icon Ends -->
	</div>
	@endsection