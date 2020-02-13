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
<div class="container-fluid">
		
<div id="cakerousel" class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#cakerousel" data-slide-to="0" class="active"></li>
    <li data-target="#cakerousel" data-slide-to="1"></li>
    <li data-target="#cakerousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/cup.jpg')}}" alt="Cupcakes bleus">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/cake.jpg')}}" alt="Cupcakes blancs">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/event.jpg')}}" alt="Gâteau d'anniversaire">
    </div>
  </div>
  <a class="carousel-control-prev" href="#cakerousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#cakerousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>
</div>
</section>
<!-- end - Slider Gourmandises -->

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
@endsection
