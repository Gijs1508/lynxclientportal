@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Cart</h4>
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
							<div class="col-lg-12 col-md-12 col-sm-12 bootstrap snippets">
								<!-- Cart -->
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Shopping Cart</h3>
									</div>
									<div class="card-body ">
										<div class="table-responsive ">
											<table class="table table-bordered text-nowrap border-top">
												<thead class="">
													<tr>
														<th>Product Name</th>
														<th>Quantity</th>
														<th>Unit Price</th>
														<th>Sub Total</th>
														<th class="w-5"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/1.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-semibold ml-4">Flower Pot</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 122.21</td>
														<td>$ 122.21</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="Remove">
																<span class="feather feather-trash-2"></span>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/6.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-semibold ml-4">Kurtis</h6>
															</div>
														</td>
														<td><a href="#">2</a></td>
														<td class="price">$ 20.63</td>
														<td>$ 41.26</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="Remove">
																<span class="feather feather-trash-2"></span>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/2.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-semibold ml-4">Sofa Chiar</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 40.63</td>
														<td>$ 40.63</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="Remove">
																<span class="feather feather-trash-2"></span>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/4.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-semibold ml-4">Table</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 60.63</td>
														<td>$ 60.63</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="Remove">
																<span class="feather feather-trash-2"></span>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex w-200">
																<div>
																	<img src="{{URL::asset('assets/images/products/5.jpg')}}" alt="img" title="" class="w-7 h-7">
																</div>
																<h6 class="mb-0 mt-4 font-weight-semibold ml-4">Cup</h6>
															</div>
														</td>
														<td><a href="#">1</a></td>
														<td class="price">$ 63,830.43</td>
														<td>$45,530.43</td>
														<td class="text-center">
															<a href="#" class="remove_cart" data-toggle="tooltip" data-placement="top" title="Remove">
																<span class="feather feather-trash-2"></span>
															</a>
														</td>
													</tr>
													<tr>
														<td colspan="3" >Total</td>
														<td class="total h4 mb-0 font-weight-semibold" colspan="2">$45,795.16</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-left mt-2">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Apply Coupon">
												<span class="input-group-append">
													<button class="btn btn-primary" >Apply</button>
												</span>
											</div>
										</div>
										<div class=" float-right">
											<a href="{{url('products')}}" class="btn btn-info mt-2"><i class="fe fe-arrow-left"></i> Continue Shopping</a>
											<a href="{{url('cart')}}" class="btn btn-primary mt-2">Update Cart</a>
											<a href="#" class="btn btn-secondary mt-2">Checkout <i class="fe fe-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<!-- End Cart -->
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

@endsection
