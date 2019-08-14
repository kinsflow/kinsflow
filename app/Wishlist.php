<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{



    protected $fillable = ['user_id', 'product_id', 'category_id'];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
