@extends('layouts.app')

@section('styles')



@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Terms</h4>
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
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Welcome to Dayone</h4>
									</div>
									<div class="card-body">
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Using Our Services</h4>
									</div>
									<div class="card-body">
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Privacy policy</h4>
									</div>
									<div class="card-body">
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Copyright</h4>
									</div>
									<div class="card-body">
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Terms and Conditions</h4>
									</div>
									<div class="card-body">
										<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
										<ul class="list-style3">
											<li>ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </li>
											<li>quas molestias excepturi sint occaecati cupiditate non provident</li>
											<li>Nam libero tempore, cum soluta nobis est eligendi optio cumque</li>
											<li>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</li>
											<li>epudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur a sapiente delectus</li>
											<li>ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</li>
										</ul>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Was this information is Helpful?</h4>
									</div>
									<div class="card-body">
										<div class="terms">
											<a class="btn btn-primary text-white px-6">Yes</a>
											<a class="btn btn-secondary text-white px-6">No</a>
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
