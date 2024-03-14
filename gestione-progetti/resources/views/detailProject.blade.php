@extends('layouts.all')
@section('title', 'Detail project ')

@section('content')

@section('addBook')
<a href="/manage/project"><i class="bi bi-arrow-left"></i></a>

<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title fw-semibold">{{$project->title}}</h5>
    <p class="card-text"><span class="text-success">Description: </span> {{$project->description}}</p>
    <p class="card-text"><span class="text-success">Scope: </span> {{$project->scope}}</p>
    <p class="card-text"><span class="text-success">Deadline: </span> {{$project->deadline}}</p>
    <p class="card-text"><span class="text-success">User: </span> {{$user->name}}</p>
  </div>
</div>

@if(!is_null($activity) && $activities->isNotEmpty())
    <h2>Activities</h2>
    @foreach($activity as $activity)
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-semibold">{{$activity->title}}</h5>
            <p class="card-text"><span class="text-success">Description: </span> {{$activity->description}}</p>
            <p class="card-text"><span class="text-success">Priority: </span> {{$activity->priority}}</p>
            <p class="card-text"><span class="text-success">Start: </span> {{$activity->start_date}}</p>
            <p class="card-text"><span class="text-success">End: </span> {{$activity->end_date}}</p>
        </div>
    </div>
    @endforeach
@else
    <p>No activities found.</p>
@endif

@endsection
