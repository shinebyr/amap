@extends('layouts.appt')

@section('content')
<section class="hero hero-game" style="background-image: url('img/hero/hero.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="hero-block">
<div class="hero-left">
<h2 class="hero-title">The Witcher 3: Wild Hunt</h2>
<p>The world is in chaos. The air is thick with tension and the smoke of burnt villages.</p>
<a class="btn btn-primary btn-lg btn-shadow btn-rounded btn-effect" href="game-post.html" role="button">Read More</a>
<a class="btn btn-outline-default btn-lg btn-rounded m-l-10" href="#" role="button">Follow Now <i class="fa fa-heart-o"></i></a>
</div>
<div class="hero-right">
<div class="hero-review">
<span>Gameforest</span>
<a href="review-post.html" class="chart easypiechart" data-percent="89" data-scale-color="#e3e3e3"><span>89</span>%</a>
</div>
<div class="hero-review">
<span>MetaCritic</span>
<a href="review-post.html">93</a>
</div>
<div class="hero-review">
<span>Users</span>
<a href="review-post.html">9.1</a>
</div>
</div>
</div>
</div>
</section>

<h1>Games</h1>

@endsection