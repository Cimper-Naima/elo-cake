@extends('layouts.layout')
<div id="body" class="main-color">
@section('content')
<div>
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <table class="table table-striped">
        <h1 class="justify-content-center text-center"> Liste des gourmandises </h1>
        <P class="text-center">Placer ici une petite description sur les prix. </p>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                    <div class="card text-black bg-warning mb-3">
                        <!-- Heading -->
                        <div class="card-body">
                            <h3 class="card-title pt-3">Vanilo</h3>
                            <h4 class="card-subtitle text-muted">Cupcakes</h4>
                        </div>
                        <!-- Text Content -->
                        <div class="card-body pt-0">
                        <img class="card-img" src="{{ asset('img/cupcake.png') }}" alt="Card image cap">
                            <div class="card-text">Caramel sugar plum I love gummi bears liquorice jelly tart croissant macaroon. Lollipop donut jelly gummies.</div>

                        </div>
                        
                    </div>
                </div>

                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Catégorie</td>
                        <td>Quantité</td>
                        <td>Description</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gourmandises as $gourmandise)
                    <tr>
                        <td>{{$gourmandise->id}}</td>
                        <td>{{$gourmandise->name}}</td>
                        <td>{{$gourmandise->category}}</td>
                        <td>{{number_format($gourmandise->quantity,2)}}</td>
                        <td>{{$gourmandise->description}}</td>
                        <td><a href="{{ route('gourmandises.edit', $gourmandise->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('gourmandises.destroy', $gourmandise->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    </table>
</div>
</div>
@endsection
