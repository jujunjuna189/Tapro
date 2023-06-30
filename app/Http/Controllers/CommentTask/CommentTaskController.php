<?php

namespace App\Http\Controllers\CommentTask;

use App\Http\Controllers\Controller;
use App\Models\TaskCommentModel;
use Illuminate\Http\Request;

class CommentTaskController extends Controller
{
    public function create(Request $request)
    {
        $taskComment = new TaskCommentModel();
        $taskComment->fill($request->all());
        $taskComment->save();

        return response()->json($taskComment);
    }

    public function delete(Request $request)
    {
        $taskCommentOld = (object)[];
        $taskComment = TaskCommentModel::find($request->id);
        $taskCommentOld = $taskComment;
        $taskComment->delete();

        return response()->json($taskCommentOld);
    }
}
