@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Email-compose</h4>
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
							<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="#" class="btn btn-primary btn-lg btn-block">Compose</a>
										</div>
										<a href="#" class="list-group-item d-flex align-items-center active">
											<span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ml-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ml-auto badge badge-danger">03</span>
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
										</a>
									</div>
									<div class="card-body border-top">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary mr-2"></span> Friends
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary mr-2"></span> Family
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success mr-2"></span> Social
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info mr-2"></span> Office
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning mr-2"></span> Work
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger mr-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Compose new message</h3>
									</div>
									<div class="card-body">
										<form >
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2 form-label">To</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row align-items-center">
													<label class="col-sm-2 form-label">Subject</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row ">
													<label class="col-sm-2 form-label">Message</label>
													<div class="col-sm-10">
														<textarea rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer d-sm-flex">
										<div class="mt-2 mb-2">
											<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg" data-toggle="tooltip" title="" data-original-title="Attach"><span class="ri-attachment-2"></span></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg" data-toggle="tooltip" title="" data-original-title="Link"><span class="ri-link"></span></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg" data-toggle="tooltip" title="" data-original-title="Photos"><span class="ri-image-line"></span></a>
											<a href="javascript:void(0)" class="btn btn-icon btn-white btn-svg" data-toggle="tooltip" title="" data-original-title="Delete"><span class="ri-delete-bin-line"></span></a>
										</div>
										<div class="btn-list ml-auto">
											<button  class="btn btn-danger btn-space">Cancel</button>
											<button  class="btn btn-primary btn-space">Send message</button>
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

@endsection
