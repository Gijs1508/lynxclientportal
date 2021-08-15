@extends('layouts.empapp')

@section('styles')

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Payslips</h4>
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
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">My Payslips Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
												<thead>
													<tr>
														<th class="border-bottom-0 text-center">#ID</th>
														<th class="border-bottom-0">Month</th>
														<th class="border-bottom-0">Year</th>
														<th class="border-bottom-0">$ Net Salary</th>
														<th class="border-bottom-0">Generated Date</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">#10029</td>
														<td>January</td>
														<td>2021</td>
														<td class="font-weight-semibold">$32,000</td>
														<td>01-02-2021</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10321</td>
														<td>December</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-01-2021</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10598</td>
														<td>November</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-12-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10438</td>
														<td>October</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-11-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10837</td>
														<td>September</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-10-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10391</td>
														<td>August</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-09-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#11073</td>
														<td>July</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>02-08-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10839</td>
														<td>June</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>02-07-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10289</td>
														<td>May</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-06-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10422</td>
														<td>April</td>
														<td>2020</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-05-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10029</td>
														<td>March</td>
														<td>2020</td>
														<td class="font-weight-semibold">$24,000</td>
														<td>01-04-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10398</td>
														<td>February</td>
														<td>2020</td>
														<td class="font-weight-semibold">$24,000</td>
														<td>01-03-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10092</td>
														<td>January</td>
														<td>2020</td>
														<td class="font-weight-semibold">$24,000</td>
														<td>01-02-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#11986</td>
														<td>December</td>
														<td>2019</td>
														<td class="font-weight-semibold">$24,000</td>
														<td>01-01-2020</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-center">#10029</td>
														<td>November</td>
														<td>2019</td>
														<td class="font-weight-semibold">$24,000</td>
														<td>01-12-2019</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-original-title="View"><i class="feather feather-eye"></i></a>
															<a class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" data-original-title="Download"><i class="feather feather-download"></i></a>
															<a class="btn btn-info btn-icon btn-sm" data-toggle="tooltip" data-original-title="Print" onclick="javascript:window.print();"><i class="feather feather-printer"></i></a>
															<a class="btn btn-warning btn-icon btn-sm" data-toggle="tooltip" data-original-title="Share"><i class="feather feather-share-2"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
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

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/employee/emp-payslips.js')}}"></script>
		<script src="{{URL::asset('assets/js/employee/emp-sidemenuchart.js')}}"></script>

@endsection
