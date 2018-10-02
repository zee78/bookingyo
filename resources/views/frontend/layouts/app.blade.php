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
        <link href="{{asset('frontend-assets/css/prettyPhoto.css')}}" rel='stylesheet' type='text/css' />
        
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
        <link href="{{('frontend-assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        <!-- <link href="{{('frontend-assets/css/owl.carousel.css')}}" rel="stylesheet"> -->
        <link href="{{('frontend-assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
        
    </head>
    <body style="background: #C3C3C3;">
        @include('frontend.includes.header')
        
        @yield('inner-header')
        @yield('content')

        <div class="side-bar">
          <a href="#" class="sns">Talk SNS</i></a> 
          <a href="#" class="listingFree">Free Listing</a> 
          <a href="#" class="customer">Customer Care</a> 
          <a href="#" class="advertise">Advertise</a>
          <a href="#" class="youtube">Coupon</a> 
        </div>
        @include('frontend.includes.footer')
        <!-- <a href="#" class="job-notification">
            <i class="fa fa-bell"></i>
            <span class="notification-label">Subscribe for job notifications</span>
        </a>
        <a href="#" class="back-to-top" style="display: inline;">
            <i class="fa fa-arrow-up"></i>
        </a> -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('frontend-assets/js/jquery.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('frontend-assets/js/bootstrap.min.js') }}"></script>
        <!-- Pretty Photo for Slider -->
        <script src="{{ asset('frontend-assets/js/jquery.prettyPhoto.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
        <!-- Owl Carousel -->
        <script type="{{('frontend-assets/js/owl.carousel.min.js')}}"></script>
        @yield('script')
        

        <script src="{{('frontend-assets/js/owl.carousel.min.js')}}"></script>
		

        <script type="text/javascript" charset="utf-8">
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
        </script>     
    </body>
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
    $('select[name="dropdown"]').change(function(){
    
    if ($(this).val() == "2"){
    $('#image-view').css('display', 'block');
    $('#list-view').css('display', 'none');
    }else{
    $('#image-view').css('display', 'none');
    $('#list-view').css('display', 'block');
    }
});
</script>

<script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:14,
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
</html>