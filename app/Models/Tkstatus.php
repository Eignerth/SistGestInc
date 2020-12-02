<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tkstatus extends Model
{
    use HasFactory;
    protected $table='tkstatus';
    protected $fillable=[
        'description',
        'color',
    ];

    public static function search($query)
    {
        return empty($query) ? static::query()
            :static::where('description','like','%'.$query.'%');
    }
}
