<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }
    public function ABoutMethoe(){
        return view('about');
    }
}
