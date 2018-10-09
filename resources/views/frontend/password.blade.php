@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<!--  -->


<div class="container" style="background-color: #fff;">
	<div class="row" id="row_pdng">
		<div class="col-md-3"></div>
			<div class="col-md-6">
				<form class="form-horizontal" style="padding:15px; background-color:#ece7e794; border-radius: 5px;">

					<h3 style="text-align: center; background-color: #ece8e8; padding: 10px 0px;">Update Your Password</h3>
					<br>

				  <div class="form-group">
				    <label for="Castle" class="col-sm-3 control-label">New Password</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="New Password">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="col-sm-3"></label>
				    <div class="col-sm-9">
				      <button class="btn btn-primary btn_styl" type="button" style="float: left;">Save</button>
				 	 <button class="btn btn-danger btn_styl" type="button" style="float: right;">Cancel</button>
				    </div>
				  </div>  
				  <br>
				</form>


			</div>
		<div class="col-md-3"></div>
	</div>
</div>






@endsection
