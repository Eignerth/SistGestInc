<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tksupportm extends Model
{
    use HasFactory;
    protected $table='tksupportm';
    protected $fillable=[
        'idticketsm',
        'serie',
        'idpersonals',
        'idcontacts',
        'idclassifications',
        'idpriorities',
        'subject',
        'message',
        'idproducts',
        'idchannels',
        'idtkstatus',
        'registerdate',
        'registertime',
        'expirationdate',
        'expirationtime'
    ];

    public static function findBySerie(string $serie)
    {
        $ticket = static::where('serie','=',$serie)->first();
        if(empty($ticket)){
            return null;
        }
        return $ticket;
    }
}
