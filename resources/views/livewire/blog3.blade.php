@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Blog 03</h4>
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
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img px-4 pt-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/blog.jpg')}}" alt="img" class="cover-image br-7 w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-md-flex mb-5">
											<a href="#" class="d-flex mr-3 mb-2"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Jan-18-2020</div></a>
											<a href="#" class="d-flex mb-2"><span class="feather feather-user text-muted mr-2 fs-18"></span><div class="mt-0">Anna Ogden</div></a>
											<div class="ml-auto mb-2">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">12 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
										<p>but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
											</div>
										</div>
									</div>
								</div>

								<!--Comments-->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">3 Comments</h3>
									</div>
									<div class="card-body">
										<div class="d-sm-flex mt-0 p-5 sub-review-section border border-bottom-0 br-bl-0 br-br-0">
											<div class="d-flex mr-3">
												<a href="#"><img class="media-object brround avatar-md" alt="64x64" src="{{URL::asset('assets/images/users/1.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
													<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
													<span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
												</h5>
												<p class="font-13  mb-2 mt-2">
												   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2 mt-1"><span class="badge badge-primary">Helpful</span></a>
												<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span class="badge badge-light">Comment</span></a>
												<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span class="badge badge-light">Report</span></a>
												<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
													<button class="btn btn-light" ><span class="feather feather-thumbs-up fs-16"></span></button>
													<button class="btn btn-light" ><span class="feather feather-thumbs-down fs-16"></span></button>
												</div>
											</div>
										</div>
										<div class="d-sm-flex p-5 sub-review-section border subsection-color br-tl-0 br-tr-0">
											<div class="d-flex mr-3">
												<a href="#"><img class="media-object brround avatar-md" alt="64x64" src="{{URL::asset('assets/images/users/2.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
												<p class="font-13  mb-2 mt-2">
													Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="" data-toggle="modal" data-target="#Comment" class="mt-1"><span class="badge badge-light">Comment</span></a>
												<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
													<button class="btn btn-light" ><span class="feather feather-thumbs-up fs-16"></span></button>
													<button class="btn btn-light" ><span class="feather feather-thumbs-down fs-16"></span></button>
												</div>
											</div>
										</div>
										<div class="d-sm-flex p-5 mt-4 border sub-review-section">
											<div class="d-flex mr-3">
												<a href="#"><img class="media-object brround avatar-md" alt="64x64" src="{{URL::asset('assets/images/users/3.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Edward
												<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
												<span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
												</h5>
												<p class="font-13  mb-2 mt-2">
												   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2 mt-1"><span class="badge badge-primary">Helpful</span></a>
												<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#Comment"><span class="badge badge-light">Comment</span></a>
												<a href="" class="mr-2 mt-1" data-toggle="modal" data-target="#report"><span class="badge badge-light">Report</span></a>
												<div class="btn-group btn-group-sm mb-1 ml-auto float-sm-right mt-1">
													<button class="btn btn-light" ><span class="feather feather-thumbs-up fs-16"></span></button>
													<button class="btn btn-light" ><span class="feather feather-thumbs-down fs-16"></span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/Comments-->

								<div class="card mb-lg-0">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Add a Comment</h3>
									</div>
									<div class="card-body">
										<div class="mt-2">
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email Address">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
											</div>
											<a href="#" class="btn btn-primary">Send Reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

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
