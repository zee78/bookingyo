@extends('frontend.layouts.app')
@section('title', 'Booking Yo')
@section('styling')
<link href="{{ asset('frontend-assets/css/free-listing.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container margin-50" style="background: #fff;">
	<div class="row btn_row">
		<div class="col-md-12 btn_col">
			<ol class="breadcrumb bread-primary ">
				<button href="#" class="btn btn-primary"><i class="fa fa-home"></i></button>
				<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Free List</font></font></a></li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 main_col">
			<form class="form-inline" method="post" enctype="multipart/form-data" id="freelistingForm">
				<div class="main-login main-center">
					<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register your business now for free and you can run an online store for free!</font></font></h5>
					<div class="formbody">
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Company name </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="companyname" id="companyname" placeholder="Company Name" value="" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Last </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name." value="" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Name </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name." value="" required="">
							</div>
						</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business Information</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business name </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-8">
								<input type="text" name="bus_name" class="form-control" id="bus_name" value="" placeholder="Business Name" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business Registration Number </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-8">
								<input type="text" name="bus_Registration" class="form-control" id="bus_Registration" value="" placeholder="Business Registration" required="">
							</div>
						</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About your business location</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Address </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-8">
								<input type="text" name="bui_name" class="form-control ui-autocomplete-input" id="Address" value="" placeholder="XXXXXXXX" required="" autocomplete="off">
							</div>
						</div>
						<div class="form-group"></div>
						<input type="hidden" name="email_id" class="form-control" id="email_id" value="nabeelirbab@gmail.com" placeholder="Enter Email">
						<input type="hidden" name="register_password" class="form-control" id="register_password" value="" placeholder="Enter Password">
						<input type="hidden" class="form-control mobileformat" name="mobilenumber" placeholder="Enter Mobile Number" value="82-1025192103">
						
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business Contact Information</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Website </font></font></label>
							<div class="col-sm-8">
								<input type="text" name="website" class="form-control" id="website" value="" placeholder="http://www.google.com">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business Number</font></font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control landlineformat" name="landlinenumber" placeholder="82-020580137" value="">
								<span class="small"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Please enter the area code and the 8 digits of your business number except for business number 82 (country code) as follows. </font><font style="vertical-align: inherit;">(82-area code xxxxxxxx)</font></font></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Free call phone number </font></font></label>
							<div class="col-sm-8">
								<input type="text" name="toll_free" class="form-control" id="toll_free" value="" placeholder="07015881588">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fax number </font></font></label>
							<div class="col-sm-8">
								<input type="text" name="fax_no" class="form-control" id="fax_no" value="" placeholder="0220580138">
							</div>
						</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opening hours</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"></label>
							<label class="radio-inline">
								<input type="radio" name="display_time" class="radio_hours" value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Show business hours
							</font></font></label>
							<label class="radio-inline">
								<input type="radio" name="display_time" class="radio_hours" value="2" checked=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Do not show business hours
							</font></font></label>
						</div>
						<div class="hoursofoperation">
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="mondayfrom">Monday:</label>
								<div class="col-sm-2">
									<input type="text" name="mondayfrom" class="form-control timepicker ui-timepicker-input" id="mondayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="mondayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="mondayto" class="form-control timepicker ui-timepicker-input" id="mondayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="Tuesdayfrom">Tuesday:</label>
								<div class="col-sm-2">
									<input type="text" name="Tuesdayfrom" class="form-control timepicker ui-timepicker-input" id="Tuesdayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="Tuesdayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="Tuesdayto" class="form-control timepicker ui-timepicker-input" id="Tuesdayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="Wednesdayfrom">Wednesday:</label>
								<div class="col-sm-2">
									<input type="text" name="Wednesdayfrom" class="form-control timepicker ui-timepicker-input" id="Wednesdayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="Wednesdayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="Wednesdayto" class="form-control timepicker ui-timepicker-input" id="Wednesdayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="Thursdayfrom">Thursday :</label>
								<div class="col-sm-2">
									<input type="text" name="Thursdayfrom" class="form-control timepicker ui-timepicker-input" id="Thursdayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="Thursdayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="Thursdayto" class="form-control timepicker ui-timepicker-input" id="Thursdayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="Fridayfrom">Friday:</label>
								<div class="col-sm-2">
									<input type="text" name="Fridayfrom" class="form-control timepicker ui-timepicker-input" id="Fridayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="Fridayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="Fridayto" class="form-control timepicker ui-timepicker-input" id="Fridayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="Saturdayfrom">Saturday:</label>
								<div class="col-sm-2">
									<input type="text" name="Saturdayfrom" class="form-control timepicker ui-timepicker-input" id="Saturdayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="Saturdayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="Saturdayto" class="form-control timepicker ui-timepicker-input" id="Saturdayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-offset-1 control-label col-sm-2" for="Sundayfrom">Sunday:</label>
								<div class="col-sm-2">
									<input type="text" name="Sundayfrom" class="form-control timepicker ui-timepicker-input" id="Sundayfrom" value="" autocomplete="off" disabled="disabled">
								</div>
								<label class="control-label col-sm-1" for="Sundayto">~</label>
								<div class="col-sm-2">
									<input type="text" name="Sundayto" class="form-control timepicker ui-timepicker-input" id="Sundayto" value="" autocomplete="off" disabled="disabled">
								</div>
							</div>
						</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Workplace payment method</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"></label>
							<div class="col-sm-9 selectallcheck">
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<label class="checkbox-inline">
										<input type="checkbox" name="sel_all_modes" id="checkAll" value="모두 선택"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select all
									</font></font></label>
									</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<label class="checkbox-inline">
										<input type="checkbox" name="payments[]" value="현금"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cash
									</font></font></label>
								</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<label class="checkbox-inline">
										<input type="checkbox" name="payments[]" value="신한 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shinhan Card
									</font></font></label>
									</div>
									
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="KB 국민 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KB Kookmin Card
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="우리 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Our card
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="BC 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">BC card
									</font></font></label>
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="롯데 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lotte Card
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="시티 뱅크"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">City Bank
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="농협 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nonghyup Card
									</font></font></label>
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="삼성 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Samsung Card
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="현대 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hyundai Card
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="하나 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">One Card
									</font></font></label>
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="SC 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SC card
									</font></font></label>
									<label class="checkbox-inline col-sm-3">
										<input type="checkbox" name="payments[]" value="체크 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">check card
									</font></font></label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business Information</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Year Established:</font></font></label>
							<div class="col-sm-2">
								<input type="text" name="company_year" placeholder="0000" minlength="4" maxlength="4" class="form-control" id="company_year" value="">
							</div>
							<div class="col-sm-3">
								<input type="text" name="company_turnover" placeholder="연간 매출" class="form-control" id="company_turnover" value="">
							</div>
							<div class="col-sm-2">
								<select class="form-control" name="company_employees">
									<option value="답변 없음"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select number of employees</font></font></option>
									<option value="미만 10" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Less than 10</font></font></option>
									<option value="10-100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10-100</font></font></option>
									<option value="100-500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100-500</font></font></option>
									<option value="500-1000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">500-1000</font></font></option>
									<option value="1000-2000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000-2000</font></font></option>
									<option value="2000-5000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2000-5000</font></font></option>
									<option value="5000-10000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5000-10000</font></font></option>
									<option value="이상 10000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">More than 10000</font></font></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2" for="associations"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business Category:</font></font></label>
							<div class="col-sm-9">
								<input type="text" name="associations" class="form-control" id="associations" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2" for="certifications"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">event:</font></font></label>
							<div class="col-sm-9">
								<input type="text" name="certifications" class="form-control" id="certifications" value="">
							</div>
						</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business category</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Category: </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
							<div class="col-sm-6">
								<ul id="treeview" class="hummingbird-base">
									<li class="appendli_1">
										<span class="loading loading_1"></span>
										<i onclick="accord_cat(1);" class="fa fa-plus icon-queue lisub_1"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sports, Entertainment</font></font></label>
									</li>
									<li class="appendli_4">
										<span class="loading loading_4"></span>
										<i onclick="accord_cat(4);" class="fa fa-plus icon-queue lisub_4"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sports facilities</font></font></label>
									</li>
									<li class="appendli_10">
										<span class="loading loading_10"></span>
										<i onclick="accord_cat(10);" class="fa fa-plus icon-queue lisub_10"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> beauty</font></font></label>
									</li>
									<li class="appendli_20">
										<span class="loading loading_20"></span>
										<i onclick="accord_cat(20);" class="fa fa-plus icon-queue lisub_20"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Shopping, distribution</font></font></label>
									</li>
									<li class="appendli_26">
										<span class="loading loading_26"></span>
										<i onclick="accord_cat(26);" class="fa fa-plus icon-queue lisub_26"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sports, Recreation School</font></font></label>
									</li>
									<li class="appendli_41">
										<span class="loading loading_41"></span>
										<i onclick="accord_cat(41);" class="fa fa-plus icon-queue lisub_41"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="41"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> golf course</font></font></label>
									</li>
									<li class="appendli_43">
										<span class="loading loading_43"></span>
										<i onclick="accord_cat(43);" class="fa fa-plus icon-queue lisub_43"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="43"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Association</font></font></label>
									</li>
									<li class="appendli_54">
										<span class="loading loading_54"></span>
										<i onclick="accord_cat(54);" class="fa fa-plus icon-queue lisub_54"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="54"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> fashion</font></font></label>
									</li>
									<li class="appendli_56">
										<span class="loading loading_56"></span>
										<i onclick="accord_cat(56);" class="fa fa-plus icon-queue lisub_56"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="56"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Hobby, Leisure Goods</font></font></label>
									</li>
									<li class="appendli_87">
										<span class="loading loading_87"></span>
										<i onclick="accord_cat(87);" class="fa fa-plus icon-queue lisub_87"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="87"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Rent, Rental</font></font></label>
									</li>
									<li class="appendli_139">
										<span class="loading loading_139"></span>
										<i onclick="accord_cat(139);" class="fa fa-plus icon-queue lisub_139"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="139"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Jewelry, Jewelry</font></font></label>
									</li>
									<li class="appendli_147">
										<span class="loading loading_147"></span>
										<i onclick="accord_cat(147);" class="fa fa-plus icon-queue lisub_147"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="147"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Books, music, stationery</font></font></label>
									</li>
									<li class="appendli_154">
										<span class="loading loading_154"></span>
										<i onclick="accord_cat(154);" class="fa fa-plus icon-queue lisub_154"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="154"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Electronics, home appliances</font></font></label>
									</li>
									<li class="appendli_158">
										<span class="loading loading_158"></span>
										<i onclick="accord_cat(158);" class="fa fa-plus icon-queue lisub_158"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="158"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comprehensive wholesale and retail</font></font></label>
									</li>
									<li class="appendli_160">
										<span class="loading loading_160"></span>
										<i onclick="accord_cat(160);" class="fa fa-plus icon-queue lisub_160"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="160"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Casual wear</font></font></label>
									</li>
									<li class="appendli_165">
										<span class="loading loading_165"></span>
										<i onclick="accord_cat(165);" class="fa fa-plus icon-queue lisub_165"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="165"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Service, Industry</font></font></label>
									</li>
									<li class="appendli_181">
										<span class="loading loading_181"></span>
										<i onclick="accord_cat(181);" class="fa fa-plus icon-queue lisub_181"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="181"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Fashion goods</font></font></label>
									</li>
									<li class="appendli_187">
										<span class="loading loading_187"></span>
										<i onclick="accord_cat(187);" class="fa fa-plus icon-queue lisub_187"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="187"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> cellphone</font></font></label>
									</li>
									<li class="appendli_196">
										<span class="loading loading_196"></span>
										<i onclick="accord_cat(196);" class="fa fa-plus icon-queue lisub_196"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="196"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Precious metal, watch</font></font></label>
									</li>
									<li class="appendli_205">
										<span class="loading loading_205"></span>
										<i onclick="accord_cat(205);" class="fa fa-plus icon-queue lisub_205"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="205"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Life, convenience</font></font></label>
									</li>
									<li class="appendli_209">
										<span class="loading loading_209"></span>
										<i onclick="accord_cat(209);" class="fa fa-plus icon-queue lisub_209"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="209"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Arts and crafts</font></font></label>
									</li>
									<li class="appendli_216">
										<span class="loading loading_216"></span>
										<i onclick="accord_cat(216);" class="fa fa-plus icon-queue lisub_216"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="216"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Home, household goods</font></font></label>
									</li>
									<li class="appendli_218">
										<span class="loading loading_218"></span>
										<i onclick="accord_cat(218);" class="fa fa-plus icon-queue lisub_218"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="218"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> bookstore</font></font></label>
									</li>
									<li class="appendli_227">
										<span class="loading loading_227"></span>
										<i onclick="accord_cat(227);" class="fa fa-plus icon-queue lisub_227"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="227"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Opticians</font></font></label>
									</li>
									<li class="appendli_233">
										<span class="loading loading_233"></span>
										<i onclick="accord_cat(233);" class="fa fa-plus icon-queue lisub_233"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="233"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Bedding, curtains</font></font></label>
									</li>
									<li class="appendli_236">
										<span class="loading loading_236"></span>
										<i onclick="accord_cat(236);" class="fa fa-plus icon-queue lisub_236"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="236"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Furniture, interior</font></font></label>
									</li>
									<li class="appendli_257">
										<span class="loading loading_257"></span>
										<i onclick="accord_cat(257);" class="fa fa-plus icon-queue lisub_257"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="257"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> shoes</font></font></label>
									</li>
									<li class="appendli_263">
										<span class="loading loading_263"></span>
										<i onclick="accord_cat(263);" class="fa fa-plus icon-queue lisub_263"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="263"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> furniture</font></font></label>
									</li>
									<li class="appendli_284">
										<span class="loading loading_284"></span>
										<i onclick="accord_cat(284);" class="fa fa-plus icon-queue lisub_284"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="284"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> grocery</font></font></label>
									</li>
									<li class="appendli_295">
										<span class="loading loading_295"></span>
										<i onclick="accord_cat(295);" class="fa fa-plus icon-queue lisub_295"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="295"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Pets</font></font></label>
									</li>
									<li class="appendli_321">
										<span class="loading loading_321"></span>
										<i onclick="accord_cat(321);" class="fa fa-plus icon-queue lisub_321"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="321"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Professional and technical services</font></font></label>
									</li>
									<li class="appendli_324">
										<span class="loading loading_324"></span>
										<i onclick="accord_cat(324);" class="fa fa-plus icon-queue lisub_324"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="324"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Public, social institutions</font></font></label>
									</li>
									<li class="appendli_330">
										<span class="loading loading_330"></span>
										<i onclick="accord_cat(330);" class="fa fa-plus icon-queue lisub_330"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="330"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Profession, technical school</font></font></label>
									</li>
									<li class="appendli_337">
										<span class="loading loading_337"></span>
										<i onclick="accord_cat(337);" class="fa fa-plus icon-queue lisub_337"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="337"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Hospital, clinic</font></font></label>
									</li>
									<li class="appendli_339">
										<span class="loading loading_339"></span>
										<i onclick="accord_cat(339);" class="fa fa-plus icon-queue lisub_339"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="339"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Health, Medical</font></font></label>
									</li>
									<li class="appendli_349">
										<span class="loading loading_349"></span>
										<i onclick="accord_cat(349);" class="fa fa-plus icon-queue lisub_349"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="349"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hospital</font></font></label>
									</li>
									<li class="appendli_362">
										<span class="loading loading_362"></span>
										<i onclick="accord_cat(362);" class="fa fa-plus icon-queue lisub_362"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="362"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> funeral</font></font></label>
									</li>
									<li class="appendli_376">
										<span class="loading loading_376"></span>
										<i onclick="accord_cat(376);" class="fa fa-plus icon-queue lisub_376"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="376"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> religion</font></font></label>
									</li>
									<li class="appendli_391">
										<span class="loading loading_391"></span>
										<i onclick="accord_cat(391);" class="fa fa-plus icon-queue lisub_391"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="391"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Korean</font></font></label>
									</li>
									<li class="appendli_393">
										<span class="loading loading_393"></span>
										<i onclick="accord_cat(393);" class="fa fa-plus icon-queue lisub_393"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="393"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> restaurant</font></font></label>
									</li>
									<li class="appendli_396">
										<span class="loading loading_396"></span>
										<i onclick="accord_cat(396);" class="fa fa-plus icon-queue lisub_396"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="396"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Meat, meat dish</font></font></label>
									</li>
									<li class="appendli_403">
										<span class="loading loading_403"></span>
										<i onclick="accord_cat(403);" class="fa fa-plus icon-queue lisub_403"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="403"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Japanese</font></font></label>
									</li>
									<li class="appendli_410">
										<span class="loading loading_410"></span>
										<i onclick="accord_cat(410);" class="fa fa-plus icon-queue lisub_410"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="410"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> buffet</font></font></label>
									</li>
									<li class="appendli_414">
										<span class="loading loading_414"></span>
										<i onclick="accord_cat(414);" class="fa fa-plus icon-queue lisub_414"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="414"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Chinese</font></font></label>
									</li>
									<li class="appendli_419">
										<span class="loading loading_419"></span>
										<i onclick="accord_cat(419);" class="fa fa-plus icon-queue lisub_419"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="419"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> form</font></font></label>
									</li>
									<li class="appendli_430">
										<span class="loading loading_430"></span>
										<i onclick="accord_cat(430);" class="fa fa-plus icon-queue lisub_430"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="430"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cafe, dessert</font></font></label>
									</li>
									<li class="appendli_435">
										<span class="loading loading_435"></span>
										<i onclick="accord_cat(435);" class="fa fa-plus icon-queue lisub_435"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="435"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> bar</font></font></label>
									</li>
									<li class="appendli_439">
										<span class="loading loading_439"></span>
										<i onclick="accord_cat(439);" class="fa fa-plus icon-queue lisub_439"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="439"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Italian food</font></font></label>
									</li>
									<li class="appendli_445">
										<span class="loading loading_445"></span>
										<i onclick="accord_cat(445);" class="fa fa-plus icon-queue lisub_445"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="445"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> snack bar</font></font></label>
									</li>
									<li>
										<span class="noicon lisub_458"></span>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="458"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Theme Cafe</font></font></label>
									</li>
									<li class="appendli_480">
										<span class="loading loading_480"></span>
										<i onclick="accord_cat(480);" class="fa fa-plus icon-queue lisub_480"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="480"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Seafood, fish dishes</font></font></label>
									</li>
									<li class="appendli_495">
										<span class="loading loading_495"></span>
										<i onclick="accord_cat(495);" class="fa fa-plus icon-queue lisub_495"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="495"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Lunch box, croissant</font></font></label>
									</li>
									<li class="appendli_551">
										<span class="loading loading_551"></span>
										<i onclick="accord_cat(551);" class="fa fa-plus icon-queue lisub_551"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="551"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Social Welfare</font></font></label>
									</li>
									<li class="appendli_581">
										<span class="loading loading_581"></span>
										<i onclick="accord_cat(581);" class="fa fa-plus icon-queue lisub_581"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="581"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> A language school</font></font></label>
									</li>
									<li class="appendli_584">
										<span class="loading loading_584"></span>
										<i onclick="accord_cat(584);" class="fa fa-plus icon-queue lisub_584"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="584"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Education</font></font></label>
									</li>
									<li class="appendli_599">
										<span class="loading loading_599"></span>
										<i onclick="accord_cat(599);" class="fa fa-plus icon-queue lisub_599"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="599"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Education Center</font></font></label>
									</li>
									<li class="appendli_622">
										<span class="loading loading_622"></span>
										<i onclick="accord_cat(622);" class="fa fa-plus icon-queue lisub_622"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="622"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Early Childhood Learning</font></font></label>
									</li>
									<li class="appendli_627">
										<span class="loading loading_627"></span>
										<i onclick="accord_cat(627);" class="fa fa-plus icon-queue lisub_627"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="627"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Travel, attractions</font></font></label>
									</li>
									<li class="appendli_639">
										<span class="loading loading_639"></span>
										<i onclick="accord_cat(639);" class="fa fa-plus icon-queue lisub_639"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="639"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Bank</font></font></label>
									</li>
									<li class="appendli_641">
										<span class="loading loading_641"></span>
										<i onclick="accord_cat(641);" class="fa fa-plus icon-queue lisub_641"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="641"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Finance, Insurance</font></font></label>
									</li>
									<li class="appendli_643">
										<span class="loading loading_643"></span>
										<i onclick="accord_cat(643);" class="fa fa-plus icon-queue lisub_643"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="643"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Financial Services</font></font></label>
									</li>
									<li class="appendli_663">
										<span class="loading loading_663"></span>
										<i onclick="accord_cat(663);" class="fa fa-plus icon-queue lisub_663"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="663"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Payment, payment agency</font></font></label>
									</li>
									<li class="appendli_671">
										<span class="loading loading_671"></span>
										<i onclick="accord_cat(671);" class="fa fa-plus icon-queue lisub_671"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="671"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Traffic, transportation</font></font></label>
									</li>
									<li class="appendli_677">
										<span class="loading loading_677"></span>
										<i onclick="accord_cat(677);" class="fa fa-plus icon-queue lisub_677"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="677"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Central administrative agency</font></font></label>
									</li>
									<li class="appendli_685">
										<span class="loading loading_685"></span>
										<i onclick="accord_cat(685);" class="fa fa-plus icon-queue lisub_685"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="685"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> No damage</font></font></label>
									</li>
									<li class="appendli_689">
										<span class="loading loading_689"></span>
										<i onclick="accord_cat(689);" class="fa fa-plus icon-queue lisub_689"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="689"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> publisher</font></font></label>
									</li>
									<li class="appendli_700">
										<span class="loading loading_700"></span>
										<i onclick="accord_cat(700);" class="fa fa-plus icon-queue lisub_700"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="700"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> insurance</font></font></label>
									</li>
									<li class="appendli_707">
										<span class="loading loading_707"></span>
										<i onclick="accord_cat(707);" class="fa fa-plus icon-queue lisub_707"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="707"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> loan</font></font></label>
									</li>
									<li class="appendli_721">
										<span class="loading loading_721"></span>
										<i onclick="accord_cat(721);" class="fa fa-plus icon-queue lisub_721"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="721"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Credit union</font></font></label>
									</li>
									<li class="appendli_731">
										<span class="loading loading_731"></span>
										<i onclick="accord_cat(731);" class="fa fa-plus icon-queue lisub_731"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="731"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Transportation, transportation service</font></font></label>
									</li>
									<li class="appendli_733">
										<span class="loading loading_733"></span>
										<i onclick="accord_cat(733);" class="fa fa-plus icon-queue lisub_733"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="733"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Saemaul's safe</font></font></label>
									</li>
									<li class="appendli_765">
										<span class="loading loading_765"></span>
										<i onclick="accord_cat(765);" class="fa fa-plus icon-queue lisub_765"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="765"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Bus company</font></font></label>
									</li>
									<li class="appendli_767">
										<span class="loading loading_767"></span>
										<i onclick="accord_cat(767);" class="fa fa-plus icon-queue lisub_767"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="767"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Facilities, buildings</font></font></label>
									</li>
									<li class="appendli_772">
										<span class="loading loading_772"></span>
										<i onclick="accord_cat(772);" class="fa fa-plus icon-queue lisub_772"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="772"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Teaching academy</font></font></label>
									</li>
									<li class="appendli_792">
										<span class="loading loading_792"></span>
										<i onclick="accord_cat(792);" class="fa fa-plus icon-queue lisub_792"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="792"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Repair, AS</font></font></label>
									</li>
									<li class="appendli_795">
										<span class="loading loading_795"></span>
										<i onclick="accord_cat(795);" class="fa fa-plus icon-queue lisub_795"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="795"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Massage, Chiropractors</font></font></label>
									</li>
									<li class="appendli_797">
										<span class="loading loading_797"></span>
										<i onclick="accord_cat(797);" class="fa fa-plus icon-queue lisub_797"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="797"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Computer Programming, Information Service</font></font></label>
									</li>
									<li class="appendli_802">
										<span class="loading loading_802"></span>
										<i onclick="accord_cat(802);" class="fa fa-plus icon-queue lisub_802"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="802"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Freight transportation</font></font></label>
									</li>
									<li class="appendli_804">
										<span class="loading loading_804"></span>
										<i onclick="accord_cat(804);" class="fa fa-plus icon-queue lisub_804"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="804"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Massage, Chiropractors</font></font></label>
									</li>
									<li class="appendli_815">
										<span class="loading loading_815"></span>
										<i onclick="accord_cat(815);" class="fa fa-plus icon-queue lisub_815"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="815"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> manufacturing</font></font></label>
									</li>
									<li class="appendli_825">
										<span class="loading loading_825"></span>
										<i onclick="accord_cat(825);" class="fa fa-plus icon-queue lisub_825"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="825"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Software Development</font></font></label>
									</li>
									<li class="appendli_827">
										<span class="loading loading_827"></span>
										<i onclick="accord_cat(827);" class="fa fa-plus icon-queue lisub_827"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="827"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> lodgment</font></font></label>
									</li>
									<li class="appendli_829">
										<span class="loading loading_829"></span>
										<i onclick="accord_cat(829);" class="fa fa-plus icon-queue lisub_829"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="829"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hotel</font></font></label>
									</li>
									<li class="appendli_864">
										<span class="loading loading_864"></span>
										<i onclick="accord_cat(864);" class="fa fa-plus icon-queue lisub_864"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="864"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> make up</font></font></label>
									</li>
									<li class="appendli_881">
										<span class="loading loading_881"></span>
										<i onclick="accord_cat(881);" class="fa fa-plus icon-queue lisub_881"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="881"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Love, marriage</font></font></label>
									</li>
									<li class="appendli_895">
										<span class="loading loading_895"></span>
										<i onclick="accord_cat(895);" class="fa fa-plus icon-queue lisub_895"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="895"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> game</font></font></label>
									</li>
									<li class="appendli_898">
										<span class="loading loading_898"></span>
										<i onclick="accord_cat(898);" class="fa fa-plus icon-queue lisub_898"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="898"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Support, agency</font></font></label>
									</li>
									<li class="appendli_900">
										<span class="loading loading_900"></span>
										<i onclick="accord_cat(900);" class="fa fa-plus icon-queue lisub_900"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="900"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Car maintenance, repair</font></font></label>
									</li>
									<li class="appendli_905">
										<span class="loading loading_905"></span>
										<i onclick="accord_cat(905);" class="fa fa-plus icon-queue lisub_905"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="905"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Logistics, distribution</font></font></label>
									</li>
									<li class="appendli_920">
										<span class="loading loading_920"></span>
										<i onclick="accord_cat(920);" class="fa fa-plus icon-queue lisub_920"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="920"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> cleaning</font></font></label>
									</li>
									<li class="appendli_933">
										<span class="loading loading_933"></span>
										<i onclick="accord_cat(933);" class="fa fa-plus icon-queue lisub_933"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="933"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> gas station</font></font></label>
									</li>
									<li class="appendli_936">
										<span class="loading loading_936"></span>
										<i onclick="accord_cat(936);" class="fa fa-plus icon-queue lisub_936"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="936"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> car</font></font></label>
									</li>
									<li class="appendli_939">
										<span class="loading loading_939"></span>
										<i onclick="accord_cat(939);" class="fa fa-plus icon-queue lisub_939"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="939"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> car wash</font></font></label>
									</li>
									<li>
										<span class="noicon lisub_947"></span>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="947"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Car sharing</font></font></label>
									</li>
									<li class="appendli_949">
										<span class="loading loading_949"></span>
										<i onclick="accord_cat(949);" class="fa fa-plus icon-queue lisub_949"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="949"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Exhibition, sale</font></font></label>
									</li>
									<li class="appendli_959">
										<span class="loading loading_959"></span>
										<i onclick="accord_cat(959);" class="fa fa-plus icon-queue lisub_959"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="959"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Damage, fire insurance</font></font></label>
									</li>
									<li class="appendli_962">
										<span class="loading loading_962"></span>
										<i onclick="accord_cat(962);" class="fa fa-plus icon-queue lisub_962"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="962"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> I-Navi Service Center</font></font></label>
									</li>
									<li class="appendli_969">
										<span class="loading loading_969"></span>
										<i onclick="accord_cat(969);" class="fa fa-plus icon-queue lisub_969"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="969"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Construction</font></font></label>
									</li>
									<li class="appendli_978">
										<span class="loading loading_978"></span>
										<i onclick="accord_cat(978);" class="fa fa-plus icon-queue lisub_978"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="978"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Music school</font></font></label>
									</li>
									<li class="appendli_980">
										<span class="loading loading_980"></span>
										<i onclick="accord_cat(980);" class="fa fa-plus icon-queue lisub_980"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="980"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Academy</font></font></label>
									</li>
									<li class="appendli_987">
										<span class="loading loading_987"></span>
										<i onclick="accord_cat(987);" class="fa fa-plus icon-queue lisub_987"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="987"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> real estate</font></font></label>
									</li>
									<li class="appendli_1009">
										<span class="loading loading_1009"></span>
										<i onclick="accord_cat(1009);" class="fa fa-plus icon-queue lisub_1009"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1009"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Professional Design</font></font></label>
									</li>
									<li class="appendli_1033">
										<span class="loading loading_1033"></span>
										<i onclick="accord_cat(1033);" class="fa fa-plus icon-queue lisub_1033"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1033"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Hobby school</font></font></label>
									</li>
									<li class="appendli_1060">
										<span class="loading loading_1060"></span>
										<i onclick="accord_cat(1060);" class="fa fa-plus icon-queue lisub_1060"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1060"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Laundry</font></font></label>
									</li>
									<li class="appendli_1092">
										<span class="loading loading_1092"></span>
										<i onclick="accord_cat(1092);" class="fa fa-plus icon-queue lisub_1092"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1092"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Culture, art</font></font></label>
									</li>
									<li class="appendli_1095">
										<span class="loading loading_1095"></span>
										<i onclick="accord_cat(1095);" class="fa fa-plus icon-queue lisub_1095"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1095"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> LPG filling station</font></font></label>
									</li>
									<li class="appendli_1101">
										<span class="loading loading_1101"></span>
										<i onclick="accord_cat(1101);" class="fa fa-plus icon-queue lisub_1101"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1101"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Video, audio, broadcasting</font></font></label>
									</li>
									<li class="appendli_1129">
										<span class="loading loading_1129"></span>
										<i onclick="accord_cat(1129);" class="fa fa-plus icon-queue lisub_1129"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1129"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> printing</font></font></label>
									</li>
									<li class="appendli_1133">
										<span class="loading loading_1133"></span>
										<i onclick="accord_cat(1133);" class="fa fa-plus icon-queue lisub_1133"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1133"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Advertising, Marketing</font></font></label>
									</li>
									<li class="appendli_1152">
										<span class="loading loading_1152"></span>
										<i onclick="accord_cat(1152);" class="fa fa-plus icon-queue lisub_1152"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1152"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> food</font></font></label>
									</li>
									<li class="appendli_1182">
										<span class="loading loading_1182"></span>
										<i onclick="accord_cat(1182);" class="fa fa-plus icon-queue lisub_1182"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1182"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> National Police Agency</font></font></label>
									</li>
									<li class="appendli_1194">
										<span class="loading loading_1194"></span>
										<i onclick="accord_cat(1194);" class="fa fa-plus icon-queue lisub_1194"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1194"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Fire Department</font></font></label>
									</li>
									<li>
										<span class="noicon lisub_1220"></span>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1220"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gallery Cafe</font></font></label>
									</li>
									<li class="appendli_1227">
										<span class="loading loading_1227"></span>
										<i onclick="accord_cat(1227);" class="fa fa-plus icon-queue lisub_1227"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1227"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Leisure, theme</font></font></label>
									</li>
									<li class="appendli_1265">
										<span class="loading loading_1265"></span>
										<i onclick="accord_cat(1265);" class="fa fa-plus icon-queue lisub_1265"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1265"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Traffic facilities</font></font></label>
									</li>
									<li class="appendli_1299">
										<span class="loading loading_1299"></span>
										<i onclick="accord_cat(1299);" class="fa fa-plus icon-queue lisub_1299"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1299"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Companion animal</font></font></label>
									</li>
									<li class="appendli_1335">
										<span class="loading loading_1335"></span>
										<i onclick="accord_cat(1335);" class="fa fa-plus icon-queue lisub_1335"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1335"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Entertainment facility</font></font></label>
									</li>
									<li class="appendli_1367">
										<span class="loading loading_1367"></span>
										<i onclick="accord_cat(1367);" class="fa fa-plus icon-queue lisub_1367"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1367"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ferry, shipping company</font></font></label>
									</li>
									<li class="appendli_1382">
										<span class="loading loading_1382"></span>
										<i onclick="accord_cat(1382);" class="fa fa-plus icon-queue lisub_1382"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1382"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Photo, Studio</font></font></label>
									</li>
									<li>
										<span class="noicon lisub_1402"></span>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1402"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kids Cafe, Indoor Playground</font></font></label>
									</li>
									<li class="appendli_1412">
										<span class="loading loading_1412"></span>
										<i onclick="accord_cat(1412);" class="fa fa-plus icon-queue lisub_1412"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1412"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Design, engineering</font></font></label>
									</li>
									<li class="appendli_1414">
										<span class="loading loading_1414"></span>
										<i onclick="accord_cat(1414);" class="fa fa-plus icon-queue lisub_1414"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1414"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Machinery, equipment manufacturing</font></font></label>
									</li>
									<li class="appendli_1429">
										<span class="loading loading_1429"></span>
										<i onclick="accord_cat(1429);" class="fa fa-plus icon-queue lisub_1429"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1429"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Friendship, meeting</font></font></label>
									</li>
									<li class="appendli_1459">
										<span class="loading loading_1459"></span>
										<i onclick="accord_cat(1459);" class="fa fa-plus icon-queue lisub_1459"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1459"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Passenger, cargo transportation</font></font></label>
									</li>
									<li class="appendli_1476">
										<span class="loading loading_1476"></span>
										<i onclick="accord_cat(1476);" class="fa fa-plus icon-queue lisub_1476"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1476"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Manpower supply, employment</font></font></label>
									</li>
									<li class="appendli_1478">
										<span class="loading loading_1478"></span>
										<i onclick="accord_cat(1478);" class="fa fa-plus icon-queue lisub_1478"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1478"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Forest association</font></font></label>
									</li>
									<li class="appendli_1484">
										<span class="loading loading_1484"></span>
										<i onclick="accord_cat(1484);" class="fa fa-plus icon-queue lisub_1484"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1484"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> bond</font></font></label>
									</li>
									<li class="appendli_1494">
										<span class="loading loading_1494"></span>
										<i onclick="accord_cat(1494);" class="fa fa-plus icon-queue lisub_1494"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1494"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> entertainment</font></font></label>
									</li>
									<li class="appendli_1499">
										<span class="loading loading_1499"></span>
										<i onclick="accord_cat(1499);" class="fa fa-plus icon-queue lisub_1499"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1499"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Television broadcast</font></font></label>
									</li>
									<li class="appendli_1501">
										<span class="loading loading_1501"></span>
										<i onclick="accord_cat(1501);" class="fa fa-plus icon-queue lisub_1501"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1501"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Translation and interpreting services</font></font></label>
									</li>
									<li class="appendli_1509">
										<span class="loading loading_1509"></span>
										<i onclick="accord_cat(1509);" class="fa fa-plus icon-queue lisub_1509"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1509"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sewage, waste, environment</font></font></label>
									</li>
									<li class="appendli_1516">
										<span class="loading loading_1516"></span>
										<i onclick="accord_cat(1516);" class="fa fa-plus icon-queue lisub_1516"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1516"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> library</font></font></label>
									</li>
									<li class="appendli_1575">
										<span class="loading loading_1575"></span>
										<i onclick="accord_cat(1575);" class="fa fa-plus icon-queue lisub_1575"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1575"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Enterprise</font></font></label>
									</li>
									<li class="appendli_1639">
										<span class="loading loading_1639"></span>
										<i onclick="accord_cat(1639);" class="fa fa-plus icon-queue lisub_1639"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1639"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sporting Goods</font></font></label>
									</li>
									<li class="appendli_1647">
										<span class="loading loading_1647"></span>
										<i onclick="accord_cat(1647);" class="fa fa-plus icon-queue lisub_1647"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1647"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Catholic</font></font></label>
									</li>
									<li class="appendli_1656">
										<span class="loading loading_1656"></span>
										<i onclick="accord_cat(1656);" class="fa fa-plus icon-queue lisub_1656"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1656"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Area attractions</font></font></label>
									</li>
									<li class="appendli_1738">
										<span class="loading loading_1738"></span>
										<i onclick="accord_cat(1738);" class="fa fa-plus icon-queue lisub_1738"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1738"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Architecture, civil engineering</font></font></label>
									</li>
									<li class="appendli_1768">
										<span class="loading loading_1768"></span>
										<i onclick="accord_cat(1768);" class="fa fa-plus icon-queue lisub_1768"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1768"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Pregnancy, childbirth</font></font></label>
									</li>
									<li class="appendli_1780">
										<span class="loading loading_1780"></span>
										<i onclick="accord_cat(1780);" class="fa fa-plus icon-queue lisub_1780"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1780"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Protestant</font></font></label>
									</li>
									<li class="appendli_1792">
										<span class="loading loading_1792"></span>
										<i onclick="accord_cat(1792);" class="fa fa-plus icon-queue lisub_1792"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1792"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Martial Arts, Martial Arts</font></font></label>
									</li>
									<li class="appendli_1794">
										<span class="loading loading_1794"></span>
										<i onclick="accord_cat(1794);" class="fa fa-plus icon-queue lisub_1794"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1794"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cosmetics, perfume</font></font></label>
									</li>
									<li>
										<span class="noicon lisub_1838"></span>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1838"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Condo, resort</font></font></label>
									</li>
									<li class="appendli_1846">
										<span class="loading loading_1846"></span>
										<i onclick="accord_cat(1846);" class="fa fa-plus icon-queue lisub_1846"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1846"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Membership</font></font></label>
									</li>
									<li class="appendli_1857">
										<span class="loading loading_1857"></span>
										<i onclick="accord_cat(1857);" class="fa fa-plus icon-queue lisub_1857"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1857"> 피부, 체형 관리</label>
									</li>
									<li class="appendli_1861">
										<span class="loading loading_1861"></span>
										<i onclick="accord_cat(1861);" class="fa fa-plus icon-queue lisub_1861"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1861"> 농업</label>
									</li>
									<li class="appendli_1881">
										<span class="loading loading_1881"></span>
										<i onclick="accord_cat(1881);" class="fa fa-plus icon-queue lisub_1881"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1881"> 자연명소</label>
									</li>
									<li class="appendli_1890">
										<span class="loading loading_1890"></span>
										<i onclick="accord_cat(1890);" class="fa fa-plus icon-queue lisub_1890"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1890"> 다이어트  ,  비만</label>
									</li>
									<li class="appendli_1917">
										<span class="loading loading_1917"></span>
										<i onclick="accord_cat(1917);" class="fa fa-plus icon-queue lisub_1917"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1917"> 불교</label>
									</li>
									<li class="appendli_1965">
										<span class="loading loading_1965"></span>
										<i onclick="accord_cat(1965);" class="fa fa-plus icon-queue lisub_1965"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1965"> 무역</label>
									</li>
									<li class="appendli_1972">
										<span class="loading loading_1972"></span>
										<i onclick="accord_cat(1972);" class="fa fa-plus icon-queue lisub_1972"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="1972"> 택시회사</label>
									</li>
									<li class="appendli_2012">
										<span class="loading loading_2012"></span>
										<i onclick="accord_cat(2012);" class="fa fa-plus icon-queue lisub_2012"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2012"> 해양경찰청</label>
									</li>
									<li class="appendli_2062">
										<span class="loading loading_2062"></span>
										<i onclick="accord_cat(2062);" class="fa fa-plus icon-queue lisub_2062"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2062"> 전기,가스,수도사업</label>
									</li>
									<li class="appendli_2069">
										<span class="loading loading_2069"></span>
										<i onclick="accord_cat(2069);" class="fa fa-plus icon-queue lisub_2069"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2069"> 통신</label>
									</li>
									<li class="appendli_2127">
										<span class="loading loading_2127"></span>
										<i onclick="accord_cat(2127);" class="fa fa-plus icon-queue lisub_2127"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2127"> 재활용</label>
									</li>
									<li class="appendli_2176">
										<span class="loading loading_2176"></span>
										<i onclick="accord_cat(2176);" class="fa fa-plus icon-queue lisub_2176"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2176"> 수선</label>
									</li>
									<li class="appendli_2205">
										<span class="loading loading_2205"></span>
										<i onclick="accord_cat(2205);" class="fa fa-plus icon-queue lisub_2205"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2205"> 담배제조</label>
									</li>
									<li class="appendli_2217">
										<span class="loading loading_2217"></span>
										<i onclick="accord_cat(2217);" class="fa fa-plus icon-queue lisub_2217"></i>
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="2217"> 미용기기,재료</label>
									</li>
									
								</ul>
								<!--<input type="text" name="allcatlist" class="form-control" id="allcatlist" placeholder="사업장에 관련된 카테고리 검색 후, 선택 바랍니다." />
								<div id="livesearch"></div>-->
							</div>
						</div>
						<div class="form-group">
							<h5>사업장 소개</h5>
						</div>
						
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"></label>
							<div class="col-sm-9">
								<div class="panel">
									<div class="panel-body">
										<div id="content">
											<div class="jFiler jFiler-theme-dragdropbox"><input type="file" name="files[]" id="filer_input2" multiple="multiple" style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;"><div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>여기에 드래그 &amp; 드롭 파일 첨부</h3> <span style="display:inline-block; margin: 15px 0">또는</span></div><a class="jFiler-input-choose-btn blue">파일 찾기</a></div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3"></label>
							<div class="control-label col-sm-9">
								<button type="submit" id="checkcatid" class="btn btn-primary showbtn hidebtn">Save and Continue	</button>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</form>
		</div>
	</div>
	@endsection
	@section('script')
	<script type="text/javascript">
	$(document).ready(function () {
		$('.time_slot').hide();
		$("input[name=display_time]:radio").click(function () {
	if ($('input[name=display_time]:checked').val() == "1") {
	$('.time_slot').show();
	} else if ($('input[name=display_time]:checked').val() == "2") {
	$('.time_slot').hide();
	}
	});
	});
	</script>
	@endsection