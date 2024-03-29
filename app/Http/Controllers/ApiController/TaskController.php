<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\TaskModel;
use Exception;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function data(Request $request)
    {
        try {
            $dataRequest = $request;
            $where['project_id'] = $dataRequest->project_id;

            $task = TaskModel::where($where)->get();

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

    public function dataByWorkspace(Request $request)
    {
        try {
            $project = ProjectModel::where(['workspace_id' => $request->workspace_id])->get();

            $result = [];
            foreach ($project as $val) {
                foreach ($val->task as $value) {
                    foreach ($value->share as $shareVal) {
                        if ($shareVal->user_id == $request->user_id) {
                            $result[] = (object) [
                                'id' => $value->id,
                                'project_id' => $value->project_id,
                                'title' => $value->title,
                                'completed' => $value->completed,
                                'deleted' => $value->deleted,
                                'share' => $value->share
                            ];
                        }
                    }
                }
            }

            if ($result) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $result,
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [],
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
            $data['completed'] = 0;
            $data['deleted'] = 0;

            $create = TaskModel::create($data);
            $create['share'] = [];
            $create['comment'] = [];

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

            $task = TaskModel::where($data)->get();
            foreach ($task as $val) {
                (new ShareController)->delete(new Request(['task_id' => $val->id]));
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
