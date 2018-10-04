@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<div class="container">
	<div class="cover_img" style="background-image: url('frontend-assets/static-images/header/cover.jpg');">
		<div class="about_hotel">
			<h1>Barbecue Nation</h1>
			<ul class="list-group">
				<li><i class="fa fa-home fa-2x"></i> &nbsp; 210 E 58th St, New York, NY - 10022(Map)</li>
				<li><i class="fa fa-phone fa-2x"></i> &nbsp; (212) 355-7555</li>
				<li><i class="fa fa-globe fa-2x"></i> &nbsp; Closed now</li>
			</ul>
			
		</div>
		<div class="row about_hotel_bottom">
			<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 col">
				<span><i class="fa fa-map-marker"> &nbsp; </i>Map</span>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col">
				<span><i class="fa fa-mobile"></i> SMS/Email</span>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col">
				<span><i class="fa fa-pencil"></i> &nbsp; Write a Review</span>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col">
				<span><i class="fa fa-heart"></i> &nbsp; Your Vote</span>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-1 col-lg-1 col">
				<span><i class="fa fa-user"></i> &nbsp; Edit this</span>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col">
				<span><i class="fa fa-comments"></i> &nbsp; Video & chat</span>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col">
				<span><i class="fa fa-thumbs-up"></i> &nbsp;By Verified</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div role="tabpanel about-tabs" class="main_tab">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-tab-main" role="tablist">
					<li role="presentation" class="">
						<a href="#home" aria-controls="home" role="tab" data-toggle="tab">ABOUT US</a>
					</li>
					<li role="presentation">
						<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">MENU</a>
					</li>
					<li role="presentation">
						<a href="{{url('/home')}}" aria-controls="tab" role="tab" data-toggle="tab">BOOK TABLE</a>
					</li>
					<li role="presentation">
						<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">ORDER ONLINE</a>
					</li>
					<li role="presentation">
						<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">COUPON</a>
					</li>
					
				</ul>
				
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home" >
						<div class="container-fluid">
							<div class="row" style="margin-top: 15px; margin-bottom: 15px; margin-right: 0;">
								
								<!-- Gallery Section Start -->
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<div class=" gallery_section gallery clearfix">
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="gallery_image">
												<a href="frontend-assets/static-images/gallery/1.jpg" rel="prettyPhoto[gallery2]">
												<img src="{{'frontend-assets/static-images/gallery/1.jpg'}}"  class="img-responsive" alt="Image"></a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="gallery_image">
												<a  href="frontend-assets/static-images/gallery/2.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/gallery/2.jpg'}}" class="img-responsive" alt="Image"></a>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<div class="gallery_image">
												<a href="frontend-assets/static-images/gallery/3.jpg" rel="prettyPhoto[gallery2]">
												<img src="{{'frontend-assets/static-images/gallery/3.jpg'}}" class="img-responsive" alt="Image"></a>
											</div>
										</div>
										
										<div class=" gallery_section">
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<div class="gallery_image">
													<a href="frontend-assets/static-images/gallery/4.jpg" rel="prettyPhoto[gallery2]">
													<img src="{{'frontend-assets/static-images/gallery/4.jpg'}}" class="img-responsive" alt="Image"></a>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<div class="gallery_image">
													<a href="frontend-assets/static-images/gallery/5.jpg" rel="prettyPhoto[gallery2]">
													<img src="{{'frontend-assets/static-images/gallery/5.jpg'}}" class="img-responsive" alt="Image"></a>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<div class="gallery_image">
													<a href="frontend-assets/static-images/gallery/6.jpg" rel="prettyPhoto[gallery2]">
													<img src="{{'frontend-assets/static-images/gallery/6.jpg'}}" class="img-responsive" alt="Image"></a>
												</div>
											</div>
										</div>
										<div class="gallery_section">
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<div class="gallery_image">
													<a href="frontend-assets/static-images/gallery/7.jpg" rel="prettyPhoto[gallery2]">
													<img src="{{'frontend-assets/static-images/gallery/7.jpg'}}" class="img-responsive" alt="Image"></a>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<div class=" gallery_image">
													<a href="frontend-assets/static-images/gallery/8.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/gallery/8.jpg'}}" class="img-responsive" alt="Image"></a>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<div class="gallery_image">
													<div class="add_new_img">
														<label class="btn btn-file" for="g_image"><i class="fa fa-plus fa-plus-icon"></i><br> Add New
															<input type="file" name="g_image" id="g_image">
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Gallery Section End -->
									<!-- Info Section Start -->
									<div class="info-section">
										<div class="container-fluid">
											<p><i class="fa fa-phone"></i><strong>&nbsp; &nbsp; +91 9152 356691</strong></p>
											<div style="display: -webkit-box;"><div><i class="fa fa-home"></i></div>&nbsp; &nbsp;<div><span>9/A, Shop No 36/37, Tulsi Wadi, Shivdas Champsi Marg, Mazgoan, Mumbai-400010 (Map) </span></div></div>
											<div style="display: -webkit-box;"><div><i class="fa fa-plus-circle"></i></div>&nbsp; &nbsp;<div><span>Tanduri Restaurant, Home delivery </span></div></div>
											<p><i class="fa fa-gg-circle"></i>&nbsp; &nbsp; Inexpensive (Below 500)</p>
											<p><i class="fa fa-envelope"></i>&nbsp; &nbsp; <a href="">Send Enquiry By Email</a></p>
											<hr>
											<p><strong>Hour of Operations <a href="">(View All)</a></strong></p>
											<span class="text-muted">Today</span>
											<span class="text-muted" style="padding-left: 20px;">11:00 am -01:00 am</span><span style="color: orange; padding-left: 20px;">Closed Now</span>
											<hr>
											<p><strong>Year Established</strong></p>
											<p class="text-muted">1900</p>
											<hr>
											<p><strong>Modes of Payment</strong></p>
											<p class="text-muted">Cash</p>
											<p class="text-muted">Master Card</p>
											<p class="text-muted">Visa Card</p>
											<p class="text-muted">Debit Card</p>
											<p class="text-muted">Credit Card</p>
											<p class="text-muted">Booking yo pay <span class="bg-danger" style="margin-left: 15px;">10% Off</span></p>
											<hr>
											<hr>
											<p><strong>Quick Information </strong></p>
											<p class="text-muted"><i class="fa fa-check-circle"></i> &nbsp; &nbsp; Home Delivery</p><br>
											<p><strong>Estimated Delivery Time </strong></p>
											<p class="text-muted"><i class="fa fa-check-circle"></i> &nbsp; &nbsp; 40 ~ 50 Minutes</p><br>
											<p><strong>Delivery Time Fee </strong></p>
											<p class="text-muted"><i class="fa fa-check-circle"></i> &nbsp; &nbsp; 40 ~ 50 Minutes</p><br>
											<p><strong>Minimum Order </strong></p>
											<p class="text-muted"><i class="fa fa-check-circle"></i> &nbsp; &nbsp; ￦150,000    won or 2 EA</p>
											<hr>
											<p><strong>Favourite Menu </strong></p>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<p class="text-muted">Cruch Chicken</p>
													<p>16,000</p>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<img src="{{'frontend-assets/static-images/gallery/chicken.jpg'}}" class="img-responsive" alt="Image">
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<p class="text-muted">Original Chicken</p>
													<p>15,000</p>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<img src="{{'frontend-assets/static-images/gallery/chicken.jpg'}}" class="img-responsive" alt="Image">
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<p class="text-muted">Spicy Chicken</p>
													<p>17,000</p>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<img src="{{'frontend-assets/static-images/gallery/spicy.png'}}" class="img-responsive" alt="Image">
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<p class="text-muted">BBQ Chicken</p>
													<p>17,000</p>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<img src="{{'frontend-assets/static-images/gallery/bbq.png'}}" class="img-responsive" alt="Image">
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<p class="text-muted">Half/Half A) Original <strong>+</strong> Spicy</p>
													<p>17,000</p>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<img src="{{'frontend-assets/static-images/gallery/bbq_spicy.png'}}" class="img-responsive" alt="Image">
												</div>
											</div>
											<hr>
											<p><strong>Get Coupon </strong></p>
											<img src="{{'frontend-assets/static-images/gallery/viewleft_coupon.png'}}" class="img-responsive" alt="Image">
											<hr>
											<p><strong>Get Points </strong></p>
											<div class="row">
												<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
													<a href="#"><span class="badge">R</span></a>
												</div>
												<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
													<span class="text-muted">Review</span> <span class="text-muted" style="padding-left: 10px;">50 Point</span>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
													<a href="#"><span class="badge">O</span></a>
												</div>
												<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
													<span class="text-muted">1st Order</span> <span class="text-muted" style="padding-left: 10px;">100 Point</span>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
													<a href="#"><span class="badge">F</span></a>
												</div>
												<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
													<span class="text-muted">Invite Friends</span> <span class="text-muted" style="padding-left: 10px;">200 Point</span>
												</div>
											</div>
											<hr>
											<p><strong>Also Listed in </strong></p>
											<p class="text-muted">Tandoori Restaurants</p>
											<p class="text-muted">Home Delivery Restaurants</p>
											<p class="text-muted">Restaurants</p>
											<p class="text-muted">Chineese Restaurants</p>
											<p class="text-muted">Biryani Restaurants</p>
											<p class="text-muted">Chinesse Delivery Restaurants</p>
											<p class="text-muted">Sea Food Restaurants</p>
											<p class="text-muted">Tandoori Delivery Restaurants</p>
											<p class="text-muted">more...</p>
											<hr>
										</div>
									</div>
									<!-- Info Section Ends -->
								</div>
								<!-- col-md-div Ends -->
								<!-- Review Section Start -->
								<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 review_section">
									<!-- Cards Button start -->
									<div class="row review_section_row">
										<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 ">
											<div class="card">
												<div class="card-body review_card">
													<h4 class="card-title ">Review</h4>
													<a href="">Sachin.s.waghmode</a>
													<p>Nice Hotel Shipment <span class="pull-right card_arrow"><i class="fa fa-angle-right fa-2x "></i></span></p>
													
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
											<div class="card">
												<div class="card-body review_card">
													<h4 class="card-title">More Infomation</h4>
													<p>Phone Number, Address, Official website, Get directions/Map etc. <span class="pull-right card_arrow"><i class="fa fa-angle-right fa-2x "></i></span></p>
													<!-- <a href="#" class="card-link">Another link</a> -->
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
											<div class="card">
												<div class="card-body review_card">
													<h4 class="card-title">Price Range</h4>
													<p>W W W W</p>
													<p>W 500 Below</p>
													<!-- <a href="#" class="card-link">Another link</a> -->
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
											<div class="card">
												<div class="card-body">
													<a href=""><i class="fa fa-camera"></i><span class="card_span">On</span> </a><br>
													<a href=""><i class="fa fa-comments"></i><span class="card_span">On</span> </a><br>
													<span class="bg-success">O2O</span> <span class="card_span">Order Now</span><br>
													<span class="bg-primary">D2D</span> <span class="card_span">Order Now</span>
												</div>
											</div>
										</div>
									</div><br>
									<!-- Cards Button End -->
									<!-- Menu Buttons Start -->
									<div class="row menu_btn_row">
										<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1">
											<button type="button" class="btn btn-success btn-block btn-lg">Menu <span class="pull-right btn_arrow"><i class="fa fa-chevron-circle-right fa_arrow fa-2x"></i></span></button>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
											<a href="{{url('/table_booking')}}" class="btn btn-success btn-lg btn-block">Book Table <span class="pull-right btn_arrow"><i class="fa fa-chevron-circle-right fa_arrow fa-2x"></i></span></a>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
											<button type="button" class="btn btn-success btn-lg btn-block">Order Online <span class="pull-right btn_arrow"><i class="fa fa-chevron-circle-right fa_arrow fa-2x"></i></span></button>
										</div>
									</div>
									<!-- Menu Buttons Ends -->
									<!-- Review Tab Start -->
									<div class="row">
										<div class="tab_container">
											<input id="tab1" type="radio" name="tabs" checked>
											<label class="label_tabs" for="tab1"><i class="fa fa-pencil tabs"></i><span>WRITE A REVIEW</span></label>
											<input id="tab2" type="radio" name="tabs">
											<label class="label_tabs" for="tab2"><i class="fa fa-comment tabs"></i><span>REVIEWS & RATINGS</span></label>
											<section id="content1" class="tab-content">
												<h3>Headline 1</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
													quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												
											</section>
											<section id="content2" class="tab-content">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
														<div class="" style="display: -webkit-box;">
															<div class="c100 p80">
																<span class="rating_circle">4.0</span>
																<div class="slice">
																	<div class="bar"></div>
																	<div class="fill"></div>
																</div>
																</div><span>Based on <strong>1337 reviews</strong></span>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-offset-1">
															<!-- Review Bars Start -->
															<div class="row">
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<div class="">Ambience</div>
																	<div class="middle">
																		<div class="bar-container">
																			<div class="bar_div">
																				<div class="bar-5"></div><div class="bar-5 bar_space"></div><div class="bar-40 bar_space"></div><div class="bar-end"></div><div class="bar-end"></div>
																			</div>
																		</div>
																	</div>
																	<div class="rating_figures">2.4</div>
																	
																	
																</div>
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2">
																	<div class="">Service</div>
																	<div class="middle">
																		<div class="bar-container">
																			<div class="bar_div">
																				<div class="bar-5"></div><div class="bar-5 bar_space"></div><div class="bar-5 bar_space"></div><div class="bar-10 bar_space"></div><div class="bar-end"></div><div class="bar-end"></div>
																			</div>
																		</div>
																	</div>
																	<div class="rating_figures">3.1</div>
																	
																	
																</div>
															</div><br>
															<div class="row">
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<div class="">Food</div>
																	<div class="middle">
																		<div class="bar-container">
																			<div class="bar_div">
																				<div class="bar-5"></div><div class="bar-5 bar_space"></div><div class="bar-5 bar_space"></div><div class="bar-5 bar_space"></div><div class="bar-end"></div>
																			</div>
																		</div>
																	</div>
																	<div class="rating_figures">4.0</div>
																	
																	
																</div>
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2">
																	<div class="">Value for Money</div>
																	<div class="middle">
																		<div class="bar-container">
																			<div class="bar_div">
																				<div class="bar-5"></div><div class="bar-5 bar_space"></div><div class="bar-5 bar_space"></div><div class="bar-5 bar_space"></div><div class="bar-10 bar_space"></div><div class="bar-end"></div>
																			</div>
																		</div>
																	</div>
																	<div class="rating_figures">4.1</div>
																	
																	
																</div>
															</div>
															<!-- Review Bars End -->
														</div>
													</div>
													<!-- Rating Bars Ends -->
												</section>
												<!-- Popular tab start -->
												<div class="popular_section" style="background: white; margin-top: 30px; margin-left: 15px;">
													<ul class="nav nav-tabs popular_tabs">
														<li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
														<li><a href="#friend_rating" data-toggle="tab">Friends Rating</a></li>
														<li><a href="#friend_rating" data-toggle="tab">Recent</a></li>
														<li><a href="#friend_rating" data-toggle="tab">High to Low</a></li>
														<li><a href="#friend_rating" data-toggle="tab">Low to High</a></li>
														<li><a href="#friend_rating" data-toggle="tab">Number of Click</a></li>
													</ul>
													<div id="myTabContent" class="tab-content tabs_content_popular">
														<div class="tab-pane active in" id="popular">
															<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 rating_col">
																<span class="rating_heading">Overall Ratings (1337)</span><span class="rating_star">&nbsp;<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
																<div class="row">
																	<div class="side sd-rating">
																		<div>Excellent</div>
																	</div>
																	<div class="middle md-rating">
																		<div class="bar-container-rating">
																			<div class="bar-5-rating"></div><span>&nbsp; 45.4%</span>
																		</div>
																	</div>
																	<div class="side sd-rating">
																		<div>Very Good</div>
																	</div>
																	<div class="middle md-rating">
																		<div class="bar-container-rating">
																			<div class="bar-4-rating"></div><span>&nbsp; 28.9%</span>
																		</div>
																	</div>
																	<div class="side sd-rating">
																		<div>Good</div>
																	</div>
																	<div class="middle md-rating">
																		<div class="bar-container-rating">
																			<div class="bar-3-rating"></div><span>&nbsp; 16.5%</span>
																		</div>
																	</div>
																	<div class="side sd-rating">
																		<div>Average</div>
																	</div>
																	<div class="middle md-rating">
																		<div class="bar-container-rating">
																			<div class="bar-2-rating"></div><span>&nbsp; 5.2%</span>
																		</div>
																	</div>
																	<div class="side sd-rating">
																		<div>Poor</div>
																	</div>
																	<div class="middle md-rating">
																		<div class="bar-container-rating">
																			<div class="bar-1-rating"></div><span>&nbsp; 4%</span>
																		</div>
																	</div>
																</div>
																<hr>
															</div>
															<!-- Comment Section Start -->
															<div class="row ">
																<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																	<div class="user_image">
																		<img src="{{'frontend-assets/static-images/gallery/1.jpg'}}" class="img-circle" alt="Image" style="width: 100%;">
																	</div>
																</div>
																
																<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 user_comment">
																	
																	<p><span>Amit</span> <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></p>
																	<p class="text-muted">Excellent</p>
																	<p><span class="badge like_badge"><i class="fa fa-thumbs-up" style="color: white; font-size: 10px;"></i></span>&nbsp; 3
																	<span class="badge like_badge2"><i class="fa fa-heart" style="font-size: 10px;"></i></span>&nbsp; 3
																	<span class="pull-right text-muted">1 Comment</span> </p>
																	
																	<div class="row like_row">
																		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-thumbs-up fa-2x"></i></span> &nbsp; Like</a>
																		</div>
																		<div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-comment fa-2x"></i></span> &nbsp; Comment</a>
																		</div>
																		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-share fa-2x"></i></span> &nbsp; Share</a>
																		</div>
																		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 like_col">
																			<a href="#"><span class="badge">P</span><span> &nbsp; 150</span></a>
																		</div>
																		
																	</div>
																	
																</div>
															</div><br>
															<div class="row ">
																<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																	<div class="user_image">
																		<img src="{{'frontend-assets/static-images/gallery/1.jpg'}}" class="img-circle" alt="Image" style="width: 100%;">
																	</div>
																</div>
																<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 user_comment">
																	<p><span>Amit</span> <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></p>
																	<p class="text-muted">Excellent</p>
																	<p><span class="badge like_badge"><i class="fa fa-thumbs-up" style="color: white; font-size: 10px;"></i></span>&nbsp; 3
																	<span class="badge like_badge2"><i class="fa fa-heart" style="font-size: 10px;"></i></span>&nbsp; 3
																	<span class="pull-right text-muted">1 Comment</span> </p>
																	
																	<div class="row like_row">
																		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-thumbs-up fa-2x"></i></span> &nbsp; Like</a>
																		</div>
																		<div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-comment fa-2x"></i></span> &nbsp; Comment</a>
																		</div>
																		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-share fa-2x"></i></span> &nbsp; Share</a>
																		</div>
																		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 like_col">
																			<a href="#"><span class="badge">P</span><span> &nbsp; 150</span></a>
																		</div>
																	</div>
																</div>
															</div><br>
															<div class="row ">
																<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																	<div class="user_image">
																		<img src="{{'frontend-assets/static-images/gallery/1.jpg'}}" class="img-circle" alt="Image" style="width: 100%;">
																	</div>
																</div>
																<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 user_comment">
																	<p><span>Amit</span> <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></p>
																	<p class="text-muted">Excellent</p>
																	<p><span class="badge like_badge"><i class="fa fa-thumbs-up" style="color: white; font-size: 10px;"></i></span>&nbsp; 3
																	<span class="badge like_badge2"><i class="fa fa-heart" style="font-size: 10px;"></i></span>&nbsp; 3
																	<span class="pull-right text-muted">1 Comment</span> </p>
																	
																	<div class="row like_row">
																		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-thumbs-up fa-2x"></i></span> &nbsp; Like</a>
																		</div>
																		<div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-comment fa-2x"></i></span> &nbsp; Comment</a>
																		</div>
																		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 like_col">
																			<a href=""><span class="text-muted"><i class="fa fa-share fa-2x"></i></span> &nbsp; Share</a>
																		</div>
																		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 like_col">
																			<a href="#"><span class="badge">P</span><span> &nbsp; 150</span></a>
																		</div>
																	</div>
																</div>
															</div>
															<!-- Comment Section End -->
														</div>
														<!-- Popular Tab End -->
														<div class="tab-pane fade" id="friend_rating">
															
														</div>
													</div>
												</div>
												<!-- Popular Main Tabs Ends -->
												<!-- Details Section Start-->
												<div class="desctiption">
													<h3>Business Information</h3>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<h3>History</h3>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<h3>Crew Experience</h3>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<h3>Greeting</h3>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<h3>Event News</h3>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													
												</div>
												<!-- Details Section Start-->
											</div>
										</div>
										<!-- Review Tab Ends -->
									</div>
									<!-- Review Section Ends -->
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab">...</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- END BuySellAds.com Ad Code -->
	@endsection