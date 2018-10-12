<template>
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
						<div class="form-group">
						<input type="hidden" name="email_id" class="form-control" id="email_id" value="nabeelirbab@gmail.com" placeholder="Enter Email">
						<input type="hidden" name="register_password" class="form-control" id="register_password" value="" placeholder="Enter Password">
						<input type="hidden" class="form-control mobileformat" name="mobilenumber" placeholder="Enter Mobile Number" value="82-1025192103">
						</div>
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
							<label class="col-md-offset-3 control-label"></label>
							<label class="radio-inline">
								<input type="radio" name="display_time" class="radio_hours" value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Show business hours
							</font></font></label>
							<label class="radio-inline">
								<input type="radio" name="display_time" class="radio_hours" value="2" checked=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Do not show business hours
							</font></font></label>
						</div>
						<div class="time_slot" id="time_slot">
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Monday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Tuesday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Wednesday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Thursday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Friday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Saturday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
							<label for="">Sunday:</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3 timing_col">
									<div class="form-timing">
										<input type="time" class="form-control" id="">
									</div>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
									<label><strong>TO</strong></label>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
									<div class="form-timing">
									<input type="time" class="form-control" id="">
								</div>
								</div>
							</div>
						</div>
					</div>
					</div>
						<div class="form-group">
							<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Workplace payment method</font></font></h5>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-1 col-md-offset-1  control-label col-md-2"></label>
							<div class="col-sm-9 col-xs-12 selectallcheck">
								<div class="row">
											<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="sel_all_modes" id="checkAll" value="모두 선택"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select all
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="현금"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cash
									</font></font></label>
							
										<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="신한 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shinhan Card
									</font></font></label>
		
									
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="KB 국민 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">KB Kookmin Card
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="우리 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Our card
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="BC 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">BC card
									</font></font></label>
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="롯데 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lotte Card
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="시티 뱅크"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">City Bank
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="농협 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nonghyup Card
									</font></font></label>
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="삼성 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Samsung Card
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="현대 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hyundai Card
									</font></font></label>
									<label class="checkbox-inline col-sm-4">
										<input type="checkbox" name="payments[]" value="하나 카드"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">One Card
									</font></font></label>
								</div>
								<div class="row">
									<label class="checkbox-inline col-sm-4">
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
							<div class="col-sm-2 col-establish">
								<input type="text" name="company_year" placeholder="0000" minlength="4" maxlength="4" class="form-control" id="company_year" value="">
							</div>
							<div class="col-sm-3 col-establish">
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
										<label> <input type="checkbox" class="hummingbirdNoParent" name="Category_id[]" value="158"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comprehensive wholesale</font></font></label>
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
								</ul>
								<!--<input type="text" name="allcatlist" class="form-control" id="allcatlist" placeholder="사업장에 관련된 카테고리 검색 후, 선택 바랍니다." />
								<div id="livesearch"></div>-->
							</div>
						</div>
						<div class="form-group">
							<h5>Introduction</h5>
						</div>
						
						<div class="form-group">
							<label class="col-sm-offset-1 control-label col-sm-2"></label>
							<div class="col-sm-9">
								<div class="panel">
									<div class="panel-body">
										<div id="content">
											<div class="jFiler jFiler-theme-dragdropbox"><input type="file" name="files[]" id="filer_input2" multiple="multiple" style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;"><div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="fa fa-cloud-upload"></i></div><div class="jFiler-input-text"><h3>Attach drag &amp; drop file here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Finding files</a></div></div></div>
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
</div>
</template>

</template>
<script>
export default {
    
}
</script>

<style>
	@import '/frontend-assets/css/free-listing.css';
</style>