@extends('layouts.all')
@section('title', 'Create Activity')

@section('content')

@section('addBook')
<a href="/manage/project/{{ $project->id }}"><i class="bi bi-arrow-left"></i></a>

<form method="post" action="/manage/activity">
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
        <label for="examplePriority" class="form-label">Priority <span class="text-danger">*</span></label>
        <select name="priority" class="form-control" id="examplePriority">
            <option value="Very Low">Very Low</option>
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
            <option value="Very High">Very High</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleStartDate" class="form-label">Start Date <span class="text-danger">*</span></label>
        <input type="date" name="start_date" class="form-control" id="exampleStartDate" aria-describedby="start_date">
    </div>
    <div class="mb-3">
        <label for="exampleEndDate" class="form-label">End Date <span class="text-danger">*</span></label>
        <input type="date" name="end_date" class="form-control" id="exampleEndDate" aria-describedby="end_date">
    </div>
    <input type="hidden" name="user_id" value="{{ $project->id }}">
    <button type="submit" class="btn btn-success">Create</button>
</form>

@endsection
