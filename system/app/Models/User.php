<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Post;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function post(){
        return $this->hasMany(Post::class , 'id_user');
    }
    function setPasswordAttribute ($value){
        $this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute ($value){
        $this->attributes['username'] = strtolower($value);
    }
}
