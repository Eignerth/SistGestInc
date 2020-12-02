<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TkstatusController extends Controller
{
    public function index()
    {
        return view('Mantenimiento.Estadotickets.index');
    }
}
