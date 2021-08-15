@extends('layouts.app')

@section('styles')

		<!-- INTERNAL treeview -->
        <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Form-Treeview</h4>
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

						<!--row open-->
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview1">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview2">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview3">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree1">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree2">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree3">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

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

		<!-- INTERNAL Treeview js -->
		<script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>

@endsection
