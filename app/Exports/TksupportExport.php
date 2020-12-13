<?php

namespace App\Exports;

use App\Models\Listtksupport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TksupportExport implements FromCollection, WithStrictNullComparison, WithHeadings, ShouldAutoSize
{
    public function headings(): array
    {
        return [
            'Ticket',
            'Responsable',
            'Empresa',
            'Contacto',
            'Tipo de Ticket',
            'Prioridad',
            'Estado',
            'Asunto',
            'Fecha-Registro',
            'Hora-Registro',
            'Fecha-Cierre',
            'Hora-Cierre'
        ];
    }

    public function collection()
    {
        return Listtksupport::all([
            'serie as Ticket',
            'personal as Responsable',
            'cliente as Empresa',
            'contacto as Contacto',
            'clasificacion as Tipo-Ticket',
            'prioridad as Prioridad',
            'status as Estado',
            'asunto as Asunto',
            'fecregistro as Fecha-Registro',
            'horregistro as Hora-Registro',
            'fectermino as Fecha-Cierre',
            'hortermino as Hora-Cierre'
        ]);
    }
}
