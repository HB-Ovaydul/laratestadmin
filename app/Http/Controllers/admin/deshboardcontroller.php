<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class deshboardcontroller extends Controller
{
    //Admin Penal 
    public function deshboard()
    {
        return view('admin.layouts.deshboard');
    }
}
