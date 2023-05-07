<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Profile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name(): Attribute
    {
        return new Attribute(

            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)

        );
    }

    //Relacion uno a uno
    public function profile(){
        return $this->hasOne(Profile::class); 
    }

    //Relacion uno a muchos
    public function posts(){
        return $this->hasMany('App\Models\Posts');
    }

    public function videos(){
        return $this->hasMany('App\Models\Video');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    //Relacion muchos a muchos
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
