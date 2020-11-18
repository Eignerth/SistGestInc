<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KindidentificationController extends Controller
{

    public function index()
    {
        $this->authorize('Ver Docs Identidad');
        return view('Mantenimiento.Tipoidentificacion.index');
    }
}
