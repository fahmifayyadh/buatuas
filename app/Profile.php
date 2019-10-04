<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'users';
    protected $fillable = ['remember_token','name','pic','phone_number','birth_address','birth_date','address','hobby','skill','experience','overview'];
}
