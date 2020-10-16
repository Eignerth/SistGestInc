<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $table='channels';
    
    protected $fillable=[
        'description'
    ];

    public static function search($query){
        return empty($query) ? static::query()
            :static::where('description','like','%'.$query.'%');
    }
}
