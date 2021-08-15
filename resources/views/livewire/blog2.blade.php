@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Blog02</h4>
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
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Jan-18-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">12 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Jan-22-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">14 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Lorem ipsum dolor quis</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Apr-16-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">3 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">pleasure and praising pain</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Feb-16-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">expound the actual teachings</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Jan-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">8 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">great explorer of the truth</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Jan-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">7 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">pursue pleasure rationally</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Jan-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">8 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">consequences that are extremely</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Feb-14-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body pr-2 pl-4">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{URL::asset('profile')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="option-dots new-list2" data-toggle="dropdown"><span class="feather feather-more-vertical text-muted"></span></a>
												<div class="dropdown-menu tx-13 dropdown-menu-right">
													<a class="dropdown-item" href="#">Assigned to</a>
													<a class="dropdown-item" href="#">Mark As Unread</a>
													<a class="dropdown-item" href="#">Mark As Important</a>
													<a class="dropdown-item" href="#">Add Star</a>
													<a class="dropdown-item" href="#">Move to</a>
													<a class="dropdown-item" href="#">Mute</a>
													<a class="dropdown-item" href="#">Move to Trash</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item7-card-img px-4">
										<a href="#"></a>
										<img src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="img" class="cover-image br-7">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-5">
											<a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">Mar-21-2020</div></a>
											<div class="ml-auto">
												<a class="mr-0 d-flex" href="#"><span class="feather feather-message-square text-muted mr-2 fs-18"></span><div class="mt-0">4 Comments</div></a>
											</div>
										</div>
										<a href="#" class="mt-4"><h5 class="font-weight-semibold">occasionally circumstances</h5></a>
										<p>Lorem ipsum dolor quis exercitationem into enim ad minima nostrum itationem </p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user mr-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ml-auto">
												<div class="d-flex mt-2">
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-heart text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-thumbs-up text-muted"></span></a>
													<a href="javascript:void(0)" class="d-none d-md-inline-block ml-3"><span class="feather feather-share-2 text-muted"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

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
