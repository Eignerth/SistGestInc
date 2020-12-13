<?php

namespace App\Http\Controllers\Support;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Listtksupport;
use App\Exports\TksupportExport;

class ReportsController extends Controller
{
    public function support($id)
    {
        $ticket = Listtksupport::findOrFail($id);
        
        return PDF::loadView('Reportes.Soporte.ticket',$ticket)->download($ticket->serie.'.pdf');
    }

    public function excel()
    {
        return Excel::download(new TksupportExport,'tickets_soporte.xlsx');
    }
}
