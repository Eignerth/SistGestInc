<?php

namespace App\Http\Controllers\Administration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;

class AreaPossitionController extends Controller
{
    public function index()
    {
        return view('Administracion.Area_Subarea.index');
    }

/*     public function AreaData(Request $request){
        $areas=Area::where('description','like','%'.$request->input('search','').'%')->get(['id','description as text']);
        return ['results'=>$areas];
    } */

}
