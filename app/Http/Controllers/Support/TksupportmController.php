<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TksupportmController extends Controller
{
    public function index()
    {
        return view('Soporte.Tickets.General.index');
    }
}
