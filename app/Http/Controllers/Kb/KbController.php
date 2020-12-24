<?php

namespace App\Http\Controllers\Kb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KbController extends Controller
{
    public function index()
    {
        return view('Kb.KbGeneral.index');
    }
}
