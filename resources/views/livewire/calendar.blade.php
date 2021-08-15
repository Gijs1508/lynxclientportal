@extends('layouts.app')

@section('styles')

	    <!-- INTERNAL Fullcalendar css-->
	    <link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet"/>

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Calendar</h4>
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
									<div class="card-body">
										<div id="calendar"></div>
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

			<!-- Modal -->
			<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="{{URL::asset('calendar')}}" id="mainFormCalendar" method="post" name="mainFormCalendar">
								<div class="form-group">
									<input class="form-control" placeholder="Add title" type="text">
								</div>
								<div class="form-group d-flex align-items-center">
									<label class="custom-control custom-radio mr-4">
										<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
										<span class="custom-control-label">Event</span>
									</label>
									<label class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" name="example-radios" value="option1">
										<span class="custom-control-label">Reminder</span>
									</label>
								</div>
								<div class="form-group mg-t-30">
									<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
									<div class="row row-xs">
										<div class="col-7">
											<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
										</div><!-- col-7 -->
										<div class="col-5">
											<select class="select2 main-event-time" data-placeholder="Select time" id="mainEventStartTime">
												<option label="Select time">
													Select time
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
									<div class="row row-xs">
										<div class="col-7">
											<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
										</div><!-- col-7 -->
										<div class="col-5">
											<select class="select2 main-event-time" data-placeholder="Select time" id="EventEndTime">
												<option label="Select time">
													Select time
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
								</div>
								<div class="d-flex mg-t-15 mg-lg-t-30">
									<button class="btn btn-primary mr-4" >Save</button>
									<a class="btn btn-light" data-dismiss="modal" href="">Discard</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Modal -->

			<!-- Modal -->
			<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<nav class="nav nav-modal-event">
								<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a>
								<a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a>
								<a class="nav-link" data-dismiss="modal" href="#">
								<i class="icon ion-md-close"></i></a>
							</nav>
						</div>
						<div class="modal-body">
							<div class="row row-sm">
								<div class="col-sm-6">
									<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
									<p class="event-start-date"></p>
								</div>
								<div class="col-sm-6">
									<label class="tx-13 mg-b-2">End Date</label>
									<p class="event-end-date"></p>
								</div>
							</div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
							<p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Modal -->

@endsection('modals')

@section('scripts')

	    <!-- INTERNAL Full-calendar js-->
	    <script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
	    <script src="{{URL::asset('assets/js/app-calendar-events.js')}}"></script>
	    <script src="{{URL::asset('assets/js/app-calendar.js')}}"></script>


@endsection
