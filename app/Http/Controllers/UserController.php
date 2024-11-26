<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showdash(Request $request){
        return view('user.dashboard');
    }
}
