<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table='personals';
    protected $fillable=[
        'name',
        'idkindident',
        'kindident',
        'ruc',
        'telf',
        'cel',
        'ownemail',
        'email',
        'address',
        'dateborn',
        'idpossitions',
        'addnote'
    ];

/*     public static function search($query){
        return empty($query) ? static::query()
            :static::where('name','like','%'.$query.'%')
            ->orWhere('kindident','like','%'.$query.'%')
            ->orWhere('email','like','%'.$query.'%');
    } */
}
