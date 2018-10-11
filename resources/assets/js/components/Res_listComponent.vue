<template>
    <div class="container" style="background: #fff; padding-bottom: 25px;">
	<div>
		Google Adds
	</div>
	<div class="row" style="margin: 0;display: -webkit-box;">
		<!-- Left SideBar -->
		<div class="col-md-2-5 left-sidebar hidden-xs">
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
							<img :src="'frontend-assets/static-images/listing/adidas.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/underArmour.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/nike.png'" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/adidas.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/underArmour.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/nike.png'" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/adidas.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/underArmour.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/nike.png'" style="width: 100%;">
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
							<img :src="'frontend-assets/static-images/listing/daghchy.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-8">
							<p><b style="color: #222222c7;">Kitchn Pan</b></p>
							<p><b class="text-success">Price :</b> $1500</p>
							<a href=""><b>Add to Cart</b></a>
						</div>
					</div>
					<div class="row" style="margin: 0;">
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/iphone.jpg'" style="width: 100%;">
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
				<div class="popular-area">
					<div class="title2">
						<h5>Favorite Store Search</h5>
					</div>
					<ul>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Strike Fang Sangam Branch</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Financial Safety Management</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>SPI International</li>
						<li><i class="fa fa-circle" aria-hidden="true"></i>Realshot Practice Shooting Archery</li>
					</ul>
					<button class="btn btn-default">Search All Stores</button>
				</div>

				<div class="favorite-store">
					<div class="title2">
						<h5>My Favorite Store</h5>
					</div>
					<div class="row" style="margin: 0;">
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/daghchy.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-8">
							<p><b style="color: #222222c7;">Kitchn Pan</b></p>
							<p><b class="text-success">Price :</b> $1500</p>
							<a href=""><b>Add to Cart</b></a>
						</div>
					</div>
					<div class="row" style="margin: 0;">
						<div class="col-md-4">
							<img :src="'frontend-assets/static-images/listing/iphone.jpg'" style="width: 100%;">
						</div>
						<div class="col-md-8">
							<p><b style="color: #222222c7;">I Phone 8</b></p>
							<p><b class="text-success">Price :</b> $1100</p>
							<a href=""><b>Add to Cart</b></a>
						</div>
					</div>
				</div>
				<div class="coupon">
					<div class="title2">
						<h5>Coupon</h5>
					</div>
					<button class="btn btn-default">Search All Stores</button>
				</div>

			</div>
		</div>
		<!-- End -->
		<!-- List View -->
		<div class="col-md-9-5 col-xs-12">
			<ul class="list-inline">
				<span class="curve">Sort Results By</span>
				<li><a href="">Top Results</a></li>
				<li><a href="">Location</a></li>
				<li><a href="">Distance</a></li>
				<li><a href="">Rating <i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
				<li><a href=""><i class="fa fa-filter"></i> Filter</a></li>
				
				<li>
					<select name="dropdown" class="listing-option" v-model="selected" style="border: 0;background: transparent;" @change="myFunction()">
					<option disabled value="">View</option>
                     <option value="2"> &#xf03e; Image</option>
                        <option value="1"> &#xf03a; List</option>
					   
					</select>
				</li>
				<li><a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
			</ul>
			<!-- Tab Content -->
			<div class="tab-content">
				<div class="tab pane" id="list-view">
					<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<a href="" class="btn btn-success"> Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></a>
								<a class="btn btn-success" href="">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></a>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Casual Outfit</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row listing-grid">
					<div class="col-md-3">
						<img :src="'frontend-assets/static-images/listing/restaurant_1.jpeg'" style="width: 100%;height: 192px;">
						<div class="picture-overlay">
							<p>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</span>
								<span> 3 votes</span>
								<span class="pull-right" style="padding-right: 15px;">120k</span>
							</p>					
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-9 grid-detail">
								<h4>Pearl Continental</h4>
								<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
								<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>
							</div>
							<div class="col-md-3 table-btn">
								<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
							</div>
						</div>
						<div class="row bottom-row">
							<div class="col-md-12" style="display: -webkit-box;">
								<div class="bottom-row-btn">
									<button type="button" class="btn btn-default btn-xs">Email</button>
									<button type="button" class="btn btn-default btn-xs">Edit</button>
									<button type="button" class="btn btn-default btn-xs">Own This</button>
									<button type="button" class="btn btn-default btn-xs">Rate This</button>
								</div>
								<div class="paymnt-section">
									<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
									<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
									<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
									<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				</div>
				<!-- End List View -->
				<!-- Image View -->
				<div id="image-view" class="tab-pane">
					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<a class="btn btn-success" href="">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></a>
									<a class="btn btn-success" href="">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></a>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>


					
					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>


					
					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row image-view">
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 listing-grid">
							<img :src="'frontend-assets/static-images/listing/casualDress.jpg'" style="width: 100%;height: 250px">
							<div class="picture-overlay">
								<h3>Casual Outfit  <span class="pull-right like-circle"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span></h3>
								<p>
									<span class="rating_star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<span> 3 votes</span>
									<span style="padding-right: 15px;">120k</span>
								</p>

								<ul class="list-inline">
									<li style="padding-left: 7px;"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></li>
									<li><i class="fa fa-comments text-info" aria-hidden="true"></i></li>
									<li><i class="fa fa-money" aria-hidden="true"></i></li>
									<li><i class="fa fa-truck" aria-hidden="true"></i></li>
									<li style="border-right: 0;"><i class="fa fa-file-archive-o" aria-hidden="true"></i></li>
									<span>100</span>
								</ul>					
							</div>
							<div class="row bottom-section">
								<div class="col-md-8 grid-detail">
									<!-- <h4>Casual Outfit</h4> -->
									<p><i class="fa fa-phone" aria-hidden="true"></i> 031457922</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem ipsum dolor sit amet</p>
									<p><i class="fa fa-product-hunt" aria-hidden="true"></i> Jeans, Casual Shirts, Pants , Jumper, Shoes</p>
								</div>
								<div class="col-md-4 table-btn" style="padding: 0">
									<button type="button" class="btn btn-success">Book a Table<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
									<button type="button" class="btn btn-success">Order Online<i class="fa fa-chevron-circle-right fa_arrow"></i></button>
								</div>
							</div>
							<div class="row" style="margin: 0">
								<div class="col-md-12 btn-bottom-sec">
									<div class="paymnt-section">
										<span><i class="fa fa-credit-card-alt" aria-hidden="true"></i> $$$$</span>
										<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> 15% OFF</span>
										<span><i class="fa fa-stumbleupon-circle" aria-hidden="true"></i> 700P</span>
										<span><i class="fa fa-binoculars" aria-hidden="true"></i> Distance 8.7Km</span>
									</div>
									<div class="bottom-row-btn">
										<button type="button" class="btn btn-default btn-xs">Email</button>
										<button type="button" class="btn btn-default btn-xs">Edit</button>
										<button type="button" class="btn btn-default btn-xs">Own This</button>
										<button type="button" class="btn btn-default btn-xs">Rate This</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					
					
				</div>
				<!-- Image View -->
			</div>
			<!-- End -->
		</div>
			
	</div>
</div>

</template>

<script>
export default {
    data(){
        return{
          selected:'',
        }
    },
    methods:{
        myFunction(){
                if(this.selected == '2'){
                $('#image-view').css('display', 'block');
                $('#list-view').css('display', 'none');
                }else{
                $('#image-view').css('display', 'none');
                $('#list-view').css('display', 'block');
        }
    
}
    },
    created(){
      
    }
}
</script>

<style>

</style>
