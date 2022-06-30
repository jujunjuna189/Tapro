<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function data(Request $request)
    {
        try {
            $dataRequest = $request;
            // Get Project
            if (isset($dataRequest->project_id) && $dataRequest->project_id != '') {
                $data['id'] = $dataRequest->project_id;
                $result = ProjectModel::where($data)->get();
            } else {
                //get workspace to get workspace id by user_id
                $workspace = (new WorkspaceController)->data($dataRequest);
                $workspace = $workspace->original['data'][0];
                $result = $workspace->project;
            }

            if ($result) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $result,
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Get Data'
                    ],
                ], 300);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Failed',
                'data' => [
                    $e
                ],
            ], 500);
        }
    }

    public function create(Request $request)
    {
        try {
            $dataRequest = $request;

            $data['workspace_id'] = $dataRequest->workspace_id;
            $data['title'] = $dataRequest->title;
            $data['description'] = $dataRequest->description;
            $data['deadline'] = $dataRequest->deadline;
            $data['visibility'] = $dataRequest->visibility;

            $create = ProjectModel::create($data);

            if ($create) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $create,
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Create Data'
                    ],
                ], 300);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Failed',
                'data' => [
                    $e
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
            $data['deadline'] = $dataRequest->deadline;
            $data['visibility'] = $dataRequest->visibility;

            $update = ProjectModel::where('id', $id)->update($data);

            if ($update) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $data,
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Update Data'
                    ],
                ], 300);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Failed',
                'data' => [
                    $e
                ],
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $dataRequest = $request;

            if (isset($dataRequest->id)) {
                $data['id'] = $dataRequest->id;
            }

            if (isset($dataRequest->workspace_id)) {
                $data['workspace_id'] = $dataRequest->workspace_id;
            }

            $project = ProjectModel::where($data)->get();
            foreach ($project as $val) {
                (new TaskController)->delete(new Request(['project_id' => $val->id]));
            }
            $delete = ProjectModel::where($data)->delete();

            if ($delete) {
                return response()->json([
                    'status' => 'Success',
                    'data' => [
                        'Success Delete Data'
                    ],
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Delete Data'
                    ],
                ], 300);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 'Failed',
                'data' => [
                    $e
                ],
            ], 500);
        }
    }
}
