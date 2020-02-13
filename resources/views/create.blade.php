@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajouter des gourmandises
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('gourmandises.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom :</label>
              <input type="text" class="form-control" name="gourmandise_name"/>
          </div>
          <div class="form-group">
              <label for="price">Quantité :</label>
              <input type="number" class="form-control" name="genre"/>
          </div>
          <div class="form-group">
              <label for="price">Prix à l'unité :</label>
              <input type="number" class="form-control" name="imdb_rating"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="lead_actor"/>
          </div>
          <button type="submit" class="btn btn-primary">Créer</button>
      </form>
  </div>
</div>
@endsection