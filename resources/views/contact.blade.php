@extends('layouts.app')
@section('content')

<!-- Header -->
<header>
<h1 id="title-contact" class="title-css text-center">Cakons-nous !</h1>
<p id="txt-cntct" class="text-center"> Ou comment rester en contact avec la gourmandise...</p>
</header>
<!-- end Header -->

<!-- Bloc contact -->
<section>
<div class="scallop-up"></div>
<div class="colour-block">
<h1 class="title-css text-center">Où nous trouver ?</h1>

<div class="container-fluid">

<div class="row" id=icone>

	  <div class="col-4 col-sm-4 col-lg-4">
      <i class="fa fa-whatsapp fa-4x" aria-hidden="true"></i>
      <p id=titre-icone>Téléphone :</p>
      <p>(+594)694.27.95.87</p>
      <p>(+590)690.75.44.01</p>
      </div>

	  <div class="col-4 col-sm-4 col-lg-4">
      <i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
      <p id=titre-icone>Horaires :</p>
      <p>Du Lundi au Vendredi de 12h à 18h</p>
      <p>Le Samedi de 9h à 14h</p>
      </div>

	  <div class="col-4 col-sm-4 col-lg-4">
      <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
      <p id=titre-icone> Zone de Livraison :</p>
      <p>De Saint-Laurent du Maroni</p>
      <p>À l'île de Cayenne</p>
      </div>
	</div>
</div>
</div>

<div class="scallop-down"></div>
</section>
<!-- end bloc contact -->

<!-- Bloc réseaux sociaux -->
<section>
<h1 class="title-css text-center">Suivez-nous sur Instagram !</h1>
<div class=insta>

              <a href="https://www.instagram.com/el0_cake/" target="_blank">
                <i id=icone-insta class="fa fa-instagram fa-4x" aria-hidden="true"></i>
              </a>
</div>
</section>
<!-- end bloc réseaux sociaux -->
@endsection