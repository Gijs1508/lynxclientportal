@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Tags</h4>
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
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Default tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag">First tag</span>
											<span class="tag">Second tag</span>
											<span class="tag">Third tag</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Link tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<a href="#" class="tag">First tag</a>
											<a href="#" class="tag">Second tag</a>
											<a href="#" class="tag">Third tag</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Rounded tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag tag-rounded">First tag</span>
											<span class="tag tag-rounded">Second tag</span>
											<span class="tag tag-rounded">Third tag</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Color tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag tag-blue">Blue tag</span>
											<span class="tag tag-azure">Azure tag</span>
											<span class="tag tag-indigo">Indigo tag</span>
											<span class="tag tag-purple">Purple tag</span>
											<span class="tag tag-pink">Pink tag</span>
											<span class="tag tag-red">Red tag</span>
											<span class="tag tag-orange">Orange tag</span>
											<span class="tag tag-yellow">Yellow tag</span>
											<span class="tag tag-lime">Lime tag</span>
											<span class="tag tag-green">Green tag</span>
											<span class="tag tag-teal">Teal tag</span>
											<span class="tag tag-cyan">Cyan tag</span>
											<span class="tag tag-gray">Gray tag</span>
											<span class="tag tag-gray-dark">Dark gray tag</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">List of tags</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
											<div class="tags">
												<span class="tag">First tag</span>
												<span class="tag">Second tag</span>
												<span class="tag">Third tag</span>
											</div>
											<p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
											<div class="tags">
												<span class="tag">One</span>
												<span class="tag">Two</span>
												<span class="tag">Three</span>
												<span class="tag">Four</span>
												<span class="tag">Five</span>
												<span class="tag">Six</span>
												<span class="tag">Seven</span>
												<span class="tag">Eight</span>
												<span class="tag">Nine</span>
												<span class="tag">Ten</span>
												<span class="tag">Eleven</span>
												<span class="tag">Twelve</span>
												<span class="tag">Thirteen</span>
												<span class="tag">Fourteen</span>
												<span class="tag">Fifteen</span>
												<span class="tag">Sixteen</span>
												<span class="tag">Seventeen</span>
												<span class="tag">Eighteen</span>
												<span class="tag">Nineteen</span>
												<span class="tag">Twenty</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Avatar tag</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/6.jpg')}})"></span>
												Victoria
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/14.jpg')}})"></span>
												Nathan
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/1.jpg')}})"></span>
												Alice
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/4.jpg')}})"></span>
												Rose
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/9.jpg')}})"></span>
												Peter
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/12.jpg')}})"></span>
												Wayne
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/7.jpg')}})"></span>
												Michelle
											</span>
											<span class="tag">
												<span class="tag-avatar avatar" style="background-image: url({{URL::asset('assets/images/users/11.jpg')}})"></span>
												Debra
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Tag remove</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<span class="tag">
												One
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Two
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Three
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag">
												Four
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Tag addons</h3>
									</div>
									<div class="card-body">
										<div class="tags">
											<div class="tag">
												npm
												<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
											</div>
											<div class="tag tag-danger">
												npm
												<span class="tag-addon"><i class="fe fe-activity"></i></span>
											</div>
											<div class="tag">
												bundle
												<span class="tag-addon tag-success">passing</span>
											</div>
											<span class="tag tag-dark">
												CSS gzip size
												<span class="tag-addon tag-warning">20.9 kB</span>
											</span>
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

@endsection
