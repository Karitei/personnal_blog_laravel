<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin ');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
