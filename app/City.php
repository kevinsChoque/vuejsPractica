<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    // public function clients()
    // {
    //     return $this->hasMany(Client::class);
    // }

    public function state()
    {
        return $this->belongsTo(State::class,'id_state');
    }
}
