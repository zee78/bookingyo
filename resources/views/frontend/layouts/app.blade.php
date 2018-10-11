<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Bootstrap checking -->
        <link href="{{ asset('frontend-assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend-assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend-assets/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{asset('frontend-assets/css/circle.css')}}" rel='stylesheet' type='text/css' />
        <!-- <link href="{{asset('frontend-assets/css/prettyPhoto.css')}}" rel='stylesheet' type='text/css' />
         -->
        <link href="{{ asset('frontend-assets/css/toastr.css') }}" rel="stylesheet">
        <style type="text/css">
        
        ul li { display: inline; }
        
        .wide {
        border-bottom: 1px #000 solid;
        width: 4000px;
        }
        
        .fleft { float: left; margin: 0 20px 0 0; }
        
        .cboth { clear: both; }
        
        #main {
        background: #fff;
        margin: 0 auto;
        padding: 30px;
        width: 1000px;
        }
        </style>
       
        
        @yield('styling')
    </head>
    <body style="background: #C3C3C3;">
    <div id="app">
     <header_com></header_com>

    <router-view></router-view>

        <div class="side-bar hidden-xs hidden-sm">

          <a href="#" class="sns">Talk SNS</i></a> 
          <a href="#" class="listingFree">Free Listing</a> 
          <a href="#" class="customer">Customer Care</a> 
          <a href="#" class="advertise">Advertise</a>
          <a href="#" class="youtube">Coupon</a> 
        </div>
       <footer_com></footer_com>
     
    </div>
        <!-- <a href="#" class="job-notification">
            <i class="fa fa-bell"></i>
            <span class="notification-label">Subscribe for job notifications</span>
        </a>
        <a href="#" class="back-to-top" style="display: inline;">
            <i class="fa fa-arrow-up"></i>
        </a> -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
      
        <!-- Pretty Photo for Slider -->
        <!-- <script src="{{ asset('frontend-assets/js/jquery.prettyPhoto.js') }}"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
        <!-- Owl Carousel -->
        
        @yield('script')
        

		
<<<<<<< HEAD

      <!--   <script type="text/javascript" charset="utf-8">
=======
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
        <script type="text/javascript" charset="utf-8">
>>>>>>> fc47997ef1b3ba2caf0017907f8646088a4d4c8d
        $(document).ready(function(){
        $("area[rel^='prettyPhoto']").prettyPhoto();
        
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'slow',slideshow:10000, hideflash: true});
        
        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function(){ initialize(); }
        });
        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function(){ _bsap.exec(); }
        });
        });
        </script>   -->   
    
    <script>
    
    
    var myIndex = 0;
    carousel();
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
    <script type="text/javascript">
    $(function() {
    $('#da-slider').cslider({
    autoplay : true,
    bgincrement : 450
    });
    });
    </script>
    <script>
    $('#showFooter').click(function(){
    $('#bottom-footer').toggle();
    $('#bottom-categry').toggle();
    });
    </script>
    <script>
   
</script>

<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:10,
    loop:true,
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

</body>

</html>