@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Profile 03</h4>
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

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden user-pro-list2">
									<div class="card-body">
										<div class="profile-cover__action">
											<div class="user-pic">
												<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
													<span class="avatar-status bg-green"></span>
												</span>
											</div>
											<div class="btn-list user-pic-right">
												<a href="{{url('editprofile')}}" class="btn btn-primary mt-3">Edit Profile</a>
												<a href="#" class="btn btn-success mt-3">Follow</a>
											</div>
										</div>
										<div class="pro-user pt-4 pb-4 pl-3 pr-3 d-md-flex">
											<div class="mt-5">
												<h5 class="pro-user-username text-dark mb-1 fs-16">Abigali kelly</h5>
												<h6 class="pro-user-desc text-muted fs-12">abigali@gmail.com</h6>
												<div>
													<span class="badge badge-primary-light badge-md badge-pill">admin</span>
													<span class="badge badge-primary-light badge-md badge-pill">Company director</span>
												</div>
												<div class="mt-2 clearfix">
													<span class="fa fa-star text-warning"></span>
													<span class="fa fa-star text-warning"></span>
													<span class="fa fa-star text-warning"></span>
													<span class="fa fa-star-half-o text-warning"></span>
													<span class="fa fa-star-o text-warning"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="social social-profile-buttons mt-4">
													<ul class="mb-0">
														<li>
															<a class="social-icon text-primary" href=""><i class="fa fa-facebook"></i></a>
														</li>
														<li>
															<a class="social-icon text-primary" href=""><i class="fa fa-twitter"></i></a>
														</li>
														<li>
															<a class="social-icon text-primary" href=""><i class="fa fa-youtube"></i></a>
														</li>
														<li>
															<a class="social-icon text-primary" href=""><i class="fa fa-rss"></i></a>
														</li>
														<li>
															<a class="social-icon text-primary" href=""><i class="fa fa-linkedin"></i></a>
														</li>
														<li>
															<a class="social-icon text-primary" href=""><i class="fa fa-google-plus"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="row">
											<div class="col-lg-4">
												<div class="card border p-0 shadow-none">
													<div class="card-header">
														<div class="card-title">Education</div>
													</div>
													<div class="card-body">
														<div class="main-profile-contact-list">
															<div class="media mr-5 mt-0">
																<div class="media-icon bg-success text-white mr-4">
																	<i class="fa fa-whatsapp"></i>
																</div>
																<div class="media-body">
																	<h6 class="font-weight-semibold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
																	<span>2018 - present</span>
																	<p>Past Work: Spruko, Inc.</p>
																</div>
															</div>
															<div class="media mr-5">
																<div class="media-icon bg-danger text-white mr-4">
																	<i class="fa fa-briefcase"></i>
																</div>
																<div class="media-body">
																	<h6 class="font-weight-semibold mb-1">Studied at <a href=""  class="btn-link">University</a></h6>
																	<span>2004-2008</span>
																	<p>Graduation: Bachelor of Science in Computer Science</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card border p-0 shadow-none">
													<div class="card-header">
														<div class="card-title">Contact</div>
													</div>
													<div class="card-body">
														<div class="main-profile-contact-list">
															<div class="media mr-4 mt-0">
																<div class="media-icon bg-primary text-white mr-3 mt-1">
																	<i class="fa fa-phone"></i>
																</div>
																<div class="media-body">
																	<small class="text-muted">Mobile</small>
																	<div class="font-weight-semibold">
																		+245 354 654
																	</div>
																</div>
															</div>
															<div class="media mr-4">
																<div class="media-icon bg-warning text-white mr-3 mt-1">
																	<i class="fa fa-slack"></i>
																</div>
																<div class="media-body">
																	<small class="text-muted">Stack</small>
																	<div class="font-weight-semibold">
																		@spruko.com
																	</div>
																</div>
															</div>
															<div class="media">
																<div class="media-icon bg-info text-white mr-3 mt-1">
																	<i class="fa fa-map"></i>
																</div>
																<div class="media-body">
																	<small class="text-muted">Current Address</small>
																	<div class="font-weight-semibold">
																		San Francisco, USA
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-8">
												<form class="profile-edit mb-5">
													<textarea class="form-control" placeholder="What are you doing right now?" rows="5"></textarea>
													<div class="profile-share border-top-0">
														<div class="mt-2">
															<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Audio"><span class="feather feather-mic fs-16 text-muted"></span></a>
															<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Video"><span class="feather feather-video fs-16 text-muted"></span></a>
															<a href="#" class="mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Picture"><span class="feather feather-image fs-16 text-muted"></span></a>
														</div>
														<button  class="btn btn-sm btn-success ml-auto"><i class="fa fa-share ml-1"></i> Share</button>
													</div>
												</form>
												<div class="card border p-0 shadow-none">
													<div class="card-header">
														<div class="card-title">Time Line</div>
													</div>
													<div class="card-body">
														<div class="d-flex">
															<div class="media mt-0">
																<div class="media-user mr-2">
																	<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/16.jpg')}}"></div>
																</div>
																<div class="media-body">
																	<h6 class="mb-0 mt-1">Peter Hill</h6>
																	<small class="text-muted">just now</small>
																</div>
															</div>
															<div class="ml-auto">
																<div class="dropdown show">
																	<a class="new option-dots" href="JavaScript:void(0);" data-toggle="dropdown">
																		<span class="feather feather-more-vertical"></span>
																	</a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit Post</a>
																		<a class="dropdown-item" href="#">Delete Post</a>
																		<a class="dropdown-item" href="#">Personal Settings</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="mt-4">
															<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
														</div>
													</div>
													<div class="card-footer border-top-0">
														<div class="media mt-0">
															<div class="media-user mr-2">
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<span class="avatar brround">+28</span>
																</div>
															</div>
															<div class="media-body">
																<h6 class="mb-0 mt-2 ml-2">28 people like your photo</h6>
															</div>
															<div class="ml-auto">
																<div class="d-flex mt-1">
																	<a class="new mr-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-heart"></span></a>
																	<a class="new mr-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-message-square"></span></a>
																	<a class="new text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-share-2"></span></a>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body border-top">
														<div class="d-flex">
															<div class="media mt-0">
																<div class="media-user mr-2">
																	<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/16.jpg')}}"></div>
																</div>
																<div class="media-body">
																	<h6 class="mb-0 mt-1">Peter Hill</h6>
																	<small class="text-muted">Sep 26 2019, 10:14am</small>
																</div>
															</div>
															<div class="ml-auto">
																<div class="dropdown show">
																	<a class="new option-dots" href="JavaScript:void(0);" data-toggle="dropdown">
																		<span class="feather feather-more-vertical"></span>
																	</a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit Post</a>
																		<a class="dropdown-item" href="#">Delete Post</a>
																		<a class="dropdown-item" href="#">Personal Settings</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="mt-4">
															<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
															<div class="d-flex">
																<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="w-40 m-1">
																<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="w-40 m-1">
															</div>
														</div>
													</div>
													<div class="card-footer border-top-0">
														<div class="media mt-0">
															<div class="media-user mr-2">
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<span class="avatar brround">+28</span>
																</div>
															</div>
															<div class="media-body">
																<h6 class="mb-0 mt-2 ml-2">28 people like your photo</h6>
															</div>
															<div class="ml-auto">
																<div class="d-flex mt-1">
																	<a class="new mr-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-heart"></span></a>
																	<a class="new mr-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-message-square"></span></a>
																	<a class="new text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-share-2"></span></a>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body border-top">
														<div class="d-flex">
															<div class="media mt-0">
																<div class="media-user mr-2">
																	<div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/16.jpg')}}"></div>
																</div>
																<div class="media-body">
																	<h6 class="mb-0 mt-1">Peter Hill</h6>
																	<small class="text-muted">Sep 24 2019, 09:14am</small>
																</div>
															</div>
															<div class="ml-auto">
																<div class="dropdown show">
																	<a class="new option-dots" href="JavaScript:void(0);" data-toggle="dropdown">
																		<span class="feather feather-more-vertical"></span>
																	</a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit Post</a>
																		<a class="dropdown-item" href="#">Delete Post</a>
																		<a class="dropdown-item" href="#">Personal Settings</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="mt-4">
															<p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
															<div class="d-flex">
																<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="w-30 m-1">
																<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img" class="w-30 m-1">
																<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="w-30 m-1">
															</div>
														</div>
													</div>
													<div class="card-footer">
														<div class="media mt-0">
															<div class="media-user mr-2">
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																	<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<span class="avatar brround">+28</span>
																</div>
															</div>
															<div class="media-body">
																<h6 class="mb-0 mt-2 ml-2">28 people like your photo</h6>
															</div>
															<div class="ml-auto">
																<div class="d-flex mt-1">
																	<a class="new mr-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-heart"></span></a>
																	<a class="new mr-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-message-square"></span></a>
																	<a class="new text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-share-2"></span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

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

@endsection