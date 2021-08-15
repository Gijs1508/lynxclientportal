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

		<!-- INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0">Customers</h1>
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
										<a href="#" class="text-white">Customers</a>
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
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card mb-0">
										<div class="card-header border-0">
											<h4 class="card-title">Customers Summary</h4>
											<div class="card-options">
												<a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addcustomer">Add New Customer</a>
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-vcenter text-nowrap table-bordered border-bottom" id="support-customerlist">
													<thead>
														<tr>
															<th class="border-bottom-0 w-5">#No</th>
															<th class="border-bottom-0">Name</th>
															<th class="border-bottom-0">Register Date</th>
															<th class="border-bottom-0 w-5">Tickets</th>
															<th class="border-bottom-0 w-5">Status</th>
															<th class="border-bottom-0">Last Login</th>
															<th class="border-bottom-0">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#01</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Faith Harris</h6></a>
																		<p class="text-muted mb-0 fs-12">faith@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>05-May-2017</td>
															<td>05</td>
															<td><span class="badge badge-success">Active</span></td>
															<td><span class="fs-13 text-muted">5 hours ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#02</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Austin Bell</h6></a>
																		<p class="text-muted mb-0 fs-12">austin@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>12-June-2018</td>
															<td>08</td>
															<td><span class="badge badge-danger">InActive</span></td>
															<td><span class="fs-13 text-muted">1 month ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#03</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Maria Bower</h6></a>
																		<p class="text-muted mb-0 fs-12">maria@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>02-Aug-2019</td>
															<td>02</td>
															<td><span class="badge badge-success">Active</span></td>
															<td><span class="fs-13 text-muted">5 months ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#04</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Peter Hill</h6></a>
																		<p class="text-muted mb-0 fs-12">peter@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>01-Jan-2020</td>
															<td>01</td>
															<td><span class="badge badge-warning">Blocked</span></td>
															<td><span class="fs-13 text-muted">1 month ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#05</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Victoria Lyman</h6></a>
																		<p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>05-May-2021</td>
															<td>10</td>
															<td><span class="badge badge-success">Active</span></td>
															<td><span class="fs-13 text-muted">6 months ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#06</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Adam Quinn</h6></a>
																		<p class="text-muted mb-0 fs-12">adam@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>15-Feb-2020</td>
															<td>06</td>
															<td><span class="badge badge-danger">InActive</span></td>
															<td><span class="fs-13 text-muted">1 year ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#07</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Melanie Coleman</h6></a>
																		<p class="text-muted mb-0 fs-12">melanie@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>15-Sep-2019</td>
															<td>11</td>
															<td><span class="badge badge-success">Active</span></td>
															<td><span class="fs-13 text-muted">2 years ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#08</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Max Wilson</h6></a>
																		<p class="text-muted mb-0 fs-12">max@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>05-Dec-2020</td>
															<td>09</td>
															<td><span class="badge badge-warning">Blocked</span></td>
															<td><span class="fs-13 text-muted">1 year ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#09</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Amelia Russell</h6></a>
																		<p class="text-muted mb-0 fs-12">amelia@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>01-July-2018</td>
															<td>22</td>
															<td><span class="badge badge-success">Active</span></td>
															<td><span class="fs-13 text-muted">5 years ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#10</td>
															<td>
																<div class="d-flex">
																	<span class="avatar avatar-md brround mr-3" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																	<div class="mr-3 mt-0 mt-sm-1 d-block">
																		<a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Justin Metcalfe</h6></a>
																		<p class="text-muted mb-0 fs-12">justin@gmail.com</p>
																	</div>
																</div>
															</td>
															<td>28-Apr-2017</td>
															<td>18</td>
															<td><span class="badge badge-success">Active</span></td>
															<td><span class="fs-13 text-muted">5 years ago</span></td>
															<td>
																<div class="d-flex">
																	<a href="{{url('support-admincustomerview')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
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

		<!-- Add Customer Modal-->
		<div class="modal fade"  id="addcustomer">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Customer</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="form-label">First Name</label>
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group">
							<label class="form-label">Last Name</label>
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
						<div class="form-group">
							<label class="form-label">Email address</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
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
						<div class="form-group">
							<label class="form-label mb-0 mt-2">Password</label>
							<input type="password" class="form-control" placeholder="Password" value="">
						</div>
						<div class="form-group">
							<label class="form-label mb-0 mt-2">Confirm Password</label>
							<input type="password" class="form-control" placeholder="Password" value="">
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-success">Submit</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End  Add Customer Modal  -->

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

		<!-- INTERNAL Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/support/support-sidemenu.js')}}"></script>
		<script src="{{URL::asset('assets/js/support/support-customer.js')}}"></script>

@endsection
