@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">File-Manager List</h4>
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
							<div class="col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body d-flex">
										<div class="chart-circle chart-circle-sm chart-circle-primary ml-0 mr-4" data-value="0.85" data-thickness="5" data-color="#3366ff">
											<div class="mx-auto chart-circle-value text-center fs-14">85%</div>
										</div>
										<div class="mt-3">
											<h5 class="mb-1 font-weight-bold">Storage</h5>
											<p class="mb-0"><span class="text-muted">13.65gb</span> / <span class="text-muted">16gb</span></p>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 file-manger">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-image-line"></i></span> Images
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-live-line"></i></span>	Videos
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-folders-line"></i></span> Docs
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-file-music-line"></i></span> Music
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-shield-keyhole-line"></i></span> APKs
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-download-2-line"></i></span> Downloads
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-indent-decrease"></i></span> More
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-lock-2-line"></i></span> Hiddent Files
											</a>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary mr-2"></span>Remote Control
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary mr-2"></span>Google Drive
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success mr-2"></span>FTP Files
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info mr-2"></span>Transfer files
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning mr-2"></span>Deep Clean
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger mr-2"></span>Favourities
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary mr-2"></span>Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="row">
									<div class="col mb-4">
										<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Upload New Files</a>
										<a href="#" class="btn btn-light"><i class="fe fe-folder"></i> New folder</a>
									</div>
									<div class="col col-auto mb-4">
										<div class="form-group w-100">
											<div class="input-icon">
												<span class="input-icon-addon">
													<i class="fe fe-search"></i>
												</span>
												<input type="text" class="form-control" placeholder="Search Files">
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body p-0">
										<div class="e-table">
											<div class="table-responsive mt-3 card-table table-vcenter table-hover text-nowrap">
												<table class="table" id="example1">
													<tbody>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		document.pdf
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>10 Jan 2020</span></td>
															<td class="text-nowrap align-middle">
																pdf
															</td>
															<td class="text-nowrap align-middle">
																453kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Images
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Feb 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																3.45gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Videos
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>01 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.23gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Documents
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>03 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.65gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Music
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																890mb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Downloads
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 Mar 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.45gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<i class="fa fa-music text-secondary fs-20"></i>
																	<div class="ml-3">
																		Topmusicsong
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>10 Apr 2020</span></td>
															<td class="text-nowrap align-middle">
																Mp4
															</td>
															<td class="text-nowrap align-middle">
																34kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="w-5 h-5 mr-2 br-3">
																	<div class="mt-1">
																		Image
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>11 Apr 2020</span></td>
															<td class="text-nowrap align-middle">
																jpg
															</td>
															<td class="text-nowrap align-middle">
																1gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		File Documents
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>11 Apr 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																11gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		New Folder
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>12 Apr 2020</span></td>
															<td class="text-nowrap align-middle">

															</td>
															<td class="text-nowrap align-middle">
																1.24gb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/word.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Word Document
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 May 2020</span></td>
															<td class="text-nowrap align-middle">
																Ms Word Document
															</td>
															<td class="text-nowrap align-middle">
																54kb
															</td>
														</tr>
														<tr>
															<td class="align-middle w-5">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="align-middle">
																<div class="d-flex">
																	<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="w-5 h-5 mr-2">
																	<div class="mt-1">
																		Pdfdocument
																	</div>
																</div>
															</td>
															<td class="text-nowrap align-middle"><span>09 May 2020</span></td>
															<td class="text-nowrap align-middle">
																pdf
															</td>
															<td class="text-nowrap align-middle">
																34kb
															</td>
														</tr>
													</tbody>
												</table>
											</div>
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
