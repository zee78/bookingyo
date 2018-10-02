@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<div class="container" style="background: white;">
	<div class="row">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				<h1 class="text-muted">Diadio Restaurant <span class="table_heading"><i class="fa fa-comments"></i>Video & chat</span></h1>
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
					<div role="tabpanel" class="tab-pane active overview" id="overview">
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
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg- col-md-offset-1">
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
						<h3><span><strong><i class="fa fa-menu"></i>Menu</strong></span></h3>
					</div>
					<!-- Menu Tab End -->

					<div role="tabpanel" class="tab-pane" id="reviews">review</div>
					<div role="tabpanel" class="tab-pane" id="information">info</div>
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
@section('script')
<script>
	$(document).ready(function() {
		$('.table_hidden_area').hide();
	});
	function show_table() {
		$('.table_hidden_area').show();
	}
</script>
@endsection
@endsection