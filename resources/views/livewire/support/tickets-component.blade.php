<div>
    <div>
        @can('Agregar Sop. Tickets')
            @include('Soporte.Tickets.create')
        @endcan

        @can('Editar Sop. Tickets')
            @include('Soporte.Tickets.edit')
        @endcan

        @can('Eliminar Sop. Tickets')
            @include('Soporte.Tickets.delete')
        @endcan

     
            
    </div>
    <div wire:ignore class="row mb-4">
        <div class="col form-inline">
            Por Página: &nbsp;
            <select wire:model="porPagina" class="form-control">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="col">
            <div class="input-group">
                <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
                <button wire:click="limpiar()" class="btn bg-purple" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
                @can('Agregar Sop. Tickets')
                    <span data-toggle="modal" data-target="#createticket">
                        <button wire:click="create()" class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Ticket"><i class="fas fa-plus-square"></i></button>
                    </span>
                @endcan
                &nbsp;&nbsp;
                @can('Exportar Excel Sop. Tickets')
                    <a href="{{route('tickets-support.excel')}}" class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Exportar a Excel"><i class="far fa-file-excel"></i></a>
                @endcan
            </div>
        </div>      
    </div>
    <div class="row table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('serie')" role="button" href="#">
                        Ticket
                        @include('includes._sort-icon',['field'=>'serie'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('contact')" role="button" href="#">
                        Cliente
                        @include('includes._sort-icon',['field'=>'contact'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('personal')" role="button" href="#">
                        Responsable
                        @include('includes._sort-icon',['field'=>'personal'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('registerdate')" role="button" href="#">
                        Registro
                        @include('includes._sort-icon',['field'=>'registerdate'])
                    </a></th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                <tr>
                    <td scope="row">{{$ticket->serie}}</td>
                    <td>{{$ticket->customer}}&nbsp;|&nbsp;{{$ticket->contact}}</td>
                    <td>{{$ticket->personal}}</td>
                    <td>{{date('d-m-Y',strtotime($ticket->registerdate))}}</td>
                    <td> <span class="badge text-white text-wrap" style="background-color: {{$ticket->prioritycolor}}">{{$ticket->priority}}</span></td>
                    <td>
                        <span style="font-size: 1.5em;color: {{$ticket->status}}" >
                        <i class="fas fa-circle"></i>
                        </span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">                            
                                                      
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                @can('Exportar PDF Sop. Tickets')
                                    <a href="{{route('ReporteSoporte.ticket',$ticket->id)}}" class="btn btn-outline-danger"><span style="font-size: 20px; color: Red;"><i class="fas fa-file-pdf"></i></span></a>
                                @endcan
                                @can('Ver Detalle Sop. Tickets')
                                    <a class="btn btn-primary btn-sm" href="{{route('tickets-support.show',$ticket)}}" target="_blank" rel="noopener"><span class="text-center" style="vertical-align: sub"><i class="fas fa-eye"></i></span> </a>
                                @endcan
                                @if ($ticket->idpersonals === auth()->user()->idpersonals)
                                @can('Editar Sop. Tickets')
                                    <button wire:click="edit({{$ticket->id}})" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateticket"><i class="fas fa-edit"></i></button>
                                @endcan
                                @can('Eliminar Sop. Tickets')
                                    <button wire:click="delete({{$ticket->id}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteticket"><i class="fas fa-trash-alt"></i></button>    
                                @endcan 
                                @endif
                            </div>
                        </div>  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $tickets->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $tickets->firstItem() }} al {{ $tickets->lastItem() }} de {{ $tickets->total() }} resultados
        </div>
    </div>
</div>
