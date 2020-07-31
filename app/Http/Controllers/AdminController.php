<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }

 /*   public function index(){
        return view('admin.dashboard');
    }
 */
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function posts(){
        return view('admin.posts');
    }

    public function comments(){
        return view('admin.comments');
    }

    public function users(){
        return view('admin.users');
    }
}
