@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Chat</h4>
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
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="tile tile-alt mb-0 border-0" id="messages-main">
										<div class="ms-menu">
											<div class="tab-menu-heading border-top-0">
												<div class="tabs-menu1 px-3">
													<ul class="nav">
														<li><a href="#tab-7" class="active" data-toggle="tab">Chat</a></li>
														<li><a href="#tab-8" data-toggle="tab" class="">Contacts</a></li>
													</ul>
												</div>
											</div>
											<div class="tab-content">
												<div class="tab-pane active" id="tab-7">
													<ul class="list-group lg-alt chat-conatct-list" id="ChatList">
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Davil Parnell</div>
																	<small class="list-group-item-text text-muted">Fierent fastidii recteque ad pro</small>
																</div>
																<span class="chat-time text-muted">2 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Ann Watkinson</div>
																	<small class="list-group-item-text text-muted">Cum sociis natoque penatibus </small>
																</div>
																<span class="chat-time text-muted">10 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Marse Walter</div>
																	<small class="list-group-item-text text-muted">Suspendisse sapien ligula</small>
																</div>
																<span class="chat-time text-muted">15 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="lv-avatar float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/3.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Jeremy Robbins</div>
																	<small class="list-group-item-text text-muted">Phasellus porttitor tellus nec</small>
																</div>
																<span class="chat-time text-muted">30 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="lv-avatar float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/9.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Reginald Horace</div>
																	<small class="list-group-item-text text-muted">Quisque consequat arcu eget</small>
																</div>
																<span class="chat-time text-muted">50 min</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/6.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Shark Henry</div>
																	<small class="list-group-item-text text-muted">Nam lobortis odio et leo maximu</small>
																</div>
																<span class="chat-time text-muted">1 day</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">Paul Van Dack</div>
																	<small class="list-group-item-text text-muted">Nam posuere purus sed velit auctor sodales</small>
																</div>
																<span class="chat-time text-muted">2 days</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="lv-avatar float-left pr-2">
																	<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading text-default font-weight-semibold">James Anderson</div>
																	<small class="list-group-item-text text-muted">Vivamus imperdietsag</small>
																</div>
																<span class="chat-time text-muted">2 days</span>
															</a>
														</li>
													</ul>
												</div>
												<div class="tab-pane" id="tab-8">
													<ul class="list-group lg-alt chat-conatct-list" id="ChatList2">
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Davil Parnell</div>
																<small class="list-group-item-text text-muted">davilparnell@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Ann Watkinson</div>
																<small class="list-group-item-text text-muted">annwatkinso@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="{{URL::asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Marse Walter</div>
																<small class="list-group-item-text text-muted">marsewalter@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="{{URL::asset('assets/images/users/3.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Jeremy Robbins</div>
																<small class="list-group-item-text text-muted">jeremyrobbins@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="{{URL::asset('assets/images/users/9.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Reginald Horace</div>
																<small class="list-group-item-text text-muted">reginaldhorace@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="{{URL::asset('assets/images/users/6.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Shark Henry</div>
																<small class="list-group-item-text text-muted">sharkhenry@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="float-left pr-2">
																<img src="{{URL::asset('assets/images/users/7.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">Paul Van Dack</div>
																<small class="list-group-item-text text-muted">paulvandack@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<div class="lv-avatar float-left pr-2">
																<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
															</div>
															<div class="media-body">
																<div class="list-group-item-heading text-default font-weight-semibold">James Anderson</div>
																<small class="list-group-item-text text-muted">jamesanderson@gmail.com</small>
															</div>
															<div class="ml-auto">
																<a data-toggle="dropdown" class="option-dots" href="#">
																	<span class="feather feather-more-vertical"></span>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="">Call</a></li>
																	<li><a href="">Videocall</a></li>
																	<li><a href="">New Message</a></li>
																	<li><a href="">Settings</a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="ms-body">
											<div class="action-header clearfix">
												<div class="float-left hidden-xs d-flex ml-6 chat-user">
													<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround mr-2">
													<div class="align-items-center mt-2">
														<div class="font-weight-semibold">Abigali kelly</div>
														<span class="w-2 h-2 brround bg-success d-inline-block mr-1"></span> <small>active</small>
													</div>
												</div>
												<ul class="ah-actions actions align-items-center">
													<li>
														<a href="#" class="option-dots border">
															<span class="feather feather-phone-call"></span>
														</a>
													</li>
													<li>
														<a href="#" class="option-dots border" data-toggle="tooltip"  title="Archive">
															<span class="feather feather-folder-plus"></span>
														</a>
													</li>
													<li>
														<a href="#" class="option-dots border" data-toggle="tooltip" title="Trash">
															<span class="feather feather-trash-2"></span>
														</a>
													</li>
													<li>
														<a href="#" class="option-dots border" data-toggle="tooltip" title="View Info">
															<span class="feather feather-info"></span>
													 	</a>
													</li>
													<li class="dropdown">
														<a data-toggle="dropdown" class="option-dots border" href="#">
															<span class="feather feather-more-horizontal"></span>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li>
																<a href="">Refresh</a>
															</li>
															<li>
																<a href="">Message Settings</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="chat-body-style" id="ChatBody">
												<div class="message-feed media mt-0">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 09:00</small>
													</div>
												</div>
												<div class="message-feed right">
													<div class="float-right pl-2">
														<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 09:30</small>
													</div>
												</div>
												<div class="message-feed media">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam ex arcumentum
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 09:33</small>
													</div>
												</div>
												<div class="message-feed right">
													<div class="float-right pl-2">
														<img src="{{URL::asset('assets/images/users/5.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 10:10</small>
													</div>
												</div>
												<div class="message-feed media">
													<div class="float-left pr-2">
														<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-md brround">
													</div>
													<div class="media-body">
														<div class="mf-content">
															Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros.
														</div>
														<small class="mf-date"><i class="fa fa-clock-o"></i> 20/05/2020 at 10:24</small>
													</div>
												</div>
											</div>
											<div class="msb-reply">
												<textarea placeholder="What's on your mind..."></textarea>
												<button><span class="feather feather-send"></span></button>
											</div>
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

@endsection('modals')

@section('scripts')

		<!-- INTERNAL Chat js-->
		<script src="{{URL::asset('assets/js/chat.js')}}"></script>

@endsection
