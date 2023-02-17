@extends('layouts.auth')
@section('title') 
register
 @endsection
@section('content')
<h1>إنشاء حساب</h1><br>
<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="form-group">
		<input class="form-control" name="name" type="text" value="" placeholder="الاسم">
	</div>
	<div class="form-group">
		<input class="form-control" name="email" type="text" value="" placeholder="البريد الالكتروني">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="كلمة السر">
	</div>
	<div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="تأكيد كلمة المرور">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">إنشاء حساب</button>
	</div>
</form>
<!-- /Form -->
								
<div class="text-center dont-have">هل لديك حساب سابق؟ <a href="{{route('login')}}">تسجيل دخول</a></div>
@endsection