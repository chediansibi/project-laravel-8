@extends('layouts.app')

@section('content')
<div class="container">
	<a class="btn btn-primary" href="">Ajouter etudiant</a>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
      	<a class="btn btn-success btn-sm" href="">E</a>
      	<a class="btn btn-danger btn-sm" href="">X</a>

      </td>


    </tr>
  </tbody>
</table>
</div>
@endsection
