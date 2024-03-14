<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = DB::table('projects')
                    ->join('users', 'projects.users_id', '=', 'users.id');
        return view ("viewProject", ['projects' => $projects->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createProject', ['users' => User::get(), 'currentUser' => auth()->user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprojectRequest $request)
    {
        $projectData = [
            'title' => $request->title,
            'description' => $request->description,
            'scope' => $request->scope,
            'deadline' => $request->deadline,
            'users_id' => auth()->id(), 
        ];
        
        Project::create($projectData);        
        
        return redirect()->action([ProjectController::class, 'index']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        $user = $project->user;
        $activity = $project->activity;
        /* dd($activity); */
    
        return view('detailProject', ['project' => $project, 'user' => $user, 'activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprojectRequest $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
