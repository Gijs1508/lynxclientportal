@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">User-List 02</h4>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="e-panel card">
											<div class="card-body">
												<div class="row">
													<div class="col mb-4">
														<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Add New User</a>
													</div>
													<div class="col col-auto mb-4">
														<div class="form-group w-100">
															<div class="input-icon">
																<span class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</span>
																<input type="text" class="form-control" placeholder="Search User">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																<small class="text-muted">Project Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Harvey Mattos</p>
																<small class="text-muted">Develpoer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catrice Doshier</p>
																<small class="text-muted">Assistant Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																<small class="text-muted">Company Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Margie Fitts</p>
																<small class="text-muted">It Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																<small class="text-muted">Hr Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																<small class="text-muted">Hr Recriuter</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																<small class="text-muted">Ceo</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																<small class="text-muted">Php developer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																<small class="text-muted">Web developer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																<small class="text-muted">Hr Manager</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="d-sm-flex align-items-center border p-3 mb-3 br-7">
															<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
															</div>
															<div class="wrapper ml-sm-3  mt-4 mt-sm-0">
																<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																<small class="text-muted">web designer</small>
															</div>
															<div class="float-sm-right ml-auto mt-4 mt-sm-0">
																<a href="#" class="btn btn-white btn-sm">Message</a>
																<a href="#" class="btn btn-primary btn-sm d-lg-none d-xl-inline">View Profile</a>
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
