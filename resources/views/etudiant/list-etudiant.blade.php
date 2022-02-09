@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-info">{{ count($etudiants) }} etudiants</a>
	<a class="btn btn-primary" href="{{ url ('/etudiants/create') }}">Ajouter etudiant</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Adress</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($etudiants as $item )
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->phone }}</td>
      <td>{{ $item->adress }}</td>
      <td>
      	<a class="btn btn-success btn-sm" href="{{ url('/etudiants/'. $item->id .'/edit')}}">E</a>
      	<a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteEtudiant{{ $item->id }}">X</a>
      </td>
    </tr>
    <!-- Modal -->
<div class="modal fade" id="deleteEtudiant{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete this member <b>{{ $item->name }}</b>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form method="POST" action="{{route('etudiants.destroy', $item->id) }}"  >
@method('DELETE')
@csrf
<button type="submit" class="btn btn-primary">Yes</button>
</form>
        
      </div>
    </div>
  </div>
</div>
@endforeach
  </tbody>
</table>
</div>
@endsection
