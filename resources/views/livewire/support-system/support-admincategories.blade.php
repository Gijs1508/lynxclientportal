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

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0">Categories</h1>
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
										<a href="#" class="text-white">Categories</a>
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
											<h4 class="card-title">Categories Summary</h4>
											<div class="card-options">
												<a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addcategory">Add New Category</a>
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-vcenter text-nowrap table-hover border table-striped" id="support-categorylist">
													<thead>
														<tr>
															<th class="border-bottom-0 w-5">#No</th>
															<th class="border-bottom-0">Name</th>
															<th class="border-bottom-0 w-5 text-center">Tickets</th>
															<th class="border-bottom-0 w-5 text-center">Agents</th>
															<th class="border-bottom-0 w-5 text-center">Articles</th>
															<th class="border-bottom-0 w-5 text-center">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#01</td>
															<td><span>Services</span></td>
															<td class="text-center"><span>02</span></td>
															<td class="text-center"><span>01</span></td>
															<td class="text-center"><span>03</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1" data-toggle="modal" data-target="#viewcategory">
																		<i class="feather feather-eye text-primary" data-toggle="tooltip" data-placement="top" title="Edit"></i>
																	</a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#02</td>
															<td><span>Support</span></td>
															<td class="text-center"><span>18</span></td>
															<td class="text-center"><span>05</span></td>
															<td class="text-center"><span>35</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1"  data-toggle="modal" data-target="#viewcategory">
																		<i class="feather feather-eye text-primary" data-toggle="tooltip" data-placement="top" title="Eidt"></i>
																	</a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#03</td>
															<td><span>License</span></td>
															<td class="text-center"><span>03</span></td>
															<td class="text-center"><span>01</span></td>
															<td class="text-center"><span>04</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1"  data-toggle="modal" data-target="#viewcategory">
																		<i class="feather feather-eye text-primary" data-toggle="tooltip" data-placement="top" title="Eidt"></i>
																	</a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#04</td>
															<td><span>Billing</span></td>
															<td class="text-center"><span>03</span></td>
															<td class="text-center"><span>01</span></td>
															<td class="text-center"><span>04</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1"  data-toggle="modal" data-target="#viewcategory">
																		<i class="feather feather-eye text-primary" data-toggle="tooltip" data-placement="top" title="Eidt"></i>
																	</a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#05</td>
															<td><span>Settings</span></td>
															<td class="text-center"><span>06</span></td>
															<td class="text-center"><span>02</span></td>
															<td class="text-center"><span>11</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1"  data-toggle="modal" data-target="#viewcategory">
																		<i class="feather feather-eye text-primary" data-toggle="tooltip" data-placement="top" title="Eidt"></i>
																	</a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>#06</td>
															<td><span>Customization</span></td>
															<td class="text-center"><span>02</span></td>
															<td class="text-center"><span>02</span></td>
															<td class="text-center"><span>11</span></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="action-btns1"  data-toggle="modal" data-target="#viewcategory">
																		<i class="feather feather-eye text-primary" data-toggle="tooltip" data-placement="top" title="Eidt"></i>
																	</a>
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

		<!-- Add Category Modal-->
		<div class="modal fade"  id="addcategory">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Category</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="form-label">Title</label>
							<input type="text" class="form-control" placeholder="Name">
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-success">Save</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End  Add Category Modal  -->

		<!-- View Category Modal-->
		<div class="modal fade"  id="viewcategory">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">View Category</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="form-label">Name</label>
							<input type="text" class="form-control" placeholder="Name" value="Services">
						</div>
						<div class="form-group">
							<label class="form-label">Tickets</label>
							<select class="form-control custom-select select2" data-placeholder="Select Tickets">
								<option label="Select Tickets"></option>
								<option value="1" selected>01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
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
						<div class="form-group">
							<label class="form-label">Agents</label>
							<select class="form-control custom-select select2" data-placeholder="Select Agents" multiple="multiple">
								<option label="Select Agents"></option>
								<option value="1" selected>Faith Harris</option>
								<option value="2">Austin Bell</option>
								<option value="3">Maria Bower</option>
								<option value="4">Peter Hill</option>
								<option value="5">Victoria Lyman</option>
								<option value="6">Adam Quinn</option>
								<option value="7">Melanie Coleman</option>
								<option value="8">Max Wilson</option>
								<option value="9">Amelia Russell</option>
								<option value="10">Justin Metcalfe</option>
								<option value="11">Ryan Young</option>
								<option value="12">Jennifer Hardacre</option>
								<option value="13">Justin Parr</option>
								<option value="14">Julia Hodges</option>
								<option value="15">Michael Sutherland</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-label">Articles</label>
							<input type="text" class="form-control" placeholder="Articles" value="03">
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-success">Save</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End  Add Category Modal  -->

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
		<script src="{{URL::asset('assets/js/support/support-category.js')}}"></script>

@endsection
