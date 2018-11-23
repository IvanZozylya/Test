<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country(){
        return $this->hasOne(Country::class,'user_id','id');
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
