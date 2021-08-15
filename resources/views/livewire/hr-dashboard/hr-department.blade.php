@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Department</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a href="#" class="btn btn-primary mr-3" data-toggle="modal" data-target="#adddepartmentmodal">Add Department</a>
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
										<h4 class="card-title">Department Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">#ID</th>
														<th class="border-bottom-0">Department Name</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>Designing Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#02</td>
														<td>Development Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#03</td>
														<td>Marketing Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#04</td>
														<td>Human Resource Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#05</td>
														<td>Managers Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#06</td>
														<td>Application Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#07</td>
														<td>Support Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#08</td>
														<td>IT Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#09</td>
														<td>Technical Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
													<tr>
														<td>#10</td>
														<td>Accounts Department</td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm" data-toggle="modal" data-target="#editdepartmentmodal">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
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

			<!--Add Department Modal -->
			<div class="modal fade"  id="adddepartmentmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Department</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Add Department</label>
								<input type="text" class="form-control" placeholder="Department" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Submit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Add Department Modal  -->

			<!--Edit Department Modal -->
			<div class="modal fade"  id="editdepartmentmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Department</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Edit Department</label>
								<input type="text" class="form-control" placeholder="Department" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Save</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Edit Department Modal  -->

@endsection('modals')

@section('scripts')

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/hr/hr-department.js')}}"></script>

@endsection
