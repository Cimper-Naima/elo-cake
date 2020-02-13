@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Show Name</td>
          <td>Show Genre</td>
          <td>Show IMDB Rating</td>
          <td>Lead Actor</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($gourmandises as $gourmandise)
        <tr>
            <td>{{$gourmandise->id}}</td>
            <td>{{$gourmandise->name}}</td>
            <td>{{$gourmandise->genre}}</td>
            <td>{{number_format($gourmandise->imdb_rating,2)}}</td>
            <td>{{$gourmandise->lead_actor}}</td>
            <td><a href="{{ route('gourmandises.edit', $gourmandise->id)}}" class="btn btn-primary">Edit</a></td>
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
<div>
@endsection
