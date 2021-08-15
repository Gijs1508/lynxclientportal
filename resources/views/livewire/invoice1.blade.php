@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Invoice</h4>
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
								<div class="card overflow-hidden">
									<div class="card-body">
										<h2 class="text-muted font-weight-bold">INVOICE</h2>
										<div class="">
											<h5 class="mb-1">Hi <strong>Jessica Allen</strong>,</h5>
											This is the receipt for a payment of <strong>$450.00</strong> (USD) for your works
										</div>

										<div class="card-body pl-0 pr-0">
											<div class="row">
												<div class="col-sm-6">
													<span>Payment No.</span><br>
													<strong>INV23456-234</strong>
												</div>
												<div class="col-sm-6 text-right">
													<span>Payment Date</span><br>
													<strong>Apr 10, 2021 - 12:20 pm</strong>
												</div>
											</div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row pt-4">
											<div class="col-lg-6 ">
												<p class="h5 font-weight-bold">Bill From</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ltd@example.com
												</address>
											</div>
											<div class="col-lg-6 text-right">
												<p class="h5 font-weight-bold">Bill To</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ctr@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive push">
											<table class="table table-bordered table-hover text-nowrap">
												<tr class=" ">
													<th class="text-center " style="width: 1%"></th>
													<th>Product</th>
													<th class="text-center" style="width: 1%">Qnty</th>
													<th class="text-right" style="width: 1%">Unit Price</th>
													<th class="text-right" style="width: 1%">Amount</th>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td>
														<p class="font-weight-semibold mb-1">Logo Creation</p>
														<div class="text-muted">Logo and business cards design</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$60.00</td>
													<td class="text-right">$120.00</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>
														<p class="font-weight-semibold mb-1">Online Store Design &amp; Development</p>
														<div class="text-muted">Design/Development for all popular modern browsers</div>
													</td>
													<td class="text-center">3</td>
													<td class="text-right">$80.00</td>
													<td class="text-right">$240.00</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>
														<p class="font-weight-semibold mb-1">App Design</p>
														<div class="text-muted">Promotional mobile application</div>
													</td>
													<td class="text-center">1</td>
													<td class="text-right">$40.00</td>
													<td class="text-right">$40.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-right">Subtotal</td>
													<td class="text-right">$400.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-right">Vat Rate</td>
													<td class="text-right">20%</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-right">Vat Due</td>
													<td class="text-right">$50.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-bold text-uppercase text-right h4 mb-0">Total Due</td>
													<td class="font-weight-bold text-right h4 mb-0">$450.00</td>
												</tr>
												<tr>
													<td colspan="5" class="text-right">
														<button  class="btn btn-primary" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
														<button  class="btn btn-secondary" onClick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
														<button  class="btn btn-info" onClick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
													</td>
												</tr>
											</table>
										</div>
										<p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
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