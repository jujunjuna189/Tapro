<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\ApiController\ProjectController as ApiControllerProjectController;
use App\Http\Controllers\ApiController\ShareController;
use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ProjectController extends Controller
{
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

    public function getProject($data)
    {
        $requestProject = new Request($data);
        $project = (new ApiControllerProjectController)->data($requestProject);
        $project = $project->original['data'];

        $result = [];
        foreach ($project as $val) {
            $share = [];
            try {
                $share = array_filter((new ShareController)->data(new Request(['project_id' => $val->id]))->original['data'], function ($val) {
                    return $val['user_id'];
                });
            } catch (\Throwable $th) {
                //throw $th;
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
}
