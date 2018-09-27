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
						<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">BOOK TABLE</a>
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
													<span class="add_image_icon"><i class="fa fa-plus fa-plus-icon"></i></span><br>
													<span class="add_image_text">Add New</span>
												</div>
											</div>
										</div>	
									</div>
								</div>
								</div>
								<!-- Gallery Section End -->

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
											<button type="button" class="btn btn-success btn-lg btn-block">Book Table <span class="pull-right btn_arrow"><i class="fa fa-chevron-circle-right fa_arrow fa-2x"></i></span></button>
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
													
													
												</section>
												<hr>
												<div class="row">
													
												</div>
												
											</div>
										</div>
									<!-- Review Tab Start -->
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