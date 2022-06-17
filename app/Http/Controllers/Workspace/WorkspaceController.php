<?php

namespace App\Http\Controllers\Workspace;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function task()
    {
        $data['project'] = (object)[
            'title' => 'Project Title 1',
            'share' => [],
            'total_task' => 3,
            'task' => [
                (object)[
                    'id' => 1,
                    'title' => 'Task 1',
                    'share' => [],
                    'completed' => true,
                    'deleted' => true,
                ],
                (object)[
                    'id' => 2,
                    'title' => 'Task 2',
                    'share' => [],
                    'completed' => true,
                    'deleted' => false,
                ],
                (object)[
                    'id' => 3,
                    'title' => 'Task 3',
                    'share' => [],
                    'completed' => false,
                    'deleted' => false,
                ],
            ]
        ];

        return view('workspace.task_workspace', $data);
    }
}
