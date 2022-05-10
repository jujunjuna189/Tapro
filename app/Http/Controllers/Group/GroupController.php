<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    private $title = 'Group';

    public function index()
    {
        $data['title'] = $this->title;

        return view('group.index', $data);
    }
}
