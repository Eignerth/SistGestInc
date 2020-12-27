<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kbfile extends Model
{
    protected $table='kbfiles';
    protected $fillable=[
        'idkbs',
        'idcommentkbds',
        'idpersonals',
        'tittle',
        'file',
    ];
}
