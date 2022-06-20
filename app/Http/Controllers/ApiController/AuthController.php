<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $dataRequest = $request;

            $where['email'] = $dataRequest->email;
            $result = User::where($where)->first();

            if (Hash::check($dataRequest->password, $result->password, [])) {
                return response()->json([
                    'status' => 'Success',
                    'data' => [$result],
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Login'
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

    public function register(Request $request)
    {
        try {
            $dataRequest = $request;

            $data['name'] = $dataRequest->name;
            $data['email'] = $dataRequest->email;
            $data['password'] = Hash::make($dataRequest->password);

            $register = User::create($data);

            if ($register) {
                return response()->json([
                    'status' => 'Success',
                    'data' => [$register],
                ], 200);
            } else {
                return response()->json([
                    'status' => 'Failed',
                    'data' => [
                        'Failed Register Data'
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
