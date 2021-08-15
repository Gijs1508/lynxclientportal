@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Invoice List</h4>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mb-4">
												<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Add New Invoice</a>
											</div>
											<div class="col col-auto mb-4">
												<div class="form-group w-100">
													<div class="input-icon">
														<span class="input-icon-addon">
															<i class="fe fe-search"></i>
														</span>
														<input type="text" class="form-control" placeholder="Search Invoice">
													</div>
												</div>
											</div>
										</div>
										<div class="e-table">
											<div class="table-responsive table-lg">
												<table class="table card-table table-vcenter text-nowrap border" id="example1">
													<thead>
														<tr>
															<th></th>
															<th>Invoice</th>
															<th>Amount</th>
															<th>Generate Date</th>
															<th>Due Date</th>
															<th>Bill to</th>
															<th>Options</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #23543</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$230</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #43245</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$640</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #54323</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$241</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #52345</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$543</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #65343</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$654</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #23654</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$523</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #53245</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$324</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		<a class="btn-link" href="#">INVOICE #34234</a>
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span class="font-weight-semibold">$543</span></td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																25 Jan 2020
															</td>
															<td class="text-nowrap align-middle">
																Daneil Robert
															</td>
															<td>
																<div class="btn-group">
																	<a href="#" class="btn btn-light btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Send</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																	</div>
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

@endsection
