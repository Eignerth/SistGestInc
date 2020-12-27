<?php

namespace App\Http\Controllers\Kb;

use App\Http\Controllers\Controller;
use App\Models\Knowledgebase;

class KbController extends Controller
{
    public function index()
    {
        return view('Kb.KbGeneral.index');
    }

    public function show(Knowledgebase $kb)
    {
        return view('Kb.KbGeneral.show',['kb'=>$kb]);
    }
}
