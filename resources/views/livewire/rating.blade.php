@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Ratings  css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/ratings.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/rating-themes.css')}}">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Ratings</h4>
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
						<div class="row row-deck">
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Static Star Rating</h3>
									</div>
									<div class="card-body">
										<div class="text-warning text-center fs-25">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star-half-o"></span>
											<span class="fa fa-star-o"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Static Heart Rating</h3>
									</div>
									<div class="card-body">
										<div class="text-danger text-center fs-25">
											<span class="fa fa-heart"></span>
											<span class="fa fa-heart"></span>
											<span class="fa fa-heart"></span>
											<span class="fa fa-heart"></span>
											<span class="fa fa-heart-o"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Fractional Star rating</h3>
									</div>
									<div class="card-body">
										<div class="star-ratings mt-5 mb-5">
											<div class="stars stars-example-fontawesome-o">
												<select id="example-fontawesome-o" name="rating" data-current-rating="3.6" autocomplete="off">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Font Awesome Star Rating</h3>
									</div>
									<div class="card-body text-center">
										<div class="star-ratings start-ratings-main clearfix  mt-5 mb-5">
											<div class="stars stars-example-fontawesome">
												<select id="example-fontawesome" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Bar 1/10 Rating</h3>
									</div>
									<div class="card-body">
										<div class="box  box-example-1to10">
											<div class="box-body">
												<select id="example-1to10" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7" selected="selected">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Opinion rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-movie">
											<div class="box-body">
												<select id="example-movie" name="rating" autocomplete="off">
													<option value="Bad">Bad</option>
													<option value="Mediocre">Mediocre</option>
													<option value="Good" selected="selected">Good</option>
													<option value="Awesome">Awesome</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Square Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-example-square">
											<div class="box-body">
												<select id="example-square" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Grade Rating</h3>
									</div>
									<div class="card-body">
										<div class="box  box-example-pill">
											<div class="box-body">
												<select id="example-pill" name="rating" autocomplete="off">
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Horizontal Bar Rating</h3>
									</div>
									<div class="card-body">
										<div class="box box-large box-example-horizontal">
											<div class="box-body">
												<select id="example-horizontal" name="rating" autocomplete="off">
													<option value="10">10</option>
													<option value="9">9</option>
													<option value="8">8</option>
													<option value="7">7</option>
													<option value="6">6</option>
													<option value="5">5</option>
													<option value="4">4</option>
													<option value="3">3</option>
													<option value="2">2</option>
													<option value="1" selected="selected">1</option>
												</select>
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

		<!-- INTERNAL Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/js/jquery.barrating.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/js/custom-ratings.js')}}"></script>

@endsection
