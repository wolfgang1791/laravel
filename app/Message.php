<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // protected $table = 'nombre_de_table';
    protected $fillable = ['name','email','mensaje'];//asignacion masiva de datos

}
