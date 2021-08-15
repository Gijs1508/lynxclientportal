@extends('layouts.app')

@section('styles')



@endsection

@section('content')

		<!-- Page -->
		<div class="page relative error-page3">
			<div class="row no-gutters">
				<div class="col-md-6 h-100vh">
					<div class="cover-image h-100vh" data-image-src="{{URL::asset('assets/images/photos/login3.jpg')}}">
						<div class="container">
							<div class="customlogin-imgcontent">
								<h2 class="mb-3 fs-35 text-white">Welcome To Dayone</h2>
								<p class="text-white-50">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 bg-white h-100vh">
					<div class="container">
						<div class="customlogin-content">
							<div class="card-body pt-lg-9">
								<div class="text-center mb-4">
									<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/users/16.jpg')}})"></span>
								</div>
								<div class="m-4 d-none d-lg-block text-center">
									<h4>Abigali kelly</h4>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<a href="#" class="btn btn-primary btn-block"><i class="fe fe-arrow-right"></i> Unlock</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page -->

@endsection('content')

@section('scripts')



@endsection
