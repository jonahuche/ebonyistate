@extends('layouts.app')

@section('title')
	Ebonyi Stimulus State Government Stimulus Project 1
@endsection

@section('styles')

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
      height: 350px;
    }
@endsection

@section('content')
	<div class="container-fluid">
	<div class="row">
		
		<br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{{asset('images/banner1.jpg')}}" alt="Projects" width="100%" height="345">
        <div class="carousel-caption">
          <h3>On Of The Numerous Projects</h3>
          <p>Infrastructure is one the elements developments</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('images/akanuibiamflyover.jpg')}}" alt="Akanu Ibiam Flyover" width="100%" >
        <div class="carousel-caption">
          <h3>Ebonyi</h3>
          <p>This is the new face of Ebonyi.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{{ asset('images/goodroadnetwork.jpg') }}" alt="Flower" width="100%">
        <div class="carousel-caption">
          <h3>Good Road Network</h3>
          <p>Good road network to aid comercial activities in the state.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('images/roundabout.jpg')}}" alt="Ebonyi State Shoe Room" width="100%">
        <div class="carousel-caption">
          <h3>Show Room</h3>
          <p>Utra Mordern show room, for displaying food proced in Ebonyi State.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

	</div>
</div>

@endsection