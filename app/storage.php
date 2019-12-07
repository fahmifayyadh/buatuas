<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    protected $table = 'storages';
    protected $fillable = ['id','user_id','storage','status'];

//    public static function create(array $array)
//    {
//    }

    public function User(){
        return $this->belongsTo('App\User');
    }
}

