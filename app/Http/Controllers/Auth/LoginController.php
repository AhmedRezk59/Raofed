<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $this->validate($request, [
            'email'   => 'required|email|exists:admins,email',
            'password'  => 'required|alphaNum|min:3'
        ]);
        if(Auth::guard('admin')->attempt($data)) {
            return to_route('home');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }
}
