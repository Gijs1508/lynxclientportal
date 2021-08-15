@extends('layouts.taskapp')

@section('styles')

		<!-- INTERNAl Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

		<!-- INTERNAL Datepicker css-->
		<link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

		<!-- INTERNAL Dragula Css -->
		<link href="{{URL::asset('assets/plugins/dragula/dragula.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Task Board</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a href="#" class="btn btn-primary " data-toggle="modal" data-target="#newtaskmodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Task</a>
										<a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
										<a href="#" class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
										<a href="#" class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="examples">
							<div class="parent1 row">
								<div class="wrapper col-xl-3">
									<div class="card task-board-card" >
										<div class="card-header border-0">
											<h4 class="card-title mb-6">In Progress</h4>
										</div>
										<div class="card-body task-board-body pt-0 task-in">
											<div id="left-defaults">
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-primary"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>12-02-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Jquery Issues Fixed</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-light"></a></li>
																<li><a href="#" class="bg-light"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead line 16-06-2021</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 5</span>
																<span class="messages"><i class="fe fe-message-square"></i> 3</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar brround bg-light text-dark">2</span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-primary"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>31-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">HTML Updated</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-light"></a></li>
																<li><a href="#" class="bg-light"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead line 11:30 Am</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 3</span>
																<span class="messages"><i class="fe fe-message-square"></i> 6</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-primary"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>21-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Application Bugs fix</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-light"></a></li>
																<li><a href="#" class="bg-light"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead line 15-03-2021</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 3</span>
																<span class="messages"><i class="fe fe-message-square"></i> 6</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="btn btn-white  btn-lg addtaskbtn" data-toggle="modal" data-target="#addtaskmodal">
											<i class="fe fe-plus-circle"></i> Add Task
										</a>
									</div>
								</div>
								<div class="wrapper col-xl-3">
									<div class="card task-board-card">
										<div class="card-header border-0">
											<h4 class="card-title mb-6">On Hold</h4>
										</div>
										<div class="card-body task-board-body pt-0 task-hold">
											<div id="right-defaults">
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-danger"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>21-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">HTML Code Updated</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-danger"></a></li>
															</ul>
															<span class="badge badge-md badge-danger-light">Dealy by 99 days</span>
														</div>
														<p class="fs-13 text-muted mt-3"><i class="feather feather-clock  mr-2"></i>Dead line 15-03-2021</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 3</span>
																<span class="messages"><i class="fe fe-message-square"></i> 6</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-danger"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>01-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Angular Issues fixed</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-danger"></a></li>
															</ul>
															<span class="badge badge-md badge-danger-light">Dealy by 40 days</span>
														</div>
														<p class="fs-13 text-muted mt-3"><i class="feather feather-clock  mr-2"></i>Dead line 15-03-2021</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 6</span>
																<span class="messages"><i class="fe fe-message-square"></i> 16</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-danger"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>01-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Angular Issues fixed</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-danger"></a></li>
															</ul>
															<span class="badge badge-md badge-danger-light">Dealy by 40 days</span>
														</div>
														<p class="fs-13 text-muted mt-3"><i class="feather feather-clock  mr-2"></i>Dead line 15-03-2021</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 6</span>
																<span class="messages"><i class="fe fe-message-square"></i> 16</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="btn btn-white  btn-lg addtaskbtn" data-toggle="modal" data-target="#addtaskmodal">
											<i class="fe fe-plus-circle"></i> Add Task
										</a>
									</div>
								</div>
								<div class="wrapper col-xl-3">
									<div class="card task-board-card">
										<div class="card-header border-0">
											<h4 class="card-title mb-6">On Progress</h4>
										</div>
										<div class="card-body task-board-body pt-0 task-on">
											<div id="left-events">
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-warning"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>05-02-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Logo Design</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-warning"></a></li>
																<li><a href="#" class="bg-light"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 2</span>
																<span class="messages"><i class="fe fe-message-square"></i> 3</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																<span class="avatar brround bg-light text-dark">5</span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-warning"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>11-03-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Marketing materials Issues</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-warning"></a></li>
																<li><a href="#" class="bg-light"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 4</span>
																<span class="messages"><i class="fe fe-message-square"></i> 7</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/15.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="btn btn-white  btn-lg addtaskbtn" data-toggle="modal" data-target="#addtaskmodal">
											<i class="fe fe-plus-circle"></i> Add Task
										</a>
									</div>
								</div>
								<div class="wrapper col-xl-3">
									<div class="card task-board-card">
										<div class="card-header border-0">
											<h4 class="card-title mb-6">Completed</h4>
										</div>
										<div class="card-body task-board-body pt-0 task-complete">
											<div id="right-events">
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-success"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>23-02-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Marketing materials Issues</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-warning"></a></li>
																<li><a href="#" class="bg-success"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 4</span>
																<span class="messages"><i class="fe fe-message-square"></i> 7</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-success"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>11-02-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Angular Issues fixed</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-warning"></a></li>
																<li><a href="#" class="bg-success"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 6</span>
																<span class="messages"><i class="fe fe-message-square"></i> 8</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-success"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>21-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Application Bugs fix</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-warning"></a></li>
																<li><a href="#" class="bg-success"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 6</span>
																<span class="messages"><i class="fe fe-message-square"></i> 8</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden">
													<div class="card-status card-status-left bg-success"></div>
													<div class="card-body">
														<div class="d-flex  mb-1">
															<p class="-13 text-muted mb-0"><i class="fe feather-calendar mr-1"></i>12-01-2021</p>
															<div class="dropdown dropleft ml-auto">
																<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-toggle="dropdown" >
																	<i class="feather-more-horizontal fs-18"></i>
																</button>
																<ul class="dropdown-menu fs-13">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
																	<li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																</ul>
															</div>
														</div>
														<h5 class="fs-14 mt-3 mb-1 text-capitalize">Design Updated</h5>
														<p class="fs-13 mt-2 text-muted">
															That a reader will be distracted by the readable content of a page when looking
														</p>
														<div class="">
															<ul class="task-status">
																<li><a href="#" class="bg-primary"></a></li>
																<li><a href="#" class="bg-warning"></a></li>
																<li><a href="#" class="bg-success"></a></li>
															</ul>
														</div>
														<p class="fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</p>
														<div class="d-flex mt-4">
															<div class="mt-1">
																<span class="attachment"><i class="fe fe-paperclip"></i> 8</span>
																<span class="messages"><i class="fe fe-message-square"></i> 12</span>
															</div>
															<div class="avatar-list avatar-list-stacked ml-auto">
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
																<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="btn btn-white  btn-lg addtaskbtn" data-toggle="modal" data-target="#addtaskmodal">
											<i class="fe fe-plus-circle"></i> Add Task
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

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

			<!-- New Task Modal -->
			<div class="modal fade"  id="addtaskmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Task</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task Title</label>
										<input class="form-control" placeholder="Text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Assign To:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
											<option label="Select Employee"></option>
											<option value="1">Faith Harris</option>
											<option value="2">Austin Bell</option>
											<option value="3">Maria Bower</option>
											<option value="4">Peter Hill</option>
											<option value="5">Victoria Lyman</option>
											<option value="6">Adam Quinn</option>
											<option value="7">Melanie Coleman</option>
											<option value="8">Max Wilson</option>
											<option value="9">Amelia Russell</option>
											<option value="10">Justin Metcalfe</option>
											<option value="11">Ryan Young</option>
											<option value="12">Jennifer Hardacre</option>
											<option value="13">Justin Parr</option>
											<option value="14">Julia Hodges</option>
											<option value="15">Michael Sutherland</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Form:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">To:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Attachment:</label>
								<div class="input-group file-browser">
									<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
									<label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
									</label>
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 mr-5">Work Status :</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">Pending</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">On Progress</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
							<button  class="btn btn-success" onclick="not1()">Add</button>
						</div>
					</div>
				</div>
			</div>
			<!-- New Task Modal -->

			<!-- New Task Modal -->
			<div class="modal fade"  id="newtaskmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Task</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task ID</label>
										<input class="form-control" placeholder="Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Task Title</label>
										<input class="form-control" placeholder="Text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Department:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Department">
											<option label="Select Department"></option>
											<option value="1">Designing Department</option>
											<option value="2">Development Department</option>
											<option value="3">Marketing Department</option>
											<option value="4">Human Resource Department</option>
											<option value="5">Managers Department</option>
											<option value="6">Application Department</option>
											<option value="7">Support Department</option>
											<option value="8">IT Department</option>
											<option value="9">Technical Department</option>
											<option value="10">Accounts Department</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Assign To:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
											<option label="Select Employee"></option>
											<option value="1">Faith Harris</option>
											<option value="2">Austin Bell</option>
											<option value="3">Maria Bower</option>
											<option value="4">Peter Hill</option>
											<option value="5">Victoria Lyman</option>
											<option value="6">Adam Quinn</option>
											<option value="7">Melanie Coleman</option>
											<option value="8">Max Wilson</option>
											<option value="9">Amelia Russell</option>
											<option value="10">Justin Metcalfe</option>
											<option value="11">Ryan Young</option>
											<option value="12">Jennifer Hardacre</option>
											<option value="13">Justin Parr</option>
											<option value="14">Julia Hodges</option>
											<option value="15">Michael Sutherland</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Task Priority:</label>
								<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
									<option label="Select Priority"></option>
									<option value="1">High</option>
									<option value="2">Medium</option>
									<option value="3">Low</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Form:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">To:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Attachment:</label>
								<div class="input-group file-browser">
									<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
									<label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
									</label>
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 mr-5">Work Status :</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">Pending</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">On Progress</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
							<button  class="btn btn-success" onclick="not1()">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- New Task Modal -->

@endsection('modals')

@section('scripts')

		<!-- Notifications js -->
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- INTERNAL Dragula Js -->
		<script src="{{URL::asset('assets/plugins/dragula/dragula.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/dragula/dragula-evnet.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/task/task-board.js')}}"></script>

@endsection
