<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    private $title = 'Tugas Progress';

    public function index()
    {
        $data['title'] = $this->title;

        return view('task.index');
    }
}
