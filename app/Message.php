<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // protected $table = 'nombre';
    protected $fillable = ['nombre','email','mensaje'];//asignacion masiva de datos

}
