<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        request()->validate([
            "username" => "required",
            "password" => "required",
        ]);

        $user = User::where("username", $request->username)->first();

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/');
        }
            return $user;
        
    }
}
