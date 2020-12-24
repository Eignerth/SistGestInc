<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledgebase extends Model
{
    use HasFactory;

    protected $table='knowledgebases';

    protected $fillable=[
        'subject',
        'message',
        'idproducts',
        'idmenus',
        'idsubmenus',
        'idoptions',
        'idpersonals',
    ];
}
