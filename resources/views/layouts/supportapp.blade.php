<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel"/>

		<!-- Title -->
		<title>Dayone - Multipurpose Admin & Dashboard Template</title>

        @include('layouts.support-system.styles')

	</head>

	<body>

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>

        @include('layouts.support-system.mobile-header')

        @include('layouts.support-system.header')

        @yield('content')

        @include('layouts.support-system.onlinesletter')

        @include('layouts.support-system.spfooter')

        @yield('modals')

		@include('layouts.support-system.scripts')


	</body>
</html>