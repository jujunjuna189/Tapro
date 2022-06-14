<?php

namespace App\Http\Controllers\Workspace;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function task()
    {
        $data['project'] = [
            'title' => 'Project Title 1',
            'share' => [],
            'total_task' => 3,
            'task' => (object)[
                'title' => 'Task 1',
                'share' => [],
            ]
        ];



        return view('workspace.task_workspace', $data);
    }
}
