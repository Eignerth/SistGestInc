<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use App\Models\Tksupportm;


class TksupportmController extends Controller
{
    public function index()
    {
        return view('Soporte.Tickets.index');
    }

    public function show(Tksupportm $ticket)
    {        
        return view('Soporte.Tickets.detail',['ticket'=>$ticket]);
    }
}
