@extends('layouts.app')
@section('content')
<div class="main-color">
<div class="container">
<div class="row justify-content-center text-center">
        <div class="col-md-8">

        <h1 class="other-title-css"> Liste des gourmandises </h1>

    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
        
<!-- Bouton commander - all users -->
@auth
        @if (Auth::user()->role == 2 )
<div class="text-center">
          <a href="{{ route('commandes.create')}}"class="btn btn-dark text-white btn-lg">Commander</a>
</div>
@endif
@endif

@guest
<div class="text-center">
          <a href="{{ route('commandes.create')}}"class="btn btn-dark text-white btn-lg">Commander</a>
</div>
@endif
        <!-- Bouton créer - Admin -->
        @auth
        @if (Auth::user()->role == 1)
        <a href="{{ route('gourmandises.create')}}" class="btn btn-primary"><i class="fa fa-plus"
                aria-hidden="true"></i>Créer une nouvelle gourmandise
        </a>
        
        @endif
        @endif

    </div>
    
            @foreach($gourmandises as $gourmandise)
            <div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                <div class="card text-black bg-light mb-3">

                    <div class="card-body">
                        <div class="row">
                            @auth
                            @if (Auth::user()->role == 1)
                            <a href="{{ route('gourmandises.edit', $gourmandise->id)}}" class="btn btn-primary"><i
                                    class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form id="form-btn" action="{{ route('gourmandises.destroy', $gourmandise->id)}}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button>
                            </form>
                            @endif
                            @endif
                        </div>

                        <h2 class="card-title">{{$gourmandise->categorie->name}}</h2>
                        <h3 class="card-subtitle">{{$gourmandise->name}}</h3>

                        <div class="row">
                            <div class="col-8">
                                <p class="card-text">{{$gourmandise->description}}</p>
                            </div>

                            <div class="col-4 my-auto py-2">

                                <img class="card-img" src="{{ asset('img/cupcake.png') }}" alt="Card image cap">
                                <p class="prix">{{$gourmandise->prix}}€ / unité</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
        </div>
</div>
</div>
    </div>
    @endsection
