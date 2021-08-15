@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Search</h4>
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
							<div class="col-sm-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body pb-0">
										<div class="input-group mb-2">
											<input type="text" class="form-control" placeholder="Searching.....">
											<span class="input-group-append">
												<button class="btn ripple btn-primary" >Search</button>
											</span>
										</div>
										<div class="tabs-menu1">
											<ul class="nav panel-tabs">
												<li><a href="#tab5" class="active" data-toggle="tab">All</a></li>
												<li><a href="#tab6" data-toggle="tab" class="text-dark">Images</a></li>
												<li><a href="#tab7" data-toggle="tab" class="text-dark">Books</a></li>
												<li><a href="#tab8" data-toggle="tab" class="text-dark">News</a></li>
												<li><a href="#tab9" data-toggle="tab" class="text-dark">Videos</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body p-3">
										<p class="text-muted mb-0 pl-3">About 12,546,90000 results (0.56 Seconds)</p>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Templist – HTML5 Digital Marketplace Template by ...</a>
										</div>
										<a href="#" class="text-primary">https://www.spruko.com/demo/templist/Html/index.html</a>
										<p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (48) Reviews</a>
											<a href="#" class="font-weight-semibold">USD-$24</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Zendash - Bootstrap HTML Dashboard Template</a>
										</div>
										<a href="#" class="text-primary">https://www.spruko.com/demo/zendash/html/</a>
										<p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
										<p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (48) Reviews</a>
											<a href="#" class="font-weight-semibold">USD-$24</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Zendash template related Images</a>
										</div>
										<div class="tags mb-2">
											<span class="tag">
												background
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												admin template
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												UX designs
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Presentation
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
										</div>
										<div class="row mb-2">
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp1.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp3.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp2.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
											<div class="col-sm-6 col-lg-3">
												<a class="" href="#">
													<div class="border p-0 text-center m-1">
														<img src="{{URL::asset('assets/images/photos/temp4.jpg')}}" alt="img" class="mx-auto">
													</div>
												</a>
											</div>
										</div>
										<a href="#" class="text-primary h6 mb-0">more images for treal template<span class="ml-1"><i class="fa fa-arrow-right"></i></span></a>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Eduserv Website Templates from ThemeForest</a>
										</div>
										<a href="#" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
										<p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (18) Reviews</a>
											<a href="#" class="font-weight-semibold">USD-$12</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
										</div>
										<a href="#" class="text-primary">https://www.spruko.com/demo/hostone/html/</a>
										<p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
										<p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
										<div>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#"><i class="fa fa-star-o text-yellow fs-16"></i></a>
											<a href="#" class="mr-4"> (18) Reviews</a>
											<a href="#" class="font-weight-semibold">USD-$12</a>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="mb-2">
											<a href="#" class="h4 text-dark">Videos</a>
										</div>
										<ul class="list-unstyled video-list-thumbs row">
											<li class="col-sm-12 col-lg-3 col-md-6 border-0">
												<a href="#" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
													<img alt="Barca" class="img-responsive" src="{{URL::asset('assets/images/photos/1.jpg')}}">
													<span class="fa fa-play-circle-o"></span> <span class="duration"><span class="fe fe-play-circle"></span> 06:28</span>
												</a>
											</li>
											<li class="col-sm-12 col-lg-9 col-md-6 border-0">
												<div class="mb-2">
													<a href="#" class="h4 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
												</div>
												<a href="#" class="text-primary border-0 p-0">https://www.spruko.com/demo/HostOne/html/</a>
												<p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
												<p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center">
									<div class="mb-5">
										<ul class="pagination justify-content-center">
											<li class="page-item page-prev disabled">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item page-next">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

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
