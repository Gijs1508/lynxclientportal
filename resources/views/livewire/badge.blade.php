@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Badges</h4>
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
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Simple Badges</h3>
									</div>
									<div class="card-body">
										<h1>Heading 01 <span class="badge badge-default">New</span></h1>
										<h2>Heading 02 <span class="badge badge-default">New</span></h2>
										<h3>Heading 03 <span class="badge badge-default">New</span></h3>
										<h4>Heading 04 <span class="badge badge-default">New</span></h4>
										<h5>Heading 05 <span class="badge badge-default">New</span></h5>
										<h6>Heading 06 <span class="badge badge-default">New</span></h6>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Colored Badges</h3>
									</div>
									<div class="card-body">
										<h1 class="text-blue">Heading 01 <span class="badge badge-primary">New</span></h1>
										<h2  class="text-red">Heading 02 <span class="badge badge-danger">New</span></h2>
										<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
										<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
										<h5  class="text-info">Heading 05 <span class="badge badge-info">New</span></h5>
										<h6  class="text-secondary">Heading 06 <span class="badge badge-secondary">New</span></h6>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Contextual variations</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-default mt-2">Default</span>
										<span class="badge badge-primary mt-2">Primary</span>
										<span class="badge badge-success mt-2">Success</span>
										<span class="badge badge-info mt-2">Info</span>
										<span class="badge badge-warning mt-2">Warning</span>
										<span class="badge badge-danger mt-2">Danger</span>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Pill Badges</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-pill badge-default mt-2">Default</span>
										<span class="badge badge-pill badge-primary mt-2">Primary</span>
										<span class="badge badge-pill badge-success mt-2">Success</span>
										<span class="badge badge-pill badge-info mt-2">Info</span>
										<span class="badge badge-pill badge-warning mt-2">Warning</span>
										<span class="badge badge-pill badge-danger mt-2">Danger</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Row-->
						<div class="card">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-default">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Default badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-success">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Success badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-radius offer-primary">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Primary badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-info mb-6">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Info Badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-warning mb-6">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Warning badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-lg-4">
										<div class="offer offer-radius offer-danger mb-6">
											<div class="shape">
												<div class="shape-text">
													top
												</div>
											</div>
											<div class="offer-content">
												<h3 class="lead font-weight-semibold">
													Danger Badge
												</h3>
												<p class="mb-0">
													And a little description.
													<br> and so one
												</p>
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

	<!--Moment js-->
	<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>

@endsection
