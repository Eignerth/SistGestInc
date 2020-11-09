<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table='customers';
    
    protected $fillable=[
        'descripcion',
        'ruc',
        'address',
        'telf',
        'cel',
        'email',
        'sector',
        'addnote'
    ];

    public static function search($query){
        return empty($query) ? static::query()
            :static::where('descripcion','like','%'.$query.'%')
            ->orWhere('ruc','like','%'.$query.'%');
    }
}
