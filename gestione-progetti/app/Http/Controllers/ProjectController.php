<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $userId = Auth::id();
        $projects = DB::table('projects')
                    ->where('users_id', '=', $userId);
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
        // Ottieni l'ID dell'utente autenticato
        $userId = Auth::id();

        // controlla se l'utente autenticato è il proprietario del progetto
        if ($project->users_id != $userId) {
            return redirect()->route('project.index')->with('error', 'Non hai accesso a questo progetto');
        }

        $user = $project->user;
        $activity = $project->activity;

        return view('detailProject', ['project' => $project, 'user' => $user, 'activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        return view('editProject', ['project' => $project,'users' => User::get(), 'currentUser' => auth()->user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprojectRequest $request, project $project)
    {

        $updateData = [
            'title' => $request->title,
            'description' => $request->description,
            'scope' => $request->scope,
            'deadline' => $request->deadline,
            'users_id' => auth()->id(), 
        ];
        
        $project->update($updateData);     
        return redirect('/manage/project')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }

}
