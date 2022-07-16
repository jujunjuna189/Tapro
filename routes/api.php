<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth
Route::post('/auth/login', [App\Http\Controllers\ApiController\AuthController::class, 'login']);
Route::post('/auth/register', [App\Http\Controllers\ApiController\AuthController::class, 'register']);
// Workspace
Route::get('/workspace/data', [App\Http\Controllers\ApiController\WorkspaceController::class, 'data']);
Route::post('/workspace/create', [App\Http\Controllers\ApiController\WorkspaceController::class, 'create']);
Route::post('/workspace/update', [App\Http\Controllers\ApiController\WorkspaceController::class, 'update']);
Route::post('/workspace/delete', [App\Http\Controllers\ApiController\WorkspaceController::class, 'delete']);
// Project
Route::get('/project/data', [App\Http\Controllers\ApiController\ProjectController::class, 'data']);
Route::post('/project/create', [App\Http\Controllers\ApiController\ProjectController::class, 'create']);
Route::post('/project/update', [App\Http\Controllers\ApiController\ProjectController::class, 'update']);
Route::post('/project/delete', [App\Http\Controllers\ApiController\ProjectController::class, 'delete']);
// Task
Route::get('/task/data', [App\Http\Controllers\ApiController\TaskController::class, 'data']);
Route::get('/task/dataByWorkspace', [App\Http\Controllers\ApiController\TaskController::class, 'dataByWorkspace']);
Route::post('/task/create', [App\Http\Controllers\ApiController\TaskController::class, 'create']);
Route::post('/task/update', [App\Http\Controllers\ApiController\TaskController::class, 'update']);
Route::post('/task/delete', [App\Http\Controllers\ApiController\TaskController::class, 'delete']);
// Member
Route::get('/member/data', [App\Http\Controllers\ApiController\MemberController::class, 'data']);
Route::post('/member/create', [App\Http\Controllers\ApiController\MemberController::class, 'create']);
Route::post('/member/update', [App\Http\Controllers\ApiController\MemberController::class, 'update']);
Route::post('/member/delete', [App\Http\Controllers\ApiController\MemberController::class, 'delete']);
