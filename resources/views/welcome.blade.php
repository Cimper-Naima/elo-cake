@extends('layouts.layout')
@section('content')

<!-- Home sweat Home -->
<section id="branding">
    <div class="col-sm-12">
        <h1 id="brand">
            El0_Cake</h1>
        <p id="slogan">
            Happiness in the belly!</p>
    </div>
</section>
<!-- end - Home sweat Home -->

<!-- About -->
<section class="container">
<div id="about" class="row">
    <div class="col-sm-8">
    <h1>Qui sommes-nous ?</h1>
<p>blablablabla</p>
</div>
<div class="col-sm-4">
<img src="{{ asset('img/cupcake.png') }}" class="img-fluid" alt="" />
</div>
</div>
</section>
<!-- end - About -->

<!-- SLider Gourmandises -->
<section class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/1.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/3.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<!-- end - Slider Gourmandises -->
@endsection
