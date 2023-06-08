<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterUser;
use Hash;
use Illuminate\Support\Facades\Session;

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
      $login= RegisterUser::where('username','=',$request->username)->first();
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

        //new logic
        if ($user->is_active) {
            // User is active, proceed with login
            
            // Assuming the user model has a "login_id" property
            $loginId = $user->name;
            
            // Store the login ID in the session
            session(['loginId' => $loginId]);
            
            // Redirect to the desired page
            return redirect('/adminpanel.add-admin');
        } else {
            // User is not active, show error message and redirect back
            
            return back()->with('error', 'Your account is not active.');
        }


    }
    public function AdminDash(){
        $data = array();
        if(Session::has('loginId')){
            $data = RegisterUser::where('uid',"=",Session::get('loginId'))->first();
        }
       return view('adminpanel.index',compact('data'));
    }
    public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
