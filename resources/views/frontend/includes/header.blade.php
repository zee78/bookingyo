<header>
  <div class="top_header hidden-xs">
    <div class="container">
      <div class="">
        <ul class="top_nav_2 pull-left hidden-sm">
          <li class="logo-list"><a href="{{url('/home')}}"><img src="{{'frontend-assets/static-images/header/logo_main.png'}}" style="width: 100%;"></a>
          <div class="dropdown country-dropdown">
            <button class="language btn btn-primary dropdown-toggle" style="background:transparent;" type="button" data-toggle="dropdown">Pakistan
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="">Korea</a></li>
              <li><a href="">China</a></li>
              <li><a href="">Japan</a></li>
              <li><a href="">USA</a></li>
              <li><a href="">UK</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <ul class="top_nav pull-right">
        <li><a href="#">00.00 USD $</a></li>
        <li><a href="#"><i class="fa fa-commenting" aria-hidden="true"></i><span class="badge"></span></a></li>
        <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge"></span></a></li>
        <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i></a></li>
        <li><a href="{{url('/login')}}"><img src="{{'frontend-assets/static-images/header/user-icon.png'}}"> Zeeshan</a></li>
      </ul>
    </div>
  </div>
</div>
@if(Request::url() === 'http://localhost:8000')
@else
<div class="container" id="hide_bar">
  <nav class="navbar navbar-inverse"> <!-- main-navbar -->
  
  <!-- <div class="navbar-header"> -->
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  
  <!-- </div> -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <div class="col-md-6">
      <a class="navbar-brand" href="{{'/'}}"><i class="fa fa-home fa-2x"></i></a>
      <ul class="nav navbar-nav">
        <li>
          <form>
            <div class="search-box">
              <div class="select-sec">
                <label><i class="fa fa-map-marker"></i></label>
                <select class="form-control">
                  <option>Islamabad</option>
                  <option>Karachi</option>
                  <option>Islamabad</option>
                  <option>Islamabad</option>
                </select>
              </div>
              <div class="input-group">
                <span class="input-group-btn">
                  <input type="text" class="form-control" placeholder="Get free quotes...">
                  <label class="search-bar"><i class="fa fa-microphone"></i></label>
                  <button class="btn btn-default bg-orange" type="button"><span class="glyphicon glyphicon-search"></span> </button>
                </span>
              </div>
            </div>
          </form>
        </li>
      </ul>
    </div>
    <div class="col-md-6 right-menu">
      <ul class="nav navbar-nav">
        <li><a href="#" class="btn bg-primary"> Advertise </a></li>
        <li style="padding-left: 15px;"><a href="#" class="btn listing-btn"> Free Listing</a> </li>
        <li>
          <div class="dropdown">
            <button class="language btn btn-primary dropdown-toggle" style="background:transparent" type="button" data-toggle="dropdown">Language
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="{{ url('locale/en') }}">English</a></li>
              <li><a href="{{ url('locale/kr') }}">Korean</a></li>
              
            </ul>
          </div>
        </li>
        <li><a href="#"><i class="fa fa-heart-o"></i></a> </li>
        <li><a href="#"><i class="fa fa-random"></i></a> </li>
        <li class="text-center">
          <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:#c3c3c3;font-size:20px;"></i><br><span style="color:#c3c3c3;">0 Items</span></a>
        </li>
        <li>
          <a href=""> <img class="img-responsive" src="{{'frontend-assets/static-images/header/user-icon.png'}}" style="height: 25px;"></a>
        </li>
      </ul>
    </div>
  </div>
  </nav><!-- main-navbar -->
</div>
@endif
</header>