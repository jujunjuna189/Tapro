<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Group
    Route::get('/group', [App\Http\Controllers\Group\GroupController::class, 'index'])->name('group');
    // Project
    Route::get('/project', [App\Http\Controllers\Project\ProjectController::class, 'index'])->name('project');
    // Task Progress
    Route::get('/tasks', [App\Http\Controllers\Tasks\TasksController::class, 'index'])->name('tasks');
    // Workspace
    Route::get('/workspace/project', [App\Http\Controllers\Workspace\WorkspaceController::class, 'project'])->name('workspace.project');
    Route::get('/workspace/task', [App\Http\Controllers\Workspace\WorkspaceController::class, 'task'])->name('workspace.task');
});
