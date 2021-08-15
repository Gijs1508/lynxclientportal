@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Fancy File Upload css -->
		<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

		<!-- INTERNAL Time picker css -->
		<link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />

		<!-- INTERNAL Date Picker css -->
		<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />

		<!-- INTERNAL File Uploads css-->
        <link href="{{URL::asset('assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css" />

		<!-- INTERNAL Mutipleselect css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/multipleselect/multiple-select.css')}}">

		<!-- INTERNAL Sumoselect css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect.css')}}">

		<!--INTERNAL IntlTelInput css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/intl-tel-input-master/intlTelInput.css')}}">

		<!-- INTERNAL Jquerytransfer css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/jQuerytransfer/jquery.transfer.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css')}}">

		<!-- INTERNAL multi css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/multi/multi.min.css')}}">

		<!-- INTERNAL Bootstrap DatePicker css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css')}}">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Advanced Forms</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<form method="post" class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">File Upload</h3>
									</div>
									<div class=" card-body">
										<div class="row">
											<div class="col-lg-4 col-sm-12">
												<input type="file" class="dropify" data-height="180" />
											</div>
											<div class="col-lg-4 col-sm-12">
												<input type="file" class="dropify" data-default-file="{{URL::asset('assets/images/photos/media1.jpg')}}" data-height="180"  />
											</div>
											<div class="col-lg-4 col-sm-12">
												<input type="file" class="dropify" disabled="disabled"  />
											</div>
										</div>
										<div class="input-group mb-5 file-browser">
											<input type="text" class="form-control browse-file" placeholder="Choose" readonly>
											<label class="input-group-append">
												<span class="btn btn-primary">
													Browse <input type="file" style="display: none;" multiple>
												</span>
											</label>
										</div>
										<div class="form-group mb-0">
											<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
										</div>
									</div>
								</form>

								<form  method="post" class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Select2 elements</h3>
									</div>
									<div class="card-body ">
										<div class="form-group ">
											<label class="form-label">Beast</label>
											<select class="form-control select2 custom-select" data-placeholder="Choose one">
												<option label="Choose one">
												</option>
												<option value="1">Chuck Testa</option>
												<option value="2">Sage Cattabriga-Alosa</option>
												<option value="3">Nikola Tesla</option>
												<option value="4">Cattabriga-Alosa</option>
												<option value="5">Nikola Alosa</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Basic Select2</label>
											<select class="form-control select2" data-placeholder="Choose one (with optgroup)">
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option><option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
												</optgroup>
												<optgroup label="Central Time Zone">
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
													<option value="TN">Tennessee</option>
													<option value="WI">Wisconsin</option>
												</optgroup>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label"> Select2 with search box</label>
											<select class="form-control select2-show-search custom-select" data-placeholder="Choose one">
												<option label="Choose one"></option>
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="IL">Illinois</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="OK">Oklahoma</option>
												<option value="SD">South Dakota</option>
												<option value="TX">Texas</option>
												<option value="TN">Tennessee</option>
												<option value="WI">Wisconsin</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Users list</label>
											<select class="form-control select2" data-placeholder="Choose Browser" multiple>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome selected">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option selected value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-6 ">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Time Picker</h3>
									</div>
									<div class=" card-body">
										<label >Default Time Picker:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<span class="feather feather-clock"></span>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tpBasic" placeholder="Set time" type="text">
											</div>
										</div><!-- wd-150 -->
										<label class="mt-4">Set the scroll position to local time if no value selected:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<span class="feather feather-clock"></span>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tp2" placeholder="Set time" type="text">
											</div>
										</div><!-- wd-150 -->
										<label class="mt-4 ">Dynamically set the time using a Javascript Date object:</label>
										<div class="d-flex">
											<div class="input-group wd-150">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<span class="feather feather-clock"></span>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tp3" placeholder="Set time" type="text">
												<button class="btn btn btn-primary br-tl-0 br-bl-0" id="setTimeButton">Set Current Time</button>
											</div><!-- input-group -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Color Picker</h3>
									</div>
									<div class=" card-body">
										<p class=" mb-1">Same way you select color in Adobe Photoshop.</p><input id="colorpicker" type="text">
										<p class="mt-3  mb-1">You can allow alpha transparency selection.</p><input id="showAlpha" type="text">
										<p class="mt-4 mb-1">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p><input id="showPaletteOnly" type="text">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Date, Month, Year Range Picker</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<span class="feather feather-clock"></span>
														</div>
													</div>
													<input class="form-control" id="datepicker-date" placeholder="Date Range" type="text">
												</div>
											</div>
											<div class="col-md-4 mt-4 mt-md-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<span class="feather feather-clock"></span>
														</div>
													</div>
													<input class="form-control" id="datepicker-month" placeholder="Month Range" type="text">
												</div>
											</div>
											<div class="col-md-4 mt-4 mt-md-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<span class="feather feather-clock"></span>
														</div>
													</div>
													<input class="form-control" id="datepicker-year" placeholder="Year Range" type="text">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Default Date picker</div>
									</div>
									<div class="card-body">
										<p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
										<div class="wd-200 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<span class="feather feather-calendar"></span>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Multiple Months </div>
									</div>
									<div class="card-body">
										<p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
										<div class="wd-200 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<span class="feather feather-calendar"></span>
													</div>
												</div><input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Multiple Select Styles</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label class="form-label">Basic MutipleSelect</label>
													<select multiple="multiple" class="multi-select">
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Disabled MutipleSelect</label>
													<select multiple="multiple" class="multi-select"  disabled="disabled">
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Single Group Disabled MutipleSelect</label>
													<select multiple="multiple" class="multi-select">
														<optgroup label="Group 1" disabled="disabled">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
														</optgroup>
														<optgroup label="Group 2">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
															<option value="6">Option 6</option>
															<option value="7">Option 7</option>
															<option value="8">Option 8</option>
														</optgroup>
														<optgroup label="Group 3">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
															<option value="6">Option 6</option>
															<option value="7">Option 7</option>
															<option value="8">Option 8</option>
															<option value="9">Option 9</option>
														</optgroup>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Multiple Items With Group-Option</label>
													<select multiple="multiple" class="optmulti-select">
														<optgroup label="Group 1">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</optgroup>
														<optgroup label="Group 2">
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
														</optgroup>
														<optgroup label="Group 3">
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
														</optgroup>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Single Row</label>
													<select multiple="multiple" class="single-select">
														<option value="1">First</option>
														<option value="2">Second</option>
														<option value="3">Third</option>
														<option value="4"  selected="selected">Fourth</option>
													</select>
												</div>
												<div class="form-group mb-0">
													<label class="form-label">Group-Option Filter</label>
													<select multiple="multiple" class="group-filter">
														<optgroup label="Group 1">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
														</optgroup>
														<optgroup label="Group 2">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
															<option value="6">Option 6</option>
															<option value="7">Option 7</option>
															<option value="8">Option 8</option>
														</optgroup>
														<optgroup label="Group 3">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
															<option value="6">Option 6</option>
															<option value="7">Option 7</option>
															<option value="8">Option 8</option>
															<option value="9">Option 9</option>
														</optgroup>
													</select>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class="form-label">MutipleSelect</label>
													<select multiple="multiple" class="multi-select">
														<option value="1" selected="selected">January</option>
														<option value="2" disabled="disabled">February</option>
														<option value="3" selected="selected" disabled="disabled">March</option>
														<option value="4"  disabled="disabled">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Group-Option MutipleSelect</label>
													<select multiple="multiple" class="multi-select">
														<optgroup label="Group 1">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
														</optgroup>
														<optgroup label="Group 2">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
															<option value="6">Option 6</option>
															<option value="7">Option 7</option>
															<option value="8">Option 8</option>
														</optgroup>
														<optgroup label="Group 3">
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
															<option value="4">Option 4</option>
															<option value="5">Option 5</option>
															<option value="6">Option 6</option>
															<option value="7">Option 7</option>
															<option value="8">Option 8</option>
															<option value="9">Option 9</option>
														</optgroup>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Multiple Items</label>
													<select multiple="multiple" class="multiselect" >
														<option value="1">1</option>
														<option value="2" >2</option>
														<option value="3" >3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Hide SelectAll</label>
													<select multiple="multiple" class="hide-select">
														<option value="1">First</option>
														<option value="2">Second</option>
														<option value="3">Third</option>
														<option value="4">Fourth</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Select Filter</label>
													<select multiple="multiple" class="filter-multi">
														<option value="1">1</option>
														<option value="2" >2</option>
														<option value="3" >3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
													</select>
												</div>
												<div class="form-group mb-0">
													<label class="form-label">Custom Style</label>
													<select multiple="multiple" class="custom-multiselect" >
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Select All Styles</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group row">
													<label class="col-md-12 form-label">Single Select:</label>
													<div class="col-md-12">
														<select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
															<!--placeholder-->
															<option title="Volvo is a car"  value="volvo">Volvo</option>
															<option value="saab">Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Disabled Select:</label>
													<div class="col-md-12">
														<select class="SlectBox form-control box-shadow-0" disabled>
															<option value="volvo">Volvo</option>
															<option selected value="saab">Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
															<option disabled value="opt1">option1</option>
															<option value="opt2">option2</option>
															<option value="opt3">option3</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Inline Select:</label>
													<div class="col-md-12">
														<select class="SlectBox form-control">
															<option>selected</option>
															<option>Volvo</option>
															<option>Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
															<option>Volvo</option>
															<option>Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
															<option>Volvo</option>
															<option>Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
															<option>Volvo</option>
															<option>Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group row">
													<label class="col-md-12 form-label">Multiple Select:</label>
													<div class="col-md-12">
														<select multiple="multiple" class="testselect2">
															<option selected value="volvo">Volvo</option>
															<option value="saab">Saab</option>
															<option value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Disabled Select:</label>
													<div class="col-md-12">
														<select multiple="multiple" class="testselect2 " disabled >
														   <option selected value="volvo">Volvo</option>
														   <option value="saab">Saab</option>
														   <option disabled="disabled" value="mercedes">Mercedes</option>
														   <option value="audi">Audi</option>
														   <option value="bmw">BMW</option>
														   <option value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option class="someclass" value="audi">Audi</option>
														   <option class="someclass" value="bmw">BMW</option>
														   <option class="someclass" value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option value="audi">Audi</option>
														   <option value="bmw">BMW</option>
														   <option value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option value="hyundai">Hyundai</option>
														   <option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Optgroup Support:</label>
													<div class="col-md-12">
														<select   multiple="multiple" class="testselect2">
														   <option selected value="volvo">Volvo</option>
														   <option value="saab">Saab</option>
														   <option disabled="disabled" value="mercedes">Mercedes</option>
														   <option value="audi">Audi</option>
														   <option value="bmw">BMW</option>
														   <option value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option class="someclass" value="audi">Audi</option>
														   <option class="someclass" value="bmw">BMW</option>
														   <option class="someclass" value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option value="audi">Audi</option>
														   <option value="bmw">BMW</option>
														   <option value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option value="hyundai">Hyundai</option>
														   <option value="mitsubishi">Mitsubishi</option>
													   </select>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group row">
													<label class="col-md-12 form-label">Multiple Select-1:</label>
													<div class="col-md-12">
														<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="select1">
														   <option selected value="volvo">Volvo</option>
														   <option value="saab">Saab</option>
														   <option disabled="disabled" value="mercedes">Mercedes</option>
														   <option value="audi">Audi</option>
														   <option selected value="bmw">BMW</option>
														   <option value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
												<div class="form-group row ">
													<label class="col-md-12 form-label">Multiple Select-2:</label>
													<div class="col-md-12">
														<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="select3">
														   <option selected value="volvo">Volvo</option>
														   <option value="saab">Saab</option>
														   <option disabled="disabled" value="mercedes">Mercedes</option>
														   <option value="audi">Audi</option>
														   <option selected value="bmw">BMW</option>
														   <option value="porsche">Porche</option>
														   <option value="ferrari">Ferrari</option>
														   <option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Search Select-1:</label>
													<div class="col-md-12">
														<select class="search_test">
															<option class="hemant" selected value="saab">Saab</option>
															<option class="hemant" value="opel">Opel</option>
															<option disabled="disabled" value="mercedez">Mercedez</option>
															<optgroup label="US Brands">
																<option value="chrysler">Chrysler</option>
																<option value="gm">General Motors</option>
																<option value="ford">Ford</option>
																<option disabled="disabled" value="plymouth">Plymouth</option>
															</optgroup>
															<optgroup label="French Brands">
																<option value="citroen">Citro�n</option>
																<option value="peugeot">Peugeot</option>
																<option value="renault">Renault</option>
																<option value="nissan">Nissan</option>
															</optgroup>
															<optgroup label="Italian brands">
																<option value="fiat">Fiat</option>
																<option value="alpha-Romeo">Alpha Romeo</option>
																<option value="lamborghini">Lamborghini</option>
															</optgroup>
															<optgroup disabled="disabled" label="German brands">
																<option value="audi">Audi</option>
																<option value="bMW">BMW</option>
																<option value="volkswagen">Volkswagen</option>
															</optgroup>
															<option value="aston-martin">Aston Martin</option>
															<option value="hyundai">Hyundai</option>
															<option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group row">
													<label class="col-md-12 form-label">Search Select-2:</label>
													<div class="col-md-12">
														<select  class="search-box">
															<option class="hemant" selected value="saab">Saab</option>
															<option class="hemant" value="opel">Opel</option>
															<option disabled="disabled" value="mercedez">Mercedez</option>
															<option value="aston-martin">Aston Martin</option>
															<option value="hyundai">Hyundai</option>
															<option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Search Select-3:</label>
													<div class="col-md-12">
														<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="search-box">
															<option selected value="volvo">Volvo</option>
															<option value="saab">Saab</option>
															<option disabled="disabled" value="mercedes">Mercedes</option>
															<option value="audi">Audi</option>
															<option selected value="bmw">BMW</option>
															<option value="porsche">Porche</option>
															<option value="ferrari">Ferrari</option>
															<option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-12 form-label">Search Select-4:</label>
													<div class="col-md-12">
														<select multiple="multiple" class="SlectBox-grp-src">
															<option selected value="saab">Saab</option>
															<option value="opel">Opel</option>
															<option disabled="disabled" value="mercedez">Mercedez</option>
															<optgroup label="US Brands">
																<option value="chrysler">Chrysler</option>
																<option value="gm">General Motors</option>
																<option value="ford">Ford</option>
																<option disabled="disabled" value="plymouth">Plymouth</option>
															</optgroup>
															<optgroup label="French Brands">
																<option value="citroen">Citro�n</option>
																<option value="peugeot">Peugeot</option>
																<option selected value="renault">Renault</option>
																<option value="nissan">Nissan</option>
															</optgroup>
															<optgroup label="Italian brands">
																<option value="fiat">Fiat</option>
																<option value="alpha-Romeo">Alpha Romeo</option>
																<option value="lamborghini">Lamborghini</option>
															</optgroup>
															<optgroup disabled="disabled" label="German brands">
																<option value="audi">Audi</option>
																<option value="bMW">BMW</option>
																<option value="volkswagen">Volkswagen</option>
															</optgroup>
															<option value="aston-martin">Aston Martin</option>
															<option value="hyundai">Hyundai</option>
															<option value="mitsubishi">Mitsubishi</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Dual List Box</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="card shadow-none border">
													<div class="card-body">
														<div class="transfer"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Select Box</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="from-group mb-5 mb-lg-0">
													<select multiple="multiple" name="favorite_fruits" id="fruit_select">
														<option selected="selected" disabled="disabled">HTML5</option>
														<option>CSS3</option>
														<option>PHP</option>
														<option>Jquery</option>
														<option>.Net</option>
														<option>Java</option>
														<option>Android</option>
														<option>AngularJS</option>
														<option>Photoshop</option>
														<option>Python</option>
														<option>SQL</option>
														<option>Java Script</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="from-group">
													<select multiple="multiple" name="favorite_fruits" id="fruit_select1">
														<optgroup label="Software Side">
															<option>Web designer</option>
															<option>Web Developer</option>
															<option>Application Developer</option>
															<option>App Designer</option>
														</optgroup>
														<optgroup label="Voice Side">
															<option>Tell Caller</option>
															<option>Recruiter</option>
															<option>HR</option>
															<option>Data Entry</option>
															<option>Mapping</option>
															<option>US Recruiter</option>
														</optgroup>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Country selctor</div>
									</div>
									<div class="card-body">
										<form>
											<input id="phone" name="phone" type="tel">
											<button  class="btn btn-primary">Submit</button>
										 </form>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

@endsection('content')

@section('modals')

			<!--Change password Modal -->
			<div class="modal fade"  id="changepasswordnmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Change Password</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Confirm</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Change password Modal  -->

@endsection('modals')

@section('scripts')

		<!-- INTERNAL Timepicker js -->
		<script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/date-picker/date-picker.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

		<!-- INTERNAL File-Uploads Js-->
		<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- INTERNAL File uploads js -->
        <script src="{{URL::asset('assets/plugins/fileupload/js/dropify.js')}}"></script>
		<script src="{{URL::asset('assets/js/filupload.js')}}"></script>

		<!-- INTERNAL Multiple select js -->
		<script src="{{URL::asset('assets/plugins/multipleselect/multiple-select.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/multipleselect/multi-select.js')}}"></script>

		<!-- INTERNAL Sumoselect js-->
		<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

		<!-- INTERNAL intlTelInput js-->
		<script src="{{URL::asset('assets/plugins/intl-tel-input-master/intlTelInput.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/intl-tel-input-master/country-select.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/intl-tel-input-master/utils.js')}}"></script>

		<!-- INTERNAL jquery transfer js-->
		<script src="{{URL::asset('assets/plugins/jQuerytransfer/jquery.transfer.js')}}"></script>

		<!-- INTERNAL multi js-->
		<script src="{{URL::asset('assets/plugins/multi/multi.min.js')}}"></script>

		<!-- INTERNAL Bootstrap-Datepicker js-->
		<script src="{{URL::asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

		<!-- INTERNAL Form Advanced Element -->
		<script src="{{URL::asset('assets/js/formelementadvnced.js')}}"></script>
		<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>

@endsection
