<?php

namespace App\Http\Controllers\Kb;

use App\Http\Controllers\Controller;

class KbController extends Controller
{
    public function index()
    {
        return view('Kb.KbGeneral.index');
    }

    public function show($id)
    {
        return view('Kb.KbGeneral.show',['kb'=>$id]);
    }
}
