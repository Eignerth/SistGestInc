<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentkb extends Model
{
    use HasFactory;
    protected $table='commentkbs';

    protected $fillable=[
        'idkbs',
        'idpersonals',
        'message',
    ];
}
