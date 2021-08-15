@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Blog</h4>
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
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
										<div class="card-body d-flex flex-column">
										<h4><a href="#"> annoying consequences</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" ></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-lg btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-lg btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="#"><img class="card-img-top " src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-lg btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="#" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{URL::asset('assets/images/photos/7.jpg')}})"></a>
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Thomos Scott</a>
												<small class="d-block text-muted">1 day ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
										<h4><a href="#">Publishing packages</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div><a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
										<h4><a href="#">Nihil molestaturrgt.</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div><a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
									</div>
									<a href="#" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{URL::asset('assets/images/photos/8.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="#" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{URL::asset('assets/images/photos/2.jpg')}})"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Generator on the Internet..</a></h4>
										<div class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Nihil Molestiae.</a></h4>
										<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{URL::asset('assets/images/photos/18.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some </div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">MeganPeters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top br-bl-7 br-br-7" src="{{URL::asset('assets/images/photos/13.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top br-bl-7 br-br-7" src="{{URL::asset('assets/images/photos/14.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
												<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
											</div>
										</div>
									</div>
									<a href="#"><img class="card-img-top br-bl-7 br-br-7" src="{{URL::asset('assets/images/photos/15.jpg')}}" alt="How do you know she is a witch?"></a>
								</div>
							</div>
						</div>
						<!-- End row-->

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
