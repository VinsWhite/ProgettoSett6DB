<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::resource('/project', ProjectController::class)->middleware('auth');
Route::resource('/activity', ProjectController::class)->middleware('auth');
Route::get('project/{project}/create-activity', [ActivityController::class, 'createActivity'])->name('activities.createActivity');
Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

