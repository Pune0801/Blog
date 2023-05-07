<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Relacion uno a muchos polimorfica

    public function comment(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    //Relacion muchos a muchos polimorfica

    public function posts(){
        return $this->morphMany('App\Models\Tag', 'taggable');
    }
}
