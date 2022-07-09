<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use App\Models\ShareModel;
use Exception;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function data(Request $request)
    {
        try {
            $dataRequest = $request;
            $data = [];
            if (isset($dataRequest->task_id)) {
                $data['task_id'] = $dataRequest->task_id;
            }

            if (isset($dataRequest->user_id)) {
                $data['user_id'] = $dataRequest->user_id;
            }

            $result = ShareModel::where($data)->get(); // For get by user_id
            $dataResult = $result;

            // For get by project id
            if (isset($dataRequest->project_id)) {
                $data['project_id'] = $dataRequest->project_id;
                $task = (new TaskController)->data(new Request($data));
                $task = $task->original['data'];
                $task_id = [];
                foreach ($task as $val) {
                    $task_id[] = $val->id;
                }

                $result = ShareModel::whereIn('task_id', $task_id)->get();
                $dataResult = [];
                foreach ($result as $val) {
                    if (!GlobalModel::search_array($dataResult, 'user_id', $val->user_id)) {
                        $dataResult[] = [
                            'id' => $val->id,
                            'user_id' => $val->user_id,
                            'name' => $val->user->name,
                            'task_id' => $val->task_id,
                            'access' => $val->access,
                            'created_at' => $val->created_at,
                            'updated_at' => $val->updated_at,
                        ];
                    }
                }
            }

            if ($result) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $dataResult,
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

    public function create(Request $request)
    {
        try {
            $dataRequest = $request;

            $data['user_id'] = $dataRequest->user_id;
            $data['task_id'] = $dataRequest->task_id;
            $data['access'] = $dataRequest->access;

            $create = ShareModel::create($data);
            $result = (object)[
                'id' => $create->id,
                'name' => $create->user->name,
                'user_id' => $create->user_id,
                'task_id' => $create->task_id,
                'access' => $create->access,
                'created_at' => $create->created_at,
                'updated_at' => $create->updated_at
            ];

            if ($create) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $result,
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

    public function delete(Request $request)
    {
        try {
            $dataRequest = $request;

            if (isset($dataRequest->id)) {
                $data['id'] = $dataRequest->id;
            }

            if (isset($dataRequest->user_id)) {
                $data['user_id'] = $dataRequest->user_id;
            }

            if (isset($dataRequest->task_id)) {
                $data['task_id'] = $dataRequest->task_id;
            }

            $delete = ShareModel::where($data)->delete();

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
