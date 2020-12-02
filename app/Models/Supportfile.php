<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supportfile extends Model
{
    protected $table='supportfiles';
    protected $fillable=[
        'idtksupportms',
        'idtksupportds',
        'idpersonals',
        'tittle',
        'file',
    ];
}
