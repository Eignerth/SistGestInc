<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioritie extends Model
{
    use HasFactory;
    protected $table='priorities';
    protected $fillable=[
        'description',
        'color',
        'level'
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            :static::where('description','like','%'.$query.'%');
    }
}
