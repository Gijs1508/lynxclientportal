@extends('layouts.supportapp')

@section('styles')

		<!-- INTERNAL owl-carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel.css')}}" rel="stylesheet" />

		<!-- INTERNAL jquery.autocomplete css-->
		<link href="{{URL::asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0">Editprofile</h1>
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
										<a href="#" class="text-white">Editprofile</a>
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
								<div class="card-body text-center item-user">
									<div class="profile-pic">
										<div class="profile-pic-img">
											<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span>
											<img src="{{URL::asset('assets/images/users/16.jpg')}}" class="brround avatar-xxl" alt="user">
										</div>
										<a href="#" class="text-dark">
											<h5 class="mt-3 mb-1 font-weight-semibold2">Abigali kelly</h5>
										</a>
										<small class="text-muted ">App Developer</small>
									</div>
								</div>
								<div class="support-sidebar">
									<ul class="side-menu">
										<li>
											<a class="side-menu__item" href="{{url('support-userdash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-editprofile')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Edit Profile</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-ticketlist')}}"><i class="side-menu__icon las la-ticket-alt"></i><span class="side-menu__label">Ticket Lists</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-ticketactive')}}"><i class="side-menu__icon las la-compass"></i><span class="side-menu__label">Active Tickets</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-ticketclosed')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Closed Tickets</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-ticketview')}}"><i class="side-menu__icon las la-tags"></i><span class="side-menu__label">View Ticket</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-ticketcreate')}}"><i class="side-menu__icon las la-briefcase"></i><span class="side-menu__label">Create Ticket</span></a>
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
										<li><a href="#tab2"  data-toggle="tab">Change Password</a></li>
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
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Phone Number</label>
														<input type="number" class="form-control" placeholder="Number">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Address</label>
														<input type="text" class="form-control" placeholder="Address">
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">City</label>
														<input type="text" class="form-control" placeholder="City">
													</div>
												</div>
												<div class="col-sm-6 col-md-3">
													<div class="form-group">
														<label class="form-label">Postal Code</label>
														<input type="number" class="form-control" placeholder="ZIP Code">
													</div>
												</div>
												<div class="col-md-5">
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
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Facebook</label>
														<input type="text" class="form-control" placeholder="https://www.facebook.com/">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Google</label>
														<input type="text" class="form-control" placeholder="https://www.google.com/">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Twitter</label>
														<input type="text" class="form-control" placeholder="https://twitter.com/">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Pinterest</label>
														<input type="text" class="form-control" placeholder="https://in.pinterest.com/">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">About Me</label>
														<textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group mb-0">
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
											</div>
										</div>
										<div class="card-footer text-right">
											<a href="#" class="btn btn-success">Save Changes</a>
											<a href="#" class="btn btn-danger">Cancel</a>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="card-body">
											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mb-0 mt-2">Old Password</label>
													</div>
													<div class="col-md-9">
														<input type="password" class="form-control" placeholder="Password" value="">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mb-0 mt-2">New Password</label>
													</div>
													<div class="col-md-9">
														<input type="password" class="form-control" placeholder="Password" value="">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mb-0 mt-2">Confirm Password</label>
													</div>
													<div class="col-md-9">
														<input type="password" class="form-control" placeholder="Confirm password" value="">
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer text-right">
											<a href="#" class="btn btn-success">Save Changes</a>
											<a href="#" class="btn btn-danger">Cancel</a>
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

		<!--INTERNAL wowmaster js -->
		<script src="{{URL::asset('assets/plugins/wowmaster/wow.js')}}"></script>

		<!--INTERNAL jquery.autocomplete js -->
		<script src="{{URL::asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery.autocomplete/custom-autocomplete.js')}}"></script>

		<!--INTERNAL Sticky js -->
		<script src="{{URL::asset('assets/plugins/sticky/sticky2.js')}}"></script>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="{{URL::asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>

		<!--INTERNAL Owl-carousel js -->
		<script src="{{URL::asset('assets/plugins/owl-carousel/owl-carousel.js')}}"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/support/support-sidemenu.js')}}"></script>

@endsection
