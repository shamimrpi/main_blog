<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Str;
class Post extends Model
{
    //
    const EXCERPT_LENGTH = 100;
    protected $fillable = ['title','description','image','user_id','category_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    public function comments(){
    	return $this->hasMany(Comment::class);
    }
    public function excerpt()
    {
        return Str::limit($this->description, Post::EXCERPT_LENGTH);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function likes(){
        return $this->hasMany('App\LikeDislike','post_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\LikeDislike','post_id')->sum('dislike');
    }
    
}
