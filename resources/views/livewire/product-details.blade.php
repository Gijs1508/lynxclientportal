@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Product Details</h4>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-body p-0">
										<div class="row no-gutter">
											<div class="col-xl-6 border-right">
												<div class="product-slider">
													<div class="product-carousel pt-5 pb-5">
														<div id="carousel" class="carousel slide" data-ride="false">
															<div class="carousel-inner">
																<div class="carousel-item active"><img src="{{URL::asset('assets/images/products/item1.png')}}" alt="img" class="img-fluid"></div>
																<div class="carousel-item"><img src="{{URL::asset('assets/images/products/item2.png')}}" alt="img" class="img-fluid"></div>
																<div class="carousel-item"><img src="{{URL::asset('assets/images/products/item3.png')}}" alt="img" class="img-fluid"></div>
																<div class="carousel-item"><img src="{{URL::asset('assets/images/products/item4.png')}}" alt="img" class="img-fluid"></div>
																<div class="carousel-item"><img src="{{URL::asset('assets/images/products/item5.png')}}" alt="img" class="img-fluid"></div>
															</div>
														</div>
													</div>
													<div class="carousel-slider">
														<div id="thumbcarousel" class="carousel slide" data-interval="false">
															<div class="carousel-inner">
																<div class="carousel-item active">
																	<div data-target="#carousel" data-slide-to="0" class="thumb my-2 active"><img src="{{URL::asset('assets/images/products/item1.png')}}" alt="img"></div>
																	<div data-target="#carousel" data-slide-to="1" class="thumb my-2"><img src="{{URL::asset('assets/images/products/item2.png')}}" alt="img"></div>
																	<div data-target="#carousel" data-slide-to="2" class="thumb my-2"><img src="{{URL::asset('assets/images/products/item3.png')}}" alt="img"></div>
																	<div data-target="#carousel" data-slide-to="3" class="thumb my-2"><img src="{{URL::asset('assets/images/products/item4.png')}}" alt="img"></div>
																	<div data-target="#carousel" data-slide-to="4" class="thumb my-2"><img src="{{URL::asset('assets/images/products/item5.png')}}" alt="img"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="card-body">
													<h4 class="product-title">Mens T-shirt</h4>
													<div class="rating mb-3">
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fa fa-star text-warning"></span>
														<span class="fs-13 text-muted ml-1">41 reviews</span>
													</div>
													<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
													<h6 class="price">Current Price: <span class="h3 ml-2">$450</span></h6>
													<p class="text-muted"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
													<div class="">
														<label class="form-label">Description:</label>
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized .</p>
														<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
													</div>
													<div class="sizes d-md-flex">
														<label class="form-label mb-0 mt-2 mr-3">Sizes:</label>
														<div class="custom-controls-stacked ml-4" data-toggle="tooltip" title="Small">
															<label class="custom-control custom-radio">
																<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked>
																<span class="custom-control-label">Samll</span>
															</label>
														</div>
														<div class="custom-controls-stacked ml-4" data-toggle="tooltip" title="Medium">
															<label class="custom-control custom-radio">
																<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
																<span class="custom-control-label">Medium</span>
															</label>
														</div>
														<div class="custom-controls-stacked ml-4" data-toggle="tooltip" title="Large">
															<label class="custom-control custom-radio">
																<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
																<span class="custom-control-label">extra-large</span>
															</label>
														</div>
														<div class="custom-controls-stacked ml-4" data-toggle="tooltip" title="Extra-Large">
															<label class="custom-control custom-radio">
																<input type="radio" class="custom-control-input" name="example-radios1" value="option4">
																<span class="custom-control-label">Extra-Large</span>
															</label>
														</div>
													</div>
													<div class="colors d-flex mr-3 mt-2">
														<label class="form-label mb-0 mt-2 mr-3">Colors:</label>
														<div class="row gutters-xs ml-4">
															<div class="mr-2">
																<label class="colorinput">
																	<input name="color" type="radio" value="blue" class="colorinput-input" checked="">
																	<span class="colorinput-color bg-bluecolor"></span>
																</label>
															</div>
															<div class="mr-2">
																<label class="colorinput">
																	<input name="color" type="radio" value="lime" class="colorinput-input">
																	<span class="colorinput-color bg-limecolor"></span>
																</label>
															</div>
															<div class="mr-2">
																<label class="colorinput">
																	<input name="color" type="radio" value="red" class="colorinput-input">
																	<span class="colorinput-color bg-redcolor"></span>
																</label>
															</div>
															<div class="mr-2">
																<label class="colorinput">
																	<input name="color" type="radio" value="pink" class="colorinput-input">
																	<span class="colorinput-color bg-pinkcolor"></span>
																</label>
															</div>
															<div class="mr-2">
																<label class="colorinput">
																	<input name="color" type="radio" value="orange" class="colorinput-input">
																	<span class="colorinput-color bg-ornagecolor"></span>
																</label>
															</div>
														</div>
													</div>
													<div class="btn-list mt-5">
														<button class="add-to-cart btn btn-danger" >Buy Now</button>
														<button class="add-to-cart btn btn-success" >ADD TO CART</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header  border-0">
										<div class="card-title">Specifications</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table mb-0 border-top table-bordered text-nowrap">
												<tbody>
													<tr>
														<th scope="row">Type</th>
														<td>Watches</td>
													</tr>
													<tr>
														<th scope="row">Sleeve</th>
														<td>Half Sleeve</td>
													</tr>
													<tr>
														<th scope="row">Fit</th>
														<td>Regular</td>
													</tr>
													<tr>
														<th scope="row">Fabric</th>
														<td>Poly-Cotton</td>
													</tr>
													<tr>
														<th scope="row">Style Code</th>
														<td>RGJ-29761</td>
													</tr>
													<tr>
														<th scope="row">Ideal For</th>
														<td>Men</td>
													</tr>
													<tr>
														<th scope="row">Brand Color</th>
														<td>Light Blue</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header  border-0">
										<div class="card-title">Reviews</div>
									</div>
									<div class="card-body">
										<div class="card shadow-none border">
											<div class="d-sm-flex p-5">
												<div class="d-flex mr-3">
													<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/16.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-1 mb-1 font-weight-semibold">Have you using update version</h5>
													<small class="text-muted"><i class="fa fa-calendar"></i> Jan 21 2021 <i class=" ml-3 fa fa-clock-o"></i> 13:00</small>
													<p class="fs-13 mb-2 mt-1">
													   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
													</p>
													<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fe fe-message-circle"></i> Comment</span></a>
													<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fa fa-reply"></i> Reply</span></a>
													<div class="sub-media d-sm-flex mt-5">
														<div class="d-flex mr-3">
															<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/1.jpg')}}"> </a>
														</div>
														<div class="media-body">
															<h5 class="mt-1 mb-1 font-weight-semibold">Yes, sir</h5>
															<small class="text-muted"><i class="fa fa-calendar"></i> Jan 22 2021 <i class=" ml-3 fa fa-clock-o"></i> 09:00</small>
															<p class="fs-13 mb-2 mt-1">
															   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
															</p>
															<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fe fe-message-circle"></i> Comment</span></a>
															<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fa fa-reply"></i> Reply</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card shadow-none border">
											<div class="d-sm-flex p-5">
												<div class="d-flex mr-3">
													<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/11.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-1 mb-1 font-weight-semibold">Send the related data</h5>
													<small class="text-muted"><i class="fa fa-calendar"></i> Dec 10 2020 <i class=" ml-3 fa fa-clock-o"></i> 06:00</small>
													<p class="fs-13 mb-2 mt-1">
													   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
													</p>
													<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fe fe-message-circle"></i> Comment</span></a>
													<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fa fa-reply"></i> Reply</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header  border-0">
										<div class="card-title">Comments</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<input type="text" class="form-control" id="name1" placeholder="Your Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="email" placeholder="Email Address">
										</div>
										<div class="form-group">
											<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Comment"></textarea>
										</div>
										<a href="#" class="btn btn-primary">Send Reply</a>
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
