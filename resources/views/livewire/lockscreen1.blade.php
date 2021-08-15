@extends('layouts.app')

@section('styles')



@endsection

@section('content')

		<div class="page login-bg">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-7 col-lg-5">
									<div class="card">
										<div class="card-body">
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
				</div>
			</div>
		</div>

@endsection('content')

@section('scripts')



@endsection