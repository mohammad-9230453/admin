<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'name',
        'price',
        'off',
    ];

    public function photo(){
        return $this->morphOne(Photo::class , 'immageable');
    }
    public function postable(){
        return $this->hasOne(Postable::class);
    }
}
