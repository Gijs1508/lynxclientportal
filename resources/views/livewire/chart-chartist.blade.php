@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Chartist Chart</h4>
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
							<div class="col-sm-12 col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Transparency </div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Gradient Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar3" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- / Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Horizontal Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar4" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Horizontal Bar Chart Style2</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar5" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Vertical Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Horizontal Stacked Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartStacked2" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartLine1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartArea1" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartPie" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartDonut" class="h-300"></canvas>
										</div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

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

		<!-- INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
		<script src="{{URL::asset('assets/js/chart.js')}}"></script>

@endsection
