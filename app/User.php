<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','email_verified_at', 'password','remember_token','created_at','upload_at','pic','phone_number','birth_date','address','hobby','skill','experience','overview','status','aktif',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function likes(){
        $this->hasMany('App\like');
    }
    public function PostContent(){
         return $this->hasMany('App\PostContent');
    }
    public function Storage(){
        return $this->hasOne('App\storage');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
