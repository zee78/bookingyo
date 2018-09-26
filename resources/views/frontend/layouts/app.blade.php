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
        
        <link href="{{ asset('frontend-assets/css/toastr.css') }}" rel="stylesheet">

        <link href="{{('frontend-assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        
    </head>
    <body style="background: #C3C3C3;">
        @include('frontend.includes.header')

        @yield('inner-header')

        @yield('content')

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
        <!-- Owl Carousel -->

        <script type="{{('frontend-assets/js/owl.carousel.min.js')}}"></script>
		

        @yield('page-footer')
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
        
    </script>
</html>