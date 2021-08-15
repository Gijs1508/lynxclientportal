@extends('layouts.supportapp')

@section('styles')

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0">Customer Profile</h1>
							</div>
							<div class="col col-auto">
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item">
										<a href="#" class="text-white-50">Home</a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white">Pages</a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white">Customer Profile</a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section -->

		<!--Section-->
		<section>
			<div class="cover-image sptb">
				<div class="container">
					<div class="row">
						<div class="col-xl-3">
							<div class="card">
								<div class="card-body text-center">
									<div class="profile-pic">
										<div class="profile-pic-img mb-2">
											<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span>
											<img src="{{URL::asset('assets/images/users/1.jpg')}}" class="brround avatar-xxl" alt="user">
										</div>
										<a href="#" class="text-dark">
											<h5 class="mb-1 font-weight-semibold2">Faith Harris
												<span data-toggle="tooltip" data-placement="bottom" title="Verified"><i class="ion-checkmark-circled  text-success fs-14 ml-1"></i></span>
											</h5>
											<small class="text-muted ">faith@gmail.com</small>
										</a>
									</div>
								</div>
								<div class="support-sidebar">
									<ul class="side-menu">
										<li>
											<a class="side-menu__item" href="{{url('support-admindash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-admineditprofile')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Edit Profile</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-adminticketlist')}}"><i class="side-menu__icon las la-ticket-alt"></i><span class="side-menu__label">Ticket Lists</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-adminticketactive')}}"><i class="side-menu__icon las la-compass"></i><span class="side-menu__label">Active Tickets</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-adminticketclosed')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Closed Tickets</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-adminticketview')}}"><i class="side-menu__icon las la-tags"></i><span class="side-menu__label">View Ticket</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-adminticketnew')}}"><i class="side-menu__icon las la-file-alt"></i><span class="side-menu__label">New Ticket</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-admincustomer')}}"><i class="side-menu__icon las la-users"></i><span class="side-menu__label">Customers</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-admincustomerview')}}"><i class="side-menu__icon las la-users"></i><span class="side-menu__label">Customer View</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-admincategories')}}"><i class="side-menu__icon las la-briefcase"></i><span class="side-menu__label">Categories</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-adminarticles')}}"><i class="side-menu__icon las la-newspaper"></i><span class="side-menu__label">Articles</span></a>
										</li>
										<li class="slide">
											<a class="side-menu__item slide-show" href="#"><i class="side-menu__icon lab la-buffer"></i><span class="side-menu__label">Level 1</span><i class="angle fa fa-angle-right"></i></a>
											<ul class="slide-menu">
												<li><a class="slide-item" href="#">Level 1.1</a></li>
												<li><a class="slide-item" href="#">Level 1.2</a></li>
												<li><a class="slide-item" href="#">Level 1.3</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-9">
							<div class="tab-menu-heading hremp-tabs p-0 ">
								<div class="tabs-menu1">
									<!-- Tabs -->
									<ul class="nav panel-tabs">
										<li class="ml-4"><a href="#tab1" class="active"  data-toggle="tab">Edit Profile</a></li>
										<li><a href="#tab2"  data-toggle="tab">My Tickets</a></li>
									</ul>
								</div>
							</div>
							<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
								<div class="tab-content">
									<div class="tab-pane active" id="tab1">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">First Name</label>
														<input type="text" class="form-control" placeholder="First Name">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input type="text" class="form-control" placeholder="Last Name">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Email address</label>
														<input type="email" class="form-control" placeholder="Email">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Country</label>
														<select class="form-control  select2" data-placeholder="Select Country">
															<option label="Select Country"></option>
															<option value="1">Germany</option>
															<option value="3">Canada</option>
															<option value="4">USA</option>
															<option value="5">Afghanistan</option>
															<option value="6">Albania</option>
															<option value="7">China</option>
															<option value="8">Denmark</option>
															<option value="9">Finland</option>
															<option value="10">India</option>
															<option value="11">Kiribati</option>
															<option value="12">Kuwait</option>
															<option value="13">Mexico</option>
															<option value="14">Pakistan</option>
														</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Upload Image</label>
														<div class="input-group file-browser">
															<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
															<label class="input-group-append mb-0">
																<span class="btn ripple btn-light">
																	Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
																</span>
															</label>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Status</label>
														<select class="form-control  select2" data-placeholder="Select Country">
															<option label="Select Country"></option>
															<option value="1">Active</option>
															<option value="2">Inactive</option>
														</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label mb-0 mt-2">Password</label>
														<input type="password" class="form-control" placeholder="Password" value="">
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer text-right">
											<a href="#" class="btn btn-success">Update Profile</a>
											<a href="#" class="btn btn-danger">Cancel</a>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-vcenter text-nowrap table-bordered border-bottom" id="support-customerlist">
													<thead>
														<tr>
															<th class="border-bottom-0 w-1">#No</th>
															<th class="border-bottom-0">Subject</th>
															<th class="border-bottom-0 w-1">Priority</th>
															<th class="border-bottom-0">Category</th>
															<th class="border-bottom-0 w-5">Status</th>
															<th class="border-bottom-0">Last Replied</th>
															<th class="border-bottom-0">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#01</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Sed ut perspiciatis</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">12-01-2021 12:10AM</span></small>
															</td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Support</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<h6 class="mb-0 fs-13">Julia Walker</h6>
																<span class="fs-11 text-muted">5 hours ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#02</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Excepteur occaecat</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:00AM</span></small>
															</td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Services</td>
															<td><span class="badge badge-primary">New</span></td>
															<td>
																<h6 class="mb-0 fs-13">Amelia Russell</h6>
																<span class="fs-11 text-muted">12 hours ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#03</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Sample Test1</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 05:30PM</span></small>
															</td>
															<td><span class="badge badge-danger-light">High</span></td>
															<td>Customization</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<h6 class="mb-0 fs-13">Max Wilson</h6>
																<span class="fs-11 text-muted">1 week ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#04</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Sample Test2</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:45AM</span></small>
															</td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Support</td>
															<td><span class="badge badge-orange">Re-Open</span></td>
															<td>
																<h6 class="mb-0 fs-13">Melanie Coleman</h6>
																<span class="fs-11 text-muted">3 weeks ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#05</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Ut aut reiciendiLow</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">21-04-2021 11:50AM</span></small>
															</td>
															<td><span class="badge badge-warning-light">Medium</span></td>
															<td>Services</td>
															<td><span class="badge badge-danger">Closed</span></td>
															<td>
																<h6 class="mb-0 fs-13">Adam Quinn</h6>
																<span class="fs-11 text-muted">4 weeks ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#06</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Unde omnis iste natus</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-03-2021 12:50PM</span></small>
															</td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Support</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<h6 class="mb-0 fs-13">Victoria Lyman</h6>
																<span class="fs-11 text-muted">4 weeks ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#07</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Et harum quidem</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-04-2021 03:50PM</span></small>
															</td>
															<td><span class="badge badge-warning-light">Medium</span></td>
															<td>Support</td>
															<td><span class="badge badge-danger">Closed</span></td>
															<td>
																<h6 class="mb-0 fs-13">Maria Bower</h6>
																<span class="fs-11 text-muted">6 months ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#08</td>
															<td>
																<div><a href="{{url('support-adminticketview')}}" class="h5">Quis autem vel</a></div>
																<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-04-2021 03:50PM</span></small>
															</td>
															<td><span class="badge badge-danger-light">High</span></td>
															<td>Services</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<h6 class="mb-0 fs-13">Peter Hill</h6>
																<span class="fs-11 text-muted">1 year ago</span>
															</td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-adminticketview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

@endsection('content')

@section('modals')

		<!--Login Modal-->
		<div class="modal fade"  id="loginmodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Login</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="single-page customerpage">
							<div class="wrapper wrapper2 box-shadow-0 border-0">
								<div class="card-body pb-4">
									<div class="btn-list d-flex">
										<a class="btn btn-google btn-block" href="https://www.google.com/gmail/"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
										 <a class="btn btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter fa-1x"></i></a>
										 <a class="btn btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x"></i></a>
									</div>
								</div>
								<hr class="divider">
								<form class="card-body pt-3" id="login" name="login">
									<div class="form-group">
										<label class="form-label">Mail or Username</label>
										<input class="form-control" placeholder="Email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" type="password">
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="{{url('index')}}">Login</a>
									</div>
									<div class="text-center mt-3">
										<p class="mb-2"><a href="#">Forgot Password</a></p>
										<p class="text-dark mb-0">Don't have account?<a class="text-primary ml-1" href="#" data-toggle="modal" data-target="#registermodal" data-dismiss="modal">Register</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Login Modal  -->

		<!--Register Modal-->
		<div class="modal fade"  id="registermodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Register</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="single-page customerpage">
							<div class="wrapper wrapper2 box-shadow-0 border-0">
								<div class="card-body pb-4">
									<div class="btn-list d-flex">
										<a class="btn btn-google btn-block" href="https://www.google.com/gmail/"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
										 <a class="btn btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter fa-1x"></i></a>
										 <a class="btn btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x"></i></a>
									</div>
								</div>
								<hr class="divider">
								<form class="card-body pt-3" id="register" name="register">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input class="form-control" placeholder="First Name" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input class="form-control" placeholder="Last Name" type="text">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label">Mail or Username</label>
										<input class="form-control" placeholder="Email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" type="password">
									</div>
									<div class="form-group">
										<label class="form-label">Captcha</label>
										<input class="form-control" placeholder="captch" type="text">
										<div class="captch-body">
											<img src="{{URL::asset('assets/images/png/captcha.png')}}" alt="img">
										</div>
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="{{url('index')}}">Submit</a>
									</div>
									<div class="text-center mt-3">
										<p class="text-dark mb-0">Already have an account?<a class="text-primary ml-1" href="#" data-toggle="modal" data-target="#loginmodal" data-dismiss="modal">Login</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Register Modal  -->

@endsection('modals')

@section('scripts')

		<!--INTERNAL Horizontalmenu js -->
		<script src="{{URL::asset('assets/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

		<!--INTERNAL Sticky js -->
		<script src="{{URL::asset('assets/plugins/sticky/sticky2.js')}}"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/support/support-sidemenu.js')}}"></script>
		<script src="{{URL::asset('assets/js/support/support-customerview.js')}}"></script>

@endsection
