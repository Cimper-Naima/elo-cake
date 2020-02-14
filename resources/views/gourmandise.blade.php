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
                <div class="col-12 col-sm-12  my-lg-4 mb-4">
                    <div class="card col-lg-6 text-black bg-warning mb-3">
  <div class="card-body">
  <a href="{{ route('gourmandises.edit', $gourmandise->id)}}" class="btn btn-primary">Éditer</a>

<form id="form-btn" action="{{ route('gourmandises.destroy', $gourmandise->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Supprimer</button>
</form>
    <h5 class="card-title">{{$gourmandise->category}}</h5>
    <h6 class="card-subtitle">{{$gourmandise->name}}</h6>
    <img class="card-img" src="{{ asset('img/cupcake.png') }}" alt="Card image cap">
    <p class="card-text">{{$gourmandise->description}}</p>
  </div>
</div>
                        
                    </div>
                    @endforeach
                </div>
    
</div>
@endsection
