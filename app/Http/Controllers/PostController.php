<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\like;
use App\PostContent;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = \App\User::select('*')
                ->join('post_contents','users.id','=','post_contents.user_id')

                ->get();
//        $posts = PostContent::orderBy('created_at','desc')->get();
        return view('user.home', compact('posts'));
    }
}
