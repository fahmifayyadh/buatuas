<?php

namespace App\Http\Controllers;

use App\PostContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }

    public function profile($id){
        $users = \App\Profile::find($id);
        return view('user.profile')
            ->with('users', $users);
    }

    public function edit($id){
        $users = \App\Profile::find($id);
        return view('user.edit_Profile',['users'=>$users]);
    }

}
