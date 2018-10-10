@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('content')
<!--  -->


<div class="container" style="background-color: #fff;">

	<br><br>
	<button class="btn btn-danger" type="button" >Buy Coupons</button>

	<br><br><br>

	<div class="panel">
	<div class="table-responsive">
  	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Coupons</th>
      <th scope="col">Sale</th>
      <th scope="col">Validity</th>
      <th scope="col">Availability of reservation form</th>
      <th scope="col">Expiration Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Resturant</th>
      <td>5%</td>
      <td>30 Days</td>
      <td>yes</td>
      <td>January 1, 1970</td>
    </tr>
    
  </tbody>
</table>

</div>
</div>
<br><br><br><br><br><br>


</div>






@endsection
