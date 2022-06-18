<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\WorkspaceModel;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function create(Request $request)
    {
        try {
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['visibility'] = $request->visibility;

            $create = WorkspaceModel::create($data);

            if($create){
                return response()->json([
                    'status' => 'Success',
                    'data' => $create,
                ], 200);
            }else{
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Create Data'
                    ],
                ], 300);
            }   
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'Failed',
                'data' => [
                    'Server error'
                ],
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $dataRequest = $request;
            $id = $dataRequest->id;
            
            $data['title'] = $dataRequest->title;
            $data['description'] = $dataRequest->description;
            $data['visibility'] = $dataRequest->visibility;

            $result = WorkspaceModel::find($id);
            $update = $result->update($data);

            if($update){
                return response()->json([
                    'status' => 'Success',
                    'data' => $update,
                ], 200);
            }else{
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Update Data'
                    ],
                ], 300);
            }   
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'Failed',
                'data' => [
                    'Server error'
                ],
            ], 500);
        }
    }

    public function delete(Request $request)
    {
    }
}
