@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Images-Comparsion css -->
		<link href="{{URL::asset('assets/plugins/images-comparsion/twentytwenty.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Image-Comparision</h4>
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

						<div class="row">
							<div class="col-lg-12">
								<!-- div -->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Horizontal Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container">
											<img src="{{URL::asset('assets/images/photos/about.jpg')}}" alt="img" />
											<img src="{{URL::asset('assets/images/photos/about2.jpg')}}" alt="img" />
										</div>
									</div>
								</div>
								<!-- div -->
								<!-- div -->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Vertical Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container" data-orientation="vertical">
											<img src="{{URL::asset('assets/images/photos/login.jpg')}}" alt="img" />
											<img src="{{URL::asset('assets/images/photos/login2.jpg')}}" alt="img" />
										</div>
									</div>
								</div>
								<!-- div -->
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

		<!-- INTERNAL Images-Comparsion js -->
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
		<script src="{{URL::asset('assets/js/image-comparision.js')}}"></script>

@endsection
