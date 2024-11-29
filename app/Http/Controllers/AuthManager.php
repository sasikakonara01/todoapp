<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function loginpost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required| min:8'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Invalid Email Or Password');
    }


    public function register()
    {
        return view('auth.register');
    }

    public function registerpost(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required| min:8'
        ]);
        $user = new User();
        $user->name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        if ($user->save()) {
            return redirect(route('login'))
                ->with('success', 'User Created Successfully');
        } else {
            return redirect(route('register'))
                ->with('error', 'Registration Failed');
        }
    }
}
