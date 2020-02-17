@extends('layouts.app')
@section('content')

<!-- Header -->
<section id="branding">
    <div class="col-sm-12">
        <h1 id="logo" class="title-css">
            El0_Cake</h1>
        <!-- <p id="slogan">
            Happiness in the belly!</p> -->
            <blockquote id="slogan">“À mon sens, la gourmandise n'est pas un péché mais plutôt une qualité.” <br>- Catherine DENEUVE</blockquote>
    </div>
</section>
<!-- end - Header -->

<!-- A-propos -->
<div class="scallop-up"></div>
<section class="container">
<div id="a-propos" class="row">
    <div class="col-sm-8">
<!-- <div class="colour-block"> -->
    <h1 class="title-css">Qui sommes-nous ?</h1>
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
<h1 class="title-css"> Quelques gourmandises...</h1>
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
@endsection