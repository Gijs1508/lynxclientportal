@extends('layouts.app')

@section('styles')

		<!-- Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Sweet-alert css -->
		<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Role Access</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-3">
												<div class="form-group">
													<label class="form-label">Select Property:</label>
													<input type="text" class="form-control" placeholder="Property" value="">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="form-group">
													<label class="form-label">Select Value:</label>
													<select  class="form-control custom-select select2" data-placeholder="Select Value">
														<option label="Select Value"></option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="3">Option 3</option>
														<option value="4">Option 4</option>
														<option value="5">Option 5</option>
														<option value="6">Option 6</option>
														<option value="7">Option 7</option>
														<option value="8">Option 8</option>
														<option value="9">Option 9</option>
														<option value="10">Option 10</option>
														<option value="11">Option 11</option>
														<option value="12">Option 12</option>
														<option value="13">Option 13</option>
														<option value="14">Option 14</option>
													</select>
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group mt-xl-5">
													<a href="#" class="btn btn-primary btn-block">Search</a>
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group mt-xl-5">
													<a href="#" class="btn btn-danger btn-block">Reset</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive role-table">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="role-list">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">NO</th>
														<th class="border-bottom-0">Role Name</th>
														<th class="border-bottom-0 text-center">Super Admin</th>
														<th class="border-bottom-0 text-center">Admin</th>
														<th class="border-bottom-0 text-center">HR</th>
														<th class="border-bottom-0 text-center">Client</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Admin Dashboard</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>General Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon  role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Modify</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>4</td>
														<td>New Custom Field</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Edit Custom Field</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Email Templates</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Security Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Modify Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>9</td>
														<td>Theme Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>10</td>
														<td>Modify Theme</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>11</td>
														<td>Chat Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>12</td>
														<td>Admin Notification Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>13</td>
														<td>API Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>14</td>
														<td>Payment Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>15</td>
														<td>Social Settings</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>16</td>
														<td>New Login</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>17</td>
														<td>Edit Login</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>18</td>
														<td>Delete Login</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>19</td>
														<td>New Role</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>20</td>
														<td>Edit Role</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>21</td>
														<td>Delete Role</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>22</td>
														<td>Ticket List</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>23</td>
														<td>Ticket Delete</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>24</td>
														<td>WebChat Panel</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a href="#" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
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

		<!-- INTERNAL Peitychart js-->
		<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

		<!-- INTERNAL  Datepicker js -->
		<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

		<!-- INTERNAL Sweet-alert js  -->
		<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

		<!-- INTERNAL Colorpicker js -->
		<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum-colorpicker.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/admin/admin-role.js')}}"></script>

@endsection
