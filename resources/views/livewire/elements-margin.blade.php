@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Margin</h4>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Margin Positions</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">

												</div>
											</div>
											<div class="w-9 h-9 bg-light ml-4">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ml-4
												</div>
											</div>
											<div class="w-9 h-9 bg-light ml-7">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ml-7
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mt-4">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add Margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ml-1"</code></td>
														<td>Add Margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mr-1"</code></td>
														<td>Add Margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-1"</code></td>
														<td>Add Margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-1"</code></td>
														<td>Add Margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-1"</code></td>
														<td>Add Margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-1"</code></td>
														<td>Add Margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Margin values</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add margin m-1 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-2"</code></td>
														<td>Add margin m-2 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-3"</code></td>
														<td>Add margin m-3 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-4"</code></td>
														<td>Add margin m-4 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-5"</code></td>
														<td>Add margin m-5 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-6"</code></td>
														<td>Add margin m-6 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-7"</code></td>
														<td>Add margin m-7 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-8"</code></td>
														<td>Add margin m-8 to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Remove Margin</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-0"</code></td>
														<td>Remove margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ml-0"</code></td>
														<td>Remove margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mr-0"</code></td>
														<td>Remove margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-0"</code></td>
														<td>Remove margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-0"</code></td>
														<td>Remove margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-0"</code></td>
														<td>Remove margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-0"</code></td>
														<td>Remove margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Media Query margins</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-t-0 mg-b-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
														<code class="pd-0 bg-light mb-1">.mt-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mb-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mr-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.ml-[size]-[value]</code>
														<td>
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the padding value (refer to code above)</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
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
