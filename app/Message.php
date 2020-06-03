<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'title',
    ];
    public function user(){
        return $this->hasOne(User::class);
    }
}
