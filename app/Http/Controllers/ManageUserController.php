<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class ManageUserController extends Controller
{
    //
    public function manageUser(){
        return view('manageuser');
    }
    public function show(){
        $manageCustomer = CustomerModel::orderBy('uid','asc')->get();
        $data = compact('manageCustomer');

        return view('manageuser')->with($data);
    }
    public function deleteData($uid){
        CustomerModel::find($uid)->delete();
        return redirect()->back();
    }
}
