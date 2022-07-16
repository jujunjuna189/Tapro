<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\ApiController\ProjectController as ApiControllerProjectController;
use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use App\Models\ProjectModel;
use App\Models\ShareModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getProject($data)
    {
        $dataRequest = new Request($data);

        if (isset($dataRequest->project_id) && $dataRequest->project_id != '') {
            $where['id'] = $dataRequest->project_id;
        }

        if (isset($dataRequest->workspace_id) && $dataRequest->workspace_id != '') {
            $where['workspace_id'] = $dataRequest->workspace_id;
        }

        $project = ProjectModel::where($where)->get();

        $result = [];
        foreach ($project as $val) {
            $taskId = [];
            foreach ($val->task as $valTask) {
                $taskId[] = $valTask->id;
            }

            $shareResult = ShareModel::whereIn('task_id', $taskId)->get();
            $share = [];
            foreach ($shareResult as $value) {
                if (!GlobalModel::search_array($share, 'user_id', $value->user_id)) {
                    $share[] = [
                        'id' => $value->id,
                        'user_id' => $value->user_id,
                        'name' => $value->user->name,
                        'task_id' => $value->task_id,
                        'access' => $value->access,
                        'created_at' => $value->created_at,
                        'updated_at' => $value->updated_at,
                    ];
                }
            }

            $result[] = (object) [
                'id' => $val->id,
                'workspace_id' => $val->workspace_id,
                'title' => $val->title,
                'description' => $val->description,
                'deadline' => $val->deadline,
                'visibility' => $val->visibility,
                'total_task_completed' => count(GlobalModel::search_array($val->task, 'completed', '1')),
                'total_task' => $val->task->count(),
                'share' => $share,
                'url_open' => route('workspace.task', ['project_id' => $val->id])
            ];
        }

        return $result;
    }

    public function create(Request $request)
    {
        $project = (new ApiControllerProjectController)->create($request);
        $project = $project->original['data'];
        $project['total_task_completed'] = 0;
        $project['total_task'] = 0;
        $project['share'] = [];
        $project['url_open'] = route('workspace.task', ['project_id' => $project->id]);

        return response()->json($project);
    }
}
