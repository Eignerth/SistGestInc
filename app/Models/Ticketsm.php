<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketsm extends Model
{
    use HasFactory;
    protected $table='ticketsm';
    protected $fillable=[
        'idareas',
        'serie',
        'flgstatus',
    ];

}
