@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Dragula Css -->
		<link href="{{URL::asset('assets/plugins/dragula/dragula.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Dragula Cards</h4>
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

						<div class="examples">
							<div class="parent1 row">
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="left-defaults">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card-alert alert alert-success mb-0 br-3 mb-4">
											Adding action was successful
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
													<div>
														<a class="font-weight-semibold" href="{{URL::asset('profile')}}">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											New Application
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											Face Bool Live
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs mr-3" src="{{URL::asset('assets/images/users/1.jpg')}}">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden mb-0 br-3 border shadow-none overflow-hidden">
											<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
									</div>
								</div>
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="right-defaults">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card-alert alert alert-danger mb-0 br-3 mb-4">
											Adding action was Warning
										</div>

										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											Website Designing
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											New Orders
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs mr-3" src="{{URL::asset('assets/images/users/13.jpg')}}">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Daniel</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden br-3 border shadow-none overflow-hidden">
											<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
													<div>
														<a class="font-weight-semibold" href="{{URL::asset('profile')}}">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wrapper col-lg-4">
									<div class="card p-5" id="left-events">
										<h4 class="card-title mb-6">Draggable Cards</h4>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											New Application
										</div>
										<div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
											Face Bool Live
										</div>
										<div class="card border shadow-none overflow-hidden mb-4 br-3">
											<div class="card-body p-3">
												<div class="d-flex mt-0">
													<figure class="rounded-circle align-self-start mb-0">
														<img alt="Generic placeholder image" class="avatar brround avatar-xs mr-3" src="{{URL::asset('assets/images/users/1.jpg')}}">
													</figure>
													<div class="media-body mt-1">
														<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="card overflow-hidden br-3 border shadow-none overflow-hidden">
											<a href="#"><img class="card-img-top  " src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img"></a>
											<div class="card-body d-flex flex-column p-3">
												Who chooses to enjoy a pleasure that has no annoying consequences
											</div>
										</div>
										<div class="card-alert alert alert-success mb-0 br-3 mb-4">
											Adding action was successful
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-body d-flex flex-column p-3">
												<h4><a href="#">Play Music</a></h4>
												<div class="text-muted">
													Some quick example text to build
												</div>
												<div class="d-flex align-items-center pt-5 mt-auto text-center">
													<div class="text-muted">
														<a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-backward"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-play"></i></a> <a class="icon d-none d-md-inline-block ml-3" href="javascript:void(0)"><i class="fa fa-step-forward"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card border shadow-none overflow-hidden br-3 mb-4">
											<div class="card-body p-3">
												<div class="d-flex align-items-center mt-auto">
													<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
													<div>
														<a class="font-weight-semibold" href="{{URL::asset('profile')}}">Anna Ogden</a> <small class="d-block text-muted fa-12">2 days ago</small>
													</div>
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

		<!-- INTERNAL Dragula Js -->
		<script src="{{URL::asset('assets/plugins/dragula/dragula.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/dragula/dragula-evnet.min.js')}}"></script>

@endsection
