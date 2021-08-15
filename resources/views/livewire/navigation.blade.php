@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Navigation</h4>
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
							<div class="col-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic Nav</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 br-7">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Nav Vertical</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 flex-column br-7">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Color Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills">
											<li class="nav-item m-2">
												<a class="nav-link active px-4 py-2" href="#">Active</a>
											</li>
											<li class="nav-item dropdown m-2">
												<a class="nav-link dropdown-toggle px-4 py-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link px-4 py-2" href="#">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link disabled px-4 py-2" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Icon Navigation</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab1" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab2" data-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-3 px-5 border active show m-2" id="tab3" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
													<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab4" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border py-3 px-5 m-2" id="tab5" data-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
													<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Icon Nav Bar</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-20"></i></span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
													<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-20"></i> </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Navigation backgrounds</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 bg-primary br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-info mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-success mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-danger mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-secondary mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
										<ul class="nav1 bg-yellow mt-4 br-7">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled text-white-50" href="#">Disabled</a>
											</li>
										</ul>
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
