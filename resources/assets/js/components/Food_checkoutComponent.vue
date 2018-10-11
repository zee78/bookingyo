<template>
	<div class="container" style="background: #fff; padding-bottom: 25px; padding-top: 25px;">
	<div class="main_div_before_login">
		<div class="row" style="">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="account">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<span class="acount_icon"><i class="fa fa-user"></i></span>
							<h4><strong>Account</strong></h4>
							<p>To place your order now, login to your existing accout or sign up.</p>
							<div class="row">
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-md-offset-1">
									<button type="button" class="btn btn-default btn-block"><span>Have an account</span><br><strong>Login</strong></button>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
									<button type="button" class="btn btn-success btn-block"><span>Have an account</span><br><strong>Login</strong></button>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="item_image">
								<img :src="'frontend-assets/static-images/foodOrder/roll.jpg'" class="img-responsive" alt="Image" style="width: 100%;">
							</div>
						</div>
					</div>
				</div>
				<div class="account">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="acount_icon other"><i class="fa fa-map-marker"></i></span>
							<h4 class="text-muted"><strong>Delivery address</strong></h4>
						</div>
					</div>
				</div>
				<div class="account">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="acount_icon other"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
							<h4 class="text-muted"><strong>Delivery Requirement</strong></h4>
						</div>
					</div>
				</div>
				<div class="account">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="acount_icon other"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
							<h4 class="text-muted"><strong>Payment</strong></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="cart">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="cart_image">
								<img :src="'frontend-assets/static-images/foodOrder/roll.jpg'" class="img-responsive" alt="Image" style="width: 100%;">
							</div>
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h4><strong>Tibb's Frankie</strong></h4>
							<span class="text-muted" style="border-bottom: 2px solid black; padding-bottom: 10px;">Fort Colaba</span>
						</div>
					</div>
					<div class="row" style="margin-top: 30px;">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<span><strong>Veg Frankie</strong></span><br>
							<span class="text-muted">Customise</span>
						</div>
						<div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 col-md-offset-1">
							<div class="text-right">
								<div class="number-input-food">
									<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
									<input class="quantity" min="0" name="quantity" value="1" type="number">
									<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
								</div>
							</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<span><i class="fa fa-krw"></i>170</span>
						</div>
					</div>
					<p>" <span class="text-muted">Any Suggestion? we will pass it on...</span></p>
					<p><span class="text-muted pull-left">Item Total</span><span class="text-muted pull-right"><i class="fa fa-krw"></i>170.00</span></p><br>
					<p><span class="text-muted pull-left">GST</span><span class="text-muted pull-right"><i class="fa fa-krw"></i>8.50</span></p><br>
					<p><span class="text-muted pull-left">Deliver Charges <i class="fa fa-info-circle"></i></span><span class="text-muted pull-right"><i class="fa fa-krw"></i>8.50</span></p><br>
					<hr style="border: 1px solid black;">
					<p><span class="pull-left"><strong>TO PAY</strong></span><span class="pull-right"><i class="fa fa-krw"></i><STRONG>199</STRONG></span></p><br>
				</div>
			</div>
		</div>
	</div>
	<div class="main_div_after_login">
		<div class="row" style="">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="account">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<span class="acount_icon"><i class="fa fa-user"></i></span>
							<h4><strong>Account</strong></h4>
							<p>To place your order now, login to your existing accout or sign up.</p>
							<form action="" method="POST" role="form">
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Name</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-6 col-lg-6">
										<div class="form-group">
											<input type="text" class="form-control" id="" placeholder="Sung Yong Kim">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Mobile Phone#</label>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-6 col-lg-6">
										<div class="form-group">
											<input type="text" class="form-control" id="" placeholder="123456498">
										</div>
									</div>
								</div>
							</form>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="item_image">
									<img :src="'frontend-assets/static-images/foodOrder/roll.jpg'" class="img-responsive" alt="Image" style="width: 100%;">
								</div>
							</div>
						</div>
					</div>
					<div class="account">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<span class="acount_icon other"><i class="fa fa-map-marker"></i></span>
								<h4 class="text-muted"><strong>Delivery address</strong></h4>
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<label for="">Deliver Address</label>
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="margin-top: 0;">
										<div class="form-group">
											<input type="text" class="form-control" id="" placeholder="XXXXXXXXXXX">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="account">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<span class="acount_icon other"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
								<h4 class="text-muted"><strong>Delivery Requirement</strong></h4>
								<p>Need Carefully to packing and keep delivery time within 20 minutes<br>
								and call my mobile when you arrive at my home gate<br> Thank you very much</p>
							</div>
						</div>
					</div>
					<div class="account payment">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 payment_btn_col">
								<span class="acount_icon other"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
								<h4 class="text-muted"><strong>Payment</strong></h4>
								<p>Delivery Agent Billing</p>
								<a class="btn " href=""><span><i class="fa fa-credit-card" aria-hidden="true"></i></span><span style="color: orange;">&nbsp; Credit Card</span><span><span>&nbsp; payment to delivery agent</span><br><small style="color: orange;     margin-left: 22px;">Payment by credit card to the delivery agent upon arrival</small></span></a><br><br>
								<a class="btn " href=""><span><i class="fa fa-credit-card" aria-hidden="true"></i></span><span style="color: orange;">&nbsp; Cash</span><span><span>&nbsp; payment to delivery agent</span><br><small style="color: orange;     margin-left: 22px;">Cash on delivery to the delivery agent upon arrival</small></span></a><br><br>
								<p>General Payment via Booking Yo</p>
								<a class="btn " href=""><span><i class="fa fa-credit-card" aria-hidden="true"></i></span><span><strong>&nbsp; Credit Card Payment </strong></span><br><small style="margin-left: 22px;">(Corporation, check included)</small></a><br>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="cart">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="cart_image">
									<img :src="'frontend-assets/static-images/foodOrder/roll.jpg'" class="img-responsive" alt="Image" style="width: 100%;">
								</div>
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<h4><strong>Tibb's Frankie</strong></h4>
								<span class="text-muted" style="border-bottom: 2px solid black; padding-bottom: 10px;">Fort Colaba</span>
							</div>
						</div>
						<div class="row" style="margin-top: 30px;">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<span><strong>Veg Frankie</strong></span><br>
								<span class="text-muted">Customise</span>
							</div>
							<div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 col-md-offset-1">
								<div class="text-right">
									<div class="number-input-food">
										<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
										<input class="quantity" min="0" name="quantity" value="1" type="number">
										<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<span><i class="fa fa-krw"></i>170</span>
							</div>
						</div>
						<p>" <span class="text-muted">Any Suggestion? we will pass it on...</span></p>
						<p><span class="text-muted pull-left">Item Total</span><span class="text-muted pull-right"><i class="fa fa-krw"></i>170.00</span></p><br>
						<p><span class="text-muted pull-left">GST</span><span class="text-muted pull-right"><i class="fa fa-krw"></i>8.50</span></p><br>
						<p><span class="text-muted pull-left">Deliver Charges <i class="fa fa-info-circle"></i></span><span class="text-muted pull-right"><i class="fa fa-krw"></i>8.50</span></p><br>
						<p><span class="text-muted pull-left">Coupon Code</span><button class="btn btn-default coupon_btn">12345678910</button> <button class="btn pull-right" style="">certificaton</button></p>
						<hr style="border: 1px solid black;">
						<p><span class="pull-left"><strong>TO PAY</strong></span><span class="pull-right"><i class="fa fa-krw"></i><STRONG>199</STRONG></span></p><br>
					</div>
					<div class="cart">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="cart_image">
									<img :src="'frontend-assets/static-images/foodOrder/roll.jpg'" class="img-responsive" alt="Image" style="width: 100%;">
								</div>
								<!-- checking -->
							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<h4><strong>Tibb's Frankie</strong></h4>
								<span class="text-muted" style="border-bottom: 2px solid black; padding-bottom: 10px;">Fort Colaba</span>
							</div>
						</div>
						<div class="row" style="margin-top: 30px;">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<span><strong>Veg Frankie</strong></span><br>
								<span class="text-muted">Customise</span>
							</div>
							<div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 col-md-offset-1">
								<div class="text-right">
									<div class="number-input-food">
										<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
										<input class="quantity" min="0" name="quantity" value="1" type="number">
										<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<span><i class="fa fa-krw"></i>170</span>
							</div>
						</div>
						<p>" <span class="text-muted">Any Suggestion? we will pass it on...</span></p>
						<p><span class="text-muted pull-left">Item Total</span><span class="text-muted pull-right"><i class="fa fa-krw"></i>170.00</span></p><br>
						<p><span class="text-muted pull-left">GST</span><span class="text-muted pull-right"><i class="fa fa-krw"></i>8.50</span></p><br>
						<p><span class="text-muted pull-left">Deliver Charges <i class="fa fa-info-circle"></i></span><span class="text-muted pull-right"><i class="fa fa-krw"></i>8.50</span></p><br>
						<p><span class="text-muted pull-left">Coupon Code</span><span class="pull-right"><i class="fa fa-krw"></i><span style="color: red;">2.00</span></span></p>
						<hr style="border: 1px solid black; width: 100%;">
						<p><span class="pull-left"><strong>TO PAY</strong></span><span class="pull-right"><i class="fa fa-krw"></i><STRONG>197</STRONG></span></p><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
    
}
</script>

<style>
	@import '/frontend-assets/css/food_checkout.css';
</style>