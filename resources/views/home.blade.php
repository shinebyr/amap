@extends('layouts.appt')
@section('content')

@include('inc.main')

<h1>This is HomePage</h1>

<section class="bg-image" style="background-image: url(https://img.youtube.com/vi/IsDX_LiJT7E/maxresdefault.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="video-play" data-src="https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;amp;autoplay=1&amp;amp;showinfo=0">
<div class="embed-responsive embed-responsive-16by9">
<img class="embed-responsive-item" src="https://img.youtube.com/vi/IsDX_LiJT7E/maxresdefault.jpg" alt="">
<div class="video-play-icon">
<i class="fa fa-play"></i>
</div>
</div>
</div>
</div>
</section>


<!-- /main -->

@endsection