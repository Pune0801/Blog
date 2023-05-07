<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    //Relacion uno a muchos polimorfica
    public function comment(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function posts(){
        return $this->morphMany('App\Models\Tag', 'taggable');
    }
}
