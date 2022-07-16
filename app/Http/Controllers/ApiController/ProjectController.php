<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\GlobalModel;
use App\Models\ProjectModel;
use App\Models\ShareModel;
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
                $where['id'] = $dataRequest->project_id;
            }

            if (isset($dataRequest->workspace_id) && $dataRequest->workspace_id != '') {
                $where['workspace_id'] = $dataRequest->workspace_id;
            }

            $project = ProjectModel::where($where)->get();

            $result = [];
            foreach ($project as $val) {
                $taskId = [];
                foreach ($val->task as $valTask) {
                    $taskId[] = $valTask->id;
                }

                $shareResult = ShareModel::whereIn('task_id', $taskId)->get();
                $share = [];
                foreach ($shareResult as $valShare) {
                    if (!GlobalModel::search_array($share, 'user_id', $valShare->user_id)) {
                        $share[] = [
                            'id' => $valShare->id,
                            'user_id' => $valShare->user_id,
                            'name' => $valShare->user->name,
                            'task_id' => $valShare->task_id,
                            'access' => $valShare->access,
                            'created_at' => $valShare->created_at,
                            'updated_at' => $valShare->updated_at,
                        ];
                    }
                }

                $result[] = (object) [
                    'id' => $val->id,
                    'workspace_id' => $val->workspace_id,
                    'title' => $val->title,
                    'description' => $val->description,
                    'deadline' => $val->deadline,
                    'visibility' => $val->visibility,
                    'total_task_completed' => count(GlobalModel::search_array($val->task, 'completed', '1')),
                    'total_task' => $val->task->count(),
                    'share' => $share,
                    'url_open' => route('workspace.task', ['project_id' => $val->id])
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

            $data['workspace_id'] = $dataRequest->workspace_id;
            $data['title'] = $dataRequest->title;
            $data['description'] = $dataRequest->description;
            $data['deadline'] = $dataRequest->deadline;
            $data['visibility'] = $dataRequest->visibility;

            $project = ProjectModel::create($data);
            $project['total_task_completed'] = 0;
            $project['total_task'] = 0;
            $project['share'] = [];
            $project['url_open'] = route('workspace.task', ['project_id' => $project->id]);

            if ($project) {
                return response()->json([
                    'status' => 'Success',
                    'data' => $project,
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
