<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrioritieController extends Controller
{
    public function index()
    {
        $this->authorize('Ver Estado de Prioridad');
        return view('Mantenimiento.Prioridad.index');
    }
}
