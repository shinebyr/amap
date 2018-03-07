@extends('layouts.appt')

@section('content')


<!-- main -->
<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
<section class="bg-image bg-image-sm" style="background-image: url('https://img.youtube.com/vi/BhTkoDVgF6s/maxresdefault.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-12 col-sm-8 col-md-4 mx-auto">
<div class="card">
<div class="card-header">
<h4 class="card-title"><i class="fa fa-user-plus"></i> ШИНЭ БҮРТГЭЛ ҮҮСГЭХ</h4>
</div>
<div class="card-block">
<form action="profile.html">
<a class="btn btn-social btn-google-plus btn-block btn-icon-left" href="" role="button"><i class="fa fa-google-plus"></i> Google+ хаягаар бүртгүүлэх</a>
<div class="divider"><span>ЭСВЭЛ</span></div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input-icon-left m-b-10">
<i class="fa fa-user"></i>
<input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control form-control-secondary" placeholder="Нэр" required autofocus>
                              @if ($errors->has('name'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                                </span>
                              @endif
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} input-icon-left m-b-10">
<i class="fa fa-envelope"></i>
<input id="email" type="email" class="form-control form-control-secondary" name="email" value="{{ old('email') }}" placeholder="И-Мэйл хаяг">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
</div>
<div class="divider"><span>Нууцлал</span></div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} input-icon-left m-b-10">
<i class="fa fa-lock"></i>
<input id="password" name="password" type="password" class="form-control form-control-secondary" required placeholder="Нууц үг">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
</div>
<div class="form-group input-icon-left m-b-10">
<i class="fa fa-unlock"></i>
<input id="password-confirm" type="password" class="form-control form-control-secondary" name="password_confirmation" placeholder="Нууц үг давтах" required>
</div>

<div class="divider"><span>Дотоод журам</span></div>
<!-- <label class="custom-control custom-checkbox custom-checkbox-primary custom-checked">
                <input type="checkbox" class="custom-control-input" checked="">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Subscribe to monthly newsletter</span>
              </label> -->
<label class="custom-control custom-checkbox custom-checkbox-primary">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Дотоод журмыг зөвшөөрөх <a href="#" data-toggle="modal" data-target="#terms">Журам</a></span>
              </label>
<button type="submit" class="btn btn-primary m-t-10 btn-block">Бүртгэл үүсгэх</button>
</form>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="terms">
<div class="modal-dialog modal-top" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"><i class="fa fa-file-text-o"></i> Дотоод журам</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
</div>
<div class="modal-body">
<h6>1. Журам</h6>
<p>Журам</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Хаах</button>
<button type="button" class="btn btn-primary" data-dismiss="modal">Зөвшөөрөх</button>
</div>
</div>
</div>
</div>
</section>
<!-- /main -->
</form>


@endsection

