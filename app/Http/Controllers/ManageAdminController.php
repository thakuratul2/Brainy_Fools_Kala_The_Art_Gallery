<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class ManageAdminController extends Controller
{
    //
    public function Admin(){
        return view('manageadmin');
    }
    public function AdminShow(){
        $manageAdmin = CustomerModel::where('role_as',1)->get();
        $data = compact('manageAdmin');
        return view('manageadmin')->with($data);
    }
    public function DeleteAdmin($uid){
        CustomerModel::find($uid)->delete();
        return redirect()->back();
    }
}
