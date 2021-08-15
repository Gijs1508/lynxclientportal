@extends('layouts.taskapp')

@section('styles')

		<!-- Notifications  Css -->
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Datepicker css-->
		<link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Task<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="d-lg-flex d-block">
										<div class="btn-list">
											<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#newtaskmodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Task</a>
											<a href="#" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
											<a href="#" class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
											<a href="#" class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="#">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">All Task's</span>
														<h3 class="mb-0 mt-1 text-danger  fs-25">1254</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-danger my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="#">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">My Task</span>
														<h3 class="mb-0 mt-1 text-primary  fs-25">42</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<a href="#">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">Pending Tasks</span>
														<h3 class="mb-0 mt-1 text-secondary fs-25">11</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-secondary my-auto  float-right"> <i class="feather feather-info"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<a href="#">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-7">
													<div class="mt-0 text-left">
														<span class="fs-16 font-weight-semibold">Completed Tasks</span>
														<h3 class="mb-0 mt-1 text-success fs-25">38</h3>
													</div>
												</div>
												<div class="col-5">
													<div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-check"></i> </div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="">
									<div class="card-header pt-0 pl-0 ml-0 mb-4 mt-4 border-bottom-0 responsive-header">
										<h4 class="card-title">Today Task Updates</h4>
										<div class="card-options">
											<div class="btn-list mr-2">
												<span class="btn btn-primary">Add Task</span>
												<span class="btn btn-light">View All</span>
											</div>
											<div class="dropdown"> <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Latest <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
													<li><a href="#">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-3 col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-left">
																<h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Design Updated</h4>
																<p class="tx-16 font-weight-semibold text-muted mb-2">Designing Department</p>
																<span class="fs-14 mt-2 text-muted">Mobile App Ui Designing and Prototyping</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-right">
																<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">6</span>
															</div>
															<div class="ml-5">
																<div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#0dcd94">
																	<div class="chart-circle-value text-success fs-15">75</div>
																</div>
															</div>
														</div>
														<div class="ml-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-danger text-danger" data-toggle="tooltip" data-placement="top" title="Project Priority">High</div>
																<a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-left">
																<h4 class="mb-0 mt-1 mb-2 font-weight-semibold">HTML Code Updated</h4>
																<p class="tx-16 font-weight-semibold text-muted mb-2">HTML Designing Department</p>
																<span class="fs-14 mt-2 text-muted">Updated Version 4.2.10 and Minor issues fixed</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-right">
																<img src="{{URL::asset('assets/images/png/task2.png')}}" alt="img">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/10.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">4</span>
															</div>
															<div class="ml-5">
																<div class="chart-circle chart-circle-xs" data-value="0.38" data-thickness="3" data-color="#3366ff">
																	<div class="chart-circle-value text-primary fs-15">38</div>
																</div>
															</div>
														</div>
														<div class="ml-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-success text-success" data-toggle="tooltip" data-placement="top" title="Project Priority">Low</div>
																<a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-left">
																<h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Angular Issues fixed</h4>
																<p class="tx-16 font-weight-semibold text-muted mb-2">Angular  Department</p>
																<span class="fs-14 mt-2 text-muted">Old Template Angular Version Updated</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-right">
																<img src="{{URL::asset('assets/images/png/task3.png')}}" alt="img">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">8</span>
															</div>
															<div class="ml-5">
																<div class="chart-circle chart-circle-xs" data-value="0.67" data-thickness="3" data-color="#ffad00">
																	<div class="chart-circle-value text-warning fs-15">67</div>
																</div>
															</div>
														</div>
														<div class="ml-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-warning text-warning" data-toggle="tooltip" data-placement="top" title="Project Priority">Medium</div>
																<a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-12 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-left">
																<h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Responsive Issues fixed</h4>
																<p class="tx-16 font-weight-semibold text-muted mb-2">Online Services and Live Chart</p>
																<span class="fs-14 mt-2 text-muted">Comapny Online Services & Support</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-right">
																<img src="{{URL::asset('assets/images/png/task4.png')}}" alt="img">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">3</span>
															</div>
															<div class="ml-5">
																<div class="chart-circle chart-circle-xs" data-value="0.49" data-thickness="3" data-color="#0dcd94">
																	<div class="chart-circle-value text-success fs-15">49</div>
																</div>
															</div>
														</div>
														<div class="ml-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-success text-success"  data-toggle="tooltip" data-placement="top" title="Project Priority">High</div>
																<a class="btn btn-outline-light  text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!--Row-->
						<div class="row">
							<div class="col-xl-6 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0 responsive-header">
										<h4 class="card-title">Task Report</h4>
										<div class="card-options">
											<div class="btn-list">
												<a href="#" class="btn btn-outline-light text-dark d-flex my-auto float-left"><span class="dot-label bg-primary mr-2 my-auto"></span>On going</a>
												<a href="#" class="btn btn-outline-light text-dark d-flex my-auto float-left"><span class="dot-label bg-secondary mr-2 my-auto"></span>Completed</a>
												<a href="#" class="btn btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
													<li><a href="#">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="balance"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Tasks</h4>
										<div class="card-options mr-3">
											<div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
													<li><a href="#">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-menu-heading table_tabs mt-2 p-0 ">
										<div class="tabs-menu1">
											<!-- Tabs -->
											<ul class="nav panel-tabs">
												<li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Today Tasks</a></li>
												<li><a href="#tab6"  data-toggle="tab">Pending Tasks</a></li>
												<li><a href="#tab7" data-toggle="tab">Completed Tasks</a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body tabs-menu-body table_tabs1 p-0 border-0">
										<div class="tab-content">
											<div class="tab-pane active" id="tab5">
												<div class="table-responsive recent_jobs p-0 card-body">
													<table class="table mg-b-0 text-nowrap">
														<tbody>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Adobe Xd Ui Design</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Designing And Prototype</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead line 6:00 Pm</td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-users text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Client meeting</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Team and Team lead</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>11:30 Am</td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task2.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">HTML Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">4.2.3 New Version Updated</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-trending-up text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Project Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Senior Protoyper</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 6:00 Pm</td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/photos/jquery.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Jquery Issues Fixed</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Some add-on events changed</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 6:00 Pm</td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane" id="tab6">
												<div class="table-responsive recent_jobs p-0 card-body">
													<table class="table mg-b-0 text-nowrap">
														<tbody>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Adobe Xd Ui Design</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Designing And Prototype</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead line 6:00 Pm</td>
																<td class="text-left"><span class="task-btn border-orange text-orange">On going</span></td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-users text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Client meeting</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Team and Team lead</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>11:30 Am</td>
																<td class="text-left"><span class="task-btn border-orange text-orange">On going</span></td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task2.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">HTML Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">4.2.3 New Version Updated</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 2:30 Pm</td>
																<td class="text-left"><span class="task-btn border-orange text-orange">On going</span></td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-trending-up text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Project Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Senior Protoyper</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 6:00 Pm</td>
																<td class="text-left"><span class="task-btn border-orange text-orange">On going</span></td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/photos/jquery.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Jquery Issues Fixed</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Some add-on events changed</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-clock  mr-2"></i>Dead Line 6:00 Pm</td>
																<td class="text-left"><span class="task-btn border-orange text-orange">On going</span></td>
																<td class="text-left d-flex">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="feather feather-edit-3 primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Send"><i class="feather feather-send primary text-primary"></i></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane " id="tab7">
												<div class="table-responsive recent_jobs p-0 card-body">
													<table class="table mg-b-0 text-nowrap">
														<tbody>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Adobe Xd Ui Design</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Designing And Prototype</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-calendar  mr-2"></i>Nov 15 2019</td>
																<td class="text-left"><span class="task-btn bg-success text-white">Completed</span></td>
																<td class="text-left d-flex mt-1">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																	<ul class="dropdown-menu dropdown-menu-right" role="menu">
																		<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																		<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																		<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																		<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																	</ul>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-users text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Client meeting</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Team and Team lead</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-calendar  mr-2"></i>Nov 22 2019</td>
																<td class="text-left"><span class="task-btn bg-success text-white">Completed</span></td>
																<td class="text-left d-flex mt-1">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																	<ul class="dropdown-menu dropdown-menu-right" role="menu">
																		<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																		<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																		<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																		<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																	</ul>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task2.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">HTML Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">4.2.3 New Version Updated</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-calendar  mr-2"></i>Dec 02 2019</td>
																<td class="text-left"><span class="task-btn bg-success text-white">Completed</span></td>
																<td class="text-left d-flex mt-1">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																	<ul class="dropdown-menu dropdown-menu-right" role="menu">
																		<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																		<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																		<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																		<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																	</ul>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-trending-up text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Project Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Senior Protoyper</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-calendar  mr-2"></i>Dec 15 2019</td>
																<td class="text-left"><span class="task-btn bg-success text-white">Completed</span></td>
																<td class="text-left d-flex mt-1">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																	<ul class="dropdown-menu dropdown-menu-right" role="menu">
																		<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																		<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																		<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																		<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																	</ul>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/photos/jquery.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-0 fs-13 font-weight-semibold">Jquery Issues Fixed</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Some add-on events changed</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted"><i class="feather feather-calendar  mr-2"></i>25 Dec 2019</td>
																<td class="text-left"><span class="task-btn text-white bg-success">Completed</span></td>
																<td class="text-left d-flex mt-1">
																	<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View"><i class="feather feather-eye primary text-primary"></i></a>
																	<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																	<ul class="dropdown-menu dropdown-menu-right" role="menu">
																		<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																		<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																		<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																		<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																	</ul>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!--Row-->
						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Activity</h4>
										<div class="card-options">
											<div class="btn-list">
												<a class="remind-icon text-dark mr-2" href="#">
													<i class="feather feather-plus"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<ul class="timeline ">
											<li>
												<a target="_blank" href="#" class="font-weight-semibold fs-16 ml-3">@Liam Hodges Completed Task</a>
												<a href="#" class="text-muted float-right fs-13">Just Now</a>
												<p class="mb-0 pb-0 text-muted fs-14 ml-3 mt-1">Today Evening 6:30 Pm</p>
											</li>
											<li class="primary mt-6">
												<a target="_blank" href="#" class="font-weight-semibold fs-16 ml-3">@Html Department Team</a>
												<a href="#" class="text-muted float-right fs-13">10 min ago</a>
												<p class="mb-0 pb-0 text-muted fs-14 ml-3 mt-1">Versions updates and issues Fixed</p>
											</li>
											<li class="pink mt-6">
												<a target="_blank" href="#" class="font-weight-semibold fs-16 ml-3">Team Meeting</a>
												<a href="#" class="text-muted float-right fs-13">45 min ago</a>
												<p class="mb-0 pb-0 text-muted fs-14  ml-3 mt-1">Designing Team Meeting Completed</p>
											</li>
											<li class="success mb-0 pb-0 mt-6">
												<a target="_blank" href="#" class="font-weight-semibold fs-16 ml-1">Updated Employees Payslips</a>
												<a href="#" class="text-muted float-right fs-13">2 Hour ago</a>
												<p class="mb-0 pb-0 text-muted fs-14  ml-3 mt-1">1 April 2020 to 1 feb 2021</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pr-6">
										<h4 class="card-title">Reminders</h4>
										<div class="card-options">
											<div class="btn-list">
												<a class="remind-icon text-dark mr-2" href="#" data-toggle="modal" data-target="#remindermodal">
													<i class="feather feather-plus"></i>
												</a>
												<a class="remind-icon text-dark" href="#">
													<i class="feather feather-bell"></i><span class="icon-dot bg-orange"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-4">
										<div class="mb-5">
											<div class="list-group-item d-md-flex p-0 pb-1 align-items-center border-0">
												<div class="d-flex">
													<div class="comming_holidays calendar-icon icons">
														<span class="date_time bg-pink-transparent bradius mr-3"><span class="date fs-20">19</span>
															<span class="month fs-13">FEB</span>
														</span>
													</div>
													<div class="mt-1">
														<h6 class="mb-1 font-weight-semibold fs-16">Designing <span  class="font-weight-normal">Work Deadline</span></h6>
														<span class="clearfix"></span>
														<span class="fs-14 text-muted">mobile App ui Design</span>
													</div>
												</div>
												<p class="text-muted  mb-0 fs-13 ml-auto pl-8 pl-md-0">2 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="list-group-item d-md-flex  pb-1 p-0 align-items-center border-0">
												<div class="d-flex">
													<div class="comming_holidays calendar-icon icons">
														<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-20">18</span>
															<span class="month fs-13">FEB</span>
														</span>
													</div>
													<div class="mt-1">
														<h6 class="mb-1 font-weight-semibold fs-16"><span  class="font-weight-normal">making the first</span> generator </h6>
														<span class="clearfix"></span>
														<span class="fs-14 text-muted">mobile App ui Design</span>
													</div>
												</div>
												<p class="text-muted  mb-0 fs-13 ml-auto pl-8 pl-md-0">5 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="list-group-item d-md-flex pb-1 p-0 align-items-center border-0">
												<div class="d-flex">
													<div class="comming_holidays calendar-icon icons">
														<span class="date_time bg-orange-transparent bradius mr-3"><span class="date fs-20">16</span>
															<span class="month fs-13">FEB</span>
														</span>
													</div>
													<div class="mt-1">
														<h6 class="mb-1 font-weight-semibold fs-16">Max Jones</h6>
														<span class="clearfix"></span>
														<span class="fs-14 text-muted">marketing seminar</span>
													</div>
												</div>
												<p class="text-muted  mb-0 fs-13 ml-auto pl-8 pl-md-0">8 days to left</p>
											</div>
										</div>
										<div class="mb-0">
											<div class="list-group-item d-md-flex pb-1 p-0 align-items-center border-0">
												<div class="d-flex">
													<div class="comming_holidays calendar-icon icons">
														<span class="date_time bg-info-transparent bradius mr-3"><span class="date fs-20">28</span>
															<span class="month fs-13">JAN</span>
														</span>
													</div>
													<div class="mt-1">
														<h6 class="mb-1 font-weight-semibold fs-16">Dinner Party <span  class="font-weight-normal">Office Week Off</span></h6>
														<span class="clearfix"></span>
														<span class="fs-14 text-muted">Sat Day</span>
													</div>
												</div>
												<p class="text-muted  mb-0 fs-13 ml-auto pl-8 pl-md-0">15 days to left</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card chart-donut1">
									<div class="card-header  border-0">
										<h4 class="card-title">Advanced Task Status</h4>
									</div>
									<div class="card-body">
										<div id="advancedtask" class="mx-auto apex-dount"></div>
										<div class="sales-chart pt-5 d-md-flex mx-auto text-center justify-content-center ">
											<div class="d-flex mr-5"><span class="dot-label bg-primary mr-2 my-auto"></span>Completed Tasks</div>
											<div class="d-flex mt-4 mt-md-0"><span class="dot-label bg-secondary  mr-2 my-auto"></span>Running Tasks</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Time  Spent on Task</h4>
										<div class="card-options mr-3">
											<div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
													<li><a href="#">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="chart-wrapper ">
											<canvas id="spenttask" class=""></canvas>
										</div>
										<div class="pt-5  d-flex mx-auto text-center justify-content-center ">
											<div class="d-flex mr-5"><span class="dot-label bg-light4 mr-2 my-auto"></span>Working Hours</div>
											<div class="d-flex"><span class="dot-label bg-primary  mr-2 my-auto"></span>Work</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Tasks Summary</h4>
										<div class="card-options mr-3">
											<div class="dropdown"> <a href="#" class="btn ripple btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
													<li><a href="#">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body pt-5 p-0">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap border-top  mb-0" id="tasktable">
												<thead>
													<tr>
														<th class="wd-10p border-bottom-0">Task</th>
														<th class="wd-15p border-bottom-0">Start Date</th>
														<th class="wd-20p border-bottom-0">Work Status</th>
														<th class="w-5p border-bottom-0"></th>
														<th class="wd-15p border-bottom-0">Deadline</th>
														<th class="wd-10p border-bottom-0">Team Status</th>
														<th class="wd-25p border-bottom-0">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="text-dark font-weight-semibold">Mobile Application</span></td>
														<td>14 Jun 2020</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-primary w-55"></div>
															</div>
														</td>
														<td><span class="text-primary fs-15">57%</span></td>
														<td>16 Jun 2020</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															</div>
														</td>
														<td><span class="text-primary">Active</span></td>
													</tr>
													<tr>
														<td><span class="text-dark font-weight-semibold">Delelopment</span></td>
														<td>14 Jun 2020</td>
														<td>
															<div class="progress progress-sm ">
																<div class="progress-bar bg-primary w-30"></div>
															</div>
														</td>
														<td><span class="text-primary fs-15">34%</span></td>
														<td>16 Jun 2020</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															</div>
														</td>
														<td><span class="text-primary">Active</span></td>
													</tr>
													<tr>
														<td><span class="text-dark font-weight-semibold">version Updated</span></td>
														<td>13 Jun 2020</td>
														<td>
															<div class="progress progress-sm ">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="text-success fs-15">100%</span></td>
														<td>22 Jun 2020</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															</div>
														</td>
														<td><span class="text-success">Done</span></td>
													</tr>
													<tr>
														<td><span class="text-dark font-weight-semibold">Psd Template</span></td>
														<td>12 Jun 2020</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-orange w-50"></div>
															</div>
														</td>
														<td><span class="text-orange fs-15">50%</span></td>
														<td>22 Jun 2020</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															</div>
														</td>
														<td><span class="text-orange">Pending</span></td>
													</tr>
													<tr>
														<td><span class="text-dark font-weight-semibold">Development</span></td>
														<td>12 Jun 2020</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-warning w-80"></div>
															</div>
														</td>
														<td><span class="text-warning fs-15">82%</span></td>
														<td>22 Jun 2020</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															</div>
														</td>
														<td><span class="text-warning">Hold</span></td>
													</tr>
												</tbody>
											</table>
										</div>
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

			<!-- Modal -->
			<div class="modal fade"  id="remindermodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Reminder</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Project</label>
								<select name="projects"  class="form-control custom-select select2" data-placeholder="Choose Projct">
									<option label="Choose Project"></option>
									<option value="1">Project 01</option>
									<option value="2">Project 02</option>
									<option value="3">Project 03</option>
									<option value="4">Project 04</option>
									<option value="5">Project 05</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Select Date</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="feather feather-calendar"></i>
										</div>
									</div><input class="form-control" data-toggle="datepicker" placeholder="MM/DD/YYYY">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Note:</label>
								<textarea class="form-control" rows="3">Some text here...</textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->

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

		<!-- INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Chartjs rounded-barchart -->
		<script src="{{URL::asset('assets/plugins/chart.min/chart.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

		<!-- INTERNAL Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

		<!-- INTERNAl Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/index3.js')}}"></script>

@endsection