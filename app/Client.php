<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $fillable = [
        'account','firstName','lastName','id_city','status','dateBirth'
    ];

    public function city()
    {
        return $this->belongsTo(City::class,'id_city');
    }
}
