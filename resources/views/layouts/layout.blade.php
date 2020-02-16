<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El0_Cake</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>
<div>
<nav class="navbar navbar-expand-sm navbar-dark bg-faded">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand" href="{{ url('/') }}">El0_Cake</a>

<!-- Links -->
<div id="nav-content" class="collapse navbar-collapse justify-content-end">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="{{ url('/') }}">Accueil</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ url('/gourmandises') }}">Gourmandises</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
   
</div>
</nav>
</div>
</header>

<main>
  <!-- <div class="container"> -->
    @yield('content')
  <!-- </div> -->
</main>

<footer id="l-footer" class="text-center py-2">
<div class="container">
    <p class="mx-0 small">
    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i><a href="https://www.instagram.com/el0_cake/" target="_blank">el0_cake</a>
    <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>(+594)694.27.95.87
        <br>Réalisé par Naïma CIMPER || Kathleen MALIALIN
        <br>Copyright&copy;2020. Tous droits
        réservés.
        <a href="">Mentions légales.</a>
            </p>
</div>
</footer>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>