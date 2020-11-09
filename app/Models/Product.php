<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'abbreviation',
        'description',
        'addnote',
    ];

    public static function search($query){
        return empty($query) ? static::query()
            :static::where('abbreviation','like','%'.$query.'%')
            ->orWhere('description','like','%'.$query.'%');
    }
}
