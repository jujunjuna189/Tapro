<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\WorkspaceModel;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function create(Request $request)
    {
        $dataClient = $request->data;

        $data['title'] = $dataClient->title;
        $data['description'] = $dataClient->description;
        $data['visibility'] = $dataClient->visibility;

        WorkspaceModel::create($data);

        return response()->json([
            'status' => 'Success',
            'data' => [],
        ], 200);
    }

    public function update(Request $request)
    {
    }

    public function delete(Request $request)
    {
    }
}
