@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Counters</h4>
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
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="avatar avatar-xl brround bg-success text-center">
											<i class="feather feather-users"></i>
										</div>
										<h5 class="mt-4">Employess</h5>
										<h2 class="counter fs-40">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">FloatNumbers counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="avatar avatar-xl brround bg-primary text-center">
											<i class="feather feather-dollar-sign"></i>
										</div>
										<h5 class="mt-4">Profit</h5>
										<h2 class="fs-40">$<span class="counter">2,5632</span></h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">DecimalNumbers counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="avatar avatar-xl brround bg-orange text-center">
											<i class="feather feather-alert-circle"></i>
										</div>
										<h5 class="mt-4">Errors</h5>
										<h2 class="counter fs-40">0.8998</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Day Counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="under-countdown row">
											<div class="col-xl-3 col-md-6">
												<div class="countdown">
													<span class="days">35</span>
													<span class="">Days</span>
												</div>
											</div>
											<div class="col-xl-3 col-md-6 mt-5 mt-md-0">
												<div class="countdown">
													<span class="hours">17</span>
													<span class="">Hours</span>
												</div>
											</div>
											<div class="col-xl-3 col-md-6 mt-5 mt-md-0">
												<div class="countdown">
													<span class="minutes">50</span>
													<span class="">Minutes</span>
												</div>
											</div>
											<div class="col-xl-3 col-md-6 mt-5 mt-md-0">
												<div class="countdown">
													<span class="seconds">39</span>
													<span class="">Seconds</span>
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

		<!-- INTERNAL Time Counter -->
		<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>

		<!-- INTERNAL Counters -->
		<script src="{{URL::asset('assets/plugins/countdown/countdowntime.js')}}"></script>
		<script src="{{URL::asset('assets/js/countdown.js')}}"></script>

@endsection
