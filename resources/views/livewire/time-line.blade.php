@extends('layouts.app')

@section('styles')



@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Timeline</h4>
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
						<div class="row row-sm">
							<div class="col-lg-8">
								<div class="card">
									<div class="tab-menu-heading p-0 border-0">
										<div class="tabs-menu1 px-3">
											<ul class="nav">
												<li><a href="#tab-7" class="active" data-toggle="tab">Post</a></li>
												<li><a href="#tab-8" data-toggle="tab" class="">Albums</a></li>
												<li><a href="#tab-9" data-toggle="tab" class="">Videos</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body d-flex border-top">
										<div class="mr-4"><img alt="" class="rounded-circle avatar avatar-md" src="{{URL::asset('assets/images/users/16.jpg')}}"></div>
										<form class="profile-edit w-100">
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
								</div>
								<div class="card overflow-hidden">
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
								<div class="card overflow-hidden">
									<div class="card-body">
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
								<div class="card overflow-hidden">
									<div class="card-body">
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
							<div class="col-lg-4">
								<div class="card mg-b-20 card--events">
									<div class="card-header border-bottom-0">
										<div class="card-title">Trending Posts</div>
									</div>
									<div class="card-body p-0">
										<div class="">
											<ul class="list-group mb-0">
												<li class="list-group-item d-flex border-top-0 border-left-0 border-right-0">
													<div class="w-3 h-3 bg-primary mr-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Oct 20 <span class="font-weight-semibold">Sunday</span></label>
														<h5>New Fests Blog</h5>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 4PM</strong> Rew City, USA</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-secondary mr-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Oct 18 <span class="font-weight-semibold">Friday</span></label>
														<h6>New Location Visited</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Newyork</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-success mr-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Oct 12 <span class="font-weight-semibold">Saturday</span></label>
														<h6>Weding Event Dance Show</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Japan</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-warning mr-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Sep 20 <span class="font-weight-semibold">Friday</span></label>
														<h6>Field day Festival Events Orders</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 4PM</strong> Rew City, USA</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-info mr-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Sep 25 <span class="font-weight-semibold">Wednesday</span></label>
														<h6>Christamas Party Event Orders</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Newyork</p>
													</div>
												</li>
												<li class="list-group-item d-flex border-left-0 border-right-0">
													<div class="w-3 h-3 bg-danger mr-3 mt-1 brround"></div>
													<div>
														<label class="fs-12">Sep 30 <span class="font-weight-semibold">Monday</span></label>
														<h6>New Weding Event Dance Show Orders</h6>
														<p class="mb-0 text-muted fs-12"><strong>8AM - 5PM</strong> Japan</p>
													</div>
												</li>
											</ul>
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
