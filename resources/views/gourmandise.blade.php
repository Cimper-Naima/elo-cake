@extends('layouts.layout')
@section('content')
<div id="body" class="main-color">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
        <h1 class="justify-content-center text-center"> Liste des gourmandises </h1>
        <P class="text-center">Placer ici une petite description sur les prix. </p>
        
            <div class="container">
            <div class="row">
            @foreach($gourmandises as $gourmandise)
                <div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                    <div class="card text-black bg-warning mb-3">

  <div class="card-body">
  <a href="{{ route('gourmandises.edit', $gourmandise->id)}}" class="btn btn-primary">Éditer</a>

<form id="form-btn" action="{{ route('gourmandises.destroy', $gourmandise->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Supprimer</button>
</form>
<div class="row">
    <div class="col-11">
    <h3 class="card-title">{{$gourmandise->category}}</h3>
    <h4 class="card-subtitle">{{$gourmandise->name}}</h4>
    <p class="card-text">{{$gourmandise->description}}</p>
    </div>

    <div class="col-1 my-auto">

    <img class="card-img" src="{{ asset('img/cupcake.png') }}" alt="Card image cap">

    </div>
    </div>  
 
    </div>
</div>
                        
                    </div>
                    @endforeach
                </div>
    
</div>
@endsection
