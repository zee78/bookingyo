<template>
    <div class="container" style="background: #fff;">

	<div id="menuSlider" class="wow fadeInUp hidden-xs">
        <div class="container">

          <div class="row">
            <div class="col-md-1">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sideBar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="col-md-11">
              <div class="owl-carousel listing-carousel">
				  
                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> Social</span>
                <span><i class="fa fa-plane" aria-hidden="true"></i> Air Ticket</span>
                <span><i class="fa fa-money" aria-hidden="true"></i> O2O</span>
                <span><i class="fa fa-car" aria-hidden="true"></i> Auto Mobile</span>
                <span><i class="fa fa-file-archive-o" aria-hidden="true"></i> Order</span>
                <span><i class="fa fa-calendar" aria-hidden="true"></i> Calender</span>
                <span><i class="fa fa-address-card-o" aria-hidden="true"></i> Reservation</span>
              </div>
            </div>
          </div>

        </div>
      </div>
        <div class="content">
            <div class="contentblock">
			<div class="col-md-7">
				<div class="slider-container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img :src="'frontend-assets/static-images/home/hotels.jpg'" alt="School" style="height: 450px; width: 100%;">
							</div>
							<div class="item">
								<img :src="'frontend-assets/static-images/home/hotels1.jpg'" alt="School" style="height: 450px; width: 100%;">
							</div>
							<div class="item">
								<img :src="'frontend-assets/static-images/home/hotels3.jpg'" alt="School" style="height: 450px; width: 100%;">
							</div>
							<div class="item">
								<img :src="'frontend-assets/static-images/home/hotels4.jpg'" alt="School" style="height: 450px; width: 100%;">
							</div>
						</div>
						<!-- Left and right controls -->
						<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a> -->
					</div>
				</div>
				<!-- <div class="slider_main">
						<a href="https://www.okjoa.com/seoul/829/hotel-2"><img :src="'frontend-assets/static-images/home/hotels.jpg'"></a>
				</div> -->
			</div>
			
			<div class="col-md-5">
				<div class="col-md-6 category-img" style="border:0px solid #EEEEEE;">
					<router-link to="/rest_list"><img :src="'frontend-assets/static-images/home/resturants.jpg'" style="width: 100%">
						<div class="overlay-text">
							<h4>Resturants</h4>
							<span>dining, lounge bar, pizza ...</span>
						</div>
					</router-link>
				</div>
				<div class="col-md-6 category-img" style="border:0px solid #EEEEEE;">
					<a href=""><img :src="'frontend-assets/static-images/home/movies.jpg'">
						<div class="overlay-text" style="top: 83%;">
							<h4>Movies</h4>
						</div>
					</a>
				</div>
				<div class="col-md-6 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/medical.jpg'">
						<div class="overlay-text">
							<h4>Medical</h4>
							<span>doctor, hospitals ....</span>
						</div>
					</a>
				</div>
				<div class="col-md-6 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/travel.jpg'">
						<div class="overlay-text">
							<h4>travel</h4>
							<span>flights, hotels, cruises ...</span>
						</div>
					</a>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/flights.jpg'">
						<div class="overlay-text" style="top: 83%;">
							<h4>flights</h4>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/luxury.jpg'">
						<div class="overlay-text" style="left: 21%;">
							<h4>hotels</h4>
							<span>luxury, comfort, budget </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/taxi.jpg'">
						<div class="overlay-text" style="top: 83%; left: 41%;">
							<h4>taxi</h4>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/nightBars.jpg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>night life</h4>
							<span>bars, pubs, lounges </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/deal.jpeg'">
						<div class="overlay-text" style="left: 81%;">
							<h4>Deal offers</h4>
							<span>shopping, resturants ... </span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/grocery.jpg'">
						<div class="overlay-text">
							<h4>Daily needs</h4>
							<span>grocery, pharmacy ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/flowers.jpg'">
						<div class="overlay-text" style="left: 21%;">
							<h4>flowers</h4>
							<span>florists </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/coffee.jpg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>coffee shops</h4>
							<span>coffee & tea </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/homeService.jpg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>home service</h4>
							<span>carpenters, plumbing ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/autoService.jpg'">
						<div class="overlay-text"  style="left: 81%;">
							<h4>auto services</h4>
							<span>services, tire, towing </span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/repair.jpg'">
						<div class="overlay-text">
							<h4>repairs</h4>
							<span>refrigerators, washer </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/beauty.jpg'">
						<div class="overlay-text" style="left: 21%;">
							<h4>beauty & spa</h4>
							<span>salons, day spas ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href="">
                        <img :src="'frontend-assets/static-images/home/homeDeco.jpg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>home decoration</h4>
							<span>bed & bath, furniture ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/homeImprove.jpeg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>home improvement</h4>
							<span>contractors, interior ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/pets.jpeg'">
						<div class="overlay-text" style="left: 81%;">
							<h4>pets</h4>
							<span>salons, grooming, vets ... </span>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="contentblock2">
			<div class="col-md-12" style="display: block;">
				<h4 class="text-center"><strong>Explore A to Z	</strong> </h4>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/activeLife.jpg'">
						<div class="overlay-text">
							<h4>active life</h4>
							<span>parks, playgrounds </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/autoMobile.jpg'">
						<div class="overlay-text" style="left: 21%;">
							<h4>auto mobile</h4>
							<span>new, pre-owned, repairs ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/babyCare.jpg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>baby care</h4>
							<span>apparels, gear, toy ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/books.jpg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>books</h4>
							<span>best sellers, literature ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/carRental.jpg'">
						<div class="overlay-text" style="left: 81%; top: 88%;">
							<!-- <h4>pets</h4> -->
							<span>rent a car, reservation ... </span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/cateringService.jpg'">
						<div class="overlay-text">
							<h4>catering services</h4>
							<span>wedding, parties, events </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/cleaning.jpeg'">
						<div class="overlay-text" style="left: 21%;">
							<h4>cleaning services</h4>
							<span>carpets, rugs, janitors ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/dayCare.jpeg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>day care</h4>
							<span>child care, day care ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/doctor.jpg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>doctors</h4>
							<span>dentist, chiropractors ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/education.jpg'">
						<div class="overlay-text" style="left: 81%;">
							<h4>education</h4>
							<span>pre schools, colleges ... </span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/emergency.jpeg'">
						<div class="overlay-text">
							<h4>emergency</h4>
							<span>ambulance, blood bank.. </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/eventsPlanning.jpg'">
						<div class="overlay-text" style="left: 21%;">
							<h4>events planning</h4>
							<span>birthdays, wedding ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/finance.jpg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>finance</h4>
							<span>insurance, loans ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/fitness.jpeg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>fitness</h4>
							<span>gyms, fitness centers ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/hospital.jpg'">
						<!-- <div class="overlay-text" style="left: 61%;">
								<h4>doctors</h4>
								<span>dentist, chiropractors ... </span>
						</div> -->
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/insurance.jpg'">
						<div class="overlay-text">
							<h4>risk insurance</h4>
							<span>auto, dwental, farm, travel</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/liqour.jpg'">
						<div class="overlay-text" style="left: 21%; top: 86%;">
							<h4>linqour store</h4>
							<!-- <span>birthdays, wedding ...</span> -->
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/movingStorage.jpg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>moving & storage</h4>
							<span>movers, mini storage ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/party.jpg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>party</h4>
							<span>planners, photographer ... </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/pest.jpeg'">
						<div class="overlay-text" style="left: 81%;">
							<h4>pest control</h4>
							<span>termite, ants, bugs  </span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px; width: 40%;">
					<a href=""><img :src="'frontend-assets/static-images/home/professional.jpg'">
						<div class="overlay-text">
							<h4>professional svcs</h4>
							<span>attorneys, accountants ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/realEstate.jpeg'">
						<div class="overlay-text" style="left: 41%;">
							<h4>Real Estate</h4>
							<span>buy, sell, rent </span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/shopping.jpg'">
						<div class="overlay-text" style="left: 61%;">
							<h4>shopping</h4>
							<span>clothing, jewellry, watches ...</span>
						</div>
					</a>
				</div>
				<div class="col-md-2-1 category-img" style="border:0px solid #EEEEEE;padding-top:5px;">
					<a href=""><img :src="'frontend-assets/static-images/home/wedding.jpg'">
						<div class="overlay-text" style="left: 81%;">
							<h4>wedding</h4>
							<span>bridal wear, jewellary ... </span>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-12" style="padding: 0 33px; margin-bottom: 25px;">
			<div class="col-md-12 shopsBlock">
				<div class="col-md-4">
					<img :src="'frontend-assets/static-images/home/electronics.jpeg'">
					<h4>Electronics</h4>
					<a href="">Shop Now<i class="fa fa-play" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4">
					<img :src="'frontend-assets/static-images/home/booksCates.jpg'">
					<h4>Books</h4>
					<a href="">Shop Now<i class="fa fa-play" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4">
					<img :src="'frontend-assets/static-images/home/flowersCates.jpg'">
					<h4>Flower</h4>
					<a href="">Shop Now<i class="fa fa-play" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4">
					<img :src="'frontend-assets/static-images/home/onlineShops.jpg'">
					<h4>Shop Online</h4>
					<a href="">Shop Now<i class="fa fa-play" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4" style="padding-top: 15px;">
					<img :src="'frontend-assets/static-images/home/autoMobiles.jpg'">
					<h4>Automobiles</h4>
					<a href="">Shop Now<i class="fa fa-play" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4" style="padding-top: 15px;">
					<img :src="'frontend-assets/static-images/home/livingRoom.jpg'">
					<h4>Living Rooms</h4>
					<a href="">Shop Now<i class="fa fa-play" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="padding: 0 33px; margin-bottom: 25px;">
			<div class="col-md-12 shopsBlock" style=" background-image: url('frontend-assets/static-images/home/footerBg.jpg');">
				<div class="text-center col-md-offset-4 col-md-4" style="padding: 40px 15px">
					<h3 class="text-white">Be a part of our family & <br> get everything in your pocket</h3>
					<div class="form-group getApp">
						<label>Download the Booking Yo App</label>
						<div class="input-group">
							<span class="input-group-btn">
								
								<input type="text" class="form-control" placeholder="Enter Phone Number">
								<button class="btn btn-default bg-orange" type="button">Get App</button>
							</span>
						</div>
					</div>
					<div class="app-bottom-btn">
						<div class="apple-btn" style="background: #222;"><a href="#"><img :src="'frontend-assets/static-images/home/apple-app.svg'"></a></div>
						<div class="google-btn" style="background: #222;"><a href="#"><img :src="'frontend-assets/static-images/home/google-play.svg'"></a></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
</template>

 <script :src="'frontend-assets/js/owl.carousel.min.js'"></script>

<script>
   
 
   export default {
	
     data(){
        return{
		  selected:'',
		  owl:'',
        }
    },
    methods:{
  
},
    mounted(){
		$('.owl-carousel').owlCarousel({
			 items:10,
			loop:true,
			margin:0,
			autoplay:false,
			autoplayTimeout:1000,
			autoplayHoverPause:true
		});
    }
}

</script>

<style>
@import '/frontend-assets/css/owl.carousel.min.css';
@import '/frontend-assets/css/owl.theme.default.min.css';
</style>
