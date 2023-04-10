<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LogoutController extends Controller
{
    //
    public function destroy(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('welcome');
        }
    }
}
