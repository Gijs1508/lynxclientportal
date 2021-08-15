@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Media Object</h4>
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
								<!--div-->
								<div class="card" id="media">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Basic Example
										</div>
									</div>
									<div class="card-body">
										<div class="media d-block d-sm-flex">
											<img alt="" class="avatar avatar-xl brround mr-3" src="{{URL::asset('assets/images/users/4.jpg')}}">
											<div class="media-body pt-4 pt-sm-0">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media1">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Nesting
										</div>
									</div>
									<div class="card-body">
										<div class="media d-block d-sm-flex">
											<img alt="" class="avatar avatar-xl brround mr-3" src="{{URL::asset('assets/images/users/9.jpg')}}">
											<div class="media-body pt-4 pt-sm-0">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												<div class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="avatar avatar-xl brround mr-3" src="{{URL::asset('assets/images/users/8.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media2">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Alignment
										</div>
									</div>
									<div class="card-body">
										<div class="media d-block d-sm-flex">
											<img alt="" class="avatar avatar-xl brround mr-3 align-self-center" src="{{URL::asset('assets/images/users/11.jpg')}}">
											<div class="media-body pt-4 pt-sm-0">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="media3">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div class="media d-block d-sm-flex">
											<div class="media-body mb-4 mb-sm-0">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
											<img alt="" class="avatar avatar-xl brround ml-3" src="{{URL::asset('assets/images/users/12.jpg')}}">
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="card" id="media4">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Media List
										</div>
									</div>
									<div class="card-body">
										<ul class="list-unstyled mb-0">
											<li class="media d-block d-sm-flex border-0">
												<img alt="" class="avatar avatar-xl brround mr-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</li>
											<li class="media d-block d-sm-flex mt-5 border-0">
												<img alt="" class="avatar avatar-xl brround mr-3" src="{{URL::asset('assets/images/users/12.jpg')}}">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</li>
											<li class="media d-block d-sm-flex mt-5 border-0">
												<img alt="" class="avatar avatar-xl brround mr-3" src="{{URL::asset('assets/images/users/2.jpg')}}">
												<div class="media-body pt-4 pt-sm-0">
													<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
													Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!--/div-->
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
