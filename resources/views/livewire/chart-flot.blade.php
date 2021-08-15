@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Flot Chart</h4>
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
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotBar1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Bar Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotBar2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotLine1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Line Chart Points</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotLine2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotArea1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Area Chart Points</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotArea2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Pie Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotPie1"></div>
									</div>
								</div>
							</div><!-- col-6 -->
							<div class="col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<div class="card-title">Donut Chart</div>
									</div>
									<div class="card-body">
										<div class="h-300" id="flotPie2"></div>
									</div>
								</div>
							</div><!-- col-6 -->
						</div>
						<!-- /Row -->

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

		<!-- INTERNAL Flot Charts js-->
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{URL::asset('assets/js/flot.js')}}"></script>

@endsection
