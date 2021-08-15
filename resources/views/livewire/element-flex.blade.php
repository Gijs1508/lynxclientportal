@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Flex Items</h4>
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
										<div class="card-title">
											Enable Flex
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex p-3 bg-light">
											I'm a flexbox container!
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Direction
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row-reverse bg-light">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Justify Content
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row justify-content-start bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-end bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-center bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-around bg-light">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Align Items
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row align-items-start bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-center bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-end bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-stretch bg-light h-9">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Align Self
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100 align-self-start">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200 align-self-center">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300 align-self-end">
													Flex item 3
												</div>
												<div class="p-3 bg-gray-400 align-self-stretch">
													Flex item 4
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Fill
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 flex-fill">
													Flex item with a lot of content
												</div>
												<div class="p-3 bg-gray-200 flex-fill">
													Flex item
												</div>
												<div class="p-3 bg-gray-300 flex-fill">
													Flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Grow and Shrink
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 flex-grow-1">
													Flex item
												</div>
												<div class="p-3 bg-gray-200">
													Flex item
												</div>
												<div class="p-3 bg-gray-300">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Auto Margins
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100">
													Flex item
												</div>
												<div class="p-3 bg-gray-200">
													Flex item
												</div>
												<div class="p-3 bg-gray-300 mg-l-auto">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 order-3">
													First Item
												</div>
												<div class="p-3 bg-gray-200 order-2">
													Second Item
												</div>
												<div class="p-3 bg-gray-300 order-1">
													Third Item
												</div>
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

@endsection
