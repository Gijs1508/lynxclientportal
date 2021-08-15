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
								<h4 class="page-title">My Leaves</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#applyleaves">Apply Leaves</a>
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
							<div class="col-xl-9 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
												<thead>
													<tr>
														<th class="border-bottom-0 text-center">#ID</th>
														<th class="border-bottom-0">Leave Type</th>
														<th class="border-bottom-0">From</th>
														<th class="border-bottom-0">TO</th>
														<th class="border-bottom-0">Days</th>
														<th class="border-bottom-0">Reason</th>
														<th class="border-bottom-0">Applied On</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">1</td>
														<td>Casual Leave</td>
														<td>16-01-2021</td>
														<td>16-01-2021</td>
														<td class="font-weight-semibold">1 Day</td>
														<td>Personal</td>
														<td>05-01-2021</td>
														<td>
															<span class="badge badge-primary">New</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">2</td>
														<td>Sick Leave</td>
														<td>14-01-2021</td>
														<td>15-01-2021</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to Hospital</td>
														<td>13-01-2021</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">3</td>
														<td>Casual Leave</td>
														<td>21-01-2021</td>
														<td>27-01-2021</td>
														<td class="font-weight-semibold">7 Days</td>
														<td>Going to Family Trip</td>
														<td>11-01-2021</td>
														<td>
															<span class="badge badge-warning">Pending</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">4</td>
														<td>Casual Leave</td>
														<td>05-01-2021</td>
														<td>05-01-2021</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>12-12-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">5</td>
														<td>Medical Leave</td>
														<td>22-01-2021</td>
														<td>22-01-2021</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Take Rest</td>
														<td>21-01-2021</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">6</td>
														<td>Casual Leave</td>
														<td>18-01-2021</td>
														<td>19-01-2021</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to my Hometown</td>
														<td>10-01-2021</td>
														<td>
															<span class="badge badge-warning">Pending</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">7</td>
														<td>Casual Leave</td>
														<td>11-01-2021</td>
														<td>11-01-2021</td>
														<td class="font-weight-semibold">1st Half Day</td>
														<td>Going to Hosiptal</td>
														<td>11-01-2021</td>
														<td>
															<span class="badge badge-danger">Rejected</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">8</td>
														<td>Medical Leave</td>
														<td>09-01-2021</td>
														<td>09-01-2021</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Going to Hosiptal</td>
														<td>08-01-2021</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">9</td>
														<td>Casual Leave</td>
														<td>08-01-2021</td>
														<td>07-01-2021</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Personal</td>
														<td>25-12-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">10</td>
														<td>Casual Leave</td>
														<td>21-12-2020</td>
														<td>21-12-2020</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>19-12-2020</td>
														<td>
															<span class="badge badge-danger">Rejected</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">11</td>
														<td>Casual Leave</td>
														<td>18-11-2020</td>
														<td>19-11-2020</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to HomeTown</td>
														<td>11-12-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">12</td>
														<td>Medical Leave</td>
														<td>11-10-2020</td>
														<td>11-10-2020</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>11-10-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">13</td>
														<td>Casual Leave</td>
														<td>13-08-2020</td>
														<td>14-08-2020</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to Family Trip</td>
														<td>09-08-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">14</td>
														<td>Casual Leave</td>
														<td>21-05-2020</td>
														<td>21-05-2020</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>21-05-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">15</td>
														<td>Casual Leave</td>
														<td>21-01-2020</td>
														<td>22-01-2020</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to Hosiptal</td>
														<td>16-01-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-left d-flex">
															<a href="#" class="action-btns1" data-toggle="modal" data-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-toggle="tooltip" data-placement="top" title="view"></i>
															</a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a href="#" class="action-btns1"  data-toggle="modal" data-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-toggle="tooltip" data-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Overview</h4>
									</div>
									<div class="card-body">
										<div id="leavesoverview" class="mx-auto pt-2"></div>
										<div class="row pt-7 pb-5  mx-auto text-center">
											<div class="col-md-7 mx-auto d-block">
												<div class="row">
													<div class="col-md-12">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-primary mr-2 my-auto"></span>Casual Leaves
														</div>
													</div>
													<div class="col-md-12 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label badge-danger mr-2 my-auto"></span>Sick Leaves
														</div>
													</div>
													<div class="col-md-12 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-secondary mr-2 my-auto"></span>Gifted Leaves
														</div>
													</div>
													<div class="col-md-12 mt-3">
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

			<!--My Leave Appliction Modal -->
			<div class="modal fade"  id="leaveapplictionmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">My Leave Application</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table mb-0">
									<tbody>
										<tr>
											<td class="font-weight-semibold">Leave Type </td>
											<td>:</td>
											<td>Casual Leave</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Date</td>
											<td>:</td>
											<td>16-01-2021</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Days</td>
											<td>:</td>
											<td>1 day</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Reason</td>
											<td>:</td>
											<td>Personal</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Applied On</td>
											<td>:</td>
											<td>05-01-2021</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Report Modal  -->

			<!--Report Modal -->
			<div class="modal fade"  id="reportmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Report</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Email Address</label>
								<input type="text" class="form-control" placeholder="hr@gmail.com" value="" readonly>
							</div>
							<div class="form-group">
								<label class="form-label">Subject</label>
								<textarea class="form-control" rows="3">Some text here...</textarea>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Submit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Report Modal  -->

			<!--Apply Leaves Modal -->
			<div class="modal fade"  id="applyleaves">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Apply Leaves</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
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
										<option label="select"></option>
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
									<textarea class="form-control" rows="5">Some text here...</textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="">
								<label class="mb-0 font-weight-semibold">Selected Days:</label>
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
			<!-- End Apply Leaves Modal  -->

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

		<!-- INTERNAL Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/employee/emp-myleaves.js')}}"></script>
		<script src="{{URL::asset('assets/js/employee/emp-sidemenuchart.js')}}"></script>

@endsection