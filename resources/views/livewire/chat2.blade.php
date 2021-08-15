@extends('layouts.app')

@section('styles')

		<!-- INTERNAL lightslider css -->
		<link href="{{URL::asset('assets/plugins/lightslider/css/lightslider.min.css')}}" rel="stylesheet">

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Chat 02</h4>
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
						<div class="card">
							<div class="row no-gutters">
								<div class="col-lg-5 col-xl-4">
									<div class="overflow-hidden mb-5 mb-lg-0">
										<div class="card-body p-0">
											<div class="main-content-left main-content-left-chat">
												<div class="p-3 pb-0 border-bottom">
													<div class="input-group">
														<input class="form-control" placeholder="Search friends..." type="text">
														<span class="input-group-btn">
															<button class="btn btn-primary br-tl-0 br-bl-0" >
																<span class="input-group-btn"><i class="fa fa-search"></i></span>
															</button>
														</span>
													</div>
												</div>
												<div class="main-chat-contacts-wrapper">
													<label class="form-label mb-2 fs-13">Active Contacts (28)</label>
													<div class="main-chat-contacts" id="chatActiveContacts">
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="avatar avatar-md brround"></div><small>Kecia</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div><small>Copp</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div><small>Edwina</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div><small>Uriarte</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-md brround"></div><small>Ambrose Cawthon</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div><small>Cawthon</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/11.jpg')}}" class="avatar avatar-md brround"></div><small>Celesta</small>
														</div>
														<div>
															<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/1.jpg')}}" class="avatar avatar-md brround"></div><small>Briones</small>
														</div>
														<div>
															<div class="main-chat-contacts-more">
																20+
															</div><small>More</small>
														</div>
													</div><!-- main-active-contacts -->
												</div><!-- main-chat-active-contacts -->
												<div class="main-chat-list" id="ChatList">
													<div class="media new">
														<div class="main-img-user online">
															<img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"><span>2</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Melodi Maul</span> <span>2 hours</span>
															</div>
															<p>culpa qui officia deserunt...</p>
														</div>
													</div>
													<div class="media new">
														<div class="main-img-user">
															<img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-md brround"><span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Lourdes Eiland</span> <span>3 hours</span>
															</div>
															<p>Et harum quidem rerum facilis est</p>
														</div>
													</div>
													<div class="media selected">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/3.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Zofia Mccutcheon</span> <span>10 hours</span>
															</div>
															<p>Nam libero tempore, cum soluta nobis </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/13.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Erlinda Leeder</span> <span>2 days</span>
															</div>
															<p>omnis voluptas assumenda est</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/14.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Randy Booze</span> <span>2 days</span>
															</div>
															<p>Temporibus autem quibusdam et </p>
														</div>
													</div>
													<div class="media new">
														<div class="main-img-user">
															<img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"> <span>1</span>
														</div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Camelia Kimber</span> <span>3 days</span>
															</div>
															<p>saepe eveniet ut et voluptates </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Jerome Vowell</span> <span>4 days</span>
															</div>
															<p>reiciendis voluptatibus maiores </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/5.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Regine Mccrystal</span> <span>5 days</span>
															</div>
															<p>we denounce with righteous indignation</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Nigel Knarr</span> <span>5 days</span>
															</div>
															<p>certain circumstances and owing to the claims</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/12.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Marva Constante</span> <span>5 days</span>
															</div>
															<p>Mae cenas tempus, tellus eget co ndimen</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/6.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Twila Hammers</span> <span>6 days</span>
															</div>
															<p>certain circumstances and owing to the claims</p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/7.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Vertie Raap</span> <span>6 days</span>
															</div>
															<p>certain circumstances and owing to the claims </p>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/8.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="media-contact-name">
																<span>Cory Gardenhire</span> <span>7 days</span>
															</div>
															<p>certain circumstances and owing to the claims...</p>
														</div>
													</div>
												</div><!-- main-chat-list -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7">
									<div class="border-left">
										<div class="main-content-body main-content-body-chat">
											<div class="main-chat-header p-3">
												<div class="main-img-user"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
												<div class="main-chat-msg-name">
													<h6>Abigali kelly</h6><small>Last seen: 1 minute ago</small>
												</div>
												<nav class="nav">
													<a class="nav-link" href=""><i class="icon ion-md-more"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Call"><span class="feather feather-phone-call"></span></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Archive"><span class="feather feather-folder-plus"></span></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Trash"><span class="feather feather-trash-2"></span></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="View Info"><span class="feather feather-info"></span></a>
												</nav>
											</div><!-- main-chat-header -->
											<div class="main-chat-body" id="ChatBody">
												<div class="content-inner">
													<label class="main-chat-time"><span>3 days ago</span></label>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 sed quia non numquam eius modi tempora incidunt ut labore
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																 sed quia non numquam eius modi tempora incidunt ut labore
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nor again is there anyone who loves or pursues or desires to obtain pain of itself
															</div>
														</div>
													</div>
													<div class="media mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																pursues or desires to obtain pain of itself
															</div>
														</div>
													</div>
													<div class="media mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																who loves or pursues or Nor again is there anyone
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nullam dictum felis eu pede mollis pretium
															</div>
															<div>
																<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div><label class="main-chat-time"><span>Yesterday</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/15.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/15.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<label class="main-chat-time"><span>Today</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
														</div>
													</div>
													<div class="media mt-1">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/2.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
															<div>
																<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Et harum quidem rerum facilis est et expedita distinctio
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/images/users/16.jpg')}}" class="avatar avatar-md brround"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
															</div>
															<div>
																<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-chat-footer">
												<nav class="nav mt-1">
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="Camera"><span class="feather feather-camera"></span></a>
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="Emojia"><span class="fa fa-smile-o"></span></a>
													<a href="javascript:void(0)" class="nav-link" data-toggle="tooltip" title="Attach"><span class="feather feather-paperclip"></span></a>
												</nav>
												<input class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" href=""><span class="feather feather-send"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

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

		<!-- INTERNAL lightslider js -->
		<script src="{{URL::asset('assets/plugins/lightslider/js/lightslider.min.js')}}"></script>

		<!-- INTERNAL Chat js-->
		<script src="{{URL::asset('assets/js/chat2.js')}}"></script>

@endsection
