<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\TaskModel;
use Exception;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function data(Request $request)
    {
        try {
            $dataRequest = $request;
            $project = (new ProjectController)->data($dataRequest); //just project id
            $project = $project->original['data'][0];

            $task = $project->task;

            $result = [];
            foreach ($task as $val) {
                $share = [];
                foreach ($val->share as $value) {
                    $share[] = (object) [
                        'id' => $value->id,
                        'user_id' => $value->user->id,
                        'name' => $value->user->name,
                        'task_id' => $value->task->id,
                        'access' => $value->access,
                        'created_at' => $value->created_at,
                        'updated_at' => $value->updated_at
                    ];
                }

                $result[] = (object)[
                    'id' => $val->id,
                    'project_id' => $val->project_id,
                    'title' => $val->title,
                    'completed' => $val->completed,
                    'deleted' => $val->deleted,
                    'created_at' => $val->created_at,
                    'updated_at' => $val->updated_at,
                    'share' => $share
                ];
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

            $data['project_id'] = $dataRequest->project_id;
            $data['title'] = $dataRequest->title;
            $data['completed'] = false;
            $data['deleted'] = false;

            $create = TaskModel::create($data);
            $create['share'] = [];

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

            if (isset($dataRequest->title)) {
                $data['title'] = $dataRequest->title;
            }
            if (isset($dataRequest->completed)) {
                $data['completed'] = $dataRequest->completed;
            }
            if (isset($dataRequest->deleted)) {
                $data['deleted'] = $dataRequest->deleted;
            }

            $update = TaskModel::where('id', $id)->update($data);

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

            if (isset($dataRequest->project_id)) {
                $data['project_id'] = $dataRequest->project_id;
            }

            $delete = TaskModel::where($data)->delete();

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
