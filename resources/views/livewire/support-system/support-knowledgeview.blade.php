@extends('layouts.supportapp')

@section('styles')

		<!-- INTERNAL owl-carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel.css')}}" rel="stylesheet" />

		<!-- INTERNAL jquery.autocomplete css-->
		<link href="{{URL::asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.css')}}" rel="stylesheet" />

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

@endsection

@section('content')

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-image-src="{{URL::asset('assets/images/photos/banner1.jpg')}}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1>Knowledge</h1>
							</div>
							<div class="col col-auto">
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item">
										<a href="#" class="text-white-50">Home</a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white">Knowledge</a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white">Knowledge View</a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section -->

		<!--Section-->
		<section>
			<div class="cover-image sptb">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
							<div class="card">
								<div class="p-5">
									<h4 class="card-title mb-2">How to Updgrade plan</h4>
									<div class="d-md-flex">
										<ul class="mb-0 d-md-flex fs-13">
											<li class="mr-5">
												<span><i class="feather feather-clock text-muted mr-1"></i>Last Updated on <span class="text-muted">5 days ago</span></span>
											</li>
											<li class="mr-5">
												<span><i class="feather feather-user text-muted mr-1"></i>Posted by<a href="#" class="text-primary ml-1">Admin</a> </span>
											</li>
											<li class="mr-5" data-placement="top" data-toggle="tooltip" title="" data-original-title="Views">
												<span><i class="feather feather-eye text-muted mr-1"></i>765</span>
											</li>
										</ul>
									</div>
									<div class="klview-icons btn-group">
										<a href="#" class="border-right btn btn-outline-light btn-sm"><i class="fa fa-thumbs-up text-success"></i> 2</a>
										<a href="#" class="btn btn-outline-light btn-sm"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
									</div>
								</div>
								<div class="card-body pt-1">
									<div class="mb-4 description">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
										<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
										<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
										<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
										<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
										<h5 class="mb-4 mt-5 font-weight-semibold">Files</h5>
										<div class="list-group-item  align-items-center">
											<div class="d-md-flex">
												<img src="{{URL::asset('assets/images/files/attachments/2.png')}}" alt="img" class="avatar bg-transparent avatar-lg mr-2">
												<a href="#" class="font-weight-semibold fs-14 mt-3">document.pdf<span class="text-muted ml-2">(23 KB)</span></a>
												<div class="ml-auto d-flex text-right mt-2">
													<a href="#" class="action-btns1"><i class="feather feather-download-cloud text-primary"></i></a>
													<a href="#" class="action-btns1  mr-0"><i class="feather feather-trash-2 text-danger"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body d-md-flex">
									<div>
										<span class="">You think it is helpfull?</span>
										<a href="#" class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i></a>
										<a href="#" class="btn btn-danger  btn-sm"><i class="fa fa-thumbs-down"></i></a>
									</div>
									<div class="ml-auto"><span>Views:</span><span class="font-weight-semibold ml-1">45</span></div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="card shadow-none border">
										<div class="d-sm-flex p-5">
											<div class="d-flex mr-3">
												<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/16.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-1 mb-1 font-weight-semibold">Have you using update version</h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Jan 21 2021 <i class=" ml-3 fa fa-clock-o"></i> 13:00</small>
												<p class="fs-13 mb-2 mt-1">
												   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fe fe-message-circle"></i> Comment</span></a>
												<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fa fa-reply"></i> Reply</span></a>
												<div class="sub-media d-sm-flex mt-5">
													<div class="d-flex mr-3">
														<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/1.jpg')}}"> </a>
													</div>
													<div class="media-body">
														<h5 class="mt-1 mb-1 font-weight-semibold">Yes, sir</h5>
														<small class="text-muted"><i class="fa fa-calendar"></i> Jan 22 2021 <i class=" ml-3 fa fa-clock-o"></i> 09:00</small>
														<p class="fs-13 mb-2 mt-1">
														   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
														</p>
														<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fe fe-message-circle"></i> Comment</span></a>
														<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fa fa-reply"></i> Reply</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card shadow-none border">
										<div class="d-sm-flex p-5">
											<div class="d-flex mr-3">
												<a href="#"><img class="media-object brround avatar-lg" alt="64x64" src="{{URL::asset('assets/images/users/11.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-1 mb-1 font-weight-semibold">Send the related data</h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Dec 10 2020 <i class=" ml-3 fa fa-clock-o"></i> 06:00</small>
												<p class="fs-13 mb-2 mt-1">
												   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fe fe-message-circle"></i> Comment</span></a>
												<a href="#" class="mr-2 mt-1"><span class="badge badge-light"><i class="fa fa-reply"></i> Reply</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-md-0">
								<div class="card-header border-0">
									<h4 class="card-title">Comment</h4>
								</div>
								<div class="card-body">
									<div class="form-group">
										<input class="form-control" placeholder="Your Name" type="text">
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Email Address" type="text">
									</div>
									<div class="form-group">
										<textarea class="form-control"  placeholder="Your Comment" rows="6"></textarea>
									</div>
									<a href="#" class="btn btn-primary">Submit</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header  border-0">
									<h4 class="card-title">Categories</h4>
								</div>
								<div class="card-body">
									<div class="list-catergory">
										<div class="item-list">
											<ul class="list-group mb-0">
												<li class="list-group-item">
													<a class="text-dark" href="#">Support <span class="badgetext badge badge-light mb-0 mt-1">14</span></a>
												</li>
												<li class="list-group-item">
													<a class="text-dark" href="#">Services <span class="badgetext badge badge-light mb-0 mt-1">03</span></a>
												</li>
												<li class="list-group-item">
													<a class="text-dark" href="#">Customization<span class="badgetext badge badge-light mb-0 mt-1">25</span></a>
												</li>
												<li class="list-group-item">
													<a class="text-dark" href="#">Other <span class="badgetext badge badge-light mb-0 mt-1">12</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-0">
								<div class="card-header  border-0">
									<h4 class="card-title">Popular Articles</h4>
								</div>
								<div class="card-body">
									<div class="list-catergory">
										<ul class="item-list item-list-scroll mb-0">
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">How to Updgrade plan?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 14</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 53</span>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">How could I manage active menu class?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 19</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 03</span>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6"> How to remove the dollar $ sign?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 22</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 02</span>
													</div>
												</div>
											</li>
											<li class="item">
												<div class="list-card">
													<a href="#"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">Is there available in webpack?</span></a>
													<div class="mt-1">
														<span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 34</span>
														<span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 06</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

@endsection('content')

@section('modals')

		<!--Login Modal-->
		<div class="modal fade"  id="loginmodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Login</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="single-page customerpage">
							<div class="wrapper wrapper2 box-shadow-0 border-0">
								<div class="card-body pb-4">
									<div class="btn-list d-flex">
										<a class="btn btn-google btn-block" href="https://www.google.com/gmail/"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
										 <a class="btn btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter fa-1x"></i></a>
										 <a class="btn btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x"></i></a>
									</div>
								</div>
								<hr class="divider">
								<form class="card-body pt-3" id="login" name="login">
									<div class="form-group">
										<label class="form-label">Mail or Username</label>
										<input class="form-control" placeholder="Email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" type="password">
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="{{url('index')}}">Login</a>
									</div>
									<div class="text-center mt-3">
										<p class="mb-2"><a href="#">Forgot Password</a></p>
										<p class="text-dark mb-0">Don't have account?<a class="text-primary ml-1" href="#" data-toggle="modal" data-target="#registermodal" data-dismiss="modal">Register</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Login Modal  -->

		<!--Register Modal-->
		<div class="modal fade"  id="registermodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Register</h5>
						<button  class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="single-page customerpage">
							<div class="wrapper wrapper2 box-shadow-0 border-0">
								<div class="card-body pb-4">
									<div class="btn-list d-flex">
										<a class="btn btn-google btn-block" href="https://www.google.com/gmail/"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
										 <a class="btn btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter fa-1x"></i></a>
										 <a class="btn btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x"></i></a>
									</div>
								</div>
								<hr class="divider">
								<form class="card-body pt-3" id="register" name="register">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input class="form-control" placeholder="First Name" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input class="form-control" placeholder="Last Name" type="text">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label">Mail or Username</label>
										<input class="form-control" placeholder="Email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" type="password">
									</div>
									<div class="form-group">
										<label class="form-label">Captcha</label>
										<input class="form-control" placeholder="captch" type="text">
										<div class="captch-body">
											<img src="{{URL::asset('assets/images/png/captcha.png')}}" alt="img">
										</div>
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="{{url('index')}}">Submit</a>
									</div>
									<div class="text-center mt-3">
										<p class="text-dark mb-0">Already have an account?<a class="text-primary ml-1" href="#" data-toggle="modal" data-target="#loginmodal" data-dismiss="modal">Login</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Register Modal  -->

@endsection('modals')

@section('scripts')

		<!--INTERNAL Horizontalmenu js -->
		<script src="{{URL::asset('assets/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

		<!--INTERNAL wowmaster js -->
		<script src="{{URL::asset('assets/plugins/wowmaster/wow.js')}}"></script>

		<!--INTERNAL jquery.autocomplete js -->
		<script src="{{URL::asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery.autocomplete/custom-autocomplete.js')}}"></script>

		<!--INTERNAL Sticky js -->
		<script src="{{URL::asset('assets/plugins/sticky/sticky2.js')}}"></script>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="{{URL::asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>

		<!--INTERNAL Owl-carousel js -->
		<script src="{{URL::asset('assets/plugins/owl-carousel/owl-carousel.js')}}"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

		<!-- INTERNAL Index js-->
		<script src="{{URL::asset('assets/js/support/support-ticket.js')}}"></script>

@endsection
