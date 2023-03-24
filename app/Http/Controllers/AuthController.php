<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        // dd('test');
        return view('login');
    }

    public function authenticating(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect()->intended('/');
        }


            Session::flash('status', 'failed');
            Session::flash('message', 'User login Incorrect!!');


            return redirect('/login');



        }
}
