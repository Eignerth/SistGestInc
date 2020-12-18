<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\Tksupportm;


class TksupportmController extends Controller
{
    public function index()
    {
        $this->authorize('Ver Soporte - Tickets');
        return view('Soporte.Tickets.index');
    }

    public function show(Tksupportm $ticket)
    {
        $this->authorize('Ver Detalle Sop. Tickets');
        return view('Soporte.Tickets.detail',['ticket'=>$ticket]);
    }
}
