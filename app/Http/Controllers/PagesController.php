<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function feature(){
        return view('feature');
    }

    public function error_start_chat(){
        return view('error_start_chat',['name' =>'Fahmmi Fayyadh A']);
    }

    public function login(){
        return view('login');
    }

    public function regist(){
        return view('register');
    }
}
