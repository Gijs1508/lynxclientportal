@extends('layouts.supportapp')

@section('styles')

		<!-- INTERNAL owl-carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel.css')}}" rel="stylesheet" />

		<!-- INTERNAL jquery.autocomplete css-->
		<link href="{{URL::asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Datepicker css-->
		<link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0">Closed Tickets</h1>
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
										<a href="#" class="text-white">Closed Tickets</a>
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
										<small class="text-muted ">Admin</small>
									</div>
								</div>
								<div class="support-sidebar">
									<ul class="side-menu">
										<li>
											<a class="side-menu__item" href="{{url('support-agentdash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-agenteditprofile')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Edit Profile</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-agentticketlist')}}"><i class="side-menu__icon las la-ticket-alt"></i><span class="side-menu__label">Ticket Lists</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-agentticketactive')}}"><i class="side-menu__icon las la-compass"></i><span class="side-menu__label">Active Tickets</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-agentticketclosed')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Closed Tickets</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-agentticketview')}}"><i class="side-menu__icon las la-file-alt"></i><span class="side-menu__label">View Ticket</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{url('support-agentassign')}}"><i class="side-menu__icon las la-briefcase"></i><span class="side-menu__label">Assigned Categories</span></a>
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
							<div class="card mb-0">
								<div class="card-body">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">Select Priority:</label>
												<select class="form-control custom-select select2" data-placeholder="Select Priority">
													<option label="Select Priority"></option>
													<option value="1">High</option>
													<option value="2">Medium</option>
													<option value="3">Low</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">From:</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="feather feather-calendar"></i>
														</div>
													</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">To:</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="feather feather-calendar"></i>
														</div>
													</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group mt-5">
												<a href="#" class="btn btn-primary btn-block">Search</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pl-0 pr-0 pt-0">
									<div class="table-responsive">
										<table class="table table-vcenter text-nowrap table-hover supportticket-list border-bottom">
											<thead>
												<tr class="bg-light">
													<th class="border-bottom-0">#ID</th>
													<th class="border-bottom-0">Subject</th>
													<th class="border-bottom-0">User</th>
													<th class="border-bottom-0 w-5">Category</th>
													<th class="border-bottom-0 w-5">Status</th>
													<th class="border-bottom-0">Last Replied</th>
													<th class="border-bottom-0 w-5">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#01</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Sed ut perspiciatis</a><span class="badge badge-success-light ml-2 badge-md">Low</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">12-01-2021 12:10AM</span></small>
													</td>
													<td><a href="#" class="">Faith Harris</a></td>
													<td>Support</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">5 hours ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#02</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Excepteur occaecat</a><span class="badge badge-success-light ml-2 badge-md">Low</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:00AM</span></small>
													</td>
													<td><a href="#" class="">Faith Harris</a></td>
													<td>Services</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">12 hours ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#03</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Sample Test1</a><span class="badge badge-danger-light ml-2 badge-md">High</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 05:30PM</span></small>
													</td>
													<td><a href="#" class="">Amelia Russell</a></td>
													<td>Customization</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">1 week ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#04</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Sample Test2</a><span class="badge badge-warning-light ml-2 badge-md">Medium</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:45AM</span></small>
													</td>
													<td><a href="#" class="">Max Wilson</a></td>
													<td>Support</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">3 weeks ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#05</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Ut aut reiciendi</a><span class="badge badge-success-light ml-2 badge-md">Low</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">21-04-2021 11:50AM</span></small>
													</td>
													<td><a href="#" class="">Melanie Coleman</a></td>
													<td>Services</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">4 weeks ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#06</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Unde omnis iste natus</a><span class="badge badge-success-light ml-2 badge-md">Low</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-03-2021 12:50PM</span></small>
													</td>
													<td><a href="#" class="">Adam Quinn</a></td>
													<td>Services</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">1 month ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#07</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Et harum quidem</a><span class="badge badge-warning-light ml-2 badge-md">Medium</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-04-2021 03:50PM</span></small>
													</td>
													<td><a href="#" class="">Victoria Lyman</a></td>
													<td>Support</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">3 months ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#08</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Maiores alias aut</a><span class="badge badge-danger-light ml-2 badge-md">High</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">17-03-2021 12:05AM</span></small>
													</td>
													<td><a href="#" class="">Peter Hill</a></td>
													<td>Services</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">4 months ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#09</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Quis autem vel</a><span class="badge badge-danger-light ml-2 badge-md">High</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">17-02-2021 10:00AM</span></small>
													</td>
													<td><a href="#" class="">Maria Bower</a></td>
													<td>Support</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">6 months ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td>#10</td>
													<td>
														<div><a href="{{url('support-agentticketclosedview')}}" class="h5">Ut aut reiciendi</a><span class="badge badge-danger-light ml-2 badge-md">High</span></div>
														<small class="fs-12 text-muted"><i class="fa fa-clock-o mr-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-03-2021 02:10PM</span></small>
													</td>
													<td><a href="#" class="">Austin Bell</a></td>
													<td>Services</td>
													<td><span class="badge badge-danger">Closed</span></td>
													<td><span class="fs-13 text-muted">1 year ago</span></td>
													<td>
														<div class="d-flex">
															<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#"><i class="feather feather-send mr-2"></i>Reply Ticket</a></li>
																<li><a href="#"><i class="feather feather-eye mr-2"></i>View Ticket</a></li>
																<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Delete Ticket</a></li>
																<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
															</ul>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<nav aria-label="navigation">
											<ul class="pagination justify-content-center mb-0">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
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

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/support/support-sidemenu.js')}}"></script>
		<script src="{{URL::asset('assets/js/support/support-ticketlist.js')}}"></script>

@endsection
