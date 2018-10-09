@extends('frontend.layouts.app')
@section('title', 'Booking Yo')

@section('styling')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/dashboard.css') }}">

@endsection

@section('content')
<div class="container margin-50" style="background: white;">
	<div class="row" style="margin: 0">
		<div class="col-md-12">
			<div class="table-container">
				<table class="table table-stripped defaulttb">
					<thead>
						<tr>
							<th>Business name</th>
							<th>Business name</th>
							<!--<th>범주</th>-->
							<th>Mutual image</th>
							<th>Representative name</th>
							<th>Mobile Phone Number</th>
							<th width="240px" align="center">Purchase Status</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>sadas d</td>
							<td>d asd</td>
							<td>
								<div class="media">
									<img src="https://www.okjoa.com/upload/listing/vGOwCNQfaU.jpg" style="width:60px;height:60px;" class="media-photo">
								</div>
							</td>
							<td>Das D Sad</td>
							<td>82-1025192103</td>
							<td>
								<a href="" class="cstbtn color_orange" target="_blank" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye"></i></a>
								<a href="" class="cstbtn color_green" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
								<a href="" class="cstbtn color_blue" data-toggle="tooltip" title="" data-original-title="Forms"><i class="fa fa-file-word-o"></i></a>
								<a href="" class="cstbtn color_darkblue" data-toggle="tooltip" title="" data-original-title="Enquiry"><i class="fa fa-sticky-note"></i></a>
								<a href="" class="cstbtn color_lightnlue" data-toggle="tooltip" title="" data-original-title="Doctor Appointment"><i class="fa fa-stethoscope"></i></a>
								<a href="" class="cstbtn color_darkgreen" data-toggle="tooltip" title="" data-original-title="Booking"><i class="fa fa-book"></i></a>
								<a href="" class="cstbtn color_seagreen" data-toggle="tooltip" title="" data-original-title="Hotel Booking"><i class="fa fa-hotel"></i></a>
								<a href="" class="cstbtn color_lemon" data-toggle="tooltip" title="" data-original-title="Online-Food Order"><i class="fa fa-lemon-o"></i></a>
								<a href="" class="cstbtn color_brown" data-toggle="tooltip" title="" data-original-title="Resturant Table"><i class="fa fa-cutlery"></i></a>	
							</td>
						</tr>
						<tr>
							<td>peek</td>
							<td>peek</td>
							<td>
								<div class="media">
									<img src="https://www.okjoa.com/upload/listing/rO8IJK0s_D.jpg" style="width:60px;height:60px;" class="media-photo">
								</div>
							</td>
							<td>Nationall Inter</td>
							<td>82-1025192103</td>
							<td>
								<a href="" class="cstbtn color_orange" target="_blank" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye"></i></a>
								<a href="" class="cstbtn color_green" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
								<a href="" class="cstbtn color_blue" data-toggle="tooltip" title="" data-original-title="Forms"><i class="fa fa-file-word-o"></i></a>
								<a href="" class="cstbtn color_darkblue" data-toggle="tooltip" title="" data-original-title="Enquiry"><i class="fa fa-sticky-note"></i></a>
								<a href="" class="cstbtn color_lightnlue" data-toggle="tooltip" title="" data-original-title="Doctor Appointment"><i class="fa fa-stethoscope"></i></a>
								<a href="" class="cstbtn color_darkred" data-toggle="tooltip" title="" data-original-title="음식 메뉴 표시"><i class="fa fa-cutlery"></i></a>
								<a href="" class="cstbtn color_lemon" data-toggle="tooltip" title="" data-original-title="Online-Food Order"><i class="fa fa-lemon-o"></i></a>	
							</td>
						</tr>
					</tbody>
				</table>

				<div class="pag">
					<ul class="pagination"></ul>
				</div>

			</div>
		</div>
	</div>	
</div>
@section('script')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
@endsection