<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\ApiController\ShareController;
use App\Http\Controllers\ApiController\TaskController as ApiControllerTaskController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\ProjectController;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $task = (new ApiControllerTaskController)->create($request);
        $task = $task->original['data'];
        return response()->json($task);
    }

    public function update(Request $request)
    {
        $task = (new ApiControllerTaskController)->update($request);
        $task = $task->original['data'];
        return response()->json($task);
    }

    public function delete(Request $request)
    {
        $task = (new ApiControllerTaskController)->delete($request);
        $task = $task->original['data'];
        return response()->json($task);
    }

    public function getTask($project_id)
    {
        $requestTask = new Request(['project_id' => $project_id]);
        $task = (new ApiControllerTaskController)->data($requestTask);
        $task = $task->original['data'];

        $result = [];
        foreach ($task as $val) {
            $result[] = (object) [
                'id' => $val->id,
                'project_id' => $val->project_id,
                'title' => $val->title,
                'completed' => $val->completed,
                'deleted' => $val->deleted,
                'share' => $val->share
            ];
        }

        return $result;
    }

    public function getTaskByWorkspace($user_id, $workspace_id)
    {
        $project = (new ProjectController)->getProject($workspace_id);

        $result = [];
        foreach ($project as $val) {
            foreach ($this->getTask($val->id) as $value) {
                foreach ($value->share as $shareVal) {
                    if ($shareVal->user_id == $user_id) {
                        $result[] = (object) [
                            'id' => $value->id,
                            'project_id' => $value->project_id,
                            'title' => $value->title,
                            'completed' => $value->completed,
                            'deleted' => $value->deleted,
                            'share' => $value->share
                        ];
                    }
                }
            }
        }

        return $result;
    }
}
