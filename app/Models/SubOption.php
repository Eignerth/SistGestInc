<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubOption extends Model
{
    use HasFactory;
    protected $table='suboptions';
    protected $fillable=[
        'idoptions',
        'description',
    ];
}
