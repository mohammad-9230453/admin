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
        'name', 'phone', 'email', 'password','role','active',
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

    public function messages(){
        return $this->belongsToMany(Message::class);
    }
    public function contacts(){
        return $this->belongsToMany(Contact::class);
    }

    public function acount(){
        return $this->belongsTo(UserAcount::class);
    }
    public function contact(){
        return $this->hasMany(Contact::class);
    }

    public function cart(){
        return $this->hasMany(Cartable::class);
    }
    public function photo(){
        return $this->morphOne(Photo::class , 'immageable');
    }
}
