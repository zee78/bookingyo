@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<!--  -->


<div class="container" style="background-color: #fff;">
	<div class="row" id="row_pdng">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<form class="form-horizontal" style="padding:15px; background-color:#ece7e794; border-radius: 5px;">

					<h3 style="text-align: center; background-color: #ece8e8; padding: 10px 0px;">Update Your Profile</h3>
					<br>

				  <div class="form-group">
				    <label for="Castle" class="col-sm-2 control-label">Castle</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="d sad">
				      <div style="color: darkgrey;"> Example: Hong</div>
				    </div>
				  </div>


				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="das">
				      <div style="color: darkgrey;"> For Example</div>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="address" class="col-sm-2 control-label">Address</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="Address">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="City and Province" class="col-sm-2 control-label">City and province</label>
				    <div class="col-sm-10">
				      <select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="Old Town" class="col-sm-2 control-label">Old Town</label>
				    <div class="col-sm-10">
				      <select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="Gender" class="col-sm-2 control-label">Gender</label>
				    <div class="col-sm-10">
				      <label class="radio-inline"><input type="radio" class="form-check-input" name="optradio" style="display: block;">Male</label>
				      <label class="radio-inline "><input type="radio" class="form-check-input" name="optradio" style="display: block;">Female</label>
				      <label class="radio-inline"><input type="radio" class="form-check-input" name="optradio" style="display: block;">Irrelevant</label>
				    </div>
				  </div>

				  <div class="form-group"">
				    <label class="col-sm-2"></label>
				    <div class="col-sm-10">
				      <button class="btn btn-primary btn_styl" type="button" style="float: left;">Save</button>
				 	 <button class="btn btn-danger btn_styl" type="button" style="float: right;">Cancel</button>
				    </div>
				  </div>

				  
				  <br>
				</form>


			</div>
		<div class="col-md-2"></div>
	</div>
</div>






@endsection
