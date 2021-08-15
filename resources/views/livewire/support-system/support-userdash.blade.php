@extends('layouts.supportapp')

@section('styles')

		<!-- INTERNAL owl-carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel.css')}}" rel="stylesheet" />

		<!-- INTERNAL jquery.autocomplete css-->
		<link href="{{URL::asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet')}}" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css" rel="stylesheet')}}" />

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0">Dashboard</h1>
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
										<a href="#" class="text-white">Dashboard</a>
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
											<a class="side-menu__item active" href="{{url('support-userdash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
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
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="card">
										<a href="#">
											<div class="card-body">
												<div class="row">
													<div class="col-7">
														<div class="mt-0 text-left">
															<span class="fs-16 font-weight-semibold">Total Tickets</span>
															<h3 class="mb-0 mt-1 text-primary fs-25">1254</h3>
														</div>
													</div>
													<div class="col-5">
														<div class="icon1 bg-primary-transparent my-auto float-right"> <i class="las la-ticket-alt"></i> </div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="card">
										<a href="#">
											<div class="card-body">
												<div class="row">
													<div class="col-7">
														<div class="mt-0 text-left">
															<span class="fs-16 font-weight-semibold">Active Tickets</span>
															<h3 class="mb-0 mt-1 text-success fs-25">42</h3>
														</div>
													</div>
													<div class="col-5">
														<div class="icon1 bg-success-transparent my-auto float-right"> <i class="ri-ticket-2-line"></i> </div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="card">
										<a href="#">
											<div class="card-body">
												<div class="row">
													<div class="col-7">
														<div class="mt-0 text-left">
															<span class="fs-16 font-weight-semibold">Closed Tickets</span>
															<h3 class="mb-0 mt-1 text-secondary fs-25">11</h3>
														</div>
													</div>
													<div class="col-5">
														<div class="icon1 bg-secondary-transparent my-auto  float-right"> <i class="ri-coupon-2-line"></i> </div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-0 responsive-header">
											<h4 class="card-title">Ticket Overview</h4>
											<div class="card-options">
												<div class="btn-list">
													<a href="#" class="btn  btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-light4 mr-2 my-auto"></span>Open Ticket</a>
													<a href="#" class="btn  btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-primary mr-2 my-auto"></span>Closed Ticket</a>
													<a href="#" class="btn btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Yearly <i class="feather feather-chevron-down"></i> </a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Monthly</a></li>
														<li><a href="#">Yearly</a></li>
														<li><a href="#">Weekly</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="chart-wrapper">
												<canvas id="chartLine"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card mb-0">
										<div class="card-header border-0">
											<h4 class="card-title">Tickets Summary</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-vcenter text-nowrap table-bordered border-bottom" id="supportticket-dash">
													<thead>
														<tr>
															<th class="border-bottom-0">#ID</th>
															<th class="border-bottom-0">Title</th>
															<th class="border-bottom-0">Priority</th>
															<th class="border-bottom-0">Category</th>
															<th class="border-bottom-0">Date</th>
															<th class="border-bottom-0">Status</th>
															<th class="border-bottom-0">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#289</td>
															<td><a href="#">Sed ut perspiciatis</a></td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Support</td>
															<td>12-01-2021</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#320</td>
															<td><a href="#">Excepteur occaecat</a></td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Services</td>
															<td>05-02-2021</td>
															<td><span class="badge badge-danger">Closed</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#837</td>
															<td><a href="#">Sample Test1</a></td>
															<td><span class="badge badge-danger-light">High</span></td>
															<td>Customization</td>
															<td>13-03-2021</td>
															<td><span class="badge badge-success">open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#124</td>
															<td><a href="#">Sample Test2</a></td>
															<td><span class="badge badge-warning-light">Medium</span></td>
															<td>Support</td>
															<td>01-01-2021</td>
															<td><span class="badge badge-danger">Closed</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#309</td>
															<td><a href="#">Ut aut reiciendi</a></td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Services</td>
															<td>11-04-2021</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#117</td>
															<td><a href="#">Unde omnis iste natus</a></td>
															<td><span class="badge badge-success-light">Low</span></td>
															<td>Services</td>
															<td>11-04-2021</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#276</td>
															<td><a href="#">Et harum quidem</a></td>
															<td><span class="badge badge-warning-light">Medium</span></td>
															<td>Support</td>
															<td>11-04-2021</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#738</td>
															<td><a href="#">Maiores alias aut</a></td>
															<td><span class="badge badge-success-light">High</span></td>
															<td>Services</td>
															<td>17-03-2021</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#498</td>
															<td><a href="#">Quis autem vel</a></td>
															<td><span class="badge badge-danger-light">High</span></td>
															<td>Support</td>
															<td>17-02-2021</td>
															<td><span class="badge badge-success">Open</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#298</td>
															<td><a href="#">Ut aut reiciendi</a></td>
															<td><span class="badge badge-danger-light">High</span></td>
															<td>Services</td>
															<td>11-03-2021</td>
															<td><span class="badge badge-danger">closed</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
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

		<!-- INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Chartjs rounded-barchart -->
		<script src="{{URL::asset('assets/plugins/chart.min/chart.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/support/support-sidemenu.js')}}"></script>
		<script src="{{URL::asset('assets/js/support/support-userdash.js')}}"></script>

@endsection
