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
      	<a class="btn btn-danger btn-sm" href="">X</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
