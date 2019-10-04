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
    public function create()
    {
        //
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
        $users = \App\Profile::find($id);
//        \App\Profile::create($request->all());


//        $users->update($request->all());
//        return redirect('/profile/{id}',['users'=>$users]) ->with('sukses', 'data berhasil diupdate');

//        return "form submit";
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
//
        return redirect('/profile/{id}', ['users'=>$users]) ->with('sukses', 'data berhasil diupdate');
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