@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Peity Chart</h4>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Pie Chart</h3>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#3366ff", "#ebeff8"]}'>1/5</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#fe7f00", "#ebeff8"]}'>226/360</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#f7be2d", "#ebeff8"]}'>0.52/1.561</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#2dcbf7", "#ebeff8"]}'>1,4</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#c344ff", "#ebeff8"]}'>226,134</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#5ed94c", "#ebeff8"]}'>0.52,1.041</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Donut Charts</h3>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#13DAFE", "#ebeff8"]}'>1/5</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#fe7f00", "#ebeff8"]}'>226/360</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#f7be2d", "#ebeff8"]}'>0.52/1.561</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#2dcbf7", "#ebeff8"]}'>1,4</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#c344ff", "#ebeff8"]}'>226,134</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#5ed94c", "#ebeff8"]}'>0.52,1.041</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Line Charts</h3>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Bar Charts</h3>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#3366ff", "#fe7f00"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#3366ff", "#c344ff"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#2dcbf7", "#5ed94c"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Data attributes</h3>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#13DAFE", "#ebeff8"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#fe7f00", "#ebeff8"], "innerRadius": 14, "radius": 36 }'>2/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#f7be2d", "#ebeff8"], "innerRadius": 16, "radius": 32 }'>3/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#2dcbf7", "#ebeff8"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#c344ff", "#ebeff8"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["indigo", "#ebeff8"], "innerRadius": 18, "radius": 20 }'>6/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Setting Colours Dynamically</h3>
									</div>
									<div class="text-center">
										<div class="row">
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="pie-colours-2">5,3,9,6,5</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Updating Charts</h3>
									</div>
									<div class="card-body text-center">
										<span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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

		<!-- INTERNAL Peitychart js-->
		<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

@endsection
