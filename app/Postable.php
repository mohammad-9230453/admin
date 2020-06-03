<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postable extends Model
{
    protected $fillable=[
        'price',
        'qty',
    ];
    public function cart(){
        return $this->belongsToMany(Cartable::class);
    }

}
