@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Notifications</h4>
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
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Alerts Styles Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button onclick="not1()" class="btn btn-primary">Default</button>
											<button onclick="not2()" class="btn btn-secondary">Center</button>
											<button onclick="not3()" class="btn btn-warning">Left</button>
											<button onclick="not4()" class="btn btn-info">Center Info</button>
											<button onclick="not5()" class="btn btn-danger">Center Error</button>
											<button onclick="not6()" class="btn btn-success">Center Warning</button>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Side Alerts Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="#" class="btn btn-primary notice">Primary</a>
											<a href="#" class="btn btn-secondary warning">Warning</a>
											<a href="#" class="btn btn-info error">Danger</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button  class="btn btn-success mr-2" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
												Show success
											</button>
											<button  class="btn btn-info mr-2" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
												Show info
											</button>
											<button  class="btn btn-warning mr-2" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
												Show warning
											</button>
											<button  class="btn btn-secondary mr-2" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
												Show secondary
											</button>
											<button  class="btn btn-danger mr-2" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
											</button>
											<button  class="btn btn-primary mr-2" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
												Show primary
											</button>
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

		<!-- INTERNAL popover js -->
		<script src="{{URL::asset('assets/js/popover.js')}}"></script>

		<!-- INTERNAL Notifications js -->
		<script src="{{URL::asset('assets/plugins/notify/js/rainbow.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/sample.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

@endsection
