@extends('layouts.auth')
@section('title') 
login
 @endsection
@section('content')
<h1>تسجيل دخول</h1><br>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="البريد الإلكتروني">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="كلمة المرور">
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block" type="submit">تسجيل دخول</button>
	</div>
</form>
<div class="text-center forgotpass"><a href="{{route('forgot-password')}}">نسيت كلمة المرور؟</a></div> 
<div class="text-center dont-have">ليس لديك حساب؟ <a href="{{route('register')}}">انشاء حساب</a></div>
@endsection