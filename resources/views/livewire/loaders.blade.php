@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Loaders</h4>
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
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders1</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner3">
												<div class="dot1"></div>
												<div class="dot2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders2</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner4">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders3</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="sk-circle">
												<div class="sk-circle1 sk-child"></div>
												<div class="sk-circle2 sk-child"></div>
												<div class="sk-circle3 sk-child"></div>
												<div class="sk-circle4 sk-child"></div>
												<div class="sk-circle5 sk-child"></div>
												<div class="sk-circle6 sk-child"></div>
												<div class="sk-circle7 sk-child"></div>
												<div class="sk-circle8 sk-child"></div>
												<div class="sk-circle9 sk-child"></div>
												<div class="sk-circle10 sk-child"></div>
												<div class="sk-circle11 sk-child"></div>
												<div class="sk-circle12 sk-child"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders4</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="sk-cube-grid">
												<div class="sk-cube sk-cube1"></div>
												<div class="sk-cube sk-cube2"></div>
												<div class="sk-cube sk-cube3"></div>
												<div class="sk-cube sk-cube4"></div>
												<div class="sk-cube sk-cube5"></div>
												<div class="sk-cube sk-cube6"></div>
												<div class="sk-cube sk-cube7"></div>
												<div class="sk-cube sk-cube8"></div>
												<div class="sk-cube sk-cube9"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders5</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="sk-folding-cube">
												<div class="sk-cube1 sk-cube"></div>
												<div class="sk-cube2 sk-cube"></div>
												<div class="sk-cube4 sk-cube"></div>
												<div class="sk-cube3 sk-cube"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders6</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="lds-hourglass"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders7</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner">
												<div class="rect1"></div>
												<div class="rect2"></div>
												<div class="rect3"></div>
												<div class="rect4"></div>
												<div class="rect5"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">loaders8</h3>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1">
												<div class="double-bounce1"></div>
												<div class="double-bounce2"></div>
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

@endsection
