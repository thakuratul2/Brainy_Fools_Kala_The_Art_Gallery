<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class GalleryController extends Controller
{
    //
    public function gallery(){
        return view('gallery');
    }
    public function ShowCate(){
        $data = Categories::all();
        $display = compact('data');
        return view('gallery')->with($display);
    }
}
