@extends('layouts.app')

@section('styles')



@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Tooltip</h4>
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
								<!-- div -->
								<div class="card" id="Tooltip">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Default Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Tooltip on Bottom" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-danger" data-placement="left" data-toggle="tooltip" title="Tooltip on left" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-warning" data-placement="right" data-toggle="tooltip" title="Tooltip on right" >Hover me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card" id="Tooltip1">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Color Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label  mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-primary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-success" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-danger" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-warning" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" >Hover me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /div -->
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

@endsection
