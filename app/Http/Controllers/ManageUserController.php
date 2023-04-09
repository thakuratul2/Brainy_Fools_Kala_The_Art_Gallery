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
        $manageCustomer = CustomerModel::all();
        $data = compact('manageCustomer');

        return view('manageuser')->with($data);
    }
}
