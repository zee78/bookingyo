@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<!--  -->

<div class="container bg_clr">

<!------Add img Section -------------->
	<div class="row imgsctn" style="margin:0px";>	
		<img src="{{'frontend-assets/gloceryimages/image1.png'}}" class="img-responsive">
	</div>

	<div class="row imgsctns" style="margin:0px;">
		<img src="{{'frontend-assets/gloceryimages/image3.png'}}" class="img-responsive">
	</div>	
	<!------Add img Section Ends -------------->

		<div class="row srchbar-row-setting">
		<div class="col-sm-7 col-sm-offset-2 col-xs-9 col-xs-offset-1 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2">
			<ul class="nav navbar-nav srch_nav" style="float: none;">
					<li style="float: none;">
							<form>
									<div class="dropdown search-box">
										  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="stylng">Select Categories
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu liststyling">

										    <li class="active" style="margin:auto;"><a href="#"> A </a></li>

										    <li><a href="#">Cardiologists <i class="fa fa-eye" style="float: left; padding: 3px 13px 0px 0px;"></i> <span class="glyphicon glyphicon-chevron-right"></span> </a></li>

										    <li><a href="#">Chest Specialist <i class="fa fa-eye" style="float: left; padding: 3px 13px 0px 0px;"></i> <span class="glyphicon glyphicon-chevron-right"></span> </a></li>

										    <li><a href="#">Dietitians <i class="fa fa-eye" style="float: left; padding: 3px 13px 0px 0px;"></i> <span class="glyphicon glyphicon-chevron-right"></span></a></li>

										    <li><a href="#">Andrologists <i class="fa fa-mars" style="float: left; padding: 3px 13px 0px 0px;"></i> <span class="glyphicon glyphicon-chevron-right"></span></a></li>

										    <li><a href="#">Eye Specialist <i class="fa fa-eye" style="float: left; padding: 3px 13px 0px 0px;"></i> <span class="glyphicon glyphicon-chevron-right"></span></a></li>

										  </ul>
										  
								<div class="input-group inptgrp">
									<span class="input-group-btn input-search-btn" id="input">
										<input type="text" class="form-control fc-sm-pdng" id="fc-sm-pdng" placeholder="What? eg Comcast,Computer...">
										<label class="search-bar" id="srch_bar"><i class="fa fa-microphone"></i></label>
										<button class="btn btn-default bg-orange" type="button" style="padding:12px; border-radius: 0px 5px 5px 0px; margin-top: 0px;"><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
							</div>
						</form>
					</li>
				</ul>
			</div>
		</div>
	<br>


		<div class="row listitem">
		`	<div class="col-sm-7 col-sm-offset-2 col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2">
				<ul>
					<li>A</li>
					<hr>
				 	<li>
						<a href='#'>
							<span class="glyphicon glyphicon-eye-open" style="float-left; margin-right:2%;"></span>
							<span title="Aagri Restaurants">Eye Specialist</span>
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</li>
		<hr>
				</ul>
				<br><br><br>
			</div>
		</div>
	</div>
@endsection

