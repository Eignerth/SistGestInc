<div>
    <div>
        @can('Agregar Estado de Avance')
        @include('Mantenimiento.Estadotickets.delete')
            
        @endcan
        @can('Editar Estado de Avance')
        @include('Mantenimiento.Estadotickets.create')
            
        @endcan
        @can('Eliminar Estado de Avance')
        @include('Mantenimiento.Estadotickets.edit')
            
        @endcan
    </div>
    <div wire:ignore class="row mb-4">
        <div class="input-group">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
            <button wire:click="limpiar()" class="btn bg-olive" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
            &nbsp;&nbsp;
            @can('Agregar Estado de Avance')
                
            <span data-toggle="modal" data-target="#storestatus">
                <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Estado de Avance"><i class="fas fa-plus-square"></i></button>
            </span>
            @endcan
        </div>
    </div>
    <div class="row table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'id'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>
                    <th>Color</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tkstatus as $status)
                <tr>
                    <td scope="row">{{$status->id}}</td>
                    <td>{{$status->description}}</td>
                    <td>
                        <span style="font-size: 2em;color: {{$status->color}}" >
                            <i class="fas fa-circle"></i>
                        </span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            @can('Editar Estado de Avance')
                            <button wire:click="edit({{$status->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatestatus"><i class="fas fa-edit"></i></button>
                            @endcan                                
                            &nbsp;&nbsp;                        
                            @can('Eliminar Estado de Avance')
                            <button wire:click="delete({{$status->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletestatus"><i class="fas fa-trash-alt"></i></button>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $tkstatus->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $tkstatus->firstItem() }} al {{ $tkstatus->lastItem() }} de {{ $tkstatus->total() }} resultados
        </div>
    </div>
</div>
