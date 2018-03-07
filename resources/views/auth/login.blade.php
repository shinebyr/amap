@extends('layouts.appt')

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
<section class="bg-image bg-image-sm" style="background-image: url('img/bg/bg-login.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-12 col-sm-8 col-md-4 mx-auto">
<div class="card m-b-0">
<div class="card-header">
<h4 class="card-title"><i class="fa fa-sign-in"></i>Нэвтрэх хэсэг</h4>
</div>
<div class="card-block">
<form action="profile.html">
<a class="btn btn-social btn-facebook btn-block btn-icon-left" href="" role="button"><i class="fa fa-facebook"></i> Connect with Facebook</a>
<div class="divider">
<span>or</span>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} input-icon-left m-b-10">
<i class="fa fa-user"></i>
<input id="email" type="email" name="email" class="form-control value="{{ old('email') }}" form-control-secondary" required autofocus placeholder="И-Мэйл хаяг">

@if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} input-icon-left m-b-15">
<i class="fa fa-lock"></i>
<input id="password" type="password" class="form-control form-control-secondary" name="password" placeholder="Нууц Үг">
                               @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
</div>
<label class="custom-control custom-checkbox custom-checkbox-primary">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Бүртгэлээ сануулах</span>
              </label>

<button type="submit" class="btn btn-primary btn-block m-t-10">Нэвтрэх <i class="fa fa-sign-in"></i>
</button>

<div class="divider">
<span>Бүртгэл байхгүй бол бүртгүүлж нэвтэрнэ үү!</span>
</div>
<a class="btn btn-secondary btn-block" href="{{ route('register') }}" role="button">Бүртгүүлэх</a>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
</form>
@endsection
