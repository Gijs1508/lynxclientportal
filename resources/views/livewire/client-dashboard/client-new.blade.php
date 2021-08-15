@extends('layouts.clientapp')

@section('styles')

		<!-- Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- INTERNAL Datepicker css-->
		<link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">New Client</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
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
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-body">
										<h4 class="mb-5 font-weight-semibold">Company Details:</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Company Name</label>
													<input class="form-control" type="text" placeholder="Enter Number">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Company Website</label>
													<input class="form-control" type="text" placeholder="Enter Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Address</label>
											<textarea rows="3" class="form-control" placeholder="Address1"></textarea>
										</div>
									</div>
									<div class="card-body">
										<h4 class="mb-5 font-weight-semibold">Client Details:</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Client ID</label>
													<input class="form-control" type="text" placeholder="Enter Number">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Client Name</label>
													<input class="form-control" type="text" placeholder="Enter Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Email Address</label>
													<input class="form-control" type="text" placeholder="Enter Email Address">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Password</label>
													<input class="form-control" type="password" placeholder="Enter Password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Phone</label>
													<input class="form-control" type="text" placeholder="Enter PhoneNumber">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">URL</label>
													<input class="form-control" type="text" placeholder="Enter Website eg:https://">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">City</label>
													<input class="form-control" type="text" placeholder="Enter City">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">State</label>
													<input class="form-control" type="text" placeholder="Enter State">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">ZIP Code</label>
													<input class="form-control" type="text" placeholder="Enter ZIP Code">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Country">
														<option label="Select Country"></option>
														<option value="1">Germany</option>
														<option value="3">Canada</option>
														<option value="4">Usa</option>
														<option value="5">Afghanistan</option>
														<option value="6">Albania</option>
														<option value="7">China</option>
														<option value="8">Denmark</option>
														<option value="9">Finland</option>
														<option value="10">India</option>
														<option value="11">Kiribati</option>
														<option value="12">Kuwait</option>
														<option value="13">Mexico</option>
														<option value="14">Pakistan</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Address</label>
											<textarea rows="3" class="form-control" placeholder="Address1"></textarea>
										</div>
										<div class="form-group">
											<label class="form-label">Upload Image:</label>
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
											<label class="form-label mt-1 mr-5">Status :</label>
											<label class="custom-control custom-radio success mr-4">
												<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
												<span class="custom-control-label">Active</span>
											</label>
											<label class="custom-control custom-radio success mr-4">
												<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
												<span class="custom-control-label">InActive</span>
											</label>
										</div>
									</div>
									<div class="card-body">
										<h4 class="mb-5 font-weight-semibold">Client Project Permissions:</h4>
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 client-perm-table">
												<thead>
													<tr>
														<th>Module Permissions</th>
														<th class="text-center">Read</th>
														<th class="text-center">Write</th>
														<th class="text-center">Create</th>
														<th class="text-center">Delete</th>
														<th class="text-center">Import</th>
														<th class="text-center">Export</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="font-weight-semibold">Projects</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option3">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option4">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option5">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option6">
																<span class="custom-control-label"></span>
															</label>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Tasks</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option7">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option8">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option9">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option10">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option11">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option12">
																<span class="custom-control-label"></span>
															</label>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Chat</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option13">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option14">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option15">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option16">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option17">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option18">
																<span class="custom-control-label"></span>
															</label>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Estimates</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option19">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option20">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option21">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option22">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option23">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option24">
																<span class="custom-control-label"></span>
															</label>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Invoice</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option25">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option26">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option27">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option28">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option29">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option30">
																<span class="custom-control-label"></span>
															</label>
														</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Timing Sheets</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option31">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option32">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option33">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option34">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option35">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="text-center">
															<label class="custom-control custom-checkbox success">
																<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option36">
																<span class="custom-control-label"></span>
															</label>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-right">
										<a href="#" class="btn btn-danger btn-lg">Close</a>
										<a href="#" class="btn btn-success btn-lg" onclick="not1()">Submit</a>
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

		<!-- Notifications js -->
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

		<!--INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/client/client-sidemenuchart.js')}}"></script>

@endsection
