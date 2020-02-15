@extends('layouts.app')
@section('content')
<div id="body" class="main-color">
<div class="container">
    <div class="row justify-content-center text-center">
    <div class="jumbotron">

<h1>Bienvenue !</h1>
                
                    <p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Vous êtes maintenant connecté.e !</p>
                   <img class="card-img" src="{{ asset('img/cupcake.png') }}" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
