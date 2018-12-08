<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserManageController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('usermanage',[
            'users' => $user->toArray(),
            ]);
    }

    public function update(Request $request)
    {
        $update = $request->all();
        dd($update);
        return back();
    }
}
