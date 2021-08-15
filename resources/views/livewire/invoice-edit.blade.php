@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Edit Invoice</h4>
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

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Edit Invoice</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Invoice Title</label>
														<input class="form-control" placeholder="Invoice title" value="Invoice">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Subject</label>
														<textarea class="form-control" rows="4" placeholder="Subject of Invoice">Hi Jessica Allen,This is the receipt for a payment of $450.00 (USD) for your works</textarea>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Number</label>
														<input class="form-control" placeholder="Payment Number" value="23543">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Date</label>
														<input class="form-control" placeholder="Payment Date">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Bill To</label>
														<textarea class="form-control" rows="4" placeholder="Bill To">Street Address, State, City, Region, Postal Code, ctr@example.com
														</textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table nowrap text-nowrap border mt-5">
												<thead>
													<tr>
														<th>PRODUCT</th>
														<th class="w-40">DESCRIPTION</th>
														<th>QNTY</th>
														<th>UNIT PRICE</th>
														<th>AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input class="form-control" placeholder="" type="text" value="Logo Creation"></td>
														<td><textarea rows="1" class="form-control">Logo and business cards design</textarea></td>
														<td><input class="form-control" placeholder="" type="text" value="2"></td>
														<td><input class="form-control" placeholder="" type="text" value="$60.00"></td>
														<td><input class="form-control" placeholder="" type="text" value="$120.00"></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td><a class="btn btn-light" href="#"><i class="fe fe-plus"></i> Add Product</a></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<label class="form-label">Vat Rate</label>
												<input class="form-control" placeholder="Vat Rate" type="text" value="20%">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col">
												<a class="btn btn-success" href="#">Save</a>
												<a class="btn btn-light" href="#">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->

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
