@extends('layouts.empapp')

@section('styles')

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Daterangepicker css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Expenses</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#expensemodal">Add Expenses</a>
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
										<h4 class="card-title">My Expenses Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
												<thead>
													<tr>
														<th class="border-bottom-0">#ID</th>
														<th class="border-bottom-0">Title</th>
														<th class="border-bottom-0">Purchase From</th>
														<th class="border-bottom-0">Date</th>
														<th class="border-bottom-0">Amount ($)</th>
														<th class="border-bottom-0">Paid By</th>
														<th class="border-bottom-0">Aprroval Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>Bike Services</td>
														<td>ABC Service Center</td>
														<td>01-10-2021</td>
														<td class="font-weight-semibold">$678</td>
														<td>Card</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#02</td>
														<td>Bike Services</td>
														<td>ABC Service Center</td>
														<td>01-10-2021</td>
														<td class="font-weight-semibold">$678</td>
														<td>Card</td>
														<td>
															<div class="d-flex">
																<span class="badge badge-danger">Rejected </span>
																<div class="mt-1 ml-1">
																	<span class="feather feather-info" data-toggle="tooltip" data-placement="top" title="Duplicated Invoice"></span>
																</div>
															</div>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#03</td>
														<td>Pens</td>
														<td>Books stationery</td>
														<td>11-12-2020</td>
														<td class="font-weight-semibold">$12</td>
														<td>Cash</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#04</td>
														<td>Mouse Pad</td>
														<td>Aamzon</td>
														<td>21-11-2020</td>
														<td class="font-weight-semibold">$45</td>
														<td>Online Payment</td>
														<td><span class="badge badge-warning">Pending</span></td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#05</td>
														<td>Data Connection</td>
														<td>PhonePe</td>
														<td>16-10-2020</td>
														<td class="font-weight-semibold">$599</td>
														<td>Online Payment</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#06</td>
														<td>Mobile Recharge</td>
														<td>PhonePe</td>
														<td>15-10-2020</td>
														<td class="font-weight-semibold">$100</td>
														<td>Online Payment</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#07</td>
														<td>Bike Fuel</td>
														<td>Petrol Bunk</td>
														<td>12-09-2020</td>
														<td class="font-weight-semibold">$220</td>
														<td>Card</td>
														<td><span class="badge badge-warning">Pending</span></td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#08</td>
														<td>Bike Fuel</td>
														<td>Petrol Bunk</td>
														<td>12-09-2020</td>
														<td class="font-weight-semibold">$220</td>
														<td>Card</td>
														<td>
															<div class="d-flex">
																<span class="badge badge-danger">Rejected </span>
																<div class="mt-1 ml-1">
																	<span class="feather feather-info" data-toggle="tooltip" data-placement="top" title="Duplicated Invoice"></span>
																</div>
															</div>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View">
																<i class="feather feather-eye  text-primary"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
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

			<!--Add expense Modal -->
			<div class="modal fade"  id="expensemodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Expense</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="leave-types">
								<div class="form-group">
									<label class="form-label">Title:</label>
									<input type="text" class="form-control" placeholder="text" value="">
								</div>
								<div class="form-group">
									<label class="form-label">Purchase Place:</label>
									<input type="text" class="form-control" placeholder="text" value="">
								</div>
								<div class="form-group">
									<label class="form-label">Price ($):</label>
									<input type="text" class="form-control" placeholder="$30" value="">
								</div>
								<div class="form-group">
									<label class="form-label">Date:</label>
									<div class="input-group">
										<input type="text" name="singledaterange"  class="form-control" placeholder="select dates"/>
										<div class="input-group-append">
											<div class="input-group-text">
												<i class="bx bx-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-label">Upload Invoice</div>
									<div class="input-group file-browser">
										<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
										<label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
									</label>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Note:</label>
									<textarea class="form-control" rows="3">Some text here...</textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="ml-auto">
								<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
								<a href="#" class="btn btn-primary">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Add expense Modal  -->

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

		<!-- INTERNAL Daterangepicker js-->
		<script src="{{URL::asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/employee/emp-expenses.js')}}"></script>
		<script src="{{URL::asset('assets/js/employee/emp-sidemenuchart.js')}}"></script>

@endsection
