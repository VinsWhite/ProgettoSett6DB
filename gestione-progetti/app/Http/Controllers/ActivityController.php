<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Http\Requests\StoreactivityRequest;
use App\Http\Requests\UpdateactivityRequest;
use App\Models\project;
use App\Models\User;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createActivity(project $project)
    {
        return view('createActivity', ['users' => User::get(), 'project' => $project , 'currentUser' => auth()->user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreactivityRequest $request)
    {
        $activityData = [
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'projects_id' => $request->id, 
        ];

        Activity::create($activityData);        
        
        return redirect()->action([ProjectController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateactivityRequest $request, activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(activity $activity)
    {
        //
    }
}
