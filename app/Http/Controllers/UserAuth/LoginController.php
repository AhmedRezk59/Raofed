<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $this->validate($request, [
            'email'   => 'required|email|exists:users,email',
            'password'  => 'required|alphaNum|min:3'
        ]);
        if (Auth::guard('web')->attempt($data)) {
            return to_route('main');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
