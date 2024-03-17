@extends('layouts.all')
@section('title', 'Project list')

@section('content')

@section('addBook')
<div class="d-flex flex-col">
    <a href="project/create" class="btn btn-success mt-4">Add project</a>
</div>



@if($projects)
<table class="table">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Scope</th>
      <th scope="col">Deadline</th>
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
      <td><a href="project/{{$proj->id}}"><i class="text-success bi bi-info-square"></i></a></td>
      <td>
        <form action="{{ route('project.destroy', $proj->id) }}" method="POST" onsubmit="return confirm('Do you want to delete this project?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 bg-white"><i class="text-danger-emphasis bi bi-trash"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<p>Nessun progetto trovato.</p>
@endif

@endsection