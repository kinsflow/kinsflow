<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'body', 'post_id'];

    public  function  users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
