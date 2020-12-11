<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tksupportd extends Model
{
    use HasFactory;
    protected $table='tksupportd';
    protected $fillable=[
        'description',
        'idtksupportm',
        'idpersonals'
    ];
}
