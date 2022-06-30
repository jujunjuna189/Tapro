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
    // Home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Workspaces
    Route::get('/workspaces', [App\Http\Controllers\Workspaces\WorkspacesController::class, 'index'])->name('workspaces');
    // Workspace
    Route::get('/workspace/task', [App\Http\Controllers\Workspace\WorkspaceController::class, 'task'])->name('workspace.task');
    Route::post('/workspace/create', [App\Http\Controllers\Workspace\WorkspaceController::class, 'create'])->name('workspace.create');
    Route::post('/workspace/delete', [App\Http\Controllers\Workspace\WorkspaceController::class, 'delete'])->name('workspace.delete');
    // Project
    Route::post('/project/create', [App\Http\Controllers\Project\ProjectController::class, 'create'])->name('project.create');
    //Task
    Route::post('/task/create', [App\Http\Controllers\Task\TaskController::class, 'create'])->name('task.create');
    //Member
    Route::post('/member/create', [App\Http\Controllers\Member\MemberController::class, 'create'])->name('member.create');
});
