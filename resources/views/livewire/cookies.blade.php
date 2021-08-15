@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Cookies css -->
		<link href="{{URL::asset('assets/plugins/cookies/accept-cookies.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/cookies/cookies.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Cookies</h4>
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
											Cookies Position
										</div>
									</div>
									<div class="card-body">
										<div class="btn-list  position-buttons">
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="topleft">Top Left Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="top">Top Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="topright">Top Right Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="bottomleft">Bottom Left Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="bottom">Bottom Cookie</a>
											<a href="#" class="btn btn-primary position-button mg-t-5" data-position="bottomright">Bottom Right Cookie</a>
											<a href="#" class="btn btn-primary option-button mg-t-5" data-option="default">Default Cookie</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Cookies Background
										</div>
									</div>
									<div class="card-body">
										<div id="theme-buttons" class="btn-list theme-buttons">
											<a href="#" class="btn btn-light theme-button mg-t-5" data-theme1="theme-light">Light</a>
											<a href="#" class="btn btn-dark theme-button mg-t-5" data-theme1="theme-dark">Dark</a>
											<a href="#" class="btn btn-primary theme-button mg-t-5" data-theme1="theme-primary">primary</a>
											<a href="#" class="btn btn-info theme-button mg-t-5" data-theme1="theme-info">Info</a>
											<a href="#" class="btn btn-danger theme-button mg-t-5" data-theme1="theme-danger">Danger</a>
											<a href="#" class="btn btn-success theme-button mg-t-5" data-theme1="theme-success">Success</a>
											<a href="#" class="btn btn-warning theme-button mg-t-5" data-theme1="theme-warning">Warning</a>
										</div>
									</div>
								</div>
								<!-- /div -->
							</div>
						</div>
						<!-- Row -->

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

		<!-- INTERNAL Cookies js-->
		<script src="{{URL::asset('assets/plugins/cookies/cookiepopup.js')}}"></script>
		<script src="{{URL::asset('assets/js/cookie.js')}}"></script>

@endsection
