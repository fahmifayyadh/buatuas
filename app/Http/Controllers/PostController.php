<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\like;
use App\PostContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $posts = \App\User::select('*')
                ->join('post_contents','users.id','=','post_contents.user_id')
                ->get();

        $user= \App\User::where('id','=',$id)->first();

        $maxstorage = $user->Storage->storage;

        $sumstorage = Auth::user()->PostContent->sum('file_size');

        $diffstorage = (float)$sumstorage/$maxstorage;



        return view('user.home')
            ->with('posts', $posts)
            ->with('user', $user)
            ->with('maxstorage', $maxstorage)
            ->with('sumstorage', $sumstorage)
            ->with('diffstorage', $diffstorage);
    }

    public function like(Request $request, $id){
        DB::table('likes')->where('post');
    }

    public function PostContent( Request $request){
        DB::table('post_contents')->insert([
            'TITLE'=> $request->TITLE,
            'platfotm'=>$request->platform,
            'Descripstion'=>$request->Description,
            'photo1'=>$request->photo1,
            'photo2'=>$request->photo2,
            'photo3'=>$request->photo3,
            'photo4'=>$request->photo4,
            'link_project'=>$request->link_project,
            'created_at'=>$request->created_at,
            'user_id'=>$request->user_id,
        ]);
        return view('/home')->with('sukses', 'data berhasil diupload');
    }

    public function addpost (){
        return view('user.post.post_content');
    }
}
