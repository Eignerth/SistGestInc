<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kindidentification extends Model
{
    use HasFactory;
    protected $table='kindidentifications';

    protected $fillable=[
        'abbreviation',
        'description',
        'ndigits'
    ];

    public static function search($query){
        return empty($query) ? static::query()
            :static::where('abbreviation','like','%'.$query.'%')
            ->orWhere('description','like','%'.$query.'%');
    }
}
