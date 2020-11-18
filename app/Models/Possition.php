<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Possition extends Model
{
    use HasFactory;
    protected $table='possitions';
    protected $fillable=[
        'idareas',
        'description',
        'addnote',
        'level'
    ];
}
