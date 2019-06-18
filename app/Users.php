<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Users extends Model
{
    use HasApiTokens;

    protected $table = 'user';
    protected $fillable = [
        'name', 'email','password','photo'
    ];
}
