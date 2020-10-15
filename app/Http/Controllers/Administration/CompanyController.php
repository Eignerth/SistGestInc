<?php

namespace App\Http\Controllers\Administration;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{

    public function index()
    {        
        return view('Administracion.Empresa.index');
    }

}
