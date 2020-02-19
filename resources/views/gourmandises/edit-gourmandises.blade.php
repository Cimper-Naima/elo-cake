@extends('layouts.app')
@section('content')

<div class="main-color">
  <div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">

<h1 class="other-title-css text-center">Modifier les gourmandises</h1>
  
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form id="log-ster" class="form-css form-log-rec px-4" method="post" action="{{ route('gourmandises.update', $gourmandises->id)}}">
    
    
    <div class="form-group">
              <label for="name">Catégorie :</label>
    <select name="categorie_id">
              <option value="{{ $gourmandises->categorie->id }}" selected>{{ $gourmandises->categorie->name }}</option>
              <option value="">----</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
</div>
          <div class="form-group">
          @csrf
              @method('PATCH')
              <label for="name">Nom de la gourmandise :</label>
              <input type="text" class="form-control" name="name" value="{{ $gourmandises->name }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $gourmandises->description  }}"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix :</label>
              <input type="number" class="form-control" name="prix" value="{{ number_format($gourmandises->prix, 2)  }}"/>
          </div>
          <button type="submit" class="btn btn-dark btn-lg btn-block">Modifier</button>
      </form>
</div>
</div>
</div>
</div>
@endsection