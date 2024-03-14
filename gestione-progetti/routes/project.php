<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::resource('/project', ProjectController::class)->middleware('auth');
Route::get('project/{project}', [ProjectController::class, 'show'])->name('project.show');