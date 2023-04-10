<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Hash;
use Session;

class LoginController extends Controller
{
    //
    public function Login(){
        return view('login');
    }
    public function loginUser(Request $req){
        $req->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12',
        ]);
        $userLogin = CustomerModel::where('username','=',$req->username)->first();
        if($userLogin){
            if (Hash::check($req->password, $userLogin->password)) {
                $req->session()->put('loginId',$userLogin->uid);
                return redirect('dashboard');
            } else {
                return redirect()->back()->with('fail','Password not matches');
            }
            
        }else{
            return redirect()->back()->with('fail','This username is not registerd');
        }
    }
}
