<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function likes(){
        return $this->belongsTo('App\like');
    }
}
