@extends('frontend.layouts.app')

@section('title', 'Booking Yo')

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
					<p><label class="hours-lbl">Opens 24 Hours , today</label>
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
	<div class="row pager-section" style="margin: 0;">
		<div class="col-md-12">
			<span><i class="fa fa-home"></i></span>
			<span> &nbsp; &nbsp; Korea</span>
			<span> &nbsp; &nbsp;Seoul</span>
			<span> &nbsp; &nbsp; Seocho-Gu</span>
			<span> &nbsp;  &nbsp; Yangjae-Dong</span>
			<span> &nbsp; &nbsp;  &nbsp; CU</span>
			<span> &nbsp; &nbsp; Grocery</span>
			<span style="background: transparent; color: black;"> &nbsp;  Order Grocery Online</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
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
							<li role="presentation">
								<a href="#menu" aria-controls="menu" role="tab" data-toggle="tab">Grocery Menu</a>
							</li>
							<li role="presentation" class="active">
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

						<!-- House hold -->
						<div class="main-content">
							<div class="col-md-12">
								<div class="col-md-3">
									<span><strong>Order History & Hotlist</strong></span>
								</div>
								<div class="col-md-offset-5 col-md-4">
									<input type="checkbox" name="" class="" style="display: inline-block;"><span class="text-primary">Select all</span>
									<button class="btn btn-primary btn-xs">Add all selected to <i class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
							<div class="col-md-12 section-title" style="background: #eeeeee;">
								<div class="col-md-3">
									<span><input type="checkbox" name="" class="" style="display: inline-block;">&nbsp;<span>Household <span class="text-danger">(2)</span></span>
								</div>
								<div class="col-md-offset-7 col-md-2">
									<i class="fa fa-plus" id="showItem" style="display: none;"></i>
									<i class="fa fa-minus" id="hideItem"></i>
								</div>
							</div>
							<!-- Items Detail -->
							<div class="row thumbnail-row" id="addedItem">
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/yought.jpeg')}}" alt="">
				              <div class="caption">
				                <h5 class="text-center">Nestle Yogurt</h5>
				                <p class="text-center">100 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div>
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/yought.jpeg')}}" alt="">
				              <div class="caption">
				                <h5 class="text-center">Nestle Yogurt</h5>
				                <p class="text-center">100 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div>
				                </div>
				            </div>
				          </div>
				        </div>
							</div>
							<!-- End -->
							<!-- Section 2 Start -->
							<div class="col-md-12 section-title" style="background: #eeeeee;">
								<div class="col-md-3">
									<span><input type="checkbox" name="" class="" style="display: inline-block;">&nbsp;<span>Grocery <span class="text-danger">(2)</span></span>
								</div>
								<div class="col-md-offset-7 col-md-2">
									<i class="fa fa-plus" id="showGrocery" style="display: none;"></i>
									<i class="fa fa-minus" id="hideGrocery"></i>
								</div>
							</div>

							<div class="row thumbnail-row" id="groceryItem">
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5 class="text-center">Strawberry</h5>
				                <p class="text-center price">900 RS</p>
				                <!-- <label>2 + 1</label><br> -->
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail"><input type="checkbox" name=""> <span class="pull-right"><i class="fa fa-thumbs-up text-primary"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5 class="text-center">Strawberry</h5>
				                <p class="text-center price">900 RS</p>
				                <!-- <label>2 + 1</label><br> -->
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
							</div>
							<!-- End Section 2 -->
							<!-- Section 3 -->
							<div class="col-md-12 section-title" style="background: #eeeeee;">
								<div class="col-md-4">
									<span><input type="checkbox" name="" class="" style="display: inline-block;">&nbsp;<span>Online Grocery Store - Featured Products</span>
								</div>
								<div class="col-md-offset-6 col-md-2">
									<i class="fa fa-list" id="showGrocery" style="padding-right: 10px;"></i>
									<i class="fa fa-picture-o" id="hideGrocery"></i>
								</div>
							</div>

							<div class="row thumbnail-row" id="featureItem">
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
							</div>

							<div class="row thumbnail-row" id="featureItem">
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
								<div class="col-xs-12 col-sm-6 col-md-3">
				          <div class="thumbnail">
				          	<div class="top-header-thumbnail"><span class="pull-right"><i class="fa fa-thumbs-up txt-muted"></i></span></div>
				            <img src="{{('frontend-assets/static-images/groceryOrder/strawberry.jpeg')}}" alt="">
				              <div class="caption">
				                <h5>Strawberry</h5>
				                <p class="price">900 RS</p>
				                <label>2 + 1</label><br>
				                <div class="text-center">
				                	<select>
				                		<option>80gm</option>
				                		<option>100gm</option>
				                		<option>200gm</option>
				                	</select>
				                </div>
				                <div class="text-center">
				                	<button class="btn btn-success btn-xs add-btn">ADD</button>
				                	<!-- <div class="number-input">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
													  <input class="quantity" min="0" name="quantity" value="1" type="number">
													  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
													</div> -->
				                </div>
				            </div>
				          </div>
				        </div>
							</div>
							<!-- End Section 3 -->
						</div>
						<!-- End -->
						<!-- Tab panes -->
						<div class="tab-content">
							<!-- OverView Tab Start -->
							<div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
							</div>
							<div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
							</div>
							<div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
							</div>
							<div role="tabpanel" class="tab-pane  overview" id="overview">
								hsjhsjdhjshdsja
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

@endsection
@endsection