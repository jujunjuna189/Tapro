<?php

namespace App\Http\Controllers\Deadline;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class DeadlineController extends Controller
{
    public function create(Request $request)
    {
        $project = ProjectModel::find($request->id);
        $project->deadline = $request->dateStart . ' s/d ' . $request->dateEnd;
        $project->save();

        return response()->json($project);
    }
}
