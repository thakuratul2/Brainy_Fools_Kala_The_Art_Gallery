<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
class AddCategories extends Controller
{
    //
    public function AddCate(){
        return view('addcate');
    }
    public function AddCateData(Request $req){
        $AddData = new Categories;
        $AddData->name = $req['name'];
        $AddData->by = $req['by'];

        $AddData->save();

        return redirect()->back();
    }
    public function ShowCate(){
        $showCategories = Categories::all();
        $data = compact('showCategories');
        return view('addcate')->with($data);
    }
}
