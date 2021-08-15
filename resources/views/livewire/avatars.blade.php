@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Avatars</h4>
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

						<!--Row-->
						<div class="row row-deck">
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4  class="card-title">Simple Square Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Simple Round Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Simple Radius Avatar</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4  class="card-title">Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
											<span class="avatar avatar-md" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
											<span class="avatar avatar-lg" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
											<span class="avatar avatar-xl" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar avatar-xxl" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Rounded Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
											<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
											<span class="avatar avatar-lg brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
											<span class="avatar avatar-xl brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
											<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Radius Avatar Size</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar avatar-sm bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
											<span class="avatar avatar-md bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
											<span class="avatar avatar-lg bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
											<span class="avatar avatar-xl bradius" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
											<span class="avatar avatar-xxl bradius" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4  class="card-title">Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Rounded Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Radius Avatar Status</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list">
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})">
												<span class="avatar-status"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
												<span class="avatar-status bg-red"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
												<span class="avatar-status bg-yellow"></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4  class="card-title">Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
											<span class="avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
											<span class="avatar">+8</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Rounded Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar brround">+8</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Radius Avatars List</h4>
									</div>
									<div class="card-body">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
											<span class="avatar bradius" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
											<span class="avatar bradius">+8</span>
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
