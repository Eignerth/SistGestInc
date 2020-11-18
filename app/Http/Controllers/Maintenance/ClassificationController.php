<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    
    public function index()
    {
        $this->authorize('Ver Clasif. Inc.');
        return view('Mantenimiento.ClasificacionInc.index');
    }
}
