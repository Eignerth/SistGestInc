<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{

    public function index()
    {
        $this->authorize('Ver Rol');
        return view('Administracion.Roles_Permisos.index');
    }
}
