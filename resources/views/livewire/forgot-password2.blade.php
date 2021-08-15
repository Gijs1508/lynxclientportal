@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

		<div class="page login-bg1">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col-md-5 p-md-0">
							<div class="card p-5">
								<div class="pl-4 pt-4 pb-2">
									<a class="header-brand" href="{{url('index')}}">
										<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img custom-logo" alt="Dayonelogo">
										<img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img custom-logo-dark" alt="Dayonelogo">
									</a>
								</div>
								<div class="p-5 pt-0">
									<h1 class="mb-2">Forgot Password</h1>
									<p class="text-muted">Enter the email address registered on your account</p>
								</div>
								<form class="card-body pt-3" id="forgot" name="forgot">
									<div class="form-group">
										<label class="form-label">E-Mail</label>
										<input class="form-control" placeholder="Email" type="email">
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="#">Submit</a>
									</div>
									<div class="text-center mt-4">
										<p class="text-dark mb-0">Forgot It?<a class="text-primary ml-1" href="#">Send me Back</a></p>
									</div>
								</form>
								<div class="card-body border-top-0 pb-6 pt-2">
									<div class="text-center">
										<span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-facebook-line"></i></span>
										<span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-instagram-line"></i></span>
										<span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-twitter-line"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection('content')

@section('scripts')

@endsection