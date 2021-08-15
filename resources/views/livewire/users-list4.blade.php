@extends('layouts.app')

@section('styles')



@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">User-List 04</h4>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="e-panel card">
											<div class="card-body pb-2">
												<div class="row">
													<div class="col mb-4">
														<a href="#" class="btn btn-primary"><i class="fe fe-plus"></i> Add New User</a>
													</div>
													<div class="col col-auto mb-4">
														<div class="form-group w-100">
															<div class="input-icon">
																<span class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</span>
																<input type="text" class="form-control" placeholder="Search User">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																	<small class="text-muted">Project Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">denisrosenblum@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">82%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 82%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Harvey Mattos</p>
																	<small class="text-muted">Develpoer</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">harveymattos@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">82%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 82%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Catrice Doshier</p>
																	<small class="text-muted">Assistant Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">catricedoshier@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">74%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 74%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																	<small class="text-muted">Company Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">catherinabamber@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">55%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 55%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Margie Fitts</p>
																	<small class="text-muted">It Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">margiefitts@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">64%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 64%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">danalott@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">72%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 72%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																	<small class="text-muted">Hr Recriuter</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">benedictballone@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">52%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 52%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																	<small class="text-muted">Ceo</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">robbieruder@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">43%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 43%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																	<small class="text-muted">Php developer</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">micaelaaultman@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">35%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 35%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																	<small class="text-muted">Web developer</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">jacquelynnsapienza@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">86%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 86%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">elidadistefano@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">73%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 73%"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card border p-0 shadow-none">
															<div class="d-flex align-items-center p-4">
																<div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}" >
																</div>
																<div class="wrapper ml-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																	<small class="text-muted">web designer</small>
																</div>
																<div class="float-right ml-auto">
																	<div class="btn-group ml-3 mb-0">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
																			<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-2">
																<div class="d-flex mb-3">
																	<span class="icon-style-circle1 ri-message-2-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">collinbridgman@gmail.com</div>
																</div>
																<div class="d-flex">
																	<span class="icon-style-circle1 ri-phone-line fs-18"></span>
																	<div class="h6 mb-0 ml-3 mt-1">+345 657 567</div>
																</div>
															</div>
															<div class="card-footer">
																<div class="row mb-1">
																	<div class="col">
																		Work Progress
																	</div>
																	<div class="col col-auto">
																		<h6 class="mb-0 ml-4 font-weight-bold">67%</h6>
																	</div>
																</div>
																<div class="progress progress-sm mb-0 mt-1">
																	<div class="progress-bar bg-primary" style="width: 67%"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
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