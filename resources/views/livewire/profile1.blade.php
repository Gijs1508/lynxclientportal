@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Profile 01</h4>
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
							<div class="col-xl-3 col-lg-4 col-md-12">
								<div class="card user-pro-list overflow-hidden">
									<div class="card-body">
										<div class="user-pic text-center">
											<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<div class="pro-user mt-3">
												<h5 class="pro-user-username text-dark mb-1 fs-16">Abigali kelly</h5>
												<h6 class="pro-user-desc text-muted fs-12">abigali@gmail.com</h6>
												<div class="mb-3 clearfix">
													<span class="fa fa-star text-warning"></span>
													<span class="fa fa-star text-warning"></span>
													<span class="fa fa-star text-warning"></span>
													<span class="fa fa-star-half-o text-warning"></span>
													<span class="fa fa-star-o text-warning"></span>
												</div>
												<div class="btn-list">
													<a href="{{url('editprofile')}}" class="btn btn-primary mt-3">Edit Profile</a>
													<a href="#" class="btn btn-success mt-3">Follow</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer p-0">
										<div class="row">
											<div class="col-6 text-center py-5 border-right">
												<h5 class="mb-2">
													<span class="fs-18 text-success">689k</span>
												</h5>
												<h5 class="fs-12 mb-0">Followers</h5>
											</div>
											<div class="col-6  py-5 text-center border-right">
												<h5 class="mb-2">
													<span class="fs-18 text-orange">3,765</span>
												</h5>
												<h5 class="fs-12 mb-0">Following</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Personal Details</h4>
										<div class="table-responsive">
											<table class="table mb-0">
												<tbody>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Name </span>
														</td>
														<td class="py-2 px-0">Abigali kelly</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Location </span>
														</td>
														<td class="py-2 px-0">USA</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Languages </span>
														</td>
														<td class="py-2 px-0">English, German</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Website </span>
														</td>
														<td class="py-2 px-0">abigali.com</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Email </span>
														</td>
														<td class="py-2 px-0">yourdoamin@gmail.com</td>
													</tr>
													<tr>
														<td class="py-2 px-0">
															<span class="font-weight-semibold w-50">Phone </span>
														</td>
														<td class="py-2 px-0">+125 254 3562s</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8 col-md-12">
								<div class="main-content-body main-content-body-profile card mg-b-20">
									<!-- main-profile-body -->
									<div class="main-profile-body">
										<div class="tab-content">
											<div class="tab-pane show active" id="about">
												<div class="card-body">
													<div class="mb-5">
														<form class="profile-edit">
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
													</div>
													<h5 class="font-weight-semibold">Biography</h5>
													<div class="main-profile-bio mb-0">
														<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
														<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
														<p class="mb-0">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a></p>
													</div>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-semibold">Work & Education</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-5">
															<div class="media-icon bg-success-transparent text-success mr-4">
																<i class="fa fa-whatsapp"></i>
															</div>
															<div class="media-body">
																<h6 class="font-weight-semibold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
																<span>2018 - present</span>
																<p>Past Work: Spruko, Inc.</p>
															</div>
														</div>
														<div class="media mr-5">
															<div class="media-icon bg-danger-transparent text-danger mr-4">
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
												<div class="card-body border-top">
													<h5 class="font-weight-semibold">Skills</h5>
													<a class="btn btn-sm btn-white mt-1" href="#">HTML5</a>
													<a class="btn btn-sm btn-white mt-1" href="#">CSS</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Java Script</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Photo Shop</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Php</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Wordpress</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Sass</a>
													<a class="btn btn-sm btn-white mt-1" href="#">Angular</a>
												</div>
												<div class="card-body border-top">
													<h5 class="font-weight-semibold">Contact</h5>
													<div class="main-profile-contact-list d-lg-flex">
														<div class="media mr-4">
															<div class="media-icon bg-primary-transparent text-primary mr-3 mt-1">
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
															<div class="media-icon bg-warning-transparent text-warning mr-3 mt-1">
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
															<div class="media-icon bg-info-transparent text-info mr-3 mt-1">
																<i class="fa fa-map"></i>
															</div>
															<div class="media-body">
																<small class="text-muted">Current Address</small>
																<div class="font-weight-semibold">
																	San Francisco, USA
																</div>
															</div>
														</div>
													</div><!-- main-profile-contact-list -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

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
