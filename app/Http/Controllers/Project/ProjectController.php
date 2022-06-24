<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\ApiController\ProjectController as ApiControllerProjectController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        $project = (new ApiControllerProjectController)->create($request);
        $project = $project->original['data'];
        $project['total_task'] = 0;
        $project['url_open'] = route('workspace.task', ['project_id' => $project->id]);

        return response()->json($project);
    }

    public function getProject($workspace_id)
    {
        $requestProject = new Request(['workspace_id' => $workspace_id]);
        $project = (new ApiControllerProjectController)->data($requestProject);
        $project = $project->original['data'];

        $result = [];
        foreach ($project as $val) {
            $result[] = (object) [
                'id' => $val->id,
                'title' => $val->title,
                'description' => $val->description,
                'deadline' => $val->deadline,
                'visibility' => $val->visibility,
                'total_task' => 0,
                'url_open' => route('workspace.task', ['project_id' => $val->id])
            ];
        }

        return $result;
    }
}
