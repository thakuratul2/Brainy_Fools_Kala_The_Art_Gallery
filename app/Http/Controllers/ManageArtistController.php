<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class ManageArtistController extends Controller
{
    //
    public function Artist(){
        return view('manageartist');
    }
    public function ArtistShow(){
        $manageArtist = CustomerModel::where('role_as',2)->get();
        $data = compact('manageArtist');
        return view('manageartist')->with($data);
    }
    public function DeleteArtist($uid){
        CustomerModel::find($uid)->delete();
        return redirect()->back();
    }
}
