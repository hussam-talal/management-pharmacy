<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/snackbar/snackbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/DataTables/datatables.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/style11.css')}}">
	</head>
	
    <body  >
		
		
        <div class="main-wrapper">
            @include('includes.header1')	
            @include('includes.sidebar1')
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="page-header">
						<div class="row">
						</div>
					</div>

					@if ($errors->any())
						@foreach ($errors->all() as $error)
							<x-alerts.danger :error="$error" />
						@endforeach
					@endif

					@yield('content')

				</div>
			</div>
    </body>
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

	<!-- Snackbar Js -->
	<script src="{{asset('assets/plugins/snackbar/snackbar.min.js')}}"></script>

	<!-- Toastr Js -->
	<script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('assets/js/datatables-customizer.js')}}"></script>
</html>
 
 