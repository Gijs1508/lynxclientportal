@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Jvectormap css -->
        <link href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">JvectorMaps</h4>
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
										<h3 class="card-title">World Map</h3>
									</div>
									<div class="card-body">
										<div id="world-map-markers" class="worldh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->
						</div>
						<!-- End row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Asia Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap2" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Australia Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap3" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Canada Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap4" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Germany Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap5" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Europe Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap6" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">India Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap7" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->
							<div class="col-lg-6">
								<div class="card m-b-20">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">UK Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap8" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->

							<div class="col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">USA Map</h3>
									</div>
									<div class="card-body">
										<div id="vmap9" class="stateh h-300"></div>
									</div>
								</div>
							</div><!-- end col -->
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

		<!-- INTERNAL Vector js -->
		<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-de-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js')}}"></script>
		<script src="{{URL::asset('assets/js/jvectormap.js')}}"></script>

@endsection