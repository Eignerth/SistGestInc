<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaPossitionController extends Controller
{

    public function index()
    {
        return view('Administracion.Area_Subarea.index');
    }
}
