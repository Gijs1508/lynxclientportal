@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Contact-List 02</h4>
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
						<div class="card border">
							<div class="row no-gutters">
								<div class="col-lg-4 col-xl-3">
									<div class="border-right">
										<div class="main-content-left main-content-left-contacts">
											<div class="card-header pb-4">
												<div class="card-title">All Contacts</div>
											</div>
											<div class="main-contacts-list" id="mainContactList">
												<div class="main-contact-label">
													A
												</div>
												<div class="main-contact-item selected">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Arlena Soles</h6><span class="phone">+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1 text-warning"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/1.jpg')}}" class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Athena Manske</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Amalia Peng</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1 text-warning"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Anita Garza</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-label">
													B
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/4.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Bret Guadalupe</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1 text-warning"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/5.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Britney Labares</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/5.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Basil Ambrose</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-label">
													C
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Cinda Hope</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Chassidy Kerr</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Chau Weldy</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-label">
													D
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Daniela Agrawal</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Dori Daring</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1 text-warning"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
												<div class="main-contact-item">
													<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}"  class="avatar avatar-md brround"></div>
													<div class="main-contact-body">
														<h6>Dalton Gracia</h6><span>+1-457-658-856</span>
													</div>
													<div class="main-contact-star">
														<span class="fe fe-star mr-1"></span>
														<a data-toggle="dropdown" href="#">
															<span class="fe fe-more-vertical"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="">Call</a></li>
															<li><a href="">Videocall</a></li>
															<li><a href="">Edit</a></li>
															<li><a href="">Settings</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-xl-9">
									<div class="">
										<div class="main-content-body main-content-body-contacts">
											<div class="main-contact-info-header">
												<div class="media">
													<div class="main-img-user brround">
														<img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="w-100 h-100 brround">
														<a href=""><span class="feather feather-camera"></span></a>
													</div>
													<div class="media-body">
														<h4>Arlena Soles</h4>
														<p>Product Designer</p>
														<nav class="nav">
															<a class="nav-link" href="#"><span class="feather feather-phone-call icon-style-circle1"></span> Call</a>
															<a class="nav-link" href="#"><span class="feather feather-message-square icon-style-circle1"></span> Message</a>
															<a class="nav-link" href="#"><span class="feather feather-plus-circle icon-style-circle1"></span> Add to Group</a>
															<a class="nav-link" href="#"><span class="feather feather-slash icon-style-circle1"></span> Block</a>
														</nav>
													</div>
												</div>
												<div class="main-contact-action">
													<a href="" class="btn btn-white btn-svgs"><span class="feather feather-edit mr-2"></span> Edit <span> Contact</span></a>
													<a href="" class="btn btn-danger btn-svgs"><span class="feather feather-trash-2 mr-2"></span> Delete  <span>Contact</span></a>
												</div>
												<!-- main-contact-action -->
											</div>
											<div class="main-contact-info-body">
												<div class="card-body">
													<div>
														<h6>Biography</h6>
														<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
														<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
													</div>
												</div>
												<div class="media-list pt-0 border-top">
													<div class="media py-4 mt-0">
														<div class="media-body">
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-phone"></i>
																</div>
																<div>
																	<label>Work</label> <span class="font-weight-semibold fs-14">+1 (425) 857 5463</span>
																</div>
															</div>
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-phone"></i>
																</div>
																<div>
																	<label>Personal</label> <span class="font-weight-semibold fs-14">+1 (547) 542 3568</span>
																</div>
															</div>
														</div>
													</div>
													<div class="media py-4 border-top mt-0">
														<div class="media-body">
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-envelope"></i>
																</div>
																<div>
																	<label>Gmail Account</label> <span class="font-weight-semibold fs-14">arlena.soles@gmail.com</span>
																</div>
															</div>
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-envelope"></i>
																</div>
																<div>
																	<label>Other Account</label> <span class="font-weight-semibold fs-14">me@spruko.com</span>
																</div>
															</div>
														</div>
													</div>
													<div class="media py-4 border-top mt-0">
														<div class="media-body">
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-map-marker"></i>
																</div>
																<div>
																	<label>Current Address</label> <span class="font-weight-semibold fs-14">012 Dashboard Apartments, San Francisco, California 13245</span>
																</div>
															</div>
														</div>
													</div>
													<div class="media py-4 border-top mt-0">
														<div class="media-body">
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-map-marker"></i>
																</div>
																<div>
																	<label>Office Address</label> <span class="font-weight-semibold fs-14"> #302-51/5, Z Apartments, Dacid colony, San Francisco, USA</span>
																</div>
															</div>
														</div>
													</div>
													<div class="media mb-0 py-4 border-top mt-0">
														<div class="media-body">
															<div class="d-flex">
																<div class="media-icon bg-light text-primary mr-3 mt-1">
																	<i class="fa fa-clock-o"></i>
																</div>
																<div>
																	<label>Call History</label> <a class="font-weight-semibold fs-14" href="#">Duration of last call: 2m 32sec</a>
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

		<!-- INTERNAL Contact js -->
		<script src="{{URL::asset('assets/js/contact.js')}}"></script>

@endsection
