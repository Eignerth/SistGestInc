<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelRole extends Model
{
    protected $table='model_has_roles';
    protected $primaryKey = 'model_id';
}
