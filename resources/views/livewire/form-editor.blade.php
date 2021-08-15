@extends('layouts.app')

@section('styles')

		<!-- INTERNAL Quill css -->
		<link href="{{URL::asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">

		<!-- INTERNAL WYSIWYG Editor css -->
		<link href="{{URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Form Editor</h4>
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
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Form Editor style1</h3>
									</div>
									<div class="card-body">
										<textarea class="content" name="example"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Form Editor
										</div>
									</div>
									<div class="card-body">
										<div class="ql-wrapper ql-wrapper-demo bg-light">
											<div id="quillEditor">
												<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
												<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Form Editor in Modal
										</div>
									</div>
									<div class="card-body">
										<div class="text-center p-4 bg-light border">
											<a class="btn btn-primary" data-target="#modalQuill" data-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
										<div class="modal">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header pd-20">
														<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="modal-body pd-0">
														<div class="ql-wrapper ql-wrapper-modal ht-250">
															<div class="flex-1" id="quillEditorModal">
																<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
																<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
															</div>
														</div>
													</div>
													<div class="modal-footer pd-20">
														<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row ">
							<div class="col-md-12">
								<div class="card ">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											From Inline-Edit Editor
										</div>
									</div>
									<div class="card-body">
										<div class="wd-xl-100p ht-350">
											<div class="ql-scrolling-demo bg-light p-4 border" id="scrolling-container">
												<div id="quillInline">
													<h2>Try to select me and edit</h2>
													<p><br></p>
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row -->

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

		</div>

		<!--Modal-->
		<div class="modal fade"  id="modalQuill">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header pd-20">
						<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body pd-0">
						<div class="ql-wrapper ql-wrapper-modal ht-250">
							<div class="flex-1" id="quillEditorModal2">
								<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
								<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
							</div>
						</div>
					</div>
					<div class="modal-footer pd-20">
						<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-dismiss="modal" aria-label="Close" >Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!--/Modal-->

@endsection('modals')

@section('scripts')

		<!-- INTERNAL WYSIWYG Editor js -->
		<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{URL::asset('assets/js/form-editor.js')}}"></script>

		<!-- INTERNAL quill js -->
		<script src="{{URL::asset('assets/plugins/quill/quill.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/form-editor2.js')}}"></script>

@endsection
