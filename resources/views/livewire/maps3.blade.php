@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Mapel Maps</h4>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4  class="card-title">Map with links between the plotted cities</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer4">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Static MapelMaps</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title"> Map with a legend for areas</h4>
									</div>
									<div class="card-body">
										<div class="mapcontainer1">
											<div class="map pt-0">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
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

		<!-- INTERNAL Mapel Plugin -->
		<script src="{{URL::asset('assets/plugins/mapel/raphael.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/jquery.mapael.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/maps/france_departments.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/maps/world_countries.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/mapel/maps/usa_states.js')}}"></script>
		<script src="{{URL::asset('assets/js/mapelmaps.js')}}"></script>

@endsection
