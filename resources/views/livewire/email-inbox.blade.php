@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Email-Inbox</h4>
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
							<div class="col-md-12 col-lg-4 col-xl-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="{{url('email-compose')}}" class="btn btn-primary btn-lg btn-block">Compose</a>
										</div>
										<a href="#" class="list-group-item d-flex align-items-center active">
											<span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ml-auto badge badge-success">14</span>
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ml-auto badge badge-danger">03</span>
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
										</a>
										<a href="#" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
										</a>
									</div>
									<div class="card-body border-top">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary mr-2"></span> Friends
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary mr-2"></span> Family
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success mr-2"></span> Social
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info mr-2"></span> Office
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning mr-2"></span> Work
											</a>
											<a href="#" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger mr-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="mail-option">
												<div class="chk-all">
													<div class="btn-group">
														<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
															All
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="#"> None</a></li>
															<li><a href="#"> Read</a></li>
															<li><a href="#"> Unread</a></li>
														</ul>
													</div>
												</div>
												<div class="btn-group">
													<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
														<i class=" fa fa-refresh"></i>
													</a>
												</div>
												<div class="btn-group hidden-phone">
													<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
														More
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
														<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
													</ul>
												</div>
												<ul class="unstyled inbox-pagination">
													<li><span>1-50 of 234</span></li>

													<li>
														<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
													</li>
												</ul>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover text-nowrap mb-0">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Tim Reid, S P N</td>
															<td class="view-message">Boost Your Website Traffic</td>
															<td class="view-message text-right font-weight-semibold">April 01</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
															<td class="view-message">Stop wasting your visitors </td>
															<td class="view-message text-right font-weight-semibold">May 23</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message  dont-show">PHPClass</td>
															<td class="view-message ">Added a new class: Login Class Fast Site</td>
															<td class="view-message  text-right">9:27 AM</td>
														</tr>

														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Somebody requested a new password </td>
															<td class="view-message text-right font-weight-semibold">June 13</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Skype</td>
															<td class="view-message view-message">Password successfully changed</td>
															<td class="view-message text-right font-weight-semibold">March 24</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Google+</td>
															<td class="view-message">alireza, do you know</td>
															<td class="view-message text-right font-weight-semibold">March 09</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">WOW Slider </td>
															<td class="view-message">New WOW Slider v7.8 - 67% off</td>
															<td class="view-message text-right font-weight-semibold">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">LinkedIn Pulse</td>
															<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
															<td class="view-message text-right font-weight-semibold">Feb 19</td>
														</tr>
														<tr class="unread">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Google Webmaster </td>
															<td class="view-message">Improve the search presence of WebSite</td>
															<td class="view-message text-right font-weight-semibold">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">JW Player</td>
															<td class="view-message">Last Chance: Upgrade to Pro for </td>
															<td class="view-message text-right font-weight-semibold">March 15</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Drupal Community</td>
															<td class="view-message view-message">Welcome to the Drupal Community</td>
															<td class="view-message text-right font-weight-semibold">March 04</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="dont-show font-weight-semibold">Zoosk </td>
															<td class="view-message">7 new singles we think you'll like</td>
															<td class="view-message text-right font-weight-semibold">May 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">LinkedIn </td>
															<td class="view-message">Alireza: Nokia Networks, System Group and </td>
															<td class="view-message text-right font-weight-semibold">February 25</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Your account was recently logged into</td>
															<td class="view-message text-right font-weight-semibold">March 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Twitter</td>
															<td class="view-message">Your Twitter password has been changed</td>
															<td class="view-message text-right font-weight-semibold">April 07</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">InternetSeer</td>
															<td class="view-message">Performance Report</td>
															<td class="view-message text-right font-weight-semibold">July 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">Bertina </td>
															<td class="view-message">IMPORTANT: Don't lose your domains!</td>
															<td class="view-message text-right font-weight-semibold">June 16</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
															<td class="view-message dont-show font-weight-semibold">Laura Gaffin, S P N </td>
															<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
															<td class="view-message text-right font-weight-semibold">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Facebook</td>
															<td class="view-message view-message">Alireza Zare Login faild</td>
															<td class="view-message text-right font-weight-semibold">feb 14</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">AddMe.com</td>
															<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
															<td class="view-message text-right font-weight-semibold">August 10</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold">Terri Rexer, S P N</td>
															<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
															<td class="view-message text-right font-weight-semibold">April 14</td>
														</tr>

													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<ul class="pagination ">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
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