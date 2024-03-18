@extends('layouts.all')
@section('title', 'Edit Project')

@section('content')

@section('addBook')
<a href="/manage/project"><i class="bi bi-arrow-left"></i></a>

<form method="post" action="/manage/project/{{ $project->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleTitle" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control" id="exampleTitle" aria-describedby="title" value="{{ $project->title }}">
    </div>
    <div class="mb-3">
        <label for="exampleDescription" class="form-label">Description <span class="text-danger">*</span></label>
        <textarea style="resize: none;" class="form-control" name="description" id="exampleDescription" rows="5">{{ $project->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleScope" class="form-label">Scope <span class="text-danger">*</span></label>
        <textarea style="resize: none;" class="form-control" name="scope" id="exampleScope" rows="2">{{ $project->scope }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleDeadline" class="form-label">Deadline <span class="text-danger">*</span></label>
        <input type="date" name="deadline" class="form-control" id="exampleDeadline" aria-describedby="deadline" value="{{ $project->deadline }}">
    </div>
    <input type="hidden" name="user_id" value="{{ $currentUser->id }}">
    <button type="submit" class="btn btn-success">Edit</button>
</form>


@endsection
