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

// Workspace
Route::post('/workspace/create', [App\Http\Controllers\ApiController\WorkspaceController::class, 'create']);
Route::post('/workspace/update', [App\Http\Controllers\ApiController\WorkspaceController::class, 'update']);
Route::post('/workspace/delete', [App\Http\Controllers\ApiController\WorkspaceController::class, 'delete']);
// Project
Route::post('/project/create', [App\Http\Controllers\ApiController\ProjectController::class, 'create']);
Route::post('/project/update', [App\Http\Controllers\ApiController\ProjectController::class, 'update']);
Route::post('/project/delete', [App\Http\Controllers\ApiController\ProjectController::class, 'delete']);
// Task
Route::post('/task/create', [App\Http\Controllers\ApiController\TaskController::class, 'create']);
Route::post('/task/update', [App\Http\Controllers\ApiController\TaskController::class, 'update']);
Route::post('/task/delete', [App\Http\Controllers\ApiController\TaskController::class, 'delete']);