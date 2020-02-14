@extends('layouts.layout')
@section('content')

<!-- Header -->
<section id="branding">
    <div class="col-sm-12">
        <h1 id="logo">
            El0_Cake</h1>
        <p id="slogan">
            Happiness in the belly!</p>
    </div>
</section>
<!-- end - Header -->

<!-- A-propos -->
<div class="scallop-up"></div>
<section class="container">
<div id="a-propos" class="row">
    <div class="col-sm-8">
<!-- <div class="colour-block"> -->
    <h1>Qui sommes-nous ?</h1>
<p>Cupcake ipsum dolor sit amet gingerbread sugar plum. Pie tiramisu candy canes gingerbread cotton candy carrot cake pudding muffin. Toffee I love cake sugar plum chocolate. Macaroon I love cheesecake chocolate marshmallow caramels I love carrot cake. I love powder tootsie roll topping bear claw dragée. Gingerbread I love cake sesame snaps bonbon wafer bear claw lollipop. Soufflé gummi bears wafer bonbon jujubes icing pie macaroon cupcake. Ice cream topping macaroon tart muffin sugar plum. Sweet roll gummi bears liquorice muffin sugar plum icing topping cheesecake jelly beans. Liquorice sweet sweet roll jujubes bonbon sesame snaps. Tiramisu tootsie roll sweet muffin cake I love I love cupcake. Icing chupa chups macaroon I love cake I love gingerbread pastry sweet roll. Pudding sugar plum I love gummi bears liquorice jelly tart croissant macaroon. Lollipop donut jelly gummies.</p>
</div>
<div class="col-sm-4">
<img src="{{ asset('img/cupcake.png') }}" class="img-fluid" alt="dessin-cupcake" />
</div>
</div>
</section>
<div class="scallop-up"></div>
<!-- end - À propos -->

<!-- Gourmandises -->
<section id="cakerousel-bg" class="container">
<div id="gourmandises" class="container-fluid">
<h1> Quelques gourmandises...</h1>
<p> Vous pouvez retrouver toutes ces gourmandises dans l'onglet "Gourmandises".</p>
<div id="cakerousel" class="carousel slide bg-inverse " data-ride="carousel">
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
<!-- </div> -->
</div>
</div>
</div>
</section>
<!-- end - Gourmandises -->

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