<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterUser;
use Hash;

class AuthController extends Controller
{
    //
    public function LoginPage(){
        return view('login');
    }

    public function RegisterPage(){
        return view('register');
    }
    public function RegisterUser(Request $req){
        $req ->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:register_user',
            'username'=>'required',
            'password'=>'required|min:8|max:12'
        ]);
        $register = new RegisterUser();
        $register->name = $req->name;
        $register->email = $req->email;
        $register->username = $req->username;
        $register->password = Hash::make($req->password);

        //save
        $res = $register->save();

        if($res){
            return redirect('login')->with('success','You are registered successfully!');
        }else{
            return back()->with('fail','Something Wrong!');
        }

    }
    public function LoginUser(Request $request){

        $request ->validate([
            'username'=>'required',
            'password'=>'required|min:8|max:12'
        ]);
        $login = RegisterUser::where('username','=',$request->username)->first();
        if($login){
           if(Hash::check($request->password,$login->password)){
            $request->session()->put('loginId',$login->uid);
            return redirect('adminpanel');
           }else{
            return back()->with('fail','Password not Matched!');
           }
        }else{
            return back()->with('fail','Something Wrong!');
        }
    }
    public function AdminDash(){
       return view('adminpanel.index');
    }
}
