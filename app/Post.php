<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
protected $fillable = ['user_id', 'category_id', 'title', 'body'];

    public  function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
