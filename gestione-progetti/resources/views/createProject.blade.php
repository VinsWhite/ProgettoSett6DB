@extends('layouts.all')
@section('title', 'Create Project')

@section('content')

@section('addBook')
<a href="/manage/project"><i class="bi bi-arrow-left"></i></a>

<form method="post" action="/manage/project">
    @csrf
    <div class="mb-3">
        <label for="exampleTitle" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control" id="exampleTitle" aria-describedby="title">
    </div>
    <div class="mb-3">
        <label for="exampleDescription" class="form-label">Description <span class="text-danger">*</span></label>
        <textarea style="resize: none;" class="form-control" name="description" id="exampleDescription" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleScope" class="form-label">Scope <span class="text-danger">*</span></label>
        <textarea style="resize: none;" class="form-control" name="scope" id="exampleScope" rows="2"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleDeadline" class="form-label">Deadline <span class="text-danger">*</span></label>
        <input type="date" name="deadline" class="form-control" id="exampleDeadline" aria-describedby="deadline">
    </div>
    <input type="hidden" name="user_id" value="{{ $currentUser->id }}">
    <button type="submit" class="btn btn-success">Create</button>
</form>

@endsection
