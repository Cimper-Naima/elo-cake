@extends('layouts.layout')
@section('content')
<div id="body" class="main-color">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif

    <div class="text-center">
        <h1> Liste des gourmandises </h1>
        
        <!-- Bouton créer - Admin -->
        @auth
        @if (Auth::user()->role == 1)
        <a href="{{ route('gourmandises.create')}}" class="btn btn-primary"><i class="fa fa-plus"
                aria-hidden="true"></i>Créer une nouvelle gourmandise
        </a>
        @endif
        @endif

    </div>
    <div class="container">
        <div class="row">
            @foreach($gourmandises as $gourmandise)
            <div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                <div class="card text-black bg-warning mb-3">

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

                        <h3 class="card-title">{{$gourmandise->categorie->name}}</h3>
                        <h4 class="card-subtitle">{{$gourmandise->name}}</h4>

                        <div class="row">
                            <div class="col-8">
                                <p class="card-text">{{$gourmandise->description}}</p>
                            </div>

                            <div class="col-4 my-auto">

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
    @endsection