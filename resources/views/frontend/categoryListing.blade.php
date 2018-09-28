@extends('frontend.layouts.app')

@section('title', 'Booking Yo')

@section('content')

<section>
	<div class="container">
		<div>
		Google Adds
	</div>
	<div class="row" style="margin: 0;">
		<!-- Left SideBar -->
		<div class="col-md-2-5 left-sidebar">
			<div class="title">
				<h4>Listing Filter</h4>
			</div>
			<div class="section1">
				<div class="title2">
					<h5>Available Interview</h5>
				</div>
				<h5><i class="fa fa-calendar"></i>&nbsp; Booking</h5>
				<h5><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Reservation</h5>
				<h5><i class="fa fa-file-archive-o" aria-hidden="true"></i>&nbsp; Order	</h5>
				<h5><i class="fa fa-money" aria-hidden="true"></i>&nbsp; O2O</h5>
				<h5><i class="fa fa-truck" aria-hidden="true"></i>&nbsp; D2D</h5>
				<div class="coupon">
					<div class="title2">
						<h5>Coupon</h5>
					</div>
					<button class="btn btn-default">Search All Stores</button>
				</div>
				<div class="ads-section1">
					<div class="title2">
						<h5>Sport Good Store Near me Ad</h5>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/adidas.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/underArmour.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/nike.png')}}" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/adidas.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/underArmour.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/nike.png')}}" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/adidas.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/underArmour.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/nike.png')}}" style="width: 100%;">
						</div>
					</div>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>Popular Area</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Sports Goods stores in kangam</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Sports Goods stores in kangam</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Sports Goods stores in kangam</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Sports Goods stores in kangam</li>
					</ul>
					<button class="btn btn-default">Search More</button>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>You May Also Like</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Colleges</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Real Estate</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Mobile Phone</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Electronics</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Movies</li>
					</ul>
					<button class="btn btn-default">Search More</button>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>Popular Store</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Small Gun Company <span class="text-muted">244.0K</span></li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Olympic <span class="text-muted">12K</span></li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>General Gun Company <span class="text-muted">26.3K</span></li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Heavy Guns <span class="text-muted">19.0K</span></li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>SSL Archery Range <span class="text-muted">16.9K</span></li>
					</ul>
					<button class="btn btn-default search-storesBtn">Search All Stores</button>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>Releated Store</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Oriental Gun Clean Shop</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Seoul Gun Cover</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>General Gun Company</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Heavy Guns</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>SSL Archery Range</li>
					</ul>
					<button class="btn btn-default search-storesBtn">Search All Stores</button>
				</div>
				<div class="coupon">
					<div class="title2">
						<h5>Related Products</h5>
					</div>
					<h5 class="relted-product"><strong>See Sport Eqitment Shoppingmall</strong></h5>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>Recently Viewed Store</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Oriental Gun Clean Shop</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Seoul Gun Cover</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>General Gun Company</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Heavy Guns</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>SSL Archery Range</li>
					</ul>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>Recently Viewed Store</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Strike Fang Sangam Branch</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Financial Safety Management</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>SPI International</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Realshot Practice Shooting Archery</li>
					</ul>
					<button class="btn btn-default">See More</button>
				</div>
				<div class="favorite-store">
					<div class="title2">
						<h5>My Favorite Store</h5>
					</div>
					<div class="row" style="margin: 0;">
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/daghchy.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-8">
							<p><b style="color: #222222c7;">Kitchn Pan</b></p>
							<p><b class="text-success">Price :</b> $1500</p>
							<a href=""><b>Add to Cart</b></a>
						</div>
					</div>
					<div class="row" style="margin: 0;">
						<div class="col-md-4">
							<img src="{{('frontend-assets/static-images/listing/iphone.jpg')}}" style="width: 100%;">
						</div>
						<div class="col-md-8">
							<p><b style="color: #222222c7;">I Phone 8</b></p>
							<p><b class="text-success">Price :</b> $1100</p>
							<a href=""><b>Add to Cart</b></a>
						</div>
					</div>
				</div>
				<div class="popular-area">
					<div class="title2">
						<h5>Number of Ordered</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Strike Fang Sangam Branch</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Financial Safety Management</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>SPI International</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Realshot Practice Shooting Archery</li>
					</ul>
					<button class="btn btn-default search-storesBtn">Search All Stores</button>
				</div>

			</div>
		</div>
		<!-- End -->
		<div class="col-md-9-5">
			
		</div>
	</div>
	</div>
</section>

@endsection