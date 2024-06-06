<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showFormAdmin()
    {
        $users = User::paginate(10);
        return view('admin/user_management', compact('users'));
    }

    public function upgrade(Request $request)
    {
        $user = User::find($request->input('user_id'));
        if ($user) {
            $user->role = 'admin';
            $user->save();
        }
        return redirect()->back();
    }

    public function downgrade(Request $request)
    {
        $user = User::find($request->input('user_id'));
        if ($user) {
            $user->role = 'user';
            $user->save();
        }
        return redirect()->back();
    }
}
