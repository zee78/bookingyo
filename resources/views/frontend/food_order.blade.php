@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('styling')
<link href="{{ asset('frontend-assets/css/food_order.css') }}" rel="stylesheet">
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
							 <span> Closed</span>
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
					<div>
						<nav class="navigation" id="mainNav">
						<a class="navigation__link" href="#1">Section 1</a>
						<a class="navigation__link" href="#2">Section 2</a>
						<a class="navigation__link" href="#3">Section 3</a>
						<a class="navigation__link" href="#4">Section 4</a>
						<a class="navigation__link" href="#5">Section 5</a>
						<a class="navigation__link" href="#6">Section 6</a>
						<a class="navigation__link" href="#7">Section 7</a>
					</nav>
					</div>
				</div>
				<div class="col-md-9">
				
					<div class="page-section hero" id="1">
						<h1>Smooth scroll, fixed jump menu with active class</h1>
					</div>
					<div class="page-section" id="2">
								<h1>Section Two</h1>
					</div>
					<div class="page-section" id="3">
								<h1>Section Three</h1>
					</div>
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
		//if (scrollDistance >= 850) {
		//		$('nav').fadeIn("fast");
		//} else {
		//		$('nav').fadeOut("fast");
		//}
	
		// Assign active class to nav links while scolling
		$('.page-section').each(function(i) {
			console.log($(this).position());
				if ($(this).position().top <= scrollDistance) {
						$('.navigation a.active').removeClass('active');
						$('.navigation a').eq(i).addClass('active');
				}
		});
}).scroll();
</script>
@endsection