<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $title = 'Project List';

    public function index()
    {
        $data['title'] = $this->title;
        $data['project'] = [
            (object) [
                'title' => 'Organize meeting sales associates to understand need in detail',
                'description' => 'App Pus Project',
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => '',
                        'access' => 0
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0
                    ]
                ],
                'progress' => 46,
                'deadline' => GlobalModel::format_date_back('15-5-2022'),
                'task' => 5,
                'visibility' => 1,
            ],
            (object) [
                'title' => 'Organize meeting sales associates to understand need in detail',
                'description' => 'App Pus Project',
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => '',
                        'access' => 0
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0
                    ]
                ],
                'progress' => 46,
                'deadline' => GlobalModel::format_date_back('15-5-2022'),
                'task' => 5,
                'visibility' => 1,
            ],
            (object) [
                'title' => 'Organize meeting sales associates to understand need in detail',
                'description' => 'App Pus Project',
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => '',
                        'access' => 0
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0
                    ]
                ],
                'progress' => 46,
                'deadline' => GlobalModel::format_date_back('15-5-2022'),
                'task' => 5,
                'visibility' => 1,
            ],
        ];

        return view('project.index', $data);
    }
}
