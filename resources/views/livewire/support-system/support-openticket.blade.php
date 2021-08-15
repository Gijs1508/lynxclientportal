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
								<h1 class="mb-0">Open Ticket</h1>
							</div>
							<div class="col col-auto">
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item">
										<a href="#" class="text-white-50">Home</a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white">Open Ticket</a>
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
						<div class="col-xl-8">
							<div class="card">
								<div class="card-header  border-0">
									<h4 class="card-title">New Ticket</h4>
								</div>
								<div class="card-body">
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Ticket Subject</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="Name" value="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Email Address</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="Email" value="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Priority</label>
											</div>
											<div class="col-md-9">
												<select  class="form-control custom-select select2"  data-placeholder="Select Priority">
													<option label="Select Priority"></option>
													<option value="1">High</option>
													<option value="2">Medium</option>
													<option value="3">Low</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Ticket Category</label>
											</div>
											<div class="col-md-9">
												<select  class="form-control custom-select select2"  data-placeholder="Select Category">
													<option label="Select Category"></option>
													<option value="1">Support</option>
													<option value="2">Services</option>
													<option value="3">Customization</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group ticket-summernote">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Ticket Description</label>
											</div>
											<div class="col-md-9">
												<div class="summernote"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Upload Image</label>
											</div>
											<div class="col-md-9">
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
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Captcha</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="" value="">
												<div class="captch-body">
													<img src="{{URL::asset('assets/images/png/captcha.png')}}" alt="img">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-md-3"></div>
										<div class="col-md-9">
											<a href="#" class="btn btn-primary btn-lg">Submit Ticket</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header  border-0">
									<h4 class="card-title">Categories</h4>
								</div>
								<div class="card-body">
									<div class="list-catergory">
										<div class="item-list">
											<ul class="list-group mb-0">
												<li class="list-group-item">
													<a class="text-dark" href="#">Support <span class="badgetext badge badge-light mb-0 mt-1">14</span></a>
												</li>
												<li class="list-group-item">
													<a class="text-dark" href="#">Services <span class="badgetext badge badge-light mb-0 mt-1">03</span></a>
												</li>
												<li class="list-group-item">
													<a class="text-dark" href="#">Customization<span class="badgetext badge badge-light mb-0 mt-1">25</span></a>
												</li>
												<li class="list-group-item">
													<a class="text-dark" href="#">Other <span class="badgetext badge badge-light mb-0 mt-1">12</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-0">
								<div class="card-header  border-0">
									<h4 class="card-title">Popular Articles</h4>
								</div>
								<div class="card-body">
									<div class="list-catergory">
										<ul class="item-list item-list-scroll mb-0">
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">How to Updgrade plan?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 14</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 53</span>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">How could I manage active menu class?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 19</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 03</span>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6"> How to remove the dollar $ sign?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 22</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 02</span>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">Is there available in webpack?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 34</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 06</span>
													</div>
												</div>
											</li>
										</ul>
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
		<script src="{{URL::asset('assets/js/support/support-ticket.js')}}"></script>

@endsection
