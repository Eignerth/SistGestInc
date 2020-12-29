<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Kbtkref extends Model
{
    protected $table='kbreftks';
    protected $fillable=[
        'idkbs',
        'idtksupportm',
    ];
}
