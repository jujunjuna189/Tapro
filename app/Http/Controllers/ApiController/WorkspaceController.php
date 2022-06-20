<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\MemberModel;
use App\Models\WorkspaceModel;
use Exception;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function data(Request $request)
    {
        try {
            //get member by user_id to get workspace id
            $member = (new MemberController)->data($request);
            $member = $member->original['data'];
            // workspace id on member
            $workspace_id = [];
            foreach ($member as $val) {
                $workspace_id[] = $val->workspace_id;
            }
            //get workspace by user member
            $result = WorkspaceModel::whereIn('id', $workspace_id)->orderBy('created_at', 'desc')->get();

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

    private function trigger_member($request, $workspace_id)
    {
        //user_id not write becouse alexist in request -> warning
        $data['workspace_id'] = $workspace_id;
        $data['role'] = 'Owner';
        $data['access'] = 1;

        $request->request->add($data);
        (new MemberController)->create($request);
    }

    public function create(Request $request)
    {
        try {
            $dataRequest = $request;
            $data['title'] = $dataRequest->title;
            $data['description'] = $dataRequest->description;
            $data['visibility'] = $dataRequest->visibility;

            $create = WorkspaceModel::create($data);
            // Trigger create member
            $this->trigger_member($request, $create->id);

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
            $data['visibility'] = $dataRequest->visibility;

            $update = WorkspaceModel::where('id', $id)->update($data);

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
            $id = $dataRequest->id;

            $delete = WorkspaceModel::where('id', $id)->delete();

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
