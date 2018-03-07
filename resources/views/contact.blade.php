@extends('layouts.appt')

@section('content')
<div class="container">
	<br><h1>Холбогдох хэсэг</h1>
	{!! Form::open(array('url' => 'contact/submit')) !!}
		<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Нэр'])}}	
		</div>
		<div class="form-group">
			{{Form::label('email', 'E-Mail Address')}}
			{{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'И-Мэйл хаяг'])}}
		</div>
		<div class="form-group">
			{{Form::label('message', 'Message')}}
			{{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Текст'])}}
		</div>
		<div>
			{{Form::submit('Илгээх', ['class' => 'btn btn-primary'])}}
		</div>
	{!! Form::close() !!}
</div>
<br>
@endsection	