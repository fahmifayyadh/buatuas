<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $cek = \App\User::where('email',$req->email)->first();
        if (!empty($cek)){
            return redirect()->back()
                ->with('status','email sudah pernah digunakan, gunakan email lain.');
        }else {

            $z = new \App\User;
            $z->id = mt_rand(1000, 9999);
            \App\storage::create([
                'id' => mt_rand(1000, 9999),
                'user_id' => $z->id,
                'storage' => 100000,
                'status' => 'free',
            ]);
            $z->name = $req->name;
            $z->email = $req->email;
            $z->password = bcrypt($req->password);
            $z->save();

            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('users')->where('id',$id)->update([
            'name'=> $request->name,
            'phone_number'=>$request->phone_number,
            'birth_address'=>$request->birth_address,
            'birth_date'=>$request->birth_date,
            'address'=>$request->address,
            'hobby'=>$request->hobby,
            'skill'=>$request->skill,
            'experience'=>$request->experience,
            'overview'=>$request->overview
        ]);
        $users = \App\Profile::find($id);
        return view('user.profile', ['users'=>$users])->with('sukses', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
