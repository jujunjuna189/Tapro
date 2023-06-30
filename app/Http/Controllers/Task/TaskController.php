<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\ApiController\ShareController;
use App\Http\Controllers\ApiController\TaskController as ApiControllerTaskController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\ProjectController;
use App\Models\GlobalModel;
use App\Models\TaskModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getTask($project_id)
    {
        $dataRequest = new Request(['project_id' => $project_id]);
        $where['project_id'] = $dataRequest->project_id;

        $task = TaskModel::where($where)->get();

        $result = [];
        try {
            foreach ($task as $val) {
                $share = [];
                foreach ($val->share as $value) {
                    $share[] = (object) [
                        'id' => $value->id,
                        'user_id' => $value->user->id,
                        'name' => $value->user->name,
                        'task_id' => $value->task->id,
                        'access' => $value->access,
                        'created_at' => $value->created_at,
                        'updated_at' => $value->updated_at
                    ];
                }

                $result[] = (object) [
                    'id' => $val->id,
                    'project_id' => $val->project_id,
                    'title' => $val->title,
                    'completed' => $val->completed,
                    'deleted' => $val->deleted,
                    'share' => $share,
                    'comment' => $val->comment
                ];
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $result;
    }

    public function getTaskByWorkspace($user_id, $workspace_id)
    {
        $project = (new ProjectController)->getProject($workspace_id);

        $result = [];
        try {
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
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $result;
    }

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
}
