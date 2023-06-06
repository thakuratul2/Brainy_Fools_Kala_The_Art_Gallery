<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function AddAdmin(){
        return view('adminpanel.add-admin');
    }
    public function AdminNew(){
        $data = array();
        if(Session::has('loginId')){
            $data = RegisterUser::where('uid',"=",Session::get('loginId'))->first();
        }
       return view('adminpanel.add-admin',compact('data'));
    }
}
