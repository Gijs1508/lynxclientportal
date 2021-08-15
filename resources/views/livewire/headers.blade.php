@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Headers</h4>
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

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Header Style1</h3>
									</div>
									<div class="">
										<div class="header header-style1">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{url('index')}}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
														<img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<div class="dropdown d-none d-md-flex mt-1" >
															<a  class="nav-link icon requestfullscreen">
																<i class="fe fe-maximize floating"></i>
															</a>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fe fe-message-square"></i>
																	</div>
																	<div>
																		<div>Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-danger">
																		<i class="fe fe-shopping-cart"></i>
																	</div>
																	<div>
																		<div> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-success">
																		<i class="fe fe-calendar"></i>
																	</div>
																	<div>
																		<div> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-warning">
																		<i class="fe fe-airplay"></i>
																	</div>
																	<div>
																		<div>Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-mail floating"></i>
																<span class=" nav-unread badge badge-warning  badge-pill">2</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item text-center">2 New Messages</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<div>
																		<strong>Madeleine</strong> Hey! there I' am available....
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																	<div>
																		<strong>Anthony</strong> New product Launching...
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																	<div>
																		<strong>Olivia</strong> New Schedule Realease......
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
														<div class="dropdown">
															<a href="#" class="nav-link pr-0 leading-none mt-1" data-toggle="dropdown">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																	<span class="text-center user-semi-title text-dark">App Developer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{url('login')}}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse1">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Header Style2</h3>
									</div>
									<div class="">
										<div class="header py-4 bg-primary header-style2">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{url('index')}}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
														<img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<div class="dropdown d-none d-md-flex mt-1" >
															<a  class="nav-link icon requestfullscreen">
																<i class="fe fe-maximize floating"></i>
															</a>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																	<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fe fe-message-square"></i>
																	</div>
																	<div>
																		<div>Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-danger">
																		<i class="fe fe-shopping-cart"></i>
																	</div>
																	<div>
																		<div> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-success">
																		<i class="fe fe-calendar"></i>
																	</div>
																	<div>
																		<div> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-warning">
																		<i class="fe fe-airplay"></i>
																	</div>
																	<div>
																		<div>Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-mail floating"></i>
																<span class=" nav-unread badge badge-warning  badge-pill">2</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item text-center">2 New Messages</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
																	<div>
																		<strong>Madeleine</strong> Hey! there I' am available....
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
																	<div>
																		<strong>Anthony</strong> New product Launching...
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center" style="background-image: url({{URL::asset('assets/images/users/8.jpg')}})"></span>
																	<div>
																		<strong>Olivia</strong> New Schedule Realease......
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
														<div class="dropdown">
															<a href="#" class="nav-link pr-0 leading-none mt-1" data-toggle="dropdown">
																<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																	<span class="text-center user-semi-title text-dark">App Developer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{url('login')}}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0 text-white" data-toggle="collapse" data-target="#headerMenuCollapse2">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Header Style 3 with Searchbox</h3>
									</div>
									<div class="">
										<!--app header-->
										<div class="header header-style3">
											<div class="container-fluid">
												<div class="d-flex">
													<a class="header-brand" href="{{url('index')}}">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
														<img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
															<i class="fe fe-search"></i>
														</a>
														<div class="mt-1">
															<form class="form-inline">
																<div class="search-element mt-1 d-none d-lg-flex">
																	<input type="search" class="form-control header-search" placeholder="Search�" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" >
																		<i class="fe fe-search"></i>
																	</button>
																</div>
															</form>
														</div><!-- SEARCH -->
														<div class="dropdown   header-fullscreen pl-5" >
															<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
																<i class="fe fe-maximize"></i>
															</a>
														</div>
														<div class="dropdown pl-4 d-md-block d-none">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																	<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fe fe-message-square"></i>
																	</div>
																	<div>
																		<div>Message Sent.</div>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-danger">
																		<i class="fe fe-shopping-cart"></i>
																	</div>
																	<div>
																		<div> Order Placed</div>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-success">
																		<i class="fe fe-calendar"></i>
																	</div>
																	<div>
																		<div> Event Started</div>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg bg-warning">
																		<i class="fe fe-airplay"></i>
																	</div>
																	<div>
																		<div>Your Admin lanuched</div>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
																<div class=" text-center p-2 border-top">
																	<a href="#" class="">View All Notifications</a>
																</div>
															</div>
														</div>
														<div class="dropdown mt-1">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span>
																	<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md brround">
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center user pb-0">John Thomson</a>
																	<span class="text-center user-semi-title text-dark">App Developer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<a class="dropdown-item" href="{{url('login')}}">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/app header-->
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

@endsection('modals')

@section('scripts')

@endsection
