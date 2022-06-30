<?php

namespace App\Http\Controllers\Workspace;

use App\Http\Controllers\ApiController\WorkspaceController as ApiControllerWorkspaceController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Task\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkspaceController extends Controller
{
    public function task(Request $request)
    {

        $project = (new ProjectController)->getProject(['project_id' => $request->project_id]);
        $member = (new MemberController)->getMember(['workspace_id' => $project[0]->workspace_id]);
        $member = array_filter($member, function ($val) {
            return $val->user_id != Auth::user()->id;
        });
        $task = (new TaskController)->getTask($request->project_id);

        $data['member'] = $member;
        $data['project'] = $project[0];
        $data['share'] = [];
        $data['task'] = $task;

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

    public function delete(Request $request)
    {
        $requestWorkspace = new Request(['id' => $request->workspace_id]);
        $workspace = (new ApiControllerWorkspaceController)->delete($requestWorkspace);
        $workspace = $workspace->original['data'];

        return response()->json($workspace);
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
