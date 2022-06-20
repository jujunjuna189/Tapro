<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\MemberModel;
use Exception;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function data(Request $request)
    {
        try {
            $dataRequest = $request;
            $data = [];
            if (isset($dataRequest->user_id)) {
                $data['user_id'] = $dataRequest->user_id;
            }

            if (isset($dataRequest->workspace_id)) {
                $data['workspace_id'] = $dataRequest->workspace_id;
            }

            $member = MemberModel::where($data)->get();

            $result = [];
            foreach ($member as $val) {
                $result[] = (object)[
                    'id' => $val->id,
                    'name' => $val->user->name,
                    'user_id' => $val->user_id,
                    'workspace_id' => $val->workspace_id,
                    'role' => $val->role,
                    'access' => $val->access,
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
            $data['workspace_id'] = $dataRequest->workspace_id;
            $data['role'] = $dataRequest->role;
            $data['access'] = $dataRequest->access;

            $create = MemberModel::create($data);

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

    public function update()
    {
    }

    public function delete()
    {
    }
}
