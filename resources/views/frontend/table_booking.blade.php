@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<div class="container" style="background: white;">
	<div class="row" style="margin-bottom: 50px;">
		<div class="">
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				<h2 class="text-muted">Diadio Restaurant <span class="table_heading"><i class="fa fa-comments"></i>Video & chat</span></h2>
				<div role="tabpanel" style="border: 1px solid #a8a8a8; border-radius: 4px;">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs table_tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a>
						</li>
						<li role="presentation">
							<a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Photos</a>
						</li><li role="presentation">
						<a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Menu</a>
					</li>
					<li role="presentation">
						<a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a>
					</li>
					<li role="presentation">
						<a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a>
					</li>
				</ul>
				
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- OverView Tab Start -->
					<div role="tabpanel" class="tab-pane active  overview" id="overview">
						<p style="margin-left: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-cutlery" aria-hidden="true"></i>Dining Style</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Casual Elegant
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-cutlery" aria-hidden="true"></i>Cuisines</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Contemprary American
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-clock-o" aria-hidden="true"></i>Hours of Operation</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Dinner: Sunday-Thursday 5:30pm - Friday.
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-phone" aria-hidden="true"></i>Phone Number</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								(212) 704-8900
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-external-link" aria-hidden="true"></i>Website</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								http://www.theviewnyc.com/
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-credit-card" aria-hidden="true"></i>Payment Options</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Master, Visa, Discover
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-shirtsinbulk" aria-hidden="true"></i>Dress Code</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1 ">
								Business Casual
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-cutlery" aria-hidden="true"></i>Executive Chef</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Eleazar Fuerte
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-cutlery" aria-hidden="true"></i>Catering</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Large Semi private group are welcome in the view.
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-users" aria-hidden="true"></i>Neighbour Hood</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Theature District / Time Square
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-building-o" aria-hidden="true"></i>Cross Street</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								45th street Broadway
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-car" aria-hidden="true"></i>Parking Details</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Parking on the first come first serve basis.
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-bus" aria-hidden="true"></i>Public Transit</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								N, R 49 street, 139 to Time Square
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-music" aria-hidden="true"></i>Entertainment</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								New York only revolving restaurant
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-calendar" aria-hidden="true"></i>Special Event & Promotions</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								For Special Occasion groups of 2-15 guests
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Additional</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
								Bar/Longue, Corkage Fee, Full Bar
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-md-offset-1 icon_col">
								<span class="table_overview_icons"><i class="fa fa-map-marker" aria-hidden="true"></i>Location</span>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-md-offset-1">
								1535 Broadway New York
							</div>
						</div>
						<hr>
						<div class="main">
							<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
						</div>
					</div>
					<!-- OverView Tab End -->
					<!-- Photo Tab Start -->
					<div role="tabpanel" class="tab-pane" id="photos">
						<div class="row" style="margin-left: 0; margin-right: 0; margin-top: 20px;">
							<div class="slider-1 col-md-12 col-xs-12">
								<div id="2" class="carousel slide" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner gallery clearfix">
										<div class="item active">
											<div class="row mobile-slider1">
												<div class="col-sm-4 col-xs-4">
													<div class="col-item box-shadow">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/4.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/4.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/5.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/5.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/6.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/6.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Booked</span>
														</div>
													</div>
												</div>
											</div>
											<div class="row mobile-slider1">
												<div class="col-sm-4 col-xs-4">
													<div class="col-item box-shadow">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/1.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/1.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/2.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/2.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/3.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/3.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Booked</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="row mobile-slider2">
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/1b.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/1b.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/2b.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/2b.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/3b.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/3b.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
											</div>
											<div class="row mobile-slider2">
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/1b.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/1b.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/2b.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/2b.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
												<div class="col-sm-4 col-xs-4">
													<div class="col-item">
														<div class="photo">
															<a href="frontend-assets/static-images/table_booking/3b.jpg" rel="prettyPhoto[gallery2]"><img src="{{'frontend-assets/static-images/table_booking/3b.jpg'}}" class="img-responsive" alt="a" /></a>
															<span class="service-heading">Book</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="slider-controls">
										<a class="left fa fa-chevron-left btn" href="#2"
										data-slide="prev"></a>
										<a class="right fa fa-chevron-right btn" href="#2"
										data-slide="next"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Photo Tab End -->
					<!-- Menu Tab Start -->
					<div role="tabpanel" class="tab-pane" id="menu">
						<div class="menu_container">
							<h3><span><strong><i class="fa fa-calendar-o" aria-hidden="true"></i> &nbsp; Menu</strong></span></h3>
							<ul class="list-group menu_btn">
								<li class="btn btn-default btn-lg menu_main_btn" style="margin-left: 50px;">Main Menu</li>
								<li class="btn btn-default btn-lg">Desert</li>
								<li class="btn btn-default btn-lg">Wine</li>
								<li class="btn btn-default btn-lg">Cocktails</li>
								<li class="btn btn-default btn-lg menu_single_btn" style="margin-left: 180px;">Single Bottle List</li>
								<li class="btn btn-default btn-lg">Luch Menu</li>
							</ul>
							<hr>
							<p>$65 per person, $49 wine pairing</p>
							<hr>
							<h3><strong>A la Carte</strong></h3>
							<hr>
							<h4><strong>Snacks</strong></h4>
							<div class="row" style="padding-bottom: 50px;">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
											<p>Pickled & Preserve Vegetable</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-1">
											<span><i class="fa fa-eur" aria-hidden="true"></i>4.00</span>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
											<p>Calabrian black pig sausage</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-1">
											<span><i class="fa fa-eur" aria-hidden="true"></i>5.00</span>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
											<p>Crispy chicken skins, liver parfait & candied walnuts</p>
											<p>| each</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-1" style="margin-top: 50px;">
											<span><i class="fa fa-eur" aria-hidden="true"></i>2.50</span>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
											<p>Morecambe Bay oyster, lovage, rhubard mignonette</p>
											<p>| each</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-1" style="margin-top: 50px;">
											<span><i class="fa fa-eur" aria-hidden="true"></i>3.00</span>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
											<p>Steam Cornished squid buns</p>
											<p>| each</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-1" style="margin-top: 33px;">
											<span><i class="fa fa-eur" aria-hidden="true"></i>4.00</span>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row" style="margin-bottom: 20px;">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
									<button type="button" class="btn btn-default btn-block" style="color: blue;">View full menu</button>
								</div>
							</div>
							<hr>
							<!-- Restaurant Info Start -->
							<div class="restaurant_name">
								<p class="text-muted">ORDER FOOD ONLINE FROM</p>
								<p style="font-size: 20px;"><strong>Koyla</strong></p>
								<span class="text-muted">Colaba, Mumbai.Cost <i class="fa fa-krw" aria-hidden="true"></i> 1600 for two</span>
								<label class="btn btn-success">4.0</label>
								<hr>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<p>Delivery Time</p>
										<span><strong>45 mins</strong></span>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<p>Minimun Order</p>
										<span><strong><i class="fa fa-krw" aria-hidden="true"></i> 99.00</strong></span>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<p>Payment Methods</p>
										<span><strong>Cash & Online</strong></span>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<p>Recent Order Rating Streaks</p>
										<span class="badge bdg4">4</span><span class="badge bdg5">5</span><span class="badge bdg4">4</span><span class="badge bdg4">4</span><span class="badge bdg3">3</span><span class="badge bdg5">5</span>
									</div>
								</div>
								<!-- Restaurat Offline div Start -->
								<div class="row" style="background: #eaeaea; margin-top: 15px;">
									<div class="restaurant_offline">
										<p><span>Restaurant currently offline for Delivery. Please go back or visit the <a href="">restaurant page.</a></span></p>
									</div>
								</div>
								<!-- Restaurat Offline div End -->
								<div class="row">
									<div id="menuSlider_booking" class="wow fadeInUp">
										<div class="col-md-12">
											<div id="myModal" class="modal-discount">
												<span class="close">&times;</span>
												<img class="modal-content-discount" id="img01">
												<div id="caption"></div>
											</div>
											<div role="tabpanel">
												<div class="row">
													<div class="col-md-9">
														<div class="owl-carousel table-booking-carousel">
															
															<!-- Nav tabs -->
															<span>
																<a class="active" href="#bestseller" aria-controls="home" role="tab" data-toggle="tab">Main Menu</a>
															</span>
															<span>
																<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Deserts</a></span>
																<span>
																	<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Wine</a>
																</span>
																<span>
																	
																	<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Cocktails</a>
																</span>
																
																<span>	<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Single Bottle List</a>
															</span>
															<span>	<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Lunch Menu</a>
														</span>
														
														
														<!-- Tab panes -->
														
													</div>
													
												</div>
											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												
											</div>
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane active" id="bestseller">
													<div class="seller_info">
														<h4><strong>Bestsellers</strong></h4>
														<p>Desert</p>
														<div class="row">
															<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																<span class="span_dot"><i class="fa fa-circle"></i></span>
															</div>
															<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
																<p><strong> &nbsp;Mutton Seekh Kabab [8] Pieces</strong>
																	<span class="img_zoom pull-right" id="span_img"><img src="{{'frontend-assets/static-images/table_booking/deal.png'}}"  class="img-responsive" id="myImg" alt="Image">
																	<i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
																	<p><i class="fa fa-krw" aria-hidden="true"></i>610.00</p>
																	<p><span class="text-muted">Ground Spiced minsed mutton cooked on metal skrewer</span></p>
																</div>
															</div>
															<hr>
															<div class="row">
																<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																	<span class="span_dot"><i class="fa fa-circle"></i></span>
																</div>
																<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
																	<p><strong> &nbsp;Mutton Seekh Kabab [8] Pieces</strong>
																		<span class="img_zoom pull-right" id="span_img"><img src="{{'frontend-assets/static-images/table_booking/deal.png'}}"  class="img-responsive" id="myImg" alt="Image">
																		<i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
																		<p><i class="fa fa-krw" aria-hidden="true"></i>610.00</p>
																		<p><span class="text-muted">Ground Spiced minsed mutton cooked on metal skrewer</span></p>
																	</div>
																</div>
																<hr>
																<div class="row">
																	<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																		<span class="span_dot"><i class="fa fa-circle"></i></span>
																	</div>
																	<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
																		<p><strong> &nbsp;Mutton Seekh Kabab [8] Pieces</strong>
																			<span class="img_zoom pull-right" id="span_img"><img src="{{'frontend-assets/static-images/table_booking/deal.png'}}"  class="img-responsive" id="myImg" alt="Image">
																			<i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
																			<p><i class="fa fa-krw" aria-hidden="true"></i>610.00</p>
																			<p><span class="text-muted">Ground Spiced minsed mutton cooked on metal skrewer</span></p>
																		</div>
																	</div>
																</div>
															</div>
															<div role="tabpanel" class="tab-pane" id="tab">.dgdgs fsdf..</div>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									</div>
									<!-- Restaurant Info End -->
								</div>
							</div>
							<!-- Menu Tab End -->
							<!-- Review Tab Start -->
							<div role="tabpanel" class="tab-pane" id="reviews">
								<div class="review_container">
									<h4>Over all Rating and Reviews</h4>
									<div class="review_content">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<p>Review can only be made by dinners who have eaten at this restaurant</p>
											<p><span class="review_star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i> &nbsp; 4.7 based on recent ratings</span></p>
											<ul class="list-group review_rating_list" style="display: -webkit-box;">
												<li class="list-group-item rating_list"><strong>4.7</strong><br>Food</li>
												<li class="list-group-item rating_list"><strong>4.7</strong><br>Service</li>
												<li class="list-group-item rating_list"><strong>4.3</strong><br>Value</li>
												<li class="list-group-item"><strong>4.4</strong><br>Ambience</li>
												
											</ul>
										</div>
										<div class="col-xs-8 col-sm-8 col-md-4 col-lg-4 col-md-offset-1">
											<div class="row review_table_row">
												<div style="display: flow-root;">
													<div class="side">
														<div>5 star</div>
													</div>
													<div class="middle">
														<div class="bar-container-table-review">
															<div class="bar-5-table-review"></div>
														</div>
													</div>
												</div>
												<div style="display: flow-root;">
													<div class="side">
														<div>4 star</div>
													</div>
													<div class="middle">
														<div class="bar-container-table-review">
															<div class="bar-4-table-review"></div>
														</div>
													</div>
												</div>
												<div style="display: flow-root;">
													<div class="side">
														<div>3 star</div>
													</div>
													<div class="middle">
														<div class="bar-container-table-review">
															<div class="bar-3-table-review"></div>
														</div>
													</div>
												</div>
												<div style="display: flow-root;">
													<div class="side">
														<div>2 star</div>
													</div>
													<div class="middle">
														<div class="bar-container-table-review">
															<div class="bar-2-table-review"></div>
														</div>
													</div>
												</div>
												<div style="display: flow-root;">
													<div class="side">
														<div>1 star</div>
													</div>
													<div class="middle">
														<div class="bar-container-table-review">
															<div class="bar-1-table-review"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<p><span><strong><i class="fa fa-signal" aria-hidden="true"></i> Noise .</strong> Quite</span></p>
									<p><span><strong><i class="fa fa-signal" aria-hidden="true"></i> 92 % of people</strong> would recommended it to a friend</span></p>
									<p><span><strong>Loved For <i class="fa fa-info-circle" aria-hidden="true"></i></strong></span></p>
			
									<div class="row trophy">
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<button type="button" class="btn btn-default btn-block"><i class="fa fa-trophy" aria-hidden="true"></i><strong> British</strong><br>London</button>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<button type="button" class="btn btn-default btn-block"><i class="fa fa-trophy" aria-hidden="true"></i><strong> Best Overall</strong><br>West End London</button>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<button type="button" class="btn btn-default btn-block"><i class="fa fa-trophy" aria-hidden="true"></i><strong> Best Food</strong><br>West End London</button>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										<button type="button" class="btn btn-default btn-block"><i class="fa fa-trophy" aria-hidden="true"></i><strong> British</strong><br>West End London</button>
									</div>	
									</div><br>

									<a href="" style="text-decoration: none;"><span style="color: #CB202D;"><strong>Best Restaurant in Marylebone ></strong></span></a>
									<hr>

									<div class="comment_section">
									<div class="review_form">
									<form action="" method="POST" role="form">
										<div class="form-group">
											<label for="">Sort By</label>
											<select name="" id="input" class="form-control" required="required">
												<option value="">Newest</option>
												<option value="">Newest</option>
												<option value="">Newest</option>
											</select>
										</div>
									<div class="form-group">
											<label for="">Filter</label>
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
											<button type="button" class="btn btn-default btn-block	"><input type="checkbox" name="" id="input" ><span>Good For Groups</span></button>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
													<button type="button" class="btn btn-default btn-block	"><input type="checkbox" name="" id="input" style="display: -webkit-inline-box;" ><span>Good For Groups</span></button>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
													<button type="button" class="btn btn-default btn-block	"><input type="checkbox" name="" id="input" style="display: -webkit-inline-box;" ><span>Good For Groups</span></button>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
													<button type="button" class="btn btn-default btn-block	"><input type="checkbox" name="" id="input" style="display: -webkit-inline-box;" ><span>Good For Groups</span></button>
												</div>
											</div>
										</div>
									</form>
									</div><br>

									
									<div class="table_comments" style="margin-left: 30px;">
									<div class="row review_comment">
									<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
										<div class="user_image user_image_table">
												<img src="{{'frontend-assets/static-images/table_booking/c.png'}}" class="img-circle" alt="Image" style="width: 100%;">
											</div>
											<p style="margin-left: 15px;">Curb</p>
											<p><strong>New York Area</strong></p>
											<p><i class="fa fa-comment-o"></i> 11 reviews</p>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-8 col-lg-8 col-md-offset-1">
										<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><strong> Dinned 3 days ago</strong></p>
										<p><strong>Overall <span style="color: #CB202D;">5</span> . Food <span style="color: #CB202D;">5</span> . Service <span style="color: #CB202D;">5</span> . Ambience <span style="color: #CB202D;">5</span></strong></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ... </p>
										<div class="row">
										<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
											<a href="">+Read More</a>
										</div>
										<div class="col-xs-7 col-sm-7 col-md-5 col-lg-5 col-md-offset-4">
											<a href=""><span><i class="fa fa-flag-o"></i> &nbsp;Report</span></a>
											<a href=""><span class="span_help"><i class="fa fa-arrow-up"></i></span> Helpful</a>
										</div>	
										</div>
									</div>	
									</div>
									<hr>

									<div class="row review_comment col-md-offset-1">
									<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
										<div class="user_image user_image_table">
												<img src="{{'frontend-assets/static-images/table_booking/c.png'}}" class="img-circle" alt="Image" style="width: 100%;">
											</div>
											<p style="margin-left: 15px;">Curb</p>
											<p><strong>New York Area</strong></p>
											<p><i class="fa fa-comment-o"></i> 11 reviews</p>
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-1">
										<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><strong> Dinned 3 days ago</strong></p>
										<p><strong>Overall <span style="color: #CB202D;">5</span> . Food <span style="color: #CB202D;">5</span> . Service <span style="color: #CB202D;">5</span> . Ambience <span style="color: #CB202D;">5</span></strong></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ... </p>
										<div class="row">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="">+Read More</a>
										</div>
										<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-md-offset-4">
											<a href=""><span><i class="fa fa-flag-o"></i> &nbsp;Report</span></a>
											<a href=""><span class="span_help"><i class="fa fa-arrow-up"></i></span> Helpful</a>
										</div>	
										</div>
									</div>	
									</div>
									<hr>

									<div class="row review_comment col-md-offset-1">
									<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
										<div class="user_image user_image_table">
												<img src="{{'frontend-assets/static-images/table_booking/c.png'}}" class="img-circle" alt="Image" style="width: 100%;">
											</div>
											<p style="margin-left: 15px;">Curb</p>
											<p><strong>New York Area</strong></p>
											<p><i class="fa fa-comment-o"></i> 11 reviews</p>
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-1">
										<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><strong> Dinned 3 days ago</strong></p>
										<p><strong>Overall <span style="color: #CB202D;">5</span> . Food <span style="color: #CB202D;">5</span> . Service <span style="color: #CB202D;">5</span> . Ambience <span style="color: #CB202D;">5</span></strong></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ... </p>
										<div class="row">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<a href="">+Read More</a>
										</div>
										<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-md-offset-4">
											<a href=""><span><i class="fa fa-flag-o"></i> &nbsp;Report</span></a>
											<a href=""><span class="span_help"><i class="fa fa-arrow-up"></i></span> Helpful</a>
										</div>	
										</div>
									</div>	
									</div>
									<hr>
									</div>
									</div>
								</div>
								</div>
							</div>
							<!-- Review Tab End -->
							<div role="tabpanel" class="tab-pane" id="information">info</div>
						</div>
					</div>
				</div>
						
			
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1">
					<div class="reservation">
						<div class="reservation_heading">
							<span>Make a Reservation</span>
						</div>
						<div class="reservation_info">
							<p>Confirm you reservation with your phone</p>
							<form action="" method="POST" role="form">
								<div class="form-group">
									<div class="row">
										<label for="" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Name</label>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<input type="text" class="form-control" id="" name="name" placeholder="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label for="" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Mobile</label>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<div class="input-group">
												<span class="input-group-addon" id="basic-addon1">
													<select name="" id="input" class="">
														<option value="92">92</option>
														<option value="93">93</option>
													</select>
												</span>
												<input type="text" class="form-control" placeholder="010-2519-2103" aria-describedby="basic-addon1">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label for="" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Email</label>
										<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
											<input type="email" class="form-control" id="" name="name" placeholder="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<label for="" class="">Date</label>
											<input type="date" name="" class="form-control">
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<label for="" class="">Time</label>
											<input type="time" class="form-control" id="" name="name" placeholder="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label for="" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Number of Person</label>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<select name="" id="input" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label for="" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Select Table Number</label>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<select name="" id="input" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row" style="margin-left: 0px; margin-right: 0px;">
										<label for="">Special Comments</label>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<textarea name="" id="input" class="form-control" rows="2" required="required">Write less 100 words</textarea>
										</div>
									</div>
								</div>
								<div class="form-group text-center">
									<button type="button" class="btn btn-primary" onclick="show_table();">Reservation Now</button>
								</div>
								<div class="table_hidden_area">
									<div class="form-group text-center">
										<button type="button" class="btn btn-primary ">Available Reservation</button>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn btn-danger">6:00 PM (Join Waitlist)</button>
									</div>
									<div class="form-group">
										<ul class="list-group time_btn">
											<li class="btn btn-primary btn-sm">6:30 PM</li>
											<li class="btn btn-primary btn-sm">7:00 PM</li>
											<li class="btn btn-primary btn-sm">7:30 PM</li>
											<li class="btn btn-primary btn-sm">8:00 PM</li>
											<li class="btn btn-primary btn-sm" style="margin-left: 35px;">8:30 PM</li>
											<li class="btn btn-primary btn-sm">9:00 PM</li>
											<li class="btn btn-primary btn-sm">9:30 PM</li>
										</ul>
									</div>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-success btn-block btn-lg"><i class="fa fa-search" aria-hidden="true"></i> FIND A TABLE</button>
								</div>
								<span class="table_chart"><i class="fa fa-line-chart" aria-hidden="true"></i> Booked 42 times today</span>
							</form>
							<div class="table_reservation">
								<img src="{{'frontend-assets/static-images/table_booking/tables.png'}}" class="img-responsive" alt="Image">
							</div>
						</div>
					</div>
					<img src="{{'frontend-assets/static-images/table_booking/qr_code.png'}}" class="img-responsive" alt="Image"><br>
					<div class="text-center">
						<a class="btn btn-warning" data-toggle="modal" href='#modal-id'>Get Your Code Now</a>
						<div class="modal fade" id="modal-id">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Get Discount Coupon Code</h4>
									</div>
									<form action="" method="POST" role="form">
										<div class="modal-body">
											<div class="form-group">
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
														<label style="float: left;">Your Name</label>
														<input type="text" class="form-control" id="" placeholder="">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
														<label style="float: left;">Your Number</label>
														<input type="text" class="form-control" id="" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Escape</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
		</div>
		</div>
	
	
  @endsection
			@section('script')
	<script>
		$(document).ready(function() {
			$('.table_hidden_area').hide();
		});
		function show_table() {
			$('.table_hidden_area').show();
		}
	</script>
	<script>
	var owl = $('.table-booking-carousel');
	owl.owlCarousel({
	items:3,
	loop:false,
	margin:0,
	autoplay:false,
	autoplayTimeout:1000,
	autoplayHoverPause:true
	});
	$('.play').on('click',function(){
	owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
	owl.trigger('stop.owl.autoplay')
	})
	</script>
	<script>
	// Get the modal
	var modal = document.getElementById('myModal');
	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var sp_img = document.getElementById('span_img');
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	sp_img.onclick = function(){
	modal.style.display = "block";
	modalImg.src = img.src;
	captionText.innerHTML = img.alt;
	}
	// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			modal.style.display = "none";
			}
			</script>
			@endsection