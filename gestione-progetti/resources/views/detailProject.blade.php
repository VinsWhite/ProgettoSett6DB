@extends('layouts.all')
@section('title', 'Detail project ')

@section('content')

<a href="/manage/project"><i class="bi bi-arrow-left"></i></a>

<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title fw-semibold">{{$project->title}}</h5>
    <p class="card-text"><span class="text-success">Description: </span>{{$project->description}}</p>
    <p class="card-text"><span class="text-success">Scope: </span>{{$project->scope}}</p>
    <p class="card-text"><span class="text-success">Deadline: </span>{{$project->deadline}}</p>
    <p class="card-text"><span class="text-success">User: </span>{{$user->name}}</p>
  </div>
</div>

<div>
    <a href="{{$project->id}}/create-activity" class="btn btn-success mt-4">Add activity</a>
</div>

@if($activity)
    <h2>Activities</h2>
    @foreach($activity as $ac)
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-semibold">{{$ac->title}}</h5>
            <p class="card-text"><span class="text-success">Description: </span>{{$ac->description}}</p>
            <p class="card-text"><span class="text-success">Priority: </span>{{$ac->priority}}</p>
            <p class="card-text"><span class="text-success">Start: </span>{{$ac->start_date}}</p>
            <p class="card-text"><span class="text-success">End: </span>{{$ac->end_date}}</p>
        </div>
    </div>
    @endforeach
@else
    <p>No activities found.</p>
@endif

@endsection
