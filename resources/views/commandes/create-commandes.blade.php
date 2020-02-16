@extends('layouts.app')
@section('content')

<div class="main-color">
<h1 id="title" class="justify-content-center text-center">Formulaire de commande</h1>

                        <!-- Formulaire -->
<form class="form-plce" method="post" action="{{ route('gourmandises.store') }}">

<table class="table table-striped table-bordered table-hover table-responsive-sm" summary="Tableau des gourmandises">
    <!-- Ligne 1 - Titre des colonnes -->
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
    </tr>
  </thead>

    <!-- Ligne 2 - Gourmandises  -->
    <tbody>
    <tr>
        <td>Maracu</td>
        <td>Cupcake classique à la vanille - insert maracudja</td>
        <td>Cupcake</td>
        <td>2€</td>
        <td><input type="number" id="quantity" name="quantity"></td>
</tr>

<tr>
        <td>Chocomint</td>
        <td>Gâteau au chocolat et à la menthe</td>
        <td>Gâteau</td>
        <td>12€</td>
        <td><input type="number" id="quantity" name="quantity"></td>
</tr>
</tbody>

</table>

<div class="text-center">
          <button type="submit" class="btn btn-lg btn-outline-dark btn-lg">Commander</button>
</div>
</form>
@endsection
