@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Breadcrumbs</h4>
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

						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Simple Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1 active">Home</li>
											<li class="breadcrumb-item1 active">About</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1 active">Library</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1"><a href="#">Library</a></li>
											<li class="breadcrumb-item1 active">Data</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
						<!--div-->
						<div class="card mg-b-20" id="breadcrumb1">
							<div class="card-header border-bottom-0">
								<div class="card-title">
									Custom Styling
								</div>
							</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-style1 mb-0 p-0">
										<li class="breadcrumb-item">
											<a href="#">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Library</a>
										</li>
										<li class="breadcrumb-item active">Data</li>
									</ol>
								</nav>
							</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="card mg-b-20" id="breadcrumb2">
							<div class="card-header border-bottom-0">
								<div class="card-title">
									Custom Divider
								</div>
							</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb breadcrumb-style2 mb-0 p-0">
										<li class="breadcrumb-item">
											<a href="#">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Library</a>
										</li>
										<li class="breadcrumb-item active">Data</li>
									</ol>
								</nav>
							</div>
						</div>
						<!--/div-->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Color Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1 bg-blue">
											<li class="breadcrumb-item1 active text-white">Home</li>
											<li class="breadcrumb-item1 active text-white">About</li>
										</ol>
										<ol class="breadcrumb1 bg-secondary">
											<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item1 active text-white">Library</li>
										</ol>
										<ol class="breadcrumb1 bg-success">
											<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item1 text-white"><a href="#" class="text-white">Library</a></li>
											<li class="breadcrumb-item1 active text-white">Data</li>
										</ol>
									</div>
								</div>
								<div class="card" id="breadcrumb4">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Icon Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb1 border bg-transparent">
												<li class="breadcrumb-item1 active"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Home</li>
												<li class="breadcrumb-item1 active">About</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#" class=""><i class="fa fa-star-o mr-2" aria-hidden="true"></i>Home</a></li>
												<li class="breadcrumb-item1 active"><i class="fa fa-star-o mr-2" aria-hidden="true"></i>Library</li>
											</ol>
											<ol class="breadcrumb1 bg-primary mb-0">
												<li class="breadcrumb-item1"><a href="#" class="text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Home</a></li>
												<li class="breadcrumb-item1 text-white"><a href="#" class="text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Library</a></li>
												<li class="breadcrumb-item1 active text-white"><i class="fa fa-star-o mr-2 white-text" aria-hidden="true"></i>Data</li>
											</ol>
										</nav>
									</div>
								</div>
								<!--/div-->
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Style Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb breadcrumb-arrow mt-3">
											<li><a href="#">Home</a></li>
											<li><a href="#">Library</a></li>
											<li><a href="#">Elements</a></li>
											<li class="active"><span>Data</span></li>
										</ol>
									</div>
								</div>

								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Svg Breadcrumb</h3>
									</div>
									<div class="card-body breadcrumb-style4">
										<ol class="breadcrumb border p-4 mb-4">
											<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb border p-4 mb-4 bg-light">
											<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active"><span>Data</span></li>
										</ol>
										<ol class="breadcrumb p-4 bg-primary br-3 overflow-hidden">
											<li class="breadcrumb-item text-white"><a href="#" class="d-flex text-white"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="breadcrumb-icon"> Home</span></a></li>
											<li class="breadcrumb-item text-white"><a href="#" class="text-white">Library</a></li>
											<li class="breadcrumb-item text-white"><a href="#" class="text-white">Elements</a></li>
											<li class="breadcrumb-item active text-white"><span>Data</span></li>
										</ol>
									</div>
								</div>
							</div>
						</div>

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