@extends('layouts.empapp')

@section('styles')

		<!-- INTERNAL Pg-calendar-master css -->
		<link href="{{URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.css')}}" rel="stylesheet" />

		<!--- INTERNAL jvectormap css-->
		<link href="{{URL::asset('assets/plugins/jvectormap/jqvmap.css')}}" rel="stylesheet" />

		<!-- INTERNAL Time picker css -->
		<link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="{{URL::asset('assets/plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- INTERNAL jQuery-countdowntimer css -->
		<link href="{{URL::asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.css')}}" rel="stylesheet" />

		<!-- INTERNAL Daterangepicker css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.css')}}">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Employee<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<a href="#" class="btn btn-primary mr-3 mt-3 mt-lg-0 mb-3 mb-md-0" data-toggle="modal" data-target="#applyleaves">Apply Leaves</a>
									<div class="d-flex">
										<div class="header-datepicker mr-3">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-calendar"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="19 Feb 2020" type="text">
											</div>
										</div>
										<div class="header-datepicker mr-3">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-clock"></i>
													</div><!-- input-group-text -->
												</div><!-- input-group-prepend -->
												<input id="tpBasic" type="text" placeholder="09:30am" class="form-control input-small">
											</div>
										</div><!-- wd-150 -->
									</div>
									<div class="d-lg-flex d-block">
										<div class="btn-list">
											<button  class="btn btn-primary" data-toggle="modal" data-target="#clockinmodal">Clock In</button>
											<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
											<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
											<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Completed Projects</h5>
													<h3 class="mb-0 mt-auto text-success">51</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-file-text"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Total Attendance</h5>
													<h3 class="mb-0 mt-auto text-primary">162</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Absent</h5>
													<h3 class="mb-0 mt-auto text-secondary">12</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-secondary my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Awards</h5>
													<h3 class="mb-0 mt-auto text-danger">0</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-danger my-auto  float-right"> <i class="feather feather-award"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-8 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0 responsive-header">
										<h4 class="card-title">Salary And Attendance chart</h4>
										<div class="card-options mr-3">
											<div class="btn-list">
												<a href="#" class="btn btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-light4 mr-2 my-auto"></span>Attendance</a>
												<a href="#" class="btn btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-primary mr-2 my-auto"></span>Salary</a>
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
										<canvas id="chartbar" class="h-400"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Recent Activity</h4>
									</div>
									<div class="pt-4">
										<div class="table-responsive">
											<table class="table transaction-table mb-0 text-nowrap">
												<tbody>
													<tr class="border-bottom">
														<td class="d-flex pl-6">
															<span class="bg-pink pink-border brround d-block mr-5 mt-1 h-5 w-5"></span>
															<div class="my-auto">
																<span class="mb-1 font-weight-semibold fs-17">You Late to day</span>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Your office intime is 9:42</small>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Late time 14min</small>
															</div>
														</td>
														<td class="text-right pr-6">
															<a class="text-muted d-block fs-16" href="#">Just Now</a>
														</td>
													</tr>
													<tr class="border-bottom">
														<td class="d-flex pl-6">
															<span class="bg-warning warning-border brround d-block mr-5 mt-1 h-5 w-5"></span>
															<div class="my-auto">
																<span class="mb-1 font-weight-semibold fs-17">Below for those interested</span>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Undoubtable source</small>
															</div>
														</td>
														<td class="text-right pr-6">
															<a class="text-muted d-block fs-16" href="#">1 Hour ago</a>
														</td>
													</tr>
													<tr class="border-bottom">
														<td class="d-flex pl-6">
															<span class="bg-primary primary-border brround d-block mr-5 mt-1 h-5 w-5"></span>
															<div class="my-auto">
																<span class="mb-1 font-weight-semibold fs-17">Success! your Lunch Time</span>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Lunch time 1:30 To 2:30</small>
															</div>
														</td>
														<td class="text-right pr-6">
															<a class="text-muted d-block fs-16" href="#">4 hours ago</a>
														</td>
													</tr>
													<tr class="border-bottom">
														<td class="d-flex pl-6">
															<span class="bg-success success-border brround d-block mr-5 mt-1 h-5 w-5"></span>
															<div class="my-auto">
																<span class="mb-1 font-weight-semibold fs-17">Many desktops Publishing The</span>
																<div class="clearfix"></div>
																<span class="mb-1 font-weight-semibold fs-17"> versions are evolved</span>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Page editors now use...</small>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Late time 14min</small>
															</div>
														</td>
														<td class="text-right pr-6">
															<a class="text-muted d-block fs-16" href="#">5 hours ago</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex pl-6">
															<span class="bg-orange orange-border brround d-block mr-5 mt-1 h-5 w-5"></span>
															<div class="my-auto">
																<span class="mb-1 font-weight-semibold fs-17">Below for those interested</span>
																<div class="clearfix"></div>
																<small class="text-muted fs-14">Birthday on Feb 16</small>
															</div>
														</td>
														<td class="text-right pr-6">
															<a class="text-muted d-block fs-16" href="#">11 Jan 2020</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card">
									<div class="p-0">
										<div class="card-header border-0">
											<h4 class="card-title">Calendar</h4>
										</div>
										<div class="calendar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Up Comming Holidays</h4>
									</div>
									<div class="card-body mt-1">
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-20">3</span>
													<span class="month fs-13">FEB</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Office Off</h6>
													<span class="clearfix"></span>
													<small>Sunday</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">3 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-purple-transparent bradius mr-3"><span class="date fs-20">10</span>
													<span class="month fs-13">FEB</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Public Holiday</h6>
													<span class="clearfix"></span>
													<small>Enjoy your day off</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">13 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-orange-transparent bradius mr-3"><span class="date fs-20">20</span>
													<span class="month fs-13">MAR</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Office Off</h6>
													<span class="clearfix"></span>
													<small>Sunday</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">23 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-warning-transparent bradius mr-3"><span class="date fs-20">17</span>
													<span class="month fs-13">FEB</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Optional Holiday</h6>
													<span class="clearfix"></span>
													<small>Sunday</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">20 days to left</p>
											</div>
										</div>
										<div class="mb-0">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-pink-transparent bradius mr-3"><span class="date fs-20">13</span>
													<span class="month fs-13">MAR</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Conference</h6>
													<span class="clearfix"></span>
													<small>Money Update</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">35 days to left</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Leave Balance</h4>
										<div class="card-options mr-3">
											<a href="" class="btn btn-block btn-primary pr-3 pl-3">Apply For Leave</a>
										</div>
									</div>
									<div class="table-responsive leave_table fs-13 mt-5">
										<table class="table mb-0 text-nowrap">
											<thead class="border-top">
												<tr>
													<th class="text-left">Balance</th>
													<th class="text-left">Used</th>
													<th class="text-center">Available</th>
													<th class="text-center">Allowance</th>
												</tr>
											</thead>
											<tbody>
												<tr class="border-bottom fs-15">
													<td class="text-center d-flex"><span class="bg-primary brround d-block mr-3 mt-1 h-3 w-3"></span><span class="font-weight-semibold fs-15">Vacation</span></td>
													<td class="font-weight-semibold fs-15">16.5</td>
													<td class="text-center text-muted fs-15">3.5</td>
													<td class="text-center text-muted">20</td>
												</tr>
												<tr class="border-bottom fs-15">
													<td class="text-center d-flex"><span class="bg-orange brround d-block mr-3 mt-1 h-3 w-3"></span><span class="font-weight-semibold fs-15">Sick Leave</span></td>
													<td class="font-weight-semibold">4.5</td>
													<td class="text-center text-muted">16</td>
													<td class="text-center text-muted">20</td>
												</tr>
												<tr class="border-bottom fs-15">
													<td class="text-center d-flex"><span class="bg-warning brround d-block mr-3 mt-1 h-3 w-3"></span><span class="font-weight-semibold fs-15">Unpaid leave</span></td>
													<td class="font-weight-semibold">5</td>
													<td class="text-center text-muted">360</td>
													<td class="text-center text-muted">365</td>
												</tr>
												<tr class="border-bottom fs-15">
													<td class="text-center d-flex"><span class="bg-info brround d-block mr-3 mt-1 h-3 w-3"></span><span class="font-weight-semibold fs-15">Work from Home</span></td>
													<td class="font-weight-semibold">8</td>
													<td class="text-center text-muted">22</td>
													<td class="text-center text-muted">30</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="row mb-0 pb-0">
										<div class="col-4 text-center py-5 border-right">
											<h5>Vacation</h5>
											<div class="justify-content-center text-center d-flex my-auto"><span class="text-primary fs-20 font-weight-semibold">8 <span class="my-auto fs-14 font-weight-normal text-light">/</span> 16</span></div>
										</div>
										<div class="col-4 text-center py-5 border-right">
											<h5>Sick leave</h5>
											<div class="justify-content-center text-center d-flex my-auto"><span class="text-danger fs-20 font-weight-semibold">4.5 <span class="my-auto fs-14 font-weight-normal text-light">/</span> 10</span></div>
										</div>
										<div class="col-4 text-center py-5 border-right">
											<h5>Unpaid leave</h5>
											<div class="justify-content-center text-center d-flex my-auto"><span class="fs-20 font-weight-semibold">5 <span class="my-auto fs-14 font-weight-normal text-light">/</span> 365</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header  border-bottom-0">
										<h4 class="card-title">Recent Job Application</h4>
										<div class="card-options">
											<a href="" class="mr-0  fs-25 option-dots text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="feather feather-more-vertical"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="feather feather-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="table-responsive recent-jobstable pt-4">
										<div class="btn-task">
											<a href="#" class="btn btn-primary">New Task<i class="feather feather-plus"></i></a>
										</div>
										<table class="table table-vcenter text-nowrap border-top mb-0" id="assigntask">
											<thead>
												<tr>
													<th class="wd-10p border-bottom-0">S.no</th>
													<th class="wd-15p border-bottom-0">Project Title</th>
													<th class="wd-20p border-bottom-0">Assigned to</th>
													<th class="w-5p border-bottom-0">Due Date</th>
													<th class="wd-15p border-bottom-0">Request Status</th>
													<th class="wd-10p border-bottom-0">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-left fs-13">1</td>
													<td class="pl-0">
														<div class="d-flex">
															<div class="table_img brround bg-orange-transparent  mr-3">
																<img src="{{URL::asset('assets/images/photos/html.png')}}" alt="img" class="brround">
															</div>
															<div class="my-auto">
																<h5 class="mb-0 font-weight-medium">Html Business Template</h5>
															</div>
														</div>
													</td>
													<td class="text-left">
														<div class="avatar-list avatar-list-stacked">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/3.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
														</div>
													</td>
													<td class="text-left">19 Feb 2020</td>
													<td class="text-left"><a href="" class="btn btn-outline-success btn-block">Completed</a></td>
													<td class="text-left d-flex">
														<a href="#" class="action-btns1"><i class="feather feather-mail primary text-primary"></i></a>
														<label class="custom-control custom-checkbox-md">
															<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
															<span class="custom-control-label-md success"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td class="text-left">2</td>
													<td class="pl-0">
														<div class="d-flex">
															<div class="table_img brround bg-pink-transparent  mr-3">
																<img src="{{URL::asset('assets/images/photos/xd.png')}}" alt="img" class="brround">
															</div>
															<div class="my-auto">
																<h5 class="mb-0 font-weight-medium">Adobe xd Education Template</h5>
															</div>
														</div>
													</td>
													<td class="text-left">
														<div class="avatar-list avatar-list-stacked">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/15.jpg')}}" alt="img">
														</div>
													</td>
													<td class="text-left">24 Feb 2020</td>
													<td class="text-left"><a href="" class="btn btn-block btn-primary">Accept</a></td>
													<td class="text-left d-flex">
														<a href="#" class="action-btns1"><i class="feather feather-mail primary text-primary"></i></a>
														<label class="custom-control custom-checkbox-md">
															<input type="checkbox" class="custom-control-input-success" name="example-checkbox2" value="option2">
															<span class="custom-control-label-md success"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td class="text-left">3</td>
													<td class="pl-0">
														<div class="d-flex">
															<div class="table_img brround bg-warning-transparent  mr-3">
																<img src="{{URL::asset('assets/images/photos/js.png')}}" alt="img" class="brround">
															</div>
															<div class="my-auto">
																<h5 class="mb-0 font-weight-medium">js recent Plugin Updated</h5>
															</div>
														</div>
													</td>
													<td class="text-left">
														<div class="avatar-list avatar-list-stacked">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/7.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/8.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/9.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="img">
														</div>
													</td>
													<td class="text-left">5 Mar 2020</td>
													<td class="text-left"><a href="" class="btn btn-block btn-primary">Accept</a></td>
													<td class="text-left d-flex">
														<a href="#" class="action-btns1"><i class="feather feather-mail primary text-primary"></i></a>
														<label class="custom-control custom-checkbox-md">
															<input type="checkbox" class="custom-control-input-success" name="example-checkbox3" value="option3">
															<span class="custom-control-label-md success"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td class="text-left">4</td>
													<td class="pl-0">
														<div class="d-flex">
															<div class="table_img brround bg-pink-transparent  mr-3">
																<img src="{{URL::asset('assets/images/photos/sass.png')}}" alt="img" class="brround">
															</div>
															<div class="my-auto">
																<h5 class="mb-0 font-weight-medium">Sass Development Program</h5>
															</div>
														</div>
													</td>
													<td class="text-left">
														<div class="avatar-list avatar-list-stacked">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/5.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="img">
														</div>
													</td>
													<td class="text-left">14 Mar 2020</td>
													<td class="text-left"><a href="" class="btn btn-block btn-outline-success">Completed</a></td>
													<td class="text-left  d-flex">
														<a href="#" class="action-btns1"><i class="feather feather-mail primary text-primary"></i></a>
														<label class="custom-control custom-checkbox-md">
															<input type="checkbox" class="custom-control-input-success" name="example-checkbox4" value="option4" checked>
															<span class="custom-control-label-md success"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td class="text-left">5</td>
													<td class="pl-0">
														<div class="d-flex">
															<div class="table_img brround bg-danger-transparent  mr-3">
																<img src="{{URL::asset('assets/images/photos/angular.png')}}" alt="img" class="brround">
															</div>
															<div class="my-auto">
																<h5 class="mb-0 font-weight-medium">Angular Development</h5>
															</div>
														</div>
													</td>
													<td class="text-left">
														<div class="avatar-list avatar-list-stacked">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/11.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/14.jpg')}}" alt="img">
															<img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img">
														</div>
													</td>
													<td class="text-left">20 Mar 2020</td>
													<td class="text-left"><a href="" class="btn btn-block btn-primary">Accept</a></td>
													<td class="text-left d-flex">
														<a href="#" class="action-btns1"><i class="feather feather-mail primary text-primary"></i></a>
														<label class="custom-control custom-checkbox-md">
															<input type="checkbox" class="custom-control-input-success" name="example-checkbox5" value="option5">
															<span class="custom-control-label-md success"></span>
														</label>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Up Comming Birthdays</h4>
										<div class="card-options">
											<a href="#" class="btn btn-outline-light">View All</a>
										</div>
									</div>
									<div class="card-body p-3">
										<div class="table-responsive">
											<table class="table text-nowrap mb-0 text-nowrap">
												<tbody>
													<tr>
														<td class="d-flex">
															<img class="w-8 h-8 bradius mr-3" src="{{URL::asset('assets/images/users/4.jpg')}}" alt="media1">
															<div class="my-auto">
																<a href="#" class="mb-1 font-weight-semibold fs-16">Jennifer Kerr</a>
																<p class="text-muted fs-13 mb-0">19 Feb 2020 26 Years Old</p>
															</div>
														</td>
														<td class="text-right">
															<a class="text-success d-block fs-16" href="#">Today</a>
															<a class="btn btn-outline-orange mt-1" href="#"><i class="fa fa-birthday-cake mr-2"></i>Wish Now</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img class="w-8 h-8 bradius mr-3" src="{{URL::asset('assets/images/users/6.jpg')}}" alt="media1">
															<div class="my-auto">
																<a href="#" class="mb-1 font-weight-semibold fs-16">Rebecca Cameron</a>
																<p class="text-muted fs-13 mb-0">19 Feb 2020 26 Years Old</p>
															</div>
														</td>
														<td class="text-right">
															<a class="text-muted d-block" href="#">22 Days To Left</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img class="w-8 h-8 bradius mr-3" src="{{URL::asset('assets/images/users/2.jpg')}}" alt="media1">
															<div class="my-auto">
																<a href="#" class="mb-1 font-weight-semibold fs-16">Jessica Johnston</a>
																<p class="text-muted fs-13 mb-0">19 Feb 2020 26 Years Old</p>
															</div>
														</td>
														<td class="text-right">
															<a class="text-muted d-block" href="#">22 Days To Left</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img class="w-8 h-8 bradius mr-3" src="{{URL::asset('assets/images/users/7.jpg')}}" alt="media1">
															<div class="my-auto">
																<a href="#" class="mb-1 font-weight-semibold fs-16">Lily Ball</a>
																<p class="text-muted fs-13 mb-0">19 Feb 2020 26 Years Old</p>
															</div>
														</td>
														<td class="text-right">
															<a class="text-muted d-block" href="#">22 Days To Left</a>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
															<img class="w-8 h-8 bradius mr-3" src="{{URL::asset('assets/images/users/12.jpg')}}" alt="media1">
															<div class="my-auto">
																<a href="#" class="mb-1 font-weight-semibold fs-16">Yadira Acklin</a>
																<p class="text-muted fs-13 mb-0">19 Feb 2020 26 Years Old</p>
															</div>
														</td>
														<td class="text-right">
															<a class="text-muted d-block" href="#">22 Days To Left</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

@endsection('content')

@section('modals')

			<!--Clock-IN Modal -->
			<div class="modal fade"  id="clockinmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><span class="feather feather-clock  mr-1"></span>Clock In</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="countdowntimer">
								<span id="clocktimer" class="border-0"></span>
								<label class="form-label">Current Time</label>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1" disabled="">
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2">
									<option value="0">Select</option>
									<option value="1">Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Note:</label>
								<textarea class="form-control" rows="3">Some text here...</textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Clock In</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Clock-IN Modal  -->

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

			<!--Apply Leaves Modal -->
			<div class="modal fade"  id="applyleaves">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Apply Leaves</h5>
							<button  class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="leave-types">
								<div class="form-group">
									<label class="form-label">Leaves Dates</label>
									<select name="projects"  class="form-control custom-select select2" id="daterange-categories">
										<option value="single">Single Leaves</option>
										<option value="multiple">Multiple Leaves</option>
									</select>
								</div>
								<div class="leave-content active" id="single">
									<div class="form-group">
										<label class="form-label">Date Range:</label>
										<div class="input-group">
											<input type="text" name="singledaterange"  class="form-control" placeholder="select dates"/>
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="bx bx-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="leave-content" id="multiple">
									<div class="form-group">
										<label class="form-label">Date Range:</label>
										<div class="input-group">
											<input type="text" name="daterange"  class="form-control" placeholder="select dates"/>
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="bx bx-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Leaves Types</label>
									<select name="projects"  class="form-control custom-select select2" data-placeholder="Select">
										<option label="Select"></option>
										<option value="1">Half Day Leave</option>
										<option value="2">Casual Leaves</option>
										<option value="3">Sick Leaves</option>
										<option value="4">Maternity Leaves</option>
										<option value="5">Paternity Leaves</option>
										<option value="6">Annual Leaves</option>
										<option value="6">Unpaid Leaves</option>
										<option value="8">Other Leaves</option>
									</select>
								</div>
								<div class="form-group">
									<label class="form-label">Reason:</label>
									<textarea class="form-control" rows="5">Some text here...</textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="">
								<label class="mb-0 font-weight-semibold">Selected Days:</label>
								<span class="badge badge-danger badge-pill ml-2">2</span>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
								<a href="#" class="btn btn-primary">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Apply Leaves Modal  -->

@endsection('modals')

@section('scripts')

		<!-- INTERNAL Datepicker js -->
		<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

		<!-- INTERNAL Apexchart js-->
		<script src="{{URL::asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL Timepicker js -->
		<script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

		<!--INTERNAL Chart js -->
		<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL Chartjs rounded-barchart -->
		<script src="{{URL::asset('assets/plugins/chart.min/chart.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

		<!-- INTERNAL Data tables -->
		<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

		<!-- INTERNAL Pg-calendar-master js -->
		<script src="{{URL::asset('assets/plugins/pg-calendar-master/pignose.calendar.full.min.js')}}"></script>

		<!-- INTERNAL jQuery-countdowntimer js -->
		<script src="{{URL::asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js')}}"></script>

		<!-- INTERNAL Daterangepicker js-->
		<script src="{{URL::asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/index2.js')}}"></script>
		<script src="{{URL::asset('assets/js/employee/emp-sidemenuchart.js')}}"></script>

@endsection
