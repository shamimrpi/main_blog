<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','admin', 'approved_at','emplyee_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return hasMany(Post::class);
    }

     public static function arrayForSelect(){
         $arr = [];
         $users = Post::all();
         foreach ($users as $key => $user) {
            $arr[$user->id] = $user->name;
         }
         return $arr;
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function leaves(){
        return $this->hasMany(Leave::class,'user_id','id');
    }
  
}
