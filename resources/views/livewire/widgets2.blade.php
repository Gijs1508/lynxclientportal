@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Chat</h4>
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
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="mb-2 fs-18 text-muted">
													Total Application
												</div>
												<h1 class="font-weight-semibold mb-1">45,675</h1>
												<span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> +1.4%</span>
											</div>
											<div class="col col-auto">
												<div class="mx-auto chart-circle chart-circle-md chart-circle-primary mt-sm-0 mb-0" data-value="0.85" data-thickness="12" data-color="#3366ff">
													<div class="mx-auto chart-circle-value text-center fs-20">85%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="mb-2 fs-18 text-muted">
													Shortlisted
												</div>
												<h1 class="font-weight-semibold mb-1">30,175</h1>
												<span class="text-success"><i class="fa fa-arrow-up mr-1"></i> +1.8%</span>
											</div>
											<div class="col col-auto">
												<div class="mx-auto chart-circle chart-circle-md chart-circle-success mt-sm-0 mb-0" data-value="0.60" data-thickness="12" data-color="#2dce89">
													<div class="mx-auto chart-circle-value text-center fs-20">60%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="mb-2 fs-18 text-muted">
													Rejected
												</div>
												<h1 class="font-weight-semibold mb-1">7,745</h1>
												<span class="text-danger"><i class="fa fa-arrow-down mr-1"></i> -2.4%</span>
											</div>
											<div class="col col-auto">
												<div class="mx-auto chart-circle chart-circle-md chart-circle-danger mt-sm-0 mb-0" data-value="0.45" data-thickness="12" data-color="#f7346b">
													<div class="mx-auto chart-circle-value text-center fs-20">25%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Today Revenue</p>
												<h2 class="mb-0 font-weight-semibold">$897k</h2>
											</div>
											<div class="col">
												<div id="spark1"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Unique Visitors</p>
												<h2 class="mb-0 font-weight-semibold">5,896</h2>
											</div>
											<div class="col">
												<div id="spark2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Expenses</p>
												<h2 class="mb-0 font-weight-semibold">$1,678</h2>
											</div>
											<div class="col">
												<div id="spark3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-line-chart mr-1"></i>
											  Total Sales
											</p>
											<h2 class="mb-0 font-weight-semibold">4,786<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 12%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar11"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-usd mr-1"></i>
											  Total Profits
											</p>
											<h2 class="mb-0 font-weight-semibold">$873<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1 "></i> 0.34%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar12"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1 ">
											  <i class="fa fa-cart-arrow-down mr-1"></i>
											  Total Orders
											</p>
											<h2 class="mb-0 font-weight-semibold">6,295<span class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up ml-1 "></i> 0.22%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar13"></span>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="text-left mb-4">
											<p class=" mb-1">
											  <i class="fa fa-signal mr-1"></i>
											  Total Sales Revenue
											</p>
											<h2 class="mb-0 font-weight-semibold">$356<span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.82%</span> last week</span></h2>
										</div>
									</div>
									<div class="chart-wrapper overflow-hidden">
										<span class="sparkline_bar14"></span>
									</div>
								</div>
							</div>
						</div>
						<!--End row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">BTC / USDT</p>
											<h3 class="mb-1 font-weight-semibold">$10513</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">XEM / USDT</p>
											<h3 class="mb-1 font-weight-semibold">$966</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart1" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">XRP / USDT</p>
											<h3 class="mb-1 font-weight-semibold">$7,349</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart2" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div>
											<p class=" mb-0">NEO / USDT</p>
											<h3 class="mb-1 font-weight-semibold">$5,563</h3>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="CryptoChart3" class="h-5 overflow-hidden"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->


						<!-- Row -->
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<div class="card text-center">
									<div class="widget-line mt-5 ">
										<p class="mb-2">Shares</p>
										<h1 class="font-weight-semibold">1452</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md chart-circle-primary" data-value="0.67" data-thickness="15" data-color="#3366ff">
										<div class="chart-circle-value fs"><i class="feather feather-mail text-primary"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">45% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>6% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 p-l-0 p-r-0">
								<div class="card text-center">
									<div class="widget-line mt-5">
										<p class="mb-2">Projects</p>
										<h1 class="font-weight-semibold">3265</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md chart-circle-danger" data-value="0.55" data-thickness="15" data-color="#f7346b">
										<div class="chart-circle-value fs"><i class="fa fa-life-ring text-danger"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">55% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>3% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12 p-l-0">
								<div class="card text-center">
									<div class="widget-line  mt-5">
										<p class="mb-2">Users</p>
										<h1 class="font-weight-semibold">9562</h1>
									</div>
									<div class="mx-auto chart-circle chart-circle-md chart-circle-success" data-value="0.67" data-thickness="15" data-color="#2dce89">
										<div class="chart-circle-value fs"><i class="fa fa-tags text-success"></i></div>
									</div>
									<ul class="widget-line-list mt-5 mb-5">
										<li class="border-right">75% <br><span class="text-success"><i class="fa fa-hand-o-up"></i> Positive</span></li>
										<li>6% <br><span class="text-danger"><i class="fa fa-hand-o-down"></i> Negative</span></li>
									</ul>
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

		<!--Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/chart.extension.js')}}"></script>
		<!-- INTERNAL Apex-Chart js -->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- Widgets js-->
		<script src="{{URL::asset('assets/js/widgets.js')}}"></script>

@endsection
