<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\like;
use App\PostContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        $id = Auth::user()->id;
        $posts = \App\User::select('*')
            ->join('post_contents', 'users.id', '=', 'post_contents.user_id')
            ->get();
        try {
            $user = \App\User::where('id', '=', $id)->first();


            $maxstorage = $user->Storage->storage;

            $sumstorage = Auth::user()->PostContent->sum('file_size');

            $diffstorage = (float)$sumstorage / $maxstorage;

            if (!empty($nullstorage)) {
                return view('user.home')
                    ->with('id', $id)
                    ->with('posts', $posts);
            } else {
                return view('user.home')
                    ->with('id', $id)
                    ->with('posts', $posts)
                    ->with('user', $user)
                    ->with('maxstorage', $maxstorage)
                    ->with('sumstorage', $sumstorage)
                    ->with('diffstorage', $diffstorage);
            }
        } catch (\Exception $exception) {
            return view('user.home')
                ->with('id', $id)
                ->with('posts', $posts)
                ->with('nullsorage', 'Tambahkan storage terlebih dahulu');
        }
    }

    public function like(Request $request, $id)
    {
        DB::table('likes')->where('post');
    }
    public function PostContent(Request $request)
    {
        $project = $request->file('file');

//        NAMA FOLDER PROJECT
        $folder = 'file';

        // nama file yang disimpan ke folder public
        $file = time() . "_" . $project;

        // pindah file dari form ke folder laravel
        $project->move($folder, $file);


//        NAMA FOLDER FOTO
        $foto = 'photoproject';

//        FOTO PERTAMA
        $photo1 = $request->file('photo1');
//        // nama file yang disimpan ke folder public
        $poto1 = time() . "_" . $photo1->getClientOriginalName();

//        // pindah file dari form ke folder laravel
        $photo1->move($foto, $poto1);


//        FOTO KEDUA
        $photo2 = $request->file('photo2');
        // nama file yang disimpan ke folder public
        $poto2 = time() . "_" . $photo2->getClientOriginalName();

//        // pindah file dari form ke folder laravel
        $photo2->move($foto, $poto2);


//        FOTOKETIGA
        $photo3 = $request->file('photo3');
        // nama file yang disimpan ke folder public
        $poto3 = time() . "_" . $photo3->getClientOriginalName();

//        // pindah file dari form ke folder laravel
        $photo3->move($foto, $poto3);

//        FOTO KEEMPAT
        $photo4 = $request->file('photo4');
//        nama file yang disimpan ke folder public
        $poto4 = time() . "_" . $photo4->getClientOriginalName();
//
//        pindah file dari form ke folder laravel
        $photo4->move($foto, $poto4);




        $id = Auth::user();
        DB::table('post_contents')->insert([
            'TITLE' => $request->TITLE,
            'platfotm' => $request->platform,
            'Descripstion' => $request->Description,
            'photo1' => $poto1,
            'photo2' => $poto2,
            'photo3' => $poto3,
            'photo4' => $poto4,
            'link_project'=> $file,
            'user_id' => $id->id,
            'file_size' => $file->getSize(),
        ]);
        return view('/home')->with('sukses', 'data berhasil diupload');
    }

    public function addpost()
    {
        return view('user.post.post_content');
    }
}
