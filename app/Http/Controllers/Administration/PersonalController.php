<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalController extends Controller
{

    public function index()
    {
        return view('Administracion.Personal.index');
    }
}
