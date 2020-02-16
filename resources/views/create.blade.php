@extends('layouts.app')
@section('content')
 
<div id="body" class="main-color">
  
  <h1 id="title" class="justify-content-center text-center">Ajouter de nouvelles gourmandises</h1>
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
      <form id="form-plce" method="post" action="{{ route('gourmandises.store') }}">
          <!-- <div class="form-group">
              @csrf
              <label for="category">Catégorie :</label>
              <input type="text" class="form-control" name="category"/>
          </div> -->
          <select name="categorie_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
          <div class="form-group">
          @csrf
              <label for="name">Nom de la gourmandise :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix :</label>
              <input type="number" class="form-control" name="prix"/>
          </div>
          
          <button type="submit" class="btn btn-dark btn-lg btn-block">Créer</button>

      </form>
  </div>
</div>
@endsection