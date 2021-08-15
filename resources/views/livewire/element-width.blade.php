@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">width</h4>
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
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Width Values
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="d-flex align-items-center justify-content-center w-8 h-9 bg-light">
												.w-8
											</div>
											<div class="d-flex align-items-center justify-content-center w-150 h-9 bg-light ml-4">
												.w-150
											</div>
											<div class="d-flex align-items-center justify-content-center w-50 h-9 bg-light ml-4">
												.w-50
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td class="w-20"><b>Classes</b></td>
														<td><code>.w-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 </td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td  class="w-20"><b>Classes</b></td>
														<td><code>.w-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>100h | 150 | 200 | 250 | 300 | ... | 500 &nbsp; (step of 50) Bigger Height</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mt-4">
												<tbody>
													<tr>
														<td  class="w-20"><b>Classes</b></td>
														<td><code>.w-[value]</code></td>
													</tr>
													<tr>
														<td class="w-20"><b>Values</b></td>
														<td>10 | 15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) % Percentage Height</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

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
