@extends('layouts.app')
@section('content')
<div class="main-color">

<div class="container">
<div class="row justify-content-center text-center">
        <div class="col-md-12">

<h1>Formulaire de commande</h1>

<div>
          <a href="{{ route('commandes.index')}}" class="btn btn-outline-dark text-white btn-lg">Mes commandes</a>

          <a href="{{ route('commandes.create')}}" class="btn btn-dark text-white btn-lg">Commander</a>

</div>
                        <!-- Formulaire -->
                       
<form  class="form-css form-log-rec" method="post" action="{{ route('commandes.store') }}">
@csrf
<table class="table table-striped table-bordered table-hover table-responsive-sm" summary="Tableau des gourmandises">

    <!-- Ligne 1 - Titre des colonnes -->
  <thead class="thead-dark">
    <tr>
      <th scope="col">x</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
    </tr>
  </thead>

    <!-- Ligne 2 - Gourmandises  -->
    <tbody>
    @foreach($gourmandises as $gourmandise)
    <tr>
        <td><input type="checkbox" name="gourmandises_id[{{ $gourmandise->id }}]" value="{{ $gourmandise->id }}"></td>
        <td>{{ $gourmandise->name }}</td>
        <td>{{ $gourmandise->description }}</td>
        <td>{{ $gourmandise->categorie->name }}</td>
        <td>{{ $gourmandise->prix }}</td>
        <td><input type="number" class="form-control" name="gourmandises_qte[{{ $gourmandise->id }}]" value="0"/></td>
  </tr>
  @endforeach

</tbody>

</table>

<div class="text-center">
          <button type="submit" onclick="rain()" class="btn btn-lg btn-outline-dark btn-lg">Commander</button>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
