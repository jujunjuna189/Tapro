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

        return view('workspaces.index', $data);
    }
}
