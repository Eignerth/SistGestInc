<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelController extends Controller
{    
    public function index()
    {
        $this->authorize('Ver Canales de Atención');
        return view('Mantenimiento.Canal.index');
    }
}
