<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        // echo route('profile');
        // echo 23222222;
        // return view('index');
        return 'admin index';
    }

    public function login(){
        session(['admin'=>'branton']);
        return 'admin login';
    }
}