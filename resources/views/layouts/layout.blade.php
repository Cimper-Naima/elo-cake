<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El0_Cake</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>
<div class="header">
<nav class="navbar navbar-expand-sm navbar-dark bg-faded">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand" href="#">El0_Cake</a>

<!-- Links -->
<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">Accueil</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Gourmandises</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact</a>
</li>
@if (Route::has('login'))
        @auth
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">Mon compte</a>
</li>
        @else
        <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
</li>
        @if (Route::has('register'))
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Inscription</a>
</li>
        @endif
        @endauth
    @endif
</ul>
   
</div>
</nav>
</div>
</header>

<main>
  <div class="container">
    @yield('content')
  </div>
</main>

  <footer id="l-footer" class=" text-center py-2">
<div class="container">
    <p class="mx-0 small">
        <br>Réalisé par Naïma CIMPER || Kathleen MALIALIN
        <br>Copyright&copy;2020. Tous droits
        réservés.
        <a href="">Mentions légales.</a>
            </p>
</div>
</footer>
  <!-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> -->
</body>
</html>