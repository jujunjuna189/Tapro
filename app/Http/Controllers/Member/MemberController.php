<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\ApiController\MemberController as ApiControllerMemberController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function getMember($data)
    {
        $requestMember = new Request($data);
        $member = (new ApiControllerMemberController)->data($requestMember);
        $member = $member->original['data'];
        $result = $member;
        return $result;
    }

    public function create(Request $request)
    {
        $project = (new ApiControllerMemberController)->create($request);
        $project = $project->original['data'];
        return response()->json($project);
    }
}
