@extends('layouts.taskapp')

@section('styles')

		<!-- Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- INTERNAL Datepicker css-->
		<link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Running Task</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a href="#" class="btn btn-primary " data-toggle="modal" data-target="#newtaskmodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Task</a>
										<a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
										<a href="#" class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
										<a href="#" class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="{{url('task-list')}}">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">Total Tasks</span>
														<h3 class="mb-0 mt-1 text-danger fs-25">1254</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-danger-transparent my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="{{url('task-running')}}">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">Running Tasks</span>
														<h3 class="mb-0 mt-1 text-primary  fs-25">42</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-primary-transparent my-auto  float-right"> <i class="feather feather-clipboard"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="{{url('task-hold')}}">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">On hold Tasks</span>
														<h3 class="mb-0 mt-1 text-secondary  fs-25">11</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-warning-transparent my-auto  float-right"> <i class="feather feather-info"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="{{url('task-complete')}}">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">Completed Tasks</span>
														<h3 class="mb-0 mt-1 text-success fs-25">38</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-success-transparent my-auto  float-right"> <i class="feather feather-check"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Running Task Summary</h4>
										<div class="ml-auto">
											<div class="input-group">
												<input class="form-control" placeholder="Search....." type="text">
												<span class="input-group-btn">
													<button class="btn btn-light br-tl-0 br-bl-0" >
														<i class="fa fa-search"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-xl-5">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="form-label">From:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="feather feather-calendar"></i>
																	</div>
																</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="form-label">To:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="feather feather-calendar"></i>
																	</div>
																</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-xl-3">
												<div class="form-group">
													<label class="form-label">Assign To:</label>
													<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
														<option label="Select Employee"></option>
														<option value="1">Faith Harris</option>
														<option value="2">Austin Bell</option>
														<option value="3">Maria Bower</option>
														<option value="4">Peter Hill</option>
														<option value="5">Victoria Lyman</option>
														<option value="6">Adam Quinn</option>
														<option value="7">Melanie Coleman</option>
														<option value="8">Max Wilson</option>
														<option value="9">Amelia Russell</option>
														<option value="10">Justin Metcalfe</option>
														<option value="11">Ryan Young</option>
														<option value="12">Jennifer Hardacre</option>
														<option value="13">Justin Parr</option>
														<option value="14">Julia Hodges</option>
														<option value="15">Michael Sutherland</option>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-xl-3">
												<div class="form-group">
													<label class="form-label">Select Priority:</label>
													<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
														<option label="Select Priority"></option>
														<option value="1">High</option>
														<option value="2">Medium</option>
														<option value="3">Low</option>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-xl-1">
												<div class="form-group mt-5">
													<a href="#" class="btn btn-primary btn-block">Search</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="task-list">
												<thead>
													<tr>
														<th class="border-bottom-0 text-center">No</th>
														<th class="border-bottom-0">Task</th>
														<th class="border-bottom-0">Department</th>
														<th class="border-bottom-0">Assign To</th>
														<th class="border-bottom-0">Priority</th>
														<th class="border-bottom-0">Start Date</th>
														<th class="border-bottom-0">Deadline</th>
														<th class="border-bottom-0">Progress</th>
														<th class="border-bottom-0">Work Status</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">1</td>
														<td>
															<a href="#" class="d-flex">
																<span class="bg-primary dot-label1 mr-2 mt-1"></span>
																<span>Marketing  materials Issues</span>
															</a>
														</td>
														<td>Marketing</td>
														<td>
															<a href="{{url('task-profile')}}" class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Peter Hill</h6>
																</div>
															</a>
														</td>
														<td><span class="badge badge-danger-light">High</span></td>
														<td>11-03-2021</td>
														<td>19-05-2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-80"></div>
															</div>

														</td>
														<td>
															<span class="badge badge-primary">On Progress</span>
														</td>
														<td>
															<div class="d-flex">
																<a href="{{url('task-view')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
																	<i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit task"></i>
																</a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td class="text-center">2</td>
														<td>
															<a href="#" class="d-flex">
																<span class="bg-primary dot-label1 mr-2 mt-1"></span>
																<span>Logo Design</span>
															</a>
														</td>
														<td>Designing</td>
														<td>
															<a href="{{url('task-profile')}}" class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Victoria Lyman</h6>
																</div>
															</a>
														</td>
														<td><span class="badge badge-danger-light">High</span></td>
														<td>05-02-2021</td>
														<td>21-04-2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-70"></div>
															</div>

														</td>
														<td>
															<span class="badge badge-primary">On Progress</span>
														</td>
														<td>
															<div class="d-flex">
																<a href="{{url('task-view')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
																	<i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit task"></i>
																</a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td class="text-center">3</td>
														<td>
															<a href="#" class="d-flex">
																<span class="bg-primary dot-label1 mr-2 mt-1"></span>
																<span>Theme update</span>
															</a>
														</td>
														<td>Designing</td>
														<td>
															<a href="{{url('task-profile')}}" class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																</div>
															</a>
														</td>
														<td><span class="badge badge-success-light">Low</span></td>
														<td>23-01-2021</td>
														<td>25-02-2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-40"></div>
															</div>
														</td>
														<td>
															<span class="badge badge-primary">On Progress</span>
														</td>
														<td>
															<div class="d-flex">
																<a href="{{url('task-view')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
																	<i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit task"></i>
																</a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td class="text-center">4</td>
														<td>
															<a href="#" class="d-flex">
																<span class="bg-primary dot-label1 mr-2 mt-1"></span>
																<span>Design Updated</span>
															</a>
														</td>
														<td>Designing</td>
														<td>
															<a href="{{url('task-profile')}}" class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Faith Harris</h6>
																</div>
															</a>
														</td>
														<td><span class="badge badge-warning-light">Medium</span></td>
														<td>12-02-2021</td>
														<td>16-06-2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-50"></div>
															</div>

														</td>
														<td><span class="badge badge-primary">On Progress</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('task-view')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
																	<i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit task"></i>
																</a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td class="text-center">5</td>
														<td>
															<a href="#" class="d-flex">
																<span class="bg-primary dot-label1 mr-2 mt-1"></span>
																<span>HTML Code Updated</span>
															</a>
														</td>
														<td>Designing</td>
														<td>
															<a href="{{url('task-profile')}}" class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Austin Bell</h6>
																</div>
															</a>
														</td>
														<td><span class="badge badge-success-light">Low</span></td>
														<td>01-01-2021</td>
														<td>22-04-2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-50"></div>
															</div>

														</td>
														<td>
															<span class="badge badge-primary">On Progress</span>
														</td>
														<td>
															<div class="d-flex">
																<a href="{{url('task-view')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
																	<i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit task"></i>
																</a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td class="text-center">6</td>
														<td>
															<a href="#" class="d-flex">
																<span class="bg-primary dot-label1 mr-2 mt-1"></span>
																<span>Angular Issues fixed</span>
															</a>
														</td>
														<td>Angular</td>
														<td>
															<a href="task-{{url('profile')}}" class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Maria Bower</h6>
																</div>
															</a>
														</td>
														<td><span class="badge badge-warning-light">Medium</span></td>
														<td>11-04-2021</td>
														<td>16-06-2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-80"></div>
															</div>

														</td>
														<td>
															<span class="badge badge-primary">On Progress</span>
														</td>
														<td>
															<div class="d-flex">
																<a href="{{url('task-view')}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="modal" data-target="#edittsakmodal">
																	<i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit task"></i>
																</a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
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

			<!-- Edit Task Modal -->
			<div class="modal fade"  id="edittsakmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Task</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task ID</label>
										<input class="form-control" placeholder="Text" value="001">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task Title</label>
										<input class="form-control" placeholder="Text" value="Design Updated">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Department:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Department">
											<option label="Select Department"></option>
											<option value="1" selected>Designing Department</option>
											<option value="2">Development Department</option>
											<option value="3">Marketing Department</option>
											<option value="4">Human Resource Department</option>
											<option value="5">Managers Department</option>
											<option value="6">Application Department</option>
											<option value="7">Support Department</option>
											<option value="8">IT Department</option>
											<option value="9">Technical Department</option>
											<option value="10">Accounts Department</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Assign To:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
											<option label="Select Employee"></option>
											<option value="1" selected>Faith Harris</option>
											<option value="2">Austin Bell</option>
											<option value="3">Maria Bower</option>
											<option value="4">Peter Hill</option>
											<option value="5">Victoria Lyman</option>
											<option value="6">Adam Quinn</option>
											<option value="7">Melanie Coleman</option>
											<option value="8">Max Wilson</option>
											<option value="9">Amelia Russell</option>
											<option value="10">Justin Metcalfe</option>
											<option value="11">Ryan Young</option>
											<option value="12">Jennifer Hardacre</option>
											<option value="13">Justin Parr</option>
											<option value="14">Julia Hodges</option>
											<option value="15">Michael Sutherland</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Task Priority:</label>
								<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
									<option label="Select Priority"></option>
									<option value="1" selected>High</option>
									<option value="2">Medium</option>
									<option value="3">Low</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Form:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="12-02-2021">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">To:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="16-06-2021">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote">f you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</div>
							</div>
							<div class="form-group">
								<label class="form-label">Attachment:</label>
								<div class="input-group file-browser">
									<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
									<label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
									</label>
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 mr-5">Work Status :</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2" checked>
									<span class="custom-control-label">On hold</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">On Progress</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
							<button  class="btn btn-success" onclick="not2()">Update</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Edit Task Modal -->

			<!-- New Task Modal -->
			<div class="modal fade"  id="newtaskmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Task</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task ID</label>
										<input class="form-control" placeholder="Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task Title</label>
										<input class="form-control" placeholder="Text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Department:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Department">
											<option label="Select Department"></option>
											<option value="1">Designing Department</option>
											<option value="2">Development Department</option>
											<option value="3">Marketing Department</option>
											<option value="4">Human Resource Department</option>
											<option value="5">Managers Department</option>
											<option value="6">Application Department</option>
											<option value="7">Support Department</option>
											<option value="8">IT Department</option>
											<option value="9">Technical Department</option>
											<option value="10">Accounts Department</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Assign To:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
											<option label="Select Employee"></option>
											<option value="1">Faith Harris</option>
											<option value="2">Austin Bell</option>
											<option value="3">Maria Bower</option>
											<option value="4">Peter Hill</option>
											<option value="5">Victoria Lyman</option>
											<option value="6">Adam Quinn</option>
											<option value="7">Melanie Coleman</option>
											<option value="8">Max Wilson</option>
											<option value="9">Amelia Russell</option>
											<option value="10">Justin Metcalfe</option>
											<option value="11">Ryan Young</option>
											<option value="12">Jennifer Hardacre</option>
											<option value="13">Justin Parr</option>
											<option value="14">Julia Hodges</option>
											<option value="15">Michael Sutherland</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Task Priority:</label>
								<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
									<option label="Select Priority"></option>
									<option value="1">High</option>
									<option value="2">Medium</option>
									<option value="3">Low</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Form:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">To:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Attachment:</label>
								<div class="input-group file-browser">
									<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
									<label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
									</label>
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 mr-5">Work Status :</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">On hold</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">On Progress</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
							<button  class="btn btn-success" onclick="not1()">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- New Task Modal -->

@endsection('modals')

@section('scripts')

		<!-- Notifications js -->
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

		<!--INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/task/task-list.js')}}"></script>

@endsection
