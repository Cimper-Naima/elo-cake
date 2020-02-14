@extends('layouts.app')
<div class="main-color">
@section('content')

<div class="container">
    <div class="row justify-content-center text-center">
    <div class="jumbotron">
        <!-- <div class="col-md-8">
        <div class="card text-black bg-warning mb-3 other-card">
                <div class="card-header">Bienvenue !</div> -->
<h1>Bienvenue !</h1>
                <!-- <div class="card-body"> -->
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
