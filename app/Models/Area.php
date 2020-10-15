<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table='areas';
    
    protected $fillable=[
        'abbreviation',
        'description'
    ];

    public static function search($query){
        return empty($query) ? static::query()
            :static::where('abbreviation','like','%'.$query.'%')
            ->orWhere('description','like','%'.$query.'%');
    }
}
