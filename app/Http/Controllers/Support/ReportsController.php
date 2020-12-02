<?php

namespace App\Http\Controllers\Support;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Listtksupport;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function support($id)
    {
        $ticket = Listtksupport::findOrFail($id);
        
        return PDF::loadView('Reportes.Soporte.ticket',$ticket)->download($ticket->serie.'.pdf');
    }
}
