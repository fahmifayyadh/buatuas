<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function PostContent(){
        return $this->belongsTo('App\PostContent');
    }
}
