@extends('layouts.app')

@section('styles')



@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Todo-List 02</h4>
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
							<div class="col-md-12 col-xl-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="#" class="btn btn-primary btn-block">Add New Task</a>
										</div>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
											<span class="icons"><i class="ri-server-line"></i></span>  All Tasks <span class="ml-auto badge badge-success">12</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-file-warning-line"></i></span> Important <span class="ml-auto badge badge-danger">3</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-star-line"></i></span> Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-spam-line"></i></span>  Spam
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-archive-line"></i></span>  Archive
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-delete-bin-line"></i></span>  Trash
										</a>
									</div>
									<div class="card-body border-top">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary mr-2"></span> Pending Tasks
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary mr-2"></span> Unassigned Tasks
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success mr-2"></span> Completed Tasks
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info mr-2"></span> Hold Tasks
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning mr-2"></span> Task Issue
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger mr-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-9">
								<div class="row">
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ml-auto">
														<div class="">
															<a class="option-dots new-list" data-toggle="dropdown"><span class="fe fe-more-vertical"></span></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround mr-2" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Shamika Griffith</h6>
																<small class="text-muted">Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Work Assigned by Clients ,try to get new work</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Sed ut perspiciatis unde omnis iste natus</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary btn-sm px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-primary ml-auto float-right btn-sm px-xl-5" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ml-auto">
														<div class="">
															<a class="option-dots new-list" data-toggle="dropdown"><span class="fe fe-more-vertical"></span></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround mr-2" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Margarette Wycoff</h6>
																<small class="text-muted">Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Voluptatem Accusantium Dolo Laudantium</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Inventore Veritatis Et Quasi Architecto</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary btn-sm px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-primary ml-auto float-right btn-sm px-xl-5" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ml-auto">
														<div class="">
															<a class="option-dots new-list" data-toggle="dropdown"><span class="fe fe-more-vertical"></span></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround mr-2" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Myrta Powe</h6>
																<small class="text-muted">Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Nemo Enim Ipsam Voluptatem Quia Voluptas</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Vero Eos Et Accusamus Et Iusto Odio Dignissimos</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary btn-sm px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-primary ml-auto float-right btn-sm px-xl-5" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ml-auto">
														<div class="">
															<a class="option-dots new-list" data-toggle="dropdown"><span class="fe fe-more-vertical"></span></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround mr-2" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Consuelo Valenzuela</h6>
																<small class="text-muted">Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Ut Enim Ad Minima Veniam Nostrum Exercitationem</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">Quis Autem Vel Eum Iure Reprehenderit Qui</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary btn-sm px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-primary ml-auto float-right btn-sm px-xl-5" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ml-auto">
														<div class="">
															<a class="option-dots new-list" data-toggle="dropdown"><span class="fe fe-more-vertical"></span></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround mr-2" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Carolyne Wirtz</h6>
																<small class="text-muted">Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0 mt-2 fs-13">I Must Explain To You How All This Mistaken</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0  mt-2 fs-13">I Will Give You A Complete Account Of The System</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary btn-sm px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-primary ml-auto float-right btn-sm px-xl-5" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
									<!-- col -->
									<div class="col-xl-4 col-lg-6">
										<div class="card">
											<div class="card-body p-0">
												<div class="todo-widget-header d-flex pb-2 p-4">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label"></span>
													</label>
													<div class="ml-auto">
														<div class="">
															<a class="option-dots new-list" data-toggle="dropdown"><span class="fe fe-more-vertical"></span></a>
															<div class="dropdown-menu tx-13 dropdown-menu-right">
																<a class="dropdown-item" href="#">Assigned to</a>
																<a class="dropdown-item" href="#">Mark As Unread</a>
																<a class="dropdown-item" href="#">Mark As Important</a>
																<a class="dropdown-item" href="#">Add to Tasks</a>
																<a class="dropdown-item" href="#">Add Star</a>
																<a class="dropdown-item" href="#">Move to</a>
																<a class="dropdown-item" href="#">Mute</a>
																<a class="dropdown-item" href="#">Move to Trash</a>
															</div>
														</div>
													</div>
												</div>
												<div class="px-4 pb-4">
													<a class="p-0" data-toggle="dropdown">
														<div class="font-weight-bold d-flex">
															<img  class="avatat avatar-md brround mr-2" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="img">
															<div class="mt-1">
																<h6 class="font-weight-semibold mb-0">Archie Kesler</h6>
																<small class="text-muted">Angular Developer</small>
															</div>
														</div>
													</a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">View Total Tasks</a>
														<a class="dropdown-item" href="#">Completed Tasks</a>
														<a class="dropdown-item" href="#">Delete Tasks</a>
														<a class="dropdown-item" href="#">Settings</a>
													</div>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0 mt-2 fs-13">Rationally Encounter Quences Extremely Painful</h6>
												</div>
												<div class="p-4 border-top">
													<small class="text-muted">10.54am</small>
													<h6 class="mb-0 mt-2 fs-13">Which Of Us Ever Undertakes Laborious Physical</h6>
												</div>
											</div>
											<div class="card-footer">
												<a class="btn btn-primary btn-sm px-xl-5" href="#" title="Assign Task">Assign</a>
												<a class="btn btn-outline-primary ml-auto float-right btn-sm px-xl-5" href="#" data-placement="top" data-toggle="tooltip" title="" data-original-title="View Task">View All</a>
											</div>
										</div>
									</div>
									<!-- /col -->
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
