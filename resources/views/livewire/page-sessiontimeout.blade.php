@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Page-sessiontimeout</h4>
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
						<div class="card">
							<div class="card-header border-bottom-0">
								<div class="card-title">
									Session Time Out Demo
								</div>
							</div>
							<div class="card-body">
								<p class="mg-b-20">The Basic Collapse Accordion Styles of Nixlot template</p>
								<p class="mg-b-10">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
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

			<!-- Modal -->
			<div class="modal fade"  id="myModal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content tx-size-sm">
						<div class="modal-body text-center">
							<i class="fe fe-alert-triangle fs-50"></i>
							<h4 class="text-primary fs-20 font-weight-semibold mt-2">Session Timeout</h4>
							<progress id="custom-bar" class="custom-progress mb-4 wd-70p mt-3" max="100" value="0">0%</progress>
							<p class="mb-4 mx-4">You're being timed out due to inactivity. Please choose to stay signed in or to logoff. Otherwise, you will logged off automatically..</p>
							<a class="btn btn-danger px-5" href="{{url('login1')}}">Log Out</a>
							<a aria-label="Close" class="btn btn-primary px-5 text-white" data-dismiss="modal">Stay Logedin</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Modal -->

@endsection('modals')

@section('scripts')

		<!-- INTERNAL Session js -->
		<script src="{{URL::asset('assets/js/session.js')}}"></script>

@endsection
