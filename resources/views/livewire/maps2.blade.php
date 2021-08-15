@extends('layouts.app')

@section('styles')

		<!-- INTERNAL leaflet Css-->
		<link href="{{URL::asset('assets/plugins/leaflet/leaflet.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Leaflet Maps</h4>
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
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map">
									<div class="card-header border-bottom-0">
										<div class="card-title">Basic</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet1" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map2">
									<div class="card-header border-bottom-0">
										<div class="card-title">With Popup</div>
									</div>
									<div class="card-body">
										<div class="ht-300" id="leaflet2" style="height:300px"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card" id="map1">
									<div class="card-header border-bottom-0">
										<div class="card-title">Map With Circle</div>
									</div>
									<div class="card-body">
										<div class="ht-200 ht-sm-300 ht-md-400" id="leaflet3" style="height:300px"></div>
									</div>
								</div>
							</div>
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

		<!-- INTERNAL leaflet js -->
		<script src="{{URL::asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{URL::asset('assets/js/map-leafleft.js')}}"></script>

@endsection
