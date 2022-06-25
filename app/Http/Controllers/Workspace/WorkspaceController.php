<?php

namespace App\Http\Controllers\Workspace;

use App\Http\Controllers\ApiController\WorkspaceController as ApiControllerWorkspaceController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Task\TaskController;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function task(Request $request)
    {

        $task = (new TaskController)->getTask($request->project_id);

        $data['project'] = (object)[
            'title' => 'Project Title 1',
            'share' => [],
            'total_task' => count($task),
            'task' => $task
        ];

        return view('workspace.task_workspace', $data);
    }

    public function create(Request $request)
    {
        $workspaces = (new ApiControllerWorkspaceController)->create($request);
        $workspaces = $workspaces->original['data'];
        $workspaces['color'] =  $workspaces->visibility == 'private' ? 'orange' : 'blue';
        $workspaces['url_open'] = route('workspaces', ['workspace_id' => $workspaces->id]);

        return response()->json($workspaces);
    }

    public function getWorkspaces($user_id)
    {
        $requestWorkspace = new Request(['user_id' => $user_id]);
        $workspaces = (new ApiControllerWorkspaceController)->data($requestWorkspace);
        $workspaces = $workspaces->original['data'];

        echo json_encode(count($workspaces == {}));
        die;

        $result = [];
        foreach ($workspaces as $val) {
            $result[] = (object) [
                'id' => $val->id,
                'title' => $val->title,
                'description' => $val->description,
                'color' => $val->visibility == 'private' ? 'orange' : 'blue',
                'visibility' => $val->visibility,
                'url_open' => route('workspaces', ['workspace_id' => $val->id])
            ];
        }

        return $result;
    }
}
