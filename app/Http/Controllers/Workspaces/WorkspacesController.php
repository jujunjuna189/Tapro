<?php

namespace App\Http\Controllers\Workspaces;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class WorkspacesController extends Controller
{
    public function index()
    {
        $data['page'] = GlobalModel::nav_menus(1);
        $data['workspaces'] = [
            (object)[
                'title' => 'Workspace Saya',
                'visibility' => 'Public',
                'color' => 'blue',
            ],
            (object)[
                'title' => 'Workspace Saya Project...',
                'visibility' => 'Private',
                'color' => 'orange',
            ],
            (object)[
                'title' => 'Workspace Saya',
                'visibility' => 'Public',
                'color' => 'blue',
            ],
            (object)[
                'title' => 'Workspace Saya Project...',
                'visibility' => 'Private',
                'color' => 'orange',
            ],
        ];

        $data['project'] = [
            (object)[
                'title' => 'Project yang saya buat 1',
                'description' => '',
                'deadline' => '',
                'visibility' => 1,
                'total_task' => 25, //Diambil dari table task per project (Optional)
            ],
            (object)[
                'title' => 'Project yang saya buat 2',
                'description' => '',
                'deadline' => '',
                'visibility' => 1,
                'total_task' => 25, //Diambil dari table task per project (Optional)
            ],
            (object)[
                'title' => 'Project yang saya buat 3',
                'description' => '',
                'deadline' => '',
                'visibility' => 1,
                'total_task' => 25, //Diambil dari table task per project (Optional)
            ],
            (object)[
                'title' => 'Project yang saya buat 4',
                'description' => '',
                'deadline' => '',
                'visibility' => 1,
                'total_task' => 25, //Diambil dari table task per project (Optional)
            ],
        ];

        return view('workspaces.index', $data);
    }
}
