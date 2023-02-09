<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\CustomUser;


class UserController extends Controller
{

    public function create()
    {
        return view('register');
    }

    public function insert(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $user = new CustomUser;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        if ($user)
            return redirect('/flowers')->with('message', 'Successfully registered your account!');
    }
}
