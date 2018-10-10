@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('styling')
<link href="{{ asset('frontend-assets/css/food_order.css') }}" rel="stylesheet">
<link href="{{ asset('frontend-assets/css/grocery-order.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
@endsection
@section('content')
<div class="container" style="background: #fff; padding-bottom: 25px;">
	<div class="top-header">
		<div class="adsSection">
			<img src="frontend-assets/static-images/gallery/main_adv.png" class="img-responsive" alt="Image">
		</div>
		<div class="banner">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 logo-div">
					<img src="{{('frontend-assets/static-images/groceryOrder/logo.png')}}">
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 description-div">
					<p class="pull-right text-center">Recent Order Rating Streak <br>
						<span class="badge like_badge bg-lightgreen">4</span>
						<span class="badge like_badge bg-darkgreen" style="">5</span>
						<span class="badge like_badge bg-lightgreen">4</span>
						<span class="badge like_badge bg-lightgreen">4</span>
						<span class="badge like_badge bg-darkgreen">5</span>
						<span class="badge like_badge" style="background: #CDD614;">3</span>
						<span class="badge like_badge bg-darkgreen">5</span>
						<span class="badge like_badge bg-lightgreen">4</span>
					</p>
					<h3>Nurpur</h3>
					<p>Islamabad, Pakistan</p>
					<p><label class="hours-lbl">Opens 24 Hours , today</label>
					&nbsp; <label style="opacity: 0.7;">24 Hours Convience Store</label>
				</p>
				<ul class="list-inline list-items">
					<li>
						<i class="fa fa-star"></i> <span> 4.5</span><br> <span class="txt-muted">100+ Rating</span>
					</li>
					<li>
						20 Minutes<br> <span class="txt-muted">Delivery </span>
					</li>
					<li>
						<i class="fa fa-won"></i> <span> 20,000</span><br> <span class="txt-muted">Minimum Order</span>
					</li>
					<li>
						<i class="fa fa-won"></i> <span> 10,000</span><br> <span class="txt-muted">Cost for two</span>
					</li>
					<li>
						<i class="fa fa-won"></i> <span> 2,000</span><br> <span class="txt-muted">Delivery Free</span>
					</li>
					<li>
						<span>Over </span> <i class="fa fa-won"></i><span>30,000</span><br> <span class="txt-muted">Free Delivery </span>
					</li>
					<li>
						<i class="fa fa-video-camera fa-2x" style="color: red;"></i>&nbsp; <span class="fa fa-comments fa-2x" style="color:#0368ff;"></span><br> <span class="txt-muted"> Video & Chat </span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">
				<!-- Side Bar Start -->
					<nav class="navigation" id="mainNav">
						<a class="navigation__link" href="#1">Tiffins</a>
						<a class="navigation__link" href="#2">Soups</a>
						<a class="navigation__link" href="#3">Starters</a>
						<a class="navigation__link" href="#4">Main Course</a>
						<a class="navigation__link" href="#5">Veg Main Couse</a>
						<a class="navigation__link" href="#6">Egg Main Course</a>
						<a class="navigation__link" href="#7">Chicken Main Course</a>
						<a class="navigation__link" href="#8">Fish Main Course</a>
						<a class="navigation__link" href="#9">PomFret Main Course</a>
						<a class="navigation__link" href="#10">Prawn Main Course</a>
					</nav>
				<!-- Side Bar End -->

			</div>
			<div class="col-md-6">

				<!-- Section 1 Start -->
				<div class="page-section hero" id="1">

					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->

					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">	<span class="span_dot" style="border: 1px solid green;"><i class="fa fa-circle" style="color: green; font-size: 15px;"></i></span> Customise Tawa Paneer Frankie</h4>
								</div>
								<div class="modal-body">
									<h4><strong>Extra</strong> (optional)</h4>
									<div class="checkbox">
										<span class="span_dot" style="border: 1px solid green;"><i class="fa fa-circle" style="color: green; font-size: 9px;"></i></span>&nbsp; &nbsp; 
										<label>
											<input type="checkbox" value="">
											Extra Cheez &nbsp;</label> <span><i class="fa fa-krw"></i>30</span>
										
									</div>
										<div class="checkbox">
										<span class="span_dot" style="border: 1px solid green;"><i class="fa fa-circle" style="color: green; font-size: 9px;"></i></span>&nbsp; &nbsp;
										<label>
											<input type="checkbox" value="">
											Extra Schezwan  &nbsp;</label> <span><i class="fa fa-krw"></i>10</span>
										
									</div>
								</div>
								<div class="modal-footer" style="background: #07c007; color: white;">
									<span class="pull-left">Total <i class="fa fa-krw"></i>140.00</span>
									<label class="pull-right"><a href="" style="color: white; text-decoration: none; "><span>Add Item</span></a></label>
									<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
						</div>
					</div>

					
								<img src="{{('frontend-assets/static-images/foodOrder/tiffin1.png')}}" alt="">
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted"> &nbsp; Tiffins</p>
									<div class="text-right">
										<div class="number-input-food">
											<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
											<input class="quantity" min="0" name="quantity" value="1" type="number">
											<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
										</div>
										<span class="text-muted cutomise">Customisable</span>
									</div>
									<div class="text-left price">
										<span><i class="fa fa-won"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<img src="{{('frontend-assets/static-images/foodOrder/tiffin1.png')}}" alt="">
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									<div class="text-right">
											<button type="button" class="btn btn-default add_food_btn"><strong>Add  &nbsp; +</strong></button>
										<!-- <div class="number-input-food">
										</div> -->
										<span class="text-muted cutomise">Customisable</span>
									</div>
									<div class="text-left price">
										<span><i class="fa fa-won"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/tiffin1.png')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left price">
										<span><i class="fa fa-won"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/tiffin1.png')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left price">
										<span><i class="fa fa-won"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/tiffin1.png')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
							
									<div class="text-left price">
										<span><i class="fa fa-won"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/tiffin1.png')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
				</div>
				<!-- Section 1 End -->

				<!-- Section 2 Start -->
				<div class="page-section" id="2">
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/soup1.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
								
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/soup2.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/soup1.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/soup2.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
								
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/soup1.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
							
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/soup2.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
								
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
				</div>
				<!-- Section 2 End -->

				<!-- Section 3 Start -->
				<div class="page-section" id="3">
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/starter1.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/starter2.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
									
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/starter1.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
								
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/starter2.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
							
									<div class="text-left price">
										<span><i class="fa fa-won"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
					<!-- Items Detail -->
					<div class="row thumbnail-row" id="addedItem">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/starter1.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
								
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="thumbnail thm_card">
								<!-- <div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div> -->
								<a class="" data-toggle="modal" data-target='#modal-id'><img src="{{('frontend-assets/static-images/foodOrder/starter2.jpg')}}" alt=""></a>
								<div class="caption caption-food">
									<h5 class="text-left">	<span class="span_dot"><i class="fa fa-circle"></i></span><strong> &nbsp; Nestle Yogurt</strong></h5>
									<p class="text-left text-muted">Tiffins</p>
							
									<div class="text-left">
										<span><i class="fa fa-won price"> 320</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End -->
				</div>
				<!-- Section 3 End -->

				<div class="page-section" id="4">
					<h1>Section Four</h1>
				</div>
				<div class="page-section" id="5">
					<h1>Section Five</h1>
				</div>
				<div class="page-section" id="6">
					<h1>Section Six</h1>
				</div>
				<div class="page-section" id="7">
					<h1>Section Seven</h1>
				</div>
				<hr style="border: 2px solid black;">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="seller_info">
														<h4><strong>Bestsellers</strong></h4>
														<p>Desert</p>
														<div class="row">
															<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
																<span class="span_dot"><i class="fa fa-circle"></i></span>
															</div>
															<div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
																<p><strong> &nbsp;Mutton Seekh Kabab [8] Pieces</strong>
																	<span class="img_zoom img_zoom_food pull-right" id="span_img"><img src="{{'frontend-assets/static-images/table_booking/deal.png'}}"  class="img-responsive" id="myImg" alt="Image">
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
																		<span class="img_zoom img_zoom_food pull-right" id="span_img"><img src="{{'frontend-assets/static-images/table_booking/deal.png'}}"  class="img-responsive" id="myImg" alt="Image">
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
																			<span class="img_zoom img_zoom_food pull-right" id="span_img"><img src="{{'frontend-assets/static-images/table_booking/deal.png'}}"  class="img-responsive" id="myImg" alt="Image">
																			<i class="fa fa-search-plus" aria-hidden="true"></i></span></p>
																			<p><i class="fa fa-krw" aria-hidden="true"></i>610.00</p>
																			<p><span class="text-muted">Ground Spiced minsed mutton cooked on metal skrewer</span></p>
																		</div>
																	</div>
																</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="food_cart" style="margin-left: 10px;">
			<h2>Cart</h2>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<span>Veg Frankie</span><br>
			<span class="text-muted">Customise</span>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="number-input-food number_food_cart">
											<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
											<input class="quantity" min="0" name="quantity" value="1" type="number">
											<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
										</div>
										<span class="cutomise_price" ><i class="fa fa-won"></i>170</span><br><br>
				</div>
			</div>
			
													
										
										<div style="margin-top: 20px;">
										<span><strong>Subtotal</strong></span>
										<span style="margin-left: 145px;"><strong><i class="fa fa-won"></i>170</strong></span><br>
										<span class="text-muted" style="font-size: 12px;">Extra charges may apply</span>
										</div>
										<a href="{{url('/food_checkout')}}" class="btn btn-success btn-block checkout_btn"><strong>Check Out </strong></a>
			</div>
						<div style="margin-top: 30px; margin-right: 30px;">
							<img src="frontend-assets/static-images/table_booking/qr_code.png" class="img-responsive" alt="Image">
						</div>	
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('a[href*=#]').bind('click', function(e) {
				e.preventDefault(); // prevent hard jump, the default behavior
				var target = $(this).attr("href"); // Set the target as variable
				// perform animated scrolling by getting top-position of target-element and set it as scroll target
				$('html, body').stop().animate({
						scrollTop: $(target).offset().top
				}, 600, function() {
						location.hash = target; //attach the hash (#jumptarget) to the pageurl
				});
				return false;
		});
});
$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		// Show/hide menu on scroll
		console.log(scrollDistance);
		if (scrollDistance < 350) {
						$('nav').fadeOut("fast");
		} else {
						$('nav').fadeIn("fast");
		}
	
		// Assign active class to nav links while scolling
		$('.page-section').each(function(i) {
			$(this).position();
				if ($(this).position().top <= scrollDistance) {
						$('.navigation a.active').removeClass('active');
						$('.navigation a').eq(i).addClass('active');
				}
		});
}).scroll();
</script>
@endsection