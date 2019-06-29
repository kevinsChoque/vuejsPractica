<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudUsuario extends Model
{
    protected $table = 'crud_usuario';
    protected $fillable = [
        'firstName','lastName','profession','avatar'
    ];
}
