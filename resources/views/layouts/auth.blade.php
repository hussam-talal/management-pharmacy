<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>@yield('title')</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style11.css">

		@yield('page-css')
    </head>
    <body >

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-right">
							<img class="img-fluid" src="{{asset('assets\images\الشعار1.png')}} " alt="Logo"><br>
                       <font " >الصيدلية الالمانية الحديثة</font>
						</div>
						<div class="login-left">
							<div class="login-left-wrap">
								@if ($errors->any())
								@foreach ($errors->all() as $error)
									<x-alerts.danger :error="$error" />
								@endforeach
							@endif
								@yield('content')
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

    </body>
	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<script src="{{asset('js/app.js')}}"></script>

	@yield('page-js')
</html>