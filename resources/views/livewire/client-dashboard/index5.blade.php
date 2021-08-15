@extends('layouts.clientapp')

@section('styles')

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL Pg-calendar-master css -->
		<link href="{{URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.css')}}" rel="stylesheet" />

		<!-- INTERNAL Datepicker css-->
		<link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Client<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<button  class="btn btn-primary " data-toggle="modal" data-target="#newprojectmodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Create New Project</button>
										<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-9">
														<div class="mt-0 text-left">
															<span class="fs-16 font-weight-semibold">Total Projects</span>
															<h3 class="mb-0 mt-1 text-primary fs-25">12,548</h3>
														</div>
													</div>
													<div class="col-3">
														<div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-9">
														<div class="mt-0 text-left">
															<span class="fs-16 font-weight-semibold">On Going</span>
															<h3 class="mb-0 mt-1 text-secondary fs-25">94</h3>
														</div>
													</div>
													<div class="col-3">
														<div class="icon1 bg-secondary my-auto  float-right"> <i class="feather feather-info"></i> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-9">
														<div class="mt-0 text-left">
															<span class="fs-16 font-weight-semibold">Completed Projects</span>
															<h3 class="mb-0 mt-1 text-success fs-25">11,134</h3>
														</div>
													</div>
													<div class="col-3">
														<div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-check"></i> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-8 col-lg-12 col-md-12">
										<div class="card">
											<div class="card-header  border-0 responsive-header">
												<h4 class="card-title">Statistics</h4>
												<div class="card-options">
													<div class="btn-list">
														<a href="#" class="btn ripple btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-primary mr-2 my-auto"></span>Expenses</a>
														<a href="#" class="btn ripple btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-light4 mr-2 my-auto"></span>Projects</a>
														<a href="#" class="btn ripple btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
														<ul class="dropdown-menu dropdown-menu-right" role="menu">
															<li><a href="#">Yearly</a></li>
															<li><a href="#">Monthly</a></li>
															<li><a href="#">Weekly</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="chart-wrapper">
													<canvas id="chartbar-statistics" class=""></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-12 col-md-12">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Spend Analysis </h4>
											</div>
											<div class="card-body">
												<div id="analysis" class="mx-auto apex-dount"></div>
												<div class="row">
													<div class="col-10 mx-auto">
														<table class="table mb-0">
															<tbody>
																<tr>
																	<td class="p-2 d-flex"><span class="dot-label bg-primary mr-2 mt-1"></span><span class="font-weight-normal"> Design</span></td>
																	<td class="p-2"><span class="mr-4 fs-16">:</span><span class="ml-auto font-weight-semibold fs-16">$953</span></td>
																</tr>
																<tr>
																	<td class="p-2 d-flex"><span class="dot-label bg-secondary mr-2 mt-1"></span> <span class="font-weight-normal">Development</span></td>
																	<td class="p-2"><span class="mr-4 fs-16">:</span><span class="ml-auto font-weight-semibold fs-16">$12,426</span></td>
																</tr>
																<tr>
																	<td class="p-2 d-flex"><span class="dot-label bg-success mr-2 mt-1 "></span> <span class="font-weight-normal">Service</span></td>
																	<td class="p-2"><span class="mr-4 fs-16">:</span><span class="ml-auto font-weight-semibold fs-16">$25,453</span></td>
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
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<div class="mt-0 text-left">
													<span class="fs-16 font-weight-semibold">Total Expenses</span>
													<h3 class="mb-1 mt-1 fs-35">$21,5489</h3>
													<div class="">
														<span class="fs-13 mt-2 text-danger">
															<i class="feather feather-arrow-up-right mr-1 p-1 brround bg-danger-transparent text-danger"></i>+24%
														</span><span  class="ml-2 text-muted fs-13">then Last Year</span>
													</div>
												</div>
											</div>
											<div class="ml-auto">
												<div class="dropdown"> <a href="#" class="btn ripple btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Yearly</a></li>
														<li><a href="#">Monthly</a></li>
														<li><a href="#">Weekly</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="chart-wrapper mt-5">
											<canvas id="expenses"></canvas>
										</div>
									</div>
								</div>
								<div class="card">
									<div id="carousel-indicator" class="carousel slide dashboard-carousel" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="card-body">
													<h4 class="card-title mb-4">Completed Project</h4>
													<div class="d-flex">
														<div class="task-img bg-primary-transparent mr-4">
															<img src="{{URL::asset('assets/images/png/task3.png')}}" alt="img" class="">
													   </div>
														<div class="mt-2 carousel-body">
															<h6 class="mb-1 font-weight-semibold fs-16 text-over">Angular App Development</h6>
															<p class="fs-14 text-muted">Application Development</p>
														</div>
													</div>
													<h6 class="fs-16 font-weight-normal mt-4 text-muted"><a href="#" class="text-primary">Congratulations!</a> Your Angular Project Completed Chcek Your Demo</h6>
													<a href="#" class="btn btn-light btn-block text-primary mt-5">Preview</a>
												</div>
											</div>
											<div class="carousel-item">
												<div class="card-body">
													<h4 class="card-title mb-4">Design Updated</h4>
													<div class="d-flex">
														<div class="task-img bg-primary-transparent mr-4">
															<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img" class="">
														</div>
														<div class="mt-2 carousel-body">
															<h6 class="mb-1 font-weight-semibold fs-16 text-over">Adobe XD Project</h6>
															<p class="fs-14 text-muted">Mobile App Ui Designing</p>
														</div>
													</div>
													<h6 class="fs-16 font-weight-normal mt-4 text-muted"><a href="#" class="text-primary">Congratulations!</a> Your App Design uploaded Chcek Your Demo</h6>
													<a href="#" class="btn btn-light btn-block text-primary mt-5">Preview</a>
												</div>
											</div>
											<div class="carousel-item">
												<div class="card-body">
													<h4 class="card-title mb-4">Completed Project</h4>
													<div class="d-flex">
														<div class="task-img bg-primary-transparent mr-4">
															<img src="{{URL::asset('assets/images/png/task2.png')}}" alt="img" class="">
														</div>
														<div class="mt-2 carousel-body">
															<h6 class="mb-1 font-weight-semibold fs-16 text-over">HTML Design Project</h6>
															<p class="fs-14 text-muted">Mobile App Ui Designing</p>
														</div>
													</div>
													<h6 class="fs-16 font-weight-normal mt-4 text-muted"><a href="#" class="text-primary">Congratulations!</a> Your App Design uploaded Chcek Your Demo</h6>
													<a href="#" class="btn btn-light btn-block text-primary mt-5">Preview</a>
												</div>
											</div>
										</div>
										<a class="carousel-control-prev" href="#carousel-indicator" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carousel-indicator" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!--Row-->
						<div class="row">
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Recent Orders</h4>
										<div class="card-options pr-3">
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
												<li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Projects</a></li>
												<li><a href="#tab6"  data-toggle="tab">Services</a></li>
												<li><a href="#tab7" data-toggle="tab">Support</a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body tabs-menu-body table_tabs1 p-0 border-0">
										<div class="tab-content">
											<div class="tab-pane active" id="tab5">
												<div class="table-responsive">
													<table class="table table-vcenter text-nowrap  mb-0 orders-table">
														<thead>
															<tr>
																<th class="wd-10p border-bottom-0">Order Projects</th>
																<th class="wd-15p border-bottom-0">Order Date</th>
																<th class="wd-15p border-bottom-0">Deadline</th>
																<th class="wd-20p border-bottom-0">Status</th>
																<th class="wd-15p border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Adobe Xd Ui Design</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Ui Designing And Prototype</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted">12-2-2020</td>
																<td class="text-left fs-13 text-muted">15-2-2020</td>
																<td>
																	<div class="chart-circle chart-circle-xs" data-value="0.67" data-thickness="3" data-color="#3366ff">
																		<div class="chart-circle-value text-primary fs-12">67%</div>
																	</div>
																</td>
																<td class="text-left">
																	<div class="d-flex">
																		<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
																		<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																		<ul class="dropdown-menu dropdown-menu-right" role="menu">
																			<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																			<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																			<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																			<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																		</ul>
																	</div>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-globe text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Website Redesign</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Admin project theme Redesign</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted">16-1-2020</td>
																<td class="text-left fs-13 text-muted">12-2-2020</td>
																<td>
																	<div class="chart-circle chart-circle-xs" data-value="0.46" data-thickness="3" data-color="#ffad00">
																		<div class="chart-circle-value text-secondary fs-12">46%</div>
																	</div>
																</td>
																<td class="text-left">
																	<div class="d-flex">
																		<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
																		<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																		<ul class="dropdown-menu dropdown-menu-right" role="menu">
																			<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																			<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																			<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																			<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																		</ul>
																	</div>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<img src="{{URL::asset('assets/images/png/task2.png')}}" alt="img" class="">
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">HTML Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">4.2.3 New Version Updated</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted">16-1-2020</td>
																<td class="text-left fs-13 text-muted">10-2-2020</td>
																<td>
																	<div class="chart-circle chart-circle-xs" data-value="0.82" data-thickness="3" data-color="#0dcd94">
																		<div class="chart-circle-value text-success fs-12">82%</div>
																	</div>
																</td>
																<td class="text-left">
																	<div class="d-flex">
																		<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
																		<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																		<ul class="dropdown-menu dropdown-menu-right" role="menu">
																			<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																			<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																			<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																			<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																		</ul>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-trending-up text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Project Updated</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Senior Protoyper</small>
																		</div>
																	</div>
																</td>
																<td class="text-left fs-13 text-muted">16-1-2021</td>
																<td class="text-left fs-13 text-muted">9-2-2021</td>
																<td>
																	<div class="chart-circle chart-circle-xs" data-value="0.38" data-thickness="3" data-color="#fe7f00">
																		<div class="chart-circle-value text-orange fs-12">38%</div>
																	</div>
																</td>
																<td class="text-left">
																	<div class="d-flex">
																		<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
																		<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																		<ul class="dropdown-menu dropdown-menu-right" role="menu">
																			<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																			<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																			<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																			<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																		</ul>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane" id="tab6">
												<div class="table-responsive">
													<table class="table table-vcenter text-nowrap  mb-0 orders-table">
														<thead>
															<tr>
																<th class="wd-10 border-bottom-0">Order Services</th>
																<th class="wd-10 border-bottom-0">Start Date</th>
																<th class="wd-10 border-bottom-0">End Date</th>
																<th class="wd-15 border-bottom-0">Status</th>
																<th class="wd-15 border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-globe text-primary"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Domain Register</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">www.beauty.com</small>
																		</div>
																	</div>
																</td>
																<td class="fs-13 text-muted">12-2-2020</td>
																<td class="fs-13 text-muted">15-2-2020</td>
																<td>
																	<span class="badge badge-success">Paid</span>
																</td>
																<td class="">
																	<a href="#" class="btn btn-outline-primary">Renewal</a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="fa fa-bullhorn text-pink"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Digital Marketing</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Angular Project</small>
																		</div>
																	</div>
																</td>
																<td class=" fs-13 text-muted">16-2-2020</td>
																<td class="fs-13 text-muted">18-2-2020</td>
																<td>
																	<span class="badge badge-danger">Pending</span>
																</td>
																<td class="">
																	<a href="#" class="btn btn-outline-primary">Renewal</a>
																</td>
															</tr>
															<tr class="border-bottom">
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-airplay text-info"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Website Maintenance</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Wordpress Template</small>
																		</div>
																	</div>
																</td>
																<td class="fs-13 text-muted">10-2-2020</td>
																<td class="fs-13 text-muted">18-2-2020</td>
																<td>
																	<span class="badge badge-success">Paid</span>
																</td>
																<td class="">
																	<a href="#" class="btn btn-outline-primary">Renewal</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex">
																		<div class="table_img brround bg-light mr-3">
																			<span class="feather feather-server text-orange"></span>
																		</div>
																		<div class="mr-3 mt-0 mt-sm-3 d-block">
																			<h6 class="mb-0 fs-14 font-weight-semibold">Hosting Services</h6>
																			<div class="clearfix"></div>
																			<small class="text-muted">Beauty Parlour</small>
																		</div>
																	</div>
																</td>
																<td class="fs-13 text-muted">9-2-2021</td>
																<td class="fs-13 text-muted">15-2-2021</td>
																<td>
																	<span class="badge badge-danger">Pending</span>
																</td>
																<td class="">
																	<a href="#" class="btn btn-outline-primary">Renewal</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane " id="tab7">
												<div class="card-body">
													<div class="form-group">
														<label class="form-label">Projects</label>
														<select name="projects"  class="form-control custom-select select2">
															<option value="0">Choose Project</option>
															<option value="1">Project 01</option>
															<option value="2">Project 02</option>
															<option value="3">Project 03</option>
															<option value="4">Project 04</option>
															<option value="5">Project 05</option>
														</select>
													</div>
													<div class="form-group">
														<label class="form-label">Priority</label>
														<select name="projects"  class="form-control custom-select select2">
															<option value="0">Choose One</option>
															<option value="1">High</option>
															<option value="2">Medium</option>
															<option value="3">Low</option>
														</select>
													</div>
													<div class="form-group">
														<label class="form-label">Note:</label>
														<textarea class="form-control" rows="3">Some text here...</textarea>
													</div>
													<a href="#" class="btn btn-primary mt-4">Submit</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-0">
										<h4 class="card-title">Recent Invoices</h4>
										<div class="card-options pr-3">
											<div class="dropdown">
												<a href="" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i></a>
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
									<div class="card-body p-0 pt-4">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap border-top mb-0 invoice-table">
												<thead>
													<tr>
														<th class="wd-10p border-bottom-0">Invoice ID</th>
														<th class="wd-15p border-bottom-0">Projects</th>
														<th class="wd-15p border-bottom-0">Amount</th>
														<th class="wd-20p border-bottom-0">Status</th>
														<th class="wd-15p border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr class="border-bottom">
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md bradius fs-20 bg-success-transparent text-success">
																	<span class="feather feather-check"></span>
																</span>
																<div class="ml-3 d-block mt-0 mt-sm-1">
																	<h6 class="mb-0 fs-14 font-weight-semibold">#864135</h6>
																	<div class="clearfix"></div>
																	<small class="text-muted fs-11">05 Jan 2020</small>
																</div>
															</div>
														</td>
														<td class="text-left">
															<h6 class="mb-0 fs-14 font-weight-semibold">Angular Department</h6>
														</td>
														<td class="text-left fs-13"><h6 class="mb-0 fs-14 font-weight-semibold">$15,426</h6></td>
														<td>
															<span class="badge badge-success-light">Paid</span>
														</td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md bradius fs-20 bg-orange-transparent text-orange">
																	<span class="feather feather-chevron-up"></span>
																</span>
																<div class="ml-3 d-block mt-0 mt-sm-1">
																	<h6 class="mb-0 fs-14 font-weight-semibold">#456820</h6>
																	<div class="clearfix"></div>
																	<small class="text-muted fs-11">03 Jan 2020</small>
																</div>
															</div>
														</td>
														<td class="text-left">
															<h6 class="mb-0 fs-14 font-weight-semibold">Admin Template</h6>
														</td>
														<td class="text-left fs-13"><h6 class="mb-0 fs-14 font-weight-semibold">$1421</h6></td>
														<td>
															<span class="badge badge-orange-light">Overdue</span>
														</td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md bradius fs-20 bg-warning-transparent text-warning">
																	<span class="feather feather-chevron-left"></span>
																</span>
																<div class="ml-3 d-block mt-0 mt-sm-1">
																	<h6 class="mb-0 fs-14 font-weight-semibold">#956298</h6>
																	<div class="clearfix"></div>
																	<small class="text-muted fs-11">29 Dec 2019</small>
																</div>
															</div>
														</td>
														<td class="text-left">
															<h6 class="mb-0 fs-14 font-weight-semibold">HTML Update</h6>
														</td>
														<td class="text-left fs-13"><h6 class="mb-0 fs-14 font-weight-semibold">$8427</h6></td>
														<td>
															<span class="badge badge-warning-light">Unpaid</span>
														</td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md bradius fs-20 bg-success-transparent text-success">
																	<span class="feather feather-check"></span>
																</span>
																<div class="ml-3 d-block mt-0 mt-sm-1">
																	<h6 class="mb-0 fs-14 font-weight-semibold">#190675</h6>
																	<div class="clearfix"></div>
																	<small class="text-muted fs-11">29 Dec 2019</small>
																</div>
															</div>
														</td>
														<td class="text-left">
															<h6 class="mb-0 fs-14 font-weight-semibold">HTML Update</h6>
														</td>
														<td class="text-left fs-13"><h6 class="mb-0 fs-14 font-weight-semibold">$8427</h6></td>
														<td>
															<span class="badge badge-success-light">Paid</span>
														</td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr class="">
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md bradius fs-20 bg-secondary-transparent text-secondary">
																	<span class="feather feather-chevron-down"></span>
																</span>
																<div class="ml-3 d-block mt-0 mt-sm-1">
																	<h6 class="mb-0 fs-14 font-weight-semibold">#067298</h6>
																	<div class="clearfix"></div>
																	<small class="text-muted fs-11">28 Dec 2019</small>
																</div>
															</div>
														</td>
														<td class="text-left">
															<h6 class="mb-0 fs-14 font-weight-semibold">Hosting Template</h6>
														</td>
														<td class="text-left fs-13"><h6 class="mb-0 fs-14 font-weight-semibold">$12,452</h6></td>
														<td>
															<span class="badge badge-secondary-light">Draft</span>
														</td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
																<a href="#" class="action-btns1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
																<ul class="dropdown-menu dropdown-menu-right" role="menu">
																	<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
																	<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
																	<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
																	<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-9 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Project</h4>
									</div>
									<div class="card-body pt-3 p-0">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap border-top  mb-0 projecttable">
												<thead>
													<tr>
														<th class="border-bottom-0">Project Title </th>
														<th class="border-bottom-0">Project Status</th>
														<th class="border-bottom-0"></th>
														<th class="border-bottom-0">Priority</th>
														<th class="border-bottom-0">Work Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex">
																<div class="table_img brround bg-light mr-3">
																	<img src="{{URL::asset('assets/images/png/task1.png')}}" alt="img" class="">
																</div>
																<div class="mr-3 mt-0 mt-sm-3 d-block">
																	<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Ui Design <span class="badge badge-primary-light">Medium</span></h5>
																</div>
															</div>
														</td>
														<td>
															<div class="progress progress-sm d-block">
																<div class="progress-bar bg-orange w-25"></div>
															</div>
														</td>
														<td><span class="text-orange fs-15">27%</span></td>
														<td><span class="text-muted">Low</span></td>
														<td><span class="text-warning fs-15">On Hold <i class="fe fe-alert-circle ml-1"></i></span></td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<div class="table_img brround bg-light mr-3">
																	<img src="{{URL::asset('assets/images/photos/jquery.png')}}" alt="img" class="">
																</div>
																<div class="mr-3 mt-0 mt-sm-3 d-block">
																	<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Jquery Issues Fixed</h5>
																</div>
															</div>
														</td>
														<td>
															<div class="progress progress-sm d-block">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="text-success fs-15">97%</span></td>
														<td><span class="text-muted">High</span></td>
														<td><span class="text-success fs-15">Completed </span></td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<div class="table_img brround bg-light mr-3">
																	<span class="feather feather-globe text-primary"></span>
																</div>
																<div class="mr-3 mt-0 mt-sm-3 d-block">
																	<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Website Redesign</h5>
																</div>
															</div>
														</td>
														<td>
															<div class="progress progress-sm d-block">
																<div class="progress-bar bg-warning w-75"></div>
															</div>
														</td>
														<td><span class="text-warning fs-15">75%</span></td>
														<td><span class="text-muted">Low</span></td>
														<td><span class="text-primary fs-15">On Progress </span></td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<div class="table_img brround bg-light mr-3">
																	<img src="{{URL::asset('assets/images/png/task3.png')}}" alt="img" class="">
																</div>
																<div class="mr-3 mt-0 mt-sm-3 d-block">
																	<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Angular Development <span class="badge badge-orange-light ml-1">Urgent</span></h5>
																</div>
															</div>
														</td>
														<td>
															<div class="progress progress-sm d-block">
																<div class="progress-bar bg-success w-95"></div>
															</div>
														</td>
														<td><span class="text-success fs-15">95%</span></td>
														<td><span class="text-muted">Medium</span></td>
														<td><span class="text-success fs-15">Completed</span></td>
														<td class="text-left">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Calendar</h4>
									</div>
									<div class="card-body pt-0">
										<div class="custom-calendar"></div>
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

			<!-- New Project Modal -->
			<div class="modal fade"  id="newprojectmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Project</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project ID</label>
										<input class="form-control" placeholder="Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project Title</label>
										<input class="form-control" placeholder="Text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Department:</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Department">
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
										<label class="form-label">Project Priority:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
											<option label="Select Priority"></option>
											<option value="1">High</option>
											<option value="2">Medium</option>
											<option value="3">Low</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Enter Client">
											<option label="Enter Client"></option>
											<option value="1">Client 01</option>
											<option value="2">Client 02</option>
											<option value="3">Client 03</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">($)Price:</label>
										<input class="form-control" placeholder="Enter Price eg:$69.00">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Assigned Team:</label>
								<select name="attendance"  class="form-control custom-select select2" multiple="multiple" data-placeholder="Select Employee">
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
								<label class="form-label">Upload Files:</label>
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
									<input type="radio" class="custom-control-input" name="example-radios1" value="option5">
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">On going</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">Pending</span>
								</label>
								<label class="custom-control custom-radio success mr-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option4">
									<span class="custom-control-label">Not Started</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option6">
									<span class="custom-control-label">Canceled</span>
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
			<!-- New Project Modal -->

@endsection('modals')

@section('scripts')

		<!-- INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Chartjs rounded-barchart -->
		<script src="{{URL::asset('assets/plugins/chart.min/chart.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

		<!-- INTERNAL Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

		<!-- INTERNAL Pg-calendar-master js -->
		<script src="{{URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.full.min.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/index5.js')}}"></script>
		<script src="{{URL::asset('assets/js/client/client-sidemenuchart.js')}}"></script>

@endsection
