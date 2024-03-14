@extends('layouts.all')
@section('title', 'Project list')

@section('content')

@section('addBook')
<a href="project/create" class="btn btn-primary mt-4">Add project</a>


@if($projects)
<table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Scope</th>
      <th scope="col">Deadline</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $proj )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $proj->title }}</td>
      <td>{{ $proj->description }}</td>
      <td>{{ $proj->scope }}</td>
      <td>{{ $proj->deadline }}</td>
      <td>{{ $proj->name }}</td>
      <td><a href="project/update"><i class="text-info bi bi-info-square"></i></a></td>
      <td><a href="project/{{$proj->id}}/destroy"><i class="text-danger bi bi-trash"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<p>Nessun libro trovato.</p>
@endif

@endsection