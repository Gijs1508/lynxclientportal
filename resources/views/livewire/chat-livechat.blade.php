@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Ratings css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/ratings.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/rating-themes.css')}}">

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
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})">
																		<span class="avatar-status bg-green"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Davil Parnell</div>
																	<small class="list-group-item-text text-muted">Fierent fastidii recteque ad pro</small>
																</div>
																<span class="chat-time text-muted">2 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})">
																		<span class="avatar-status"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Ann Watkinson</div>
																	<small class="list-group-item-text text-muted">Cum sociis natoque penatibus </small>
																</div>
																<span class="chat-time text-muted">10 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
																		<span class="avatar-status"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Marse Walter</div>
																	<small class="list-group-item-text text-muted">Suspendisse sapien ligula</small>
																</div>
																<span class="chat-time text-muted">15 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="lv-avatar float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/3.jpg')}})">
																		<span class="avatar-status bg-success"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Jeremy Robbins</div>
																	<small class="list-group-item-text text-muted">Phasellus porttitor tellus nec</small>
																</div>
																<span class="chat-time text-muted">30 mins</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="lv-avatar float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})">
																		<span class="avatar-status"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Reginald Horace</div>
																	<small class="list-group-item-text text-muted">Quisque consequat arcu eget</small>
																</div>
																<span class="chat-time text-muted">50 min</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})">
																		<span class="avatar-status bg-success"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Shark Henry</div>
																	<small class="list-group-item-text text-muted">Nam lobortis odio et leo maximu</small>
																</div>
																<span class="chat-time text-muted">1 day</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})">
																		<span class="avatar-status bg-success"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">Paul Van Dack</div>
																	<small class="list-group-item-text text-muted">Nam posuere purus sed velit auctor sodales</small>
																</div>
																<span class="chat-time text-muted">2 days</span>
															</a>
														</li>
														<li class="list-group-item media p-4 border-top mt-0">
															<a href="#">
																<div class="lv-avatar float-left pr-2">
																	<span class="avatar avatar-md brround" style="background-image: url({{URL::asset('assets/images/users/5.jpg')}})">
																		<span class="avatar-status bg-success"></span>
																	</span>
																</div>
																<div class="media-body">
																	<div class="list-group-item-heading  font-weight-semibold">James Anderson</div>
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
												<div class="float-left hidden-xs d-flex chat-user">
													<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="" class="avatar avatar-lg brround mr-2">
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

		</div>

		<!--Chat Popup-->
		<div class="chat-message-popup card mb-4 animated">
			<div class="popup-head">
				<div class="row">
					<div class="message-popup-left">
						<div class="dropdown">
							<a class="" href="" data-toggle="dropdown"><i class="fe fe-more-horizontal text-white"></i></a>
							<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
								<a href="#" class="dropdown-item" >
									<i class="fe fe-mail text-primary mr-1"></i> Send Mail
								</a>
								<a class="dropdown-item" href="#">
									<i class="fe fe-thumbs-up text-primary mr-1"></i> Rate as Good
								</a>
								<a href="#" class="dropdown-item" >
									<i class="fe fe-thumbs-down text-primary mr-1"></i> Rate as Bad
								</a>
								<a href="#" class="dropdown-item" >
									<i class="fe fe-settings text-primary mr-1"></i> Settings
								</a>
							</div>
						</div>
					</div>
					<div class="text-center font-weight-bold col-12 text-center">
						Chat With Us
					</div>
					<div class="message-popup-right text-right">
						<a class="card-options-fullscreen mr-2" href="#" data-toggle="card-fullscreen"><i class="fe fe-maximize text-white"></i></a>
						<a class="popup-minimize-normal" href="#"><i class="fe fe-x text-white"></i></a>
						<a class="popup-minimize" href="#"><i class="fe fe-x text-white"></i></a>
						<a class="popup-minimize-fullscreen" href="#"><i class="fe fe-x text-white"></i></a>
					</div>
				</div>
			</div>
			<div class="popup-chat-main-body">
				<div class="user-header p-3 border-top border-bottom">
					<div class="d-flex">
						<div class="d-flex">
							<img class="avatar avatar-md brround mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
							<div>
								<h6 class="mb-0 font-weight-bold">Abigali kelly</h6>
								<span class="w-2 h-2 brround bg-success d-inline-block mr-1"></span> <small>active</small>
							</div>
						</div>
						<div class="ml-auto">
							<div class="chat-message-header-icons mt-1 fs-20">
								<a class="mr-2" href=""><i class="fe fe-volume-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="popup-messages pt-0">
					<div class="direct-chat-messages">
						<div class="chat-box-single-line">
							<abbr class="timestamp">March 15th, 2021</abbr>
						</div>
						<div class="direct-chat-msg">
							<div class="direct-chat-text">Hello. How are you today?<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg right">
							<div class="direct-chat-text">
								Yes
								<small class="time-text">10.00am</small>
							</div>
							<div class="direct-chat-text">
								I'm fine. Thanks for asking fine. Thanks for asking!
								<small class="time-text">10.00am</small>
							</div>
							<img class="direct-chat-img" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="message user image">
						</div>
						<div class="chat-box-single-line mt-5">
							<abbr class="timestamp">March 16th, 2021</abbr>
						</div>
						<div class="direct-chat-msg">
							<div class="direct-chat-text">Various versions have evolved over the years, sometimes<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg right">
							<div class="direct-chat-text">
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
								<small class="time-text">10.00am</small>
							</div>
							<img class="direct-chat-img" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg">
							<div class="direct-chat-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary<small class="time-text">10.00am</small></div>
							<div class="direct-chat-text">making this the first true generator on the Internet<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg right">
							<div class="direct-chat-text">
								<img src="{{URL::asset('assets/images/photos/1.jpg')}}" class="d-block" alt="img">
								<small class="time-text">10.00am</small>
							</div>
							<img class="direct-chat-img" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="message user image">
						</div>
						<div class="chat-box-single-line mt-5">
							<abbr class="timestamp">March 16th, 2021</abbr>
						</div>
						<div class="direct-chat-msg">
							<div class="direct-chat-text">Various versions have evolved over the years, sometimes<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg right">
							<div class="direct-chat-text">
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
								<small class="time-text">10.00am</small>
							</div>
							<img class="direct-chat-img" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg">
							<div class="direct-chat-text"><iframe width="100" height="250" src="https://www.youtube.com/embed/kFjETSa9N7A"  allow="accelerometer; autoplay;" allowfullscreen></iframe><small class="time-text">10.00am</small></div>
							<div class="direct-chat-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg right">
							<div class="direct-chat-text">
								<img src="{{URL::asset('assets/images/photos/2.jpg')}}" class="d-block" alt="img">
								<small class="time-text">10.00am</small>
							</div>
							<div class="direct-chat-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg">
							<div class="direct-chat-text">making this the first true generator on the Internet<small class="time-text">10.00am</small></div>
							<img class="direct-chat-img mr-2" src="{{URL::asset('assets/images/users/16.jpg')}}" alt="message user image">
						</div>
						<div class="direct-chat-msg right">
							<div class="direct-chat-text">
								<div class="d-flex">
									<i class="fe fe-file-text fs-40 op-2 text-muted d-block mr-2"></i>
									<div>
										<div class="font-weight-bold fs-12">sampledemo.txt</div>
										<span class="fs-12">4.5 kb</span>
									</div>
								</div>
								<small class="time-text">10.00am</small>
							</div>
							<div class="direct-chat-text pb-6">
								<div class="d-flex">
									<div><img src="{{URL::asset('assets/images/photos/thumb1.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img"></div>
									<div><img src="{{URL::asset('assets/images/photos/thumb2.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img"></div>
								</div>
								<div class="d-flex">
									<div><img src="{{URL::asset('assets/images/photos/thumb3.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img"></div>
									<div class="relative"><img src="{{URL::asset('assets/images/photos/thumb4.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img">
										<div class="more-images">+10</div>
									</div>
								</div>
								<small class="time-text">10.00am</small>
							</div>
							<img class="direct-chat-img" src="{{URL::asset('assets/images/users/1.jpg')}}" alt="message user image">
						</div>
					</div>
				</div>
				<div class="popup-messages-footer card-footer p-0">
					<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message" class="form-control"></textarea>
					<div class="chat-footer-icons">
						<a class="" href="#"><i class="fe fe-paperclip text-muted"></i></a>
						<a class="" href="#"><i class="fe fe-send text-muted"></i></a>
					</div>
				</div>
			</div>
			<div class="popup-end-chat-main-body">
				<div class="p-6">
					<div class="section-end-chat text-center chat-content">
						<h2 class="font-weight-bold">End Chat?</h2>
						<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
						<div class="mt-6">
							<a class="btn btn-primary end-chat-button px-5" href="#">Conform End Chat</a>
						</div>
						<div class="mt-3">
							<a class="btn btn-link text-primary goback-chat btn-sm" href="#"><i class="fe fe-arrow-left"></i> Go Back</a>
						</div>
					</div>
				</div>
			</div>
			<div class="rating-chat-main-body">
				<div class="p-6">
					<div class="text-left">
						<h3 class="font-weight-bold fs-20">Thank you for Contacting Us</h3>
						<h6>Please rate our supportive team in the following areas </h6>
						<form class="mt-5">
							<div class="mt-0">
								<label>What is your best reason for your score</label>
								<div class="star-ratings start-ratings-main mb-3 clearfix">
									<div class="stars stars-example-fontawesome star-sm">
										<select class="rating-fontawesome" name="rating">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4" selected>4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
							</div>
							<div class="mt-3">
								<label>What is your best reason for your score</label>
								<textarea class="form-control" rows="5" cols="50"></textarea>
							</div>
							<a class="btn btn-success px-5 mt-4 btn-chat-close" href="#">Submit your Review</a>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--Chat Popup-->

@endsection('modals')

@section('scripts')

		<!-- Chat popup Icon -->
		<a href="#" id="chat-popup" class="chat-popup-active"><i class="feather feather-message-square"></i></a>

		<!-- INTERNAl Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/js/jquery.barrating.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/js/custom-ratings.js')}}"></script>

		<!-- INTERNAL Chat js-->
		<script src="{{URL::asset('assets/js/livechat.js')}}"></script>

@endsection