@extends('layouts.auth')
@section('title') 
forget password
 @endsection
@section('content')
<h1>نسيت كلمة المرور؟</h1><br>
<p class="account-subtitle">ادخل  بريدك الإلكتروني لاستعادة كلمة مرورك</p>
<!-- Form -->
<form action="{{route('forgot-password')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="البريد الالكتروني">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">إعادة ضبط كلمة المرور</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">تذكر كلمة مرورك؟ <a href="{{route('login')}}">تسجيل دخول</a></div>
@endsection