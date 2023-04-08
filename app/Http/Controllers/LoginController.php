<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    public function enter(Request $req){
        $credintals = $req->only('email','password');
        if (Auth::attempt($credintals)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return redirect()->back()->withErrors("['access' => 'Invalid email or password']");
    }
}
