<?php

namespace App\Http\Controllers\Workspace;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function project()
    {
        $data['access'] = GlobalModel::access_workspace(0);
        $data['project'] = (object) [
            'title' => 'Projects Dashboards',
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
            'comment' => [
                (object) [
                    'name' => 'Ujun',
                    'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                    'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis corrupti pariatur velit a, doloremque sint iusto molestias nobis excepturi ut recusandae numquam non eum illo consequuntur beatae! Sapiente, commodi?'
                ]
            ],
        ];

        $data['task'] = [
            (object) [
                'title' => 'Coordinate with business development',
                'description' => 'This content is a little bit longer.',
                'thumbnail' => 'https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png',
                'grid' => 1, //Buatan tidak perlu dari database
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ]
                ],
                'comment' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi corporis corrupti pariatur velit a, doloremque sint iusto molestias nobis excepturi ut recusandae numquam non eum illo consequuntur beatae! Sapiente, commodi?'
                    ]
                ],
                'list' => [],
                'pin' => false,
                'visibility' => 'private',
                'status' => 0,
            ],
            (object) [
                'title' => 'Make sure to cover every small details',
                'description' => 'This content is a little bit longer.',
                'thumbnail' => 'https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png',
                'grid' => 2, //Buatan tidak perlu dari database
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ]
                ],
                'comment' => [],
                'list' => [
                    (object) [
                        'task' => 'Find out the old contract documents',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => true,
                        'completed' => true,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Organize meeting sales associates to understand need in detail',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Make sure to cover every small details',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => true,
                        'deleted' => true,
                    ]
                ],
                'pin' => true,
                'visibility' => 'private',
                'status' => 0,
            ],
            (object) [
                'title' => 'Coordinate with business development',
                'description' => 'This content is a little bit longer.',
                'thumbnail' => 'https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png',
                'grid' => 1, //Buatan tidak perlu dari database
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ]
                ],
                'comment' => [],
                'list' => [
                    (object) [
                        'task' => 'Find out the old contract documents',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => true,
                        'completed' => true,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Organize meeting sales associates to understand need in detail',
                        'thumbnail' => '',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Make sure to cover every small details',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => true,
                    ]
                ],
                'pin' => false,
                'visibility' => 'private',
                'status' => 0,
            ],
            (object) [
                'title' => 'Make sure to cover every small details',
                'description' => 'This content is a little bit longer.',
                'thumbnail' => '',
                'grid' => 2, //Buatan tidak perlu dari database
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ]
                ],
                'comment' => [],
                'list' => [
                    (object) [
                        'task' => 'Find out the old contract documents',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => true,
                        'completed' => true,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Organize meeting sales associates to understand need in detail',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Make sure to cover every small details',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => true,
                    ]
                ],
                'pin' => false,
                'visibility' => 'private',
                'status' => 3,
            ],
            (object) [
                'title' => 'Coordinate with business development',
                'description' => 'This content is a little bit longer.',
                'thumbnail' => 'https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png',
                'grid' => 1, //Buatan tidak perlu dari database
                'share' => [
                    (object)[
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ]
                ],
                'comment' => [],
                'list' => [
                    (object) [
                        'task' => 'Find out the old contract documents',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => true,
                        'completed' => true,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Organize meeting sales associates to understand need in detail',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Make sure to cover every small details',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => true,
                    ]
                ],
                'pin' => false,
                'visibility' => 'private',
                'status' => 0,
            ],
            (object) [
                'title' => 'Make sure to cover every small details',
                'description' => 'This content is a little bit longer.',
                'thumbnail' => '',
                'grid' => 2, //Buatan tidak perlu dari database
                'share' => [
                    (object) [
                        'name' => 'Ujun',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 1,
                    ],
                    (object) [
                        'name' => 'Hilmi',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ],
                    (object) [
                        'name' => 'Jamal',
                        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png',
                        'access' => 0,
                    ]
                ],
                'comment' => [],
                'list' => [
                    (object) [
                        'task' => 'Find out the old contract documents',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => true,
                        'completed' => true,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Organize meeting sales associates to understand need in detail',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => false,
                    ],
                    (object) [
                        'task' => 'Make sure to cover every small details',
                        'thumbnail' => 'https://www.dragapp.com/wp-content/uploads/2020/07/task-managementBlog-name-xxx.png',
                        'pin' => false,
                        'completed' => false,
                        'deleted' => true,
                    ]
                ],
                'pin' => false,
                'visibility' => 'private',
                'status' => 2,
            ],
        ];

        // $encode = json_encode($data);
        // $decode = json_decode($encode, true);

        // echo json_encode($data);
        // die;

        return view('workspace.project_workspace', $data);
    }

    public function task()
    {
        return view('workspace.task_workspace');
    }
}
