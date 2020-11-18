<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $this->authorize('Ver Usuario');
        return view('Administracion.Usuario.index');
    }
}
