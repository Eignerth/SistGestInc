<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsmController extends Controller
{
    public function index()
    {
        $this->authorize('Ver Control de Series');
        return view('Mantenimiento.ManejoSerie.index');
    }
}
