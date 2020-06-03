<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartable extends Model
{
    protected $fillable = [
        'items',
        'totalQty',
        'totalPrice',
        'cart_type',
    ];
    public function items(){
        return $this->belongsToMany(Postable::class);
    }
}
