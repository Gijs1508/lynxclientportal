		<!-- Mobile Header -->
		<div class="support-mobile-header clearfix">
			<div class="container">
				<div class="d-flex">
					<a class="animated-arrow horizontal-navtoggle"><span></span></a>
					<span class="smallogo">
						<a class="header-brand" href="{{url('index')}}">
							<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
							<img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img light-logo" alt="Dayonelogo">
						</a>
					</span>
					<div class="dropdown profile-dropdown ml-auto">
						<a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
							<span>
								<img src="{{URL::asset('assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md bradius">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
							<div class="p-3 text-center border-bottom">
								<a href="#" class="text-center user pb-0 font-weight-bold">John Thomson</a>
								<p class="text-center user-semi-title">App Developer</p>
							</div>
							<a class="dropdown-item d-flex" href="#">
								<i class="feather feather-user mr-3 fs-16 my-auto"></i>
								<div class="mt-1">Profile</div>
							</a>
							<a class="dropdown-item d-flex" href="#">
								<i class="ri-ticket-2-line mr-3 fs-16 my-auto"></i>
								<div class="mt-1">Tickets</div>
							</a>
							<a class="dropdown-item d-flex" href="#">
								<i class="feather feather-mail mr-3 fs-16 my-auto"></i>
								<div class="mt-1">Messages</div>
							</a>
							<a class="dropdown-item d-flex" href="#">
								<i class="feather feather-settings mr-3 fs-16 my-auto"></i>
								<div class="mt-1">Settings</div>
							</a>
							<a class="dropdown-item d-flex" href="#" data-toggle="modal" data-target="#changepasswordnmodal">
								<i class="feather feather-edit-2 mr-3 fs-16 my-auto"></i>
								<div class="mt-1">Change Password</div>
							</a>
							<a class="dropdown-item d-flex" href="#">
								<i class="feather feather-power mr-3 fs-16 my-auto"></i>
								<div class="mt-1">Log Out</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Mobile Header -->
