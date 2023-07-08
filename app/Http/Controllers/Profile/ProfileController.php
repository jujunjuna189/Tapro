<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $data['user'] = $user;

        return view('profile.index', $data);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $users = User::find($user->id);
        $users->fill($request->except('password'));
        $users->save();

        return response()->json($users);
    }
}
