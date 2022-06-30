<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\ApiController\TaskController as ApiControllerTaskController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $task = (new ApiControllerTaskController)->create($request);
        $task = $task->original['data'];
        return response()->json($task);
    }

    public function getTask($project_id)
    {
        $requestProject = new Request(['project_id' => $project_id]);
        $project = (new ApiControllerTaskController)->data($requestProject);
        $project = $project->original['data'];

        $result = [];
        foreach ($project as $val) {
            $result[] = (object) [
                'id' => $val->id,
                'project_id' => $val->project_id,
                'title' => $val->title,
                'completed' => $val->completed,
                'deleted' => $val->deleted
            ];
        }

        return $result;
    }
}
