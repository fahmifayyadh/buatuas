<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function profile($id){
        $users = \App\Profile::find($id);
        return view('user.profile',['users'=>$users]);
    }

    public function edit($id){
        $users = \App\Profile::find($id);
        return view('user.edit_Profile',['users'=>$users]);
    }

    public function update(Request $request, $id){
        $users = \App\Profile::find($id);
        $users->update($request->all());
        return redirect('/profile/{id}',['users'=>$users]) ->with('sukses', 'data berhasil diupdate');
    }
}
