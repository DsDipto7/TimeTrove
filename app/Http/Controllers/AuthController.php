<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loadRegister()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:4'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Your Registration has been successfull.');
    }

    public function loadLogin()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');

        if(Auth::attempt($userCredential)){

            $route = $this->redirectDash();
            return redirect($route);
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }


    public function redirectDash()
    {
        $redirect = '';

        if (Auth::user() && Auth::user()->role == 1) {
            $redirect = '/_admin/dashboard';
        } else if (Auth::user() && Auth::user()->role == 2) {
            $redirect = '/_user/dashboard';
        } else {
            $redirect = '/index';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/index');
    }


}
