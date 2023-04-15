<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class ManageCategories extends Controller
{
    //
    public function ManageCate(){
        return view('managecate');
    }
    public function ManageShow(){
        $data = Categories::orderBy('cid','asc')->get();
        $dis = compact('data');
        return view('managecate')->with($dis);
    }
    public function DeleteCate($cid){
        Categories::find($cid)->delete();
        return redirect()->back();
    }
}
