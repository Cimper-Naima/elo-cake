@extends('layouts.app')
@section('content')
<div class="main-color min-height">

<div class="container">
<div class="row justify-content-center text-center">
        <div class="col-md-12">

<h1 class="other-title-css">Historique des commandes</h1>

<div>
          <a href="{{ route('commandes.index')}}" class="btn btn-dark text-white btn-lg">Mes commandes</a>

          <a href="{{ route('commandes.create')}}" class="btn btn-outline-dark text-white btn-lg">Commander</a>

</div>

          <!-- Tableau récapitulatif -->
<table id="story-cmde" class="table table-striped table-bordered table-hover table-responsive-sm" summary="Tableau des gourmandises">

    <!-- Ligne 1 - Titre des colonnes -->
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Description</th>
    </tr>
  </thead>

    <!-- Ligne 2 - Récapitulatif des commandes  -->
    <tbody>
    @foreach($commandes as $commande)
    <tr>
        <td>{{ $commande->id }}</td>
        <td>
        @foreach($commande->gourmandises as $gourmandise)
        
        {{ $gourmandise->name }} : {{ $gourmandise->pivot->quantity }}  <br>
        
        @endforeach
        </td>   
    </tr>
  @endforeach
</tbody>

</table>

</div>
</div>
</div>
</div>
@endsection
