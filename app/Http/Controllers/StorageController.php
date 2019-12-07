<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StorageController extends Controller
{
    public function addStorage(){
        $id = Auth::user()->id;
        $storage = \App\storage::where('user_id',$id);
        if (empty($storage)){
            DB::table('storages')->insert([
                'user_id'=>$id,
                'storage'=>100000,
                'status'=>'free',
            ]);
            return redirect()->back();
        }
            return redirect()->back()->with('notempty','storage sudah ada');

    }
}
