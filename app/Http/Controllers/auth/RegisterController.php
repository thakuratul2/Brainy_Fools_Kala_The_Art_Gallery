<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CustomerModel;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function registerUser(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:register',
            'password'=>'required|min:5|max:12',
            'username'=>'required'
        ]);
        $newUser = new CustomerModel;
        $newUser->name = $req->name;
        $newUser->email = $req->email;
        $newUser->password = Hash::make($req->password);
        $newUser->username = $req->username;

        $req =$newUser->save();
        if($req){
            return redirect()->back()->with('success',"You have registerd Successfully");
        }else{
            return redirect()->back()->with('fail','something went wrong');
        }
    }
}
