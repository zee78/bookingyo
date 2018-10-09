@extends('frontend.layouts.app')

@section('title', 'Booking Yo')

@section('styling')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/grocery-order.css') }}">

@endsection

@section('content')

<div class="container" style="background: #fff; padding-bottom: 25px;">
	<div class="top-header">
		<div class="adsSection">
			<img src="{{('frontend-assets/static-images/groceryOrder/banner.jpeg')}}">
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
					<p class="opens-lbl"><label class="hours-lbl">Opens 24 Hours , today</label>
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
	<div class="row pager-section">
    <div class="btn-group btn-breadcrumb">
        <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
        <a href="#" class="btn btn-default">Korea</a>
        <a href="#" class="btn btn-default">Seoul</a>
        <a href="#" class="btn btn-default">Seocho-Gu</a>
        <a href="#" class="btn btn-default">Yangjae-Dong</a>
        <a href="#" class="btn btn-default">CU</a>
        <a href="#" class="btn btn-default">Grocery</a>
        <a href="#" class="btn btn-default">Order Grocery Online</a>
    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row main-row">
				<div class="col-md-3 grocery-sideBar">
					<div class="select-sideBar">
            <label><i class="fa fa-map-marker"></i> <span>Set Location</span></label>
            
          	<select class="form-control">
              <option>Islamabad</option>
              <option>Karachi</option>
              <option>Islamabad</option>
              <option>Islamabad</option>
            </select>                 
          </div>
					<div class="select-sideBar">
            <label><i class="fa fa-map-marker text-muted"></i></label>
          	<span class="location-name">Islamabad Pakistan</span>               
          </div>


          <!-- Content -->
          <div class="left-sidebar hidden-xs">
          	<h5>Store</h5>
          	<p>Order History & Hotlist <span class="badge like_badge bg-lightgreen">2</span></p>
          	<ul>
          		<li><span>Grocery</span><i class="fa fa-plus pull-right" id="showList"></i>
          			<i class="fa fa-minus pull-right" id="hideList" style="display: none;"></i>
          			<ul id="inner-list" style="display: none;">
          				<li>All Items</li>
          				<li><i class="fa fa-plus" id="innerShow"></i>
          					<i class="fa fa-minus" id="innerHide" style="display: none;"></i>&nbsp;Dal & Pulses
          					<ul id="innerInner-list" style="display: none;">
          						<li>All Items</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Dal & Pulses</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Dry Fruits</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Edible Oils & Ghee</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Floor & Sooji</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Masala & Spices</li>
          						<li>&nbsp;&nbsp; Mouth Freshners</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Organic Staples</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Rice & Rice Products</li>
          						<li><i class="fa fa-plus"></i>&nbsp;Salt Sugar & Jaggery</li>
          						<li>&nbsp;&nbsp; Seeds</li>
          						<li>&nbsp;&nbsp; Whole Grain</li>
          					</ul>
          				</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Dry Fruits</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Edible Oils & Ghee</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Floor & Sooji</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Masala & Spices</li>
          				<li>&nbsp;&nbsp; Mouth Freshners</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Organic Staples</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Rice & Rice Products</li>
          				<li><i class="fa fa-plus"></i>&nbsp;Salt Sugar & Jaggery</li>
          				<li>&nbsp;&nbsp; Seeds</li>
          				<li>&nbsp;&nbsp; Whole Grain</li>
          			</ul>
          		</li>
          		<li><span>Patanjali Product</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Snakes & Packaged Food</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Bread Dairy Eggs Bakery</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Household</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Beverages</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Personal care</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Condiments & Baking</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Breakfast & Cereals</span><i class="fa fa-plus pull-right"></i></li>
          		<li><span>Baby acre Products</span><i class="fa fa-plus pull-right"></i></li>
          	</ul>
          </div>
          <!-- End Content -->

				</div>
				<div class="col-md-9 detail-section">
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs table_tabs grocery-tab" role="tablist">
							<li role="presentation">
								<a href="#overview" aria-controls="overview" class="txt-muted" role="tab" data-toggle="tab">Overview</a>
							</li>
							<li role="presentation">
								<a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Photos</a>
							</li>
							<li role="presentation" class="active">
								<a href="#groceryMenu" aria-controls="menu" role="tab" data-toggle="tab">Grocery Menu</a>
							</li>
							<li role="presentation">
								<a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a>
							</li>
							<li role="presentation">
								<a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a>
							</li>
							<li role="presentation">
								<a href="#information" aria-controls="information" role="tab" data-toggle="tab">Q & A</a>
							</li>
						</ul>

						<!-- Filter  -->
						<ul class="list-inline grocery-listLine">
							<li>
								<div class="input-box">
										<i class="fa fa-search icon"></i>
										<input name="username" type="text" class="form-control input-field" placeholder="Search for items">
								</div>
								
								<!-- <div class="input-container">
							    <i class="fa fa-envelope icon"></i>
							    <input class="input-field" class="form-control" type="text" placeholder="Email" name="email">
							  </div>-->
							</li>
							<li><a href=""><i class="fa fa-filter"></i> Filter</a></li>
							<li><a href=""> <i class="fa fa-thumbs-up text-muted"></i>Favourite</a></li>
							<li>
								<select name="dropdown" class="listing-option" style="border: 0;background: transparent;">
								    <option value="1"> &#xf03a; List</option>
								    <option value="2"> &#xf03e; Image</option>
								</select>
							</li>
							<li><a href=""><i class="fa fa-share-alt" aria-hidden="true" style="padding: 0"></i></a></li>
						</ul>
						<!-- End -->
						<div class="row pages-breadcrumb">
				        <div class="btn-group btn-breadcrumb">
				            <a href="#" class="btn btn-default">Store</a>
				            <a href="#" class="btn btn-default">Bread Di..</a>
				            <a href="#" class="btn btn-default">Diary</a>
				            <a href="#" class="btn btn-default">Other Diar.</a>
				            <a href="#" class="btn btn-default">Nestle Yogurt</a>
				        </div>
							</div>

						<!-- Tab panes -->
						<div class="tab-content">
							<!-- OverView Tab Start -->
							<!-- <div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
							</div>
							<div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
							</div> -->
							<div role="tabpanel" class="tab-pane  overview active" id="groceryMenu" style="margin-top: 0;">
								<div class="row product-detail">
									<div class="col-md-11" style="padding: 15px;">
										<div class="row thumbnail-row" id="featureItem" style="border-bottom: 1px solid lightgray;">
											<div class="col-xs-12 col-sm-6 col-md-6">
							          <div class="thumbnail">
							            <img src="{{('frontend-assets/static-images/groceryOrder/peach.jpeg')}}" alt="">
							              <div class="caption">
							              	<div id="itemSlider" class="wow fadeInUp hidden-xs">
		                            <div class="col-md-12">
		                              <div class="owl-carousel product-carousel">
		                                <img src="{{('frontend-assets/static-images/groceryOrder/logo.png')}}">
		                                <img src="{{('frontend-assets/static-images/groceryOrder/logo.png')}}">
		                                <img src="{{('frontend-assets/static-images/groceryOrder/logo.png')}}">
		                                <img src="{{('frontend-assets/static-images/groceryOrder/logo.png')}}">
		                                <img src="{{('frontend-assets/static-images/groceryOrder/logo.png')}}">
		                              </div>
		                            </div>
				                      </div>
							                <div class="text-center bottom-section-lbl">
							                	<h5><i class="fa fa-download"></i>&nbsp;<label>30% Off</label></h5>
							                	<p class="qrCode">Coupon QR Code <br>Download</p>
							                </div>
							            </div>
							          </div>
							        </div>
											<div class="col-xs-12 col-sm-6 col-md-4">
												<div class="product-desc">
													<ul>
														<li><i class="fa fa-video-camera fa-2x" style="color: red;"></i></li>
														<li><i class="fa fa-comments fa-2x" style="color:#0368ff;"></i></li>
													</ul>
												</div>
												<h4 class="product-title">Nestle YoGurt <i class="fa fa-thumbs-up text-primary"></i></h4>
												<p style="font-size: 12px;">|||||||||||||||||||||||||||||||||||||||||||||</p>
												<p>400 ml</p>

												<span>SIZES:</span>
												<div>
													<input type="radio" name="" checked=""> <span style="color: #0368ff;">400 ml - <i class="fa fa-won"></i>. 1000 won</span><br>
													<input type="radio" name=""> <span>600 ml - <i class="fa fa-won"></i> 1500 won</span>
												</div>
												 <h4 class="text-center"><span style="font-size: 14px;">Price:</span> <i class="fa fa-won"></i> 1,000 won</h4>
												<div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn" style="width: 28%">ADD</button>
				                </div>
							        </div>
										<div class="row">
											<div class="col-md-10 product-cate">
												<h4>Diary :</h4>
												<ul style="padding-left: 0;">
													<li>Butter & Margrine </li>| <li>Buttermilk</li> | <li>Cheese</li> | <li>Condensed Milk</li> | <li>Cream</li> | <li>Lassi</li> | <li>Milk</li> | <li>Milk Drinks</li> | <li>Paneer &  Tofu</li> | <li>Shrikhand</li> | <li>Soya Drinks</li> | <li>Yogurt</li> | <li class="text-danger">Other Dairy Products</li>
												</ul>
											</div>
										</div>
										<!-- Item Advantages -->
										<div class="row product-description">
											<div class="col-md-4">
												<h4><strong>Nurition Facts</strong></h4>
												<div style="border-bottom: 5px solid black;">
													<p>Serving Size 240 ml</p>
													<p>Servings Per Container 16</p>
												</div>
												<ul>
													<li>Amount Per Serving</li>
													<li style="border-bottom: 3px solid black;"><b>Calories</b>150 <span class="pull-right">Calories from Fat 70</span></li>
													<li class="text-right"><b>% Daily Values*</b></li>
													<li><b>Total Fat</b> 8G <span class="pull-right"><strong>12%</strong></span></li>
													<li>&nbsp;Saturated Fat 3.00000<span class="pull-right"><strong>15.00%</strong></span></li>
													<li>&nbsp;Trans Fat 0.00000</li>
													<li><strong>Cholestrol</strong> 20.00000<span class="pull-right"><strong>7.00%</strong></span></li>
													<li><strong>Sodium</strong> 130.00000<span class="pull-right"><strong>5.00%</strong></span></li>
													<li><strong>Total Carbohydrates</strong> 12G<span class="pull-right"><strong>4%</strong></span></li>
													<li>&nbsp;Dietary Fiber 0G <span class="pull-right"><strong>0%</strong></span></li>
													<li>&nbsp;Sugars 12.00000 </li>
													<li style="border-bottom: 5px solid black;"><strong>Protein </strong>8G</li>
													<li><span>Vitamin A &nbsp; &nbsp; 10%</span><span class="pull-right">Calcium &nbsp; &nbsp; 30%</span></li>
													<li><span>Vitamin C &nbsp; &nbsp; 4%</span><span class="pull-right">Folic Acid &nbsp; &nbsp; 0%</span></li>

												</ul>
												<p class="text-justify">*Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna </p>
											</div>
											<div class="col-md-4">
												<h4><strong>Details</strong></h4>
												<h5><strong>Ingredients</strong></h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												<br><a href="">Vew More <i class="fa fa-caret-down"></i></a></p>
												<h4><strong>Product Features</strong></h4>
												<div>
													<h6><strong>Great Value 2% Reduced Fat Milk, 1 gal:</strong></h6>
													<p>Added vitamin A and D</p>
													<p>37% less fat than whole Milk</p>
													<p>Grade A</p>
													<p>Pasteurized</p>
													<p>Homogenized</p>
													<p>Excellent source of protein and calcium</p>
												</div>
												<h4><strong>Special Features</strong></h4>
												<p>Contains no artificial growth hormones</p>

											</div>
											<div class="col-md-4">
												<h4><strong>Benefits</strong></h4>
												<div>
													<h5>Purchase Benefits</h5>
													<p>Additional to ern point US$2.00</p>
													<p><i class="fa fa-plus text-primary"></i> Bookingyo help point 20</p>
													<p><i class="fa fa-plus text-primary"></i> Bookingyo ern US$1.00</p>
												</div>
												<div style="padding-left: 10px;">
													<h4><strong>Write Reveiw Benefit</strong></h4>
													<p>Maximum points US$3.00</p> <br>
													<h4><strong>Country of Origin</strong></h4>
													<p>Republic of Korea</p><br>
													<h4><i class="fa fa-car text-danger"></i> <strong>Type of Delivery</strong></h4>
													<p>COD</p>
													<p>Door to Door</p>
													<p>O2O</p>
													<p>Credit Card</p>
													<p>Cash</p>
													<br>
													<h4><strong>Shipping Cost</strong></h4>
													<p>US$20.00(US$500.00 or more free/jeju Island areas add US$2.00 ath the time purchase</p>
												</div>
											</div>
										</div>
									</div>
									<h4>Similar Products</h4>
									<div class="row similarProduct" style="border: 1px solid lightgray;">
		              	<div id="similarSlider" class="wow fadeInUp hidden-xs">
                      <div class="col-md-12">
                        <div class="owl-carousel product-carousel">
                            <div class="thumbnail">
                            	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
                              <img src="{{('frontend-assets/static-images/groceryOrder/yought.jpeg')}}" alt="">
                                <div class="caption">
                                  <h5>Nestle Yogurt</h5>
                                  <p>100 RS</p>
                                  <label>2 + 1</label><br>
                                  <div class="text-center">
                                  	<select>
                                  		<option>80gm</option>
                                  		<option>100gm</option>
                                  		<option>200gm</option>
                                  	</select>
                                  </div>
                                  <!-- <div class="text-center">
                                  	<div class="number-input">
                  									  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                  									  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  									  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  									</div>
                                  </div> -->
                  								<div class="text-center">
                                  	<button class="btn btn-success btn-xs add-btn">ADD</button>
                                  </div>
                              </div>
                            </div>
                          <div class="thumbnail">
        				          	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
        				            <img src="{{('frontend-assets/static-images/groceryOrder/yought.jpeg')}}" alt="">
        				              <div class="caption">
        				                <h5>Nestle Yogurt</h5>
        				                <p>100 RS</p>
        				                <label>2 + 1</label><br>
        				                <div class="text-center">
        				                	<select>
        				                		<option>80gm</option>
        				                		<option>100gm</option>
        				                		<option>200gm</option>
        				                	</select>
        				                </div>
        				                <!-- <div class="text-center">
        				                	<div class="number-input">
        													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
        													  <input class="quantity" min="0" name="quantity" value="1" type="number">
        													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
        													</div>
        				                </div> -->
                								<div class="text-center">
                                	<button class="btn btn-success btn-xs add-btn">ADD</button>
                                </div>
        				            </div>
        				          </div>
                          <div class="thumbnail">
								          	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
								            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
								              <div class="caption">
								                <h5>Nestle Yogurt</h5>
								                <p>100 RS</p>
								                <label>2 + 1</label><br>
								                <div class="text-center">
								                	<select>
								                		<option>80gm</option>
								                		<option>100gm</option>
								                		<option>200gm</option>
								                	</select>
								                </div>
								                <!-- <div class="text-center">
								                	<div class="number-input">
																	  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
																	  <input class="quantity" min="0" name="quantity" value="1" type="number">
																	  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
																	</div>
								                </div> -->
								                <div class="text-center">
								                	<button class="btn btn-success btn-xs add-btn">ADD</button>
								                </div>
								            </div>
								          </div>
                          <div class="thumbnail">
								          	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
								            <img src="{{('frontend-assets/static-images/groceryOrder/yought.jpeg')}}" alt="">
								              <div class="caption">
								                <h5>Nestle Yogurt</h5>
								                <p>100 RS</p>
								                <label>2 + 1</label><br>
								                <div class="text-center">
								                	<select>
								                		<option>80gm</option>
								                		<option>100gm</option>
								                		<option>200gm</option>
								                	</select>
								                </div>
								                <!-- <div class="text-center">
								                	<div class="number-input">
																	  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
																	  <input class="quantity" min="0" name="quantity" value="1" type="number">
																	  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
																	</div>
								                </div> -->
								                <div class="text-center">
								                	<button class="btn btn-success btn-xs add-btn">ADD</button>
								                </div>
								            </div>
								          </div>
                          <div class="thumbnail">
								          	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
								            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
								              <div class="caption">
								                <h5>Nestle Yogurt</h5>
								                <p>100 RS</p>
								                <label>2 + 1</label><br>
								                <div class="text-center">
								                	<select>
								                		<option>80gm</option>
								                		<option>100gm</option>
								                		<option>200gm</option>
								                	</select>
								                </div>
								                <!-- <div class="text-center">
								                	<div class="number-input">
																	  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
																	  <input class="quantity" min="0" name="quantity" value="1" type="number">
																	  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
																	</div>
								                </div> -->
                								<div class="text-center">
                                	<button class="btn btn-success btn-xs add-btn">ADD</button>
                                </div>
								            </div>
								          </div>
                        </div>
                      </div>
                    </div>
									</div>	
										<!-- End -->
									</div>	
									<div class="col-md-1" style="margin-top: 15px;">
										<img src="{{'frontend-assets/static-images/groceryOrder/ads.jpg'}}" class="img-responsive" alt="Image">
									</div>
								
							</div>
							<!-- <div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
							</div> -->
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
	$('#showList').click(function(){
		$('#inner-list').show();
		$('#showList').hide();
		$('#hideList').show();
	});

	$('#hideList').click(function(){
		$('#inner-list').hide();
		$('#showList').show();
		$('#hideList').hide();
	});



	$('#innerShow').click(function(){
		$('#innerInner-list').show();
		$('#innerShow').hide();
		$('#innerHide').show();
	});

	$('#innerHide').click(function(){
		$('#innerInner-list').hide();
		$('#innerShow').show();
		$('#innerHide').hide();
	});


	$('#showItem').click(function(){
		$('#addedItem').show();
		$('#hideItem').show();
		$('#showItem').hide();
	});

	$('#hideItem').click(function(){
		$('#addedItem').hide();
		$('#showItem').show();
		$('#hideItem').hide();
	});

	$('#showGrocery').click(function(){
		$('#groceryItem').show();
		$('#hideGrocery').show();
		$('#showGrocery').hide();
	});

	$('#hideGrocery').click(function(){
		$('#groceryItem').hide();
		$('#showGrocery').show();
		$('#hideGrocery').hide();
	});

</script>

<script>
    var owl = $('.product-carousel');
		owl.owlCarousel({
	    items:5,
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


@endsection
@endsection