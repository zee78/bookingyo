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
			<div role="tabpanel" class="tab-pane" id="photos">photo</div>
			<div role="tabpanel" class="tab-pane" id="reviews">review</div>
			<div role="tabpanel" class="tab-pane" id="information">info</div>
		</div>
	</div>
</div>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-1">
	<div class="reservation">
		<h3>Make a Reservation</h3>
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
		
		</form>
	</div>
</div>	
</div>
</div>	
</div>
@endsection