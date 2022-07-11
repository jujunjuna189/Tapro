<?php

namespace App\Http\Controllers\Workspaces;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\Workspace\WorkspaceController;
use App\Models\GlobalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkspacesController extends Controller
{
    public function index(Request $request)
    {
        $workspaces = [];
        $workspace = [];
        $project = [];
        $task = [];
        $member = [];

        try {
            $workspaces = (new WorkspaceController)->getWorkspaces(Auth::user()->id);
            $workspace = array_search($request->workspace_id, array_column($workspaces, 'id'));
            $workspace = $workspaces[$workspace];

            $project = (new ProjectController)->getProject(['workspace_id' => $workspace->id]);
            $task = (new TaskController)->getTaskByWorkspace(Auth::user()->id, ['workspace_id' => $workspace->id]);
            $member = (new MemberController)->getMember(['workspace_id' => $workspace->id]);

            // Set access
            $access = array_search(Auth::user()->id, array_column($member, 'user_id'));
            $access = GlobalModel::access_workspace($member[$access]->access);
            GlobalModel::setSession('access', $access);
        } catch (\Throwable $th) {
            //throw $th;
        }

        $data['page'] = GlobalModel::nav_menus(1);
        $data['workspaces'] = $workspaces;
        $data['workspace'] = $workspace;
        $data['project'] = $project;
        $data['task'] = $task;
        $data['member'] = $member;

        return view('workspaces.index', $data);
    }
}
