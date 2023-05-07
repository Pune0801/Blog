<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Relacion muchos a muchos inversar polimoficas
    public function posts(){
        return $this->morphedByMany('App\Models\Post', 'taggagle');
    }

    
    public function videos(){
        return $this->morphedByMany('App\Models\Video', 'taggagle');
    }

}
