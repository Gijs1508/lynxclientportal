@extends('layouts.empapp')

@section('styles')

		<!-- INTERNAL Daterangepicker css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

		<!-- INTERNAL Pg-calendar-master css -->
		<link href="{{URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Apply Leaves</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Apply Leaves</h4>
									</div>
									<div class="card-body">
										<div class="leave-types">
											<div class="form-group">
												<label class="form-label">Leaves Dates</label>
												<select name="projects"  class="form-control custom-select select2" id="daterange-categories">
													<option value="single">Single Leaves</option>
													<option value="multiple">Multiple Leaves</option>
												</select>
											</div>
											<div class="leave-content active" id="single">
												<div class="form-group">
													<label class="form-label">Date Range:</label>
													<div class="input-group">
														<input type="text" name="singledaterange"  class="form-control" placeholder="select dates"/>
														<div class="input-group-append">
															<div class="input-group-text">
																<i class="bx bx-calendar"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="leave-content" id="multiple">
												<div class="form-group">
													<label class="form-label">Date Range:</label>
													<div class="input-group">
														<input type="text" name="daterange"  class="form-control" placeholder="select dates"/>
														<div class="input-group-append">
															<div class="input-group-text">
																<i class="bx bx-calendar"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Leaves Types</label>
												<select name="projects"  class="form-control custom-select select2" data-placeholder="Select">
													<option label="Select"></option>
													<option value="1">Half Day Leave</option>
													<option value="2">Casual Leaves</option>
													<option value="3">Sick Leaves</option>
													<option value="4">Maternity Leaves</option>
													<option value="5">Paternity Leaves</option>
													<option value="6">Annual Leaves</option>
													<option value="6">Unpaid Leaves</option>
													<option value="8">Other Leaves</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Reason:</label>
												<textarea class="form-control" rows="2">Some text here...</textarea>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="d-flex">
											<div>
												<label class="mb-0 font-weight-semibold text-dark">Selected Days:</label>
												<span class="badge badge-danger badge-pill ml-2">2</span>
											</div>
											<div class="ml-auto">
												<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
												<a href="#" class="btn btn-primary">Submit</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="p-0">
										<div class="card-header border-0">
											<h4 class="card-title">Calendar</h4>
										</div>
										<div class="leave-calendar mt-3"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Overview</h4>
									</div>
									<div class="card-body">
										<div id="leavesoverview" class="mx-auto pt-2"></div>
										<div class="row pt-4 mx-auto text-center">
											<div class="col-lg-9 col-md-12 mx-auto d-block">
												<div class="row">
													<div class="col-md-6">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-primary mr-2 my-auto"></span>Casual Leaves
														</div>
													</div>
													<div class="col-md-6 mt-3 mt-md-0">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label badge-danger mr-2 my-auto"></span>Sick Leaves
														</div>
													</div>
													<div class="col-md-6 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-secondary mr-2 my-auto"></span>Gifted Leaves
														</div>
													</div>
													<div class="col-md-6 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-success mr-2 my-auto"></span>Remaining Leaves
														</div>
													</div>
												</div>
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

		<!--INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Pg-calendar-master js -->
		<script src="{{URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.full.min.js')}}"></script>

		<!-- INTERNAL Daterangepicker js-->
		<script src="{{URL::asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

		<!-- INTERNAL Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/employee/emp-leaves.js')}}"></script>
		<script src="{{URL::asset('assets/js/employee/emp-sidemenuchart.js')}}"></script>

@endsection
