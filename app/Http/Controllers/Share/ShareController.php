<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\ApiController\ShareController as ApiControllerShareController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function getShare($data)
    {
        $requestShare = new Request($data);
        $share = (new ApiControllerShareController)->data($requestShare);
        $share = $share->original['data'];
        return response()->json($share);
    }

    public function create(Request $request)
    {
        $share = (new ApiControllerShareController)->create($request);
        $share = $share->original['data'];
        return response()->json($share);
    }

    public function delete(Request $request)
    {
        $requestWorkspace = $request;
        $workspace = (new ApiControllerShareController)->delete($requestWorkspace);
        $workspace = $workspace->original['data'];

        return response()->json($workspace);
    }
}
