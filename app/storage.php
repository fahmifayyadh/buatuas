<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    protected $table = 'storages';

    public function User(){
        return $this->belongsTo('App\User');
    }
}

