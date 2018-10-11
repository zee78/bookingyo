@extends('frontend.layouts.app')
@section('title', 'Booking Yo')

@section('styling')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/dashboard.css') }}">

@endsection

@section('content')

<div class="container margin-50" style="background-color: #fff;">
  <div class="row" style="margin: 0;">
    <div class="col-md-12">
      <button class="btn btn-danger" type="button" >Buy Coupons</button><br><br>
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
    </div>
  </div>
</div>

@endsection
