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
								<h1 class="mb-0">Ticket View</h1>
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
										<a href="#" class="text-white">Ticket View</a>
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
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header  border-0">
									<div class="card-title">Ticket Details</div>
								</div>
								<div class="card-body text-center item-user">
									<div class="profile-pic mb-6">
										<div class="profile-pic-img mb-2">
											<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span>
											<img src="{{URL::asset('assets/images/users/16.jpg')}}" class="brround avatar-xxl" alt="user">
										</div>
										<small class="text-muted ">User</small>
										<a href="#" class="text-dark">
											<h5 class="mb-1 font-weight-semibold2">Abigali kelly</h5>
										</a>
									</div>
									<div class="profile-pic">
										<div class="profile-pic-img mb-2">
											<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span>
											<img src="{{URL::asset('assets/images/users/11.jpg')}}" class="brround avatar-xxl" alt="user">
										</div>
										<small class="text-muted ">Agent</small>
										<a href="#" class="text-dark">
											<h5 class="mb-1 font-weight-semibold2">Adam Quinn</h5>
										</a>
									</div>
								</div>
								<div class="card-footer text-center">
									<a href="#" class="btn btn-light btn-block">Closed Ticket</a>
								</div>
							</div>
							<div class="card">
								<div class="card-header  border-0">
									<div class="card-title">Ticket Information</div>
								</div>
								<div class="card-body pt-2 pl-3 pr-3">
									<div class="table-responsive">
										<table class="table mb-0">
											<tbody>
												<tr>
													<td>
														<span class="w-50">Ticket ID</span>
													</td>
													<td>:</td>
													<td>
														<span class="font-weight-semibold">#289</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Ticket User</span>
													</td>
													<td>:</td>
													<td>
														<span class="font-weight-semibold">User</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Ticket Category</span>
													</td>
													<td>:</td>
													<td>
														<span class="font-weight-semibold">Support</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Ticket Priority</span>
													</td>
													<td>:</td>
													<td>
														<span class="badge badge-success-light">Low</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Assigned To</span>
													</td>
													<td>:</td>
													<td>
														<span class="font-weight-semibold">Admin</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Open Date</span>
													</td>
													<td>:</td>
													<td>
														<span class="font-weight-semibold">12-01-2021 11:30AM</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Replied Date</span>
													</td>
													<td>:</td>
													<td>
														<span class="font-weight-semibold">15-01-2021 04:12PM</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="w-50">Status</span>
													</td>
													<td>:</td>
													<td>
														<span class="badge badge-success">Open</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8">
							<div class="card">
								<div class="card-header border-0">
									<div>
										<h4 class="card-title mb-1 fs-22">Techincal Issue </h4>
										<small class="fs-13"><i class="feather feather-clock text-muted mr-1"></i>Last Updated on <span class="text-muted">5 days ago</span></small>
									</div>
									<div class="card-options">
										<span class="badge badge-primary fs-10">On Progress</span>
									</div>
								</div>
								<div class="card-body pt-2">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
								</div>
							</div>
							<div class="card">
								<div class="card-header border-0">
									<h4 class="card-title">Reply Ticket</h4>
								</div>
								<div class="card-body">
									<div class="summernote"></div>
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
									<div class="custom-controls-stacked d-md-flex">
										<label class="form-label mt-1 mr-5">Status :</label>
										<label class="custom-control custom-radio success mr-4">
											<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
											<span class="custom-control-label">Open</span>
										</label>
										<label class="custom-control custom-radio success">
											<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
											<span class="custom-control-label">Close</span>
										</label>
									</div>
								</div>
								<div class="card-footer">
									<a href="#" class="btn btn-success">Submit Reply</a>
									<a href="#" class="btn btn-danger">Cancel</a>
								</div>
							</div>
							<div class="card support-converbody">
								<div class="card-header border-0">
									<h4 class="card-title">Conversions</h4>
								</div>
								<div class="card-body">
									<div class="d-sm-flex">
										<div class="d-flex mr-3">
											<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/11.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h5 class="mt-1 mb-1 font-weight-semibold">Adam Quinn <span class="badge badge-primary-light badge-md ml-2">Admin</span></h5>
											<small class="text-muted"><i class="feather feather-clock"></i> 3 mins ago</small>
											<p class="fs-13 mb-0 mt-1 supportnote-body">
											   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
											</p>
											<div class="editsupportnote-icon animated">
												<div class="editsummernote"></div>
												<div class="btn-list mt-1">
													<span class="btn btn-primary dismiss-btn">Update</span>
													<span class="btn btn-danger dismiss-btn">Cancel</span>
												</div>
											</div>
										</div>
										<div class="ml-auto">
											<span class="action-btns supportnote-icon" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit text-primary fs-16"></i></span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex">
										<div class="d-flex mr-3">
											<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/16.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h5 class="mt-1 mb-1 font-weight-semibold">Abigali kelly <span class="badge badge-danger-light badge-md ml-2">User</span></h5>
											<small class="text-muted"><i class="feather feather-clock"></i> 3 weeks ago</small>
											<p class="fs-13 mt-1">
											   Lorem ipsum dolor sit amet commodo consequat.
											</p>
											<div class="row">
												<div class="col-lg-2 col-md-3">
													<a href="#" class="attach-supportfiles">
														<span class="img-options-remove" data-toggle="remove"><i class="fe fe-x"></i></span>
														<img src="{{URL::asset('assets/images/files/attachments/2.png')}}" alt="img" class="img-fluid">
														<div class="attach-title">doc.pdf</div>
													</a>
												</div>
												<div class="col-lg-2 col-md-3 mt-4 mt-md-0">
													<a href="#" class="attach-supportfiles">
														<span class="img-options-remove" data-toggle="remove"><i class="fe fe-x"></i></span>
														<img src="{{URL::asset('assets/images/files/attachments/5.png')}}" alt="img" class="img-fluid">
														<div class="attach-title">{{url('index')}}</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex">
										<div class="d-flex mr-3">
											<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/11.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h5 class="mt-1 mb-1 font-weight-semibold">Adam Quinn <span class="badge badge-primary-light badge-md ml-2">Admin</span></h5>
											<small class="text-muted"><i class="feather feather-clock"></i> 1 month ago</small>
											<p class="fs-13 mb-0 mt-1">
											   Lorem ipsum dolor sit amet laboris   commodo consequat.
											</p>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-sm-flex">
										<div class="d-flex mr-3">
											<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/16.jpg')}}"> </a>
										</div>
										<div class="media-body">
											<h5 class="mt-1 mb-1 font-weight-semibold">Abigali kelly <span class="badge badge-danger-light badge-md ml-2">User</span></h5>
											<small class="text-muted"><i class="feather feather-clock"></i> 2 months ago</small>
											<p class="fs-13 mt-1 mb-0">
											   Some techinical issue in our theme
											</p>
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
		<script src="{{URL::asset('assets/js/support/support-ticketview.js')}}"></script>

@endsection
