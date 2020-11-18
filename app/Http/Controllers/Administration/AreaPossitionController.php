<?php

namespace App\Http\Controllers\Administration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;

class AreaPossitionController extends Controller
{
    public function index()
    {
        $this->authorize('Ver Área-Cargo');
        return view('Administracion.Area_Subarea.index');
    }

}
