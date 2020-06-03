<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=[
      'immageable_id',
      'immageable_type',
      'path',
    ];
    public function immageable(){
        return $this->morphTo();
    }
    public function getPathAttribute($photo)
    {
        return asset('images/'.$photo);
    }
}
