@extends('layouts.layout')
<div id="body" class="main-color">
@section('content')

<h1 class="justify-content-center text-center">Modifier les gourmandises</h1>
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
    <form method="post" action="{{ route('gourmandises.update', $gourmandises->id)}}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="category">Catégorie :</label>
              <input type="text" class="form-control" name="category" value="{{ $gourmandises->category }}"/>
          </div>
          <div class="form-group">
              <label for="name">Nom de la gourmandise :</label>
              <input type="text" class="form-control" name="name" value="{{ $gourmandises->name }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $gourmandises->description  }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Quantité :</label>
              <input type="text" class="form-control" name="quantity" value="{{ number_format($gourmandises->quantity, 2)  }}"/>
          </div>
          <button type="submit" class="btn btn-dark btn-lg btn-block">Modifier</button>
      </form>
  </div>
</div>
@endsection