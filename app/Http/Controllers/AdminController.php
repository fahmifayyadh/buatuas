<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
   public function index(Request $request){
//       dd($request->all());
       if ($request->has('search')){
           $users = \App\Creator::where('name','LIKE','%'.$request->search.'%')->get();
       }else{
           $users = \App\Creator::all();
       }
//       $users = \App\Creator::all();
       return view('admin.index', ['users'=> $users]);
   }

    public function suspand($id){
        $creator = \App\Creator::find($id);
        $creator->delete($creator);
        return redirect('/admin')->with('sukses', 'data berhasil dihapus');
    }
}
