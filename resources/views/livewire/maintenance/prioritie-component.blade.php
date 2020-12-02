<div>
    <div>
        @can('Agregar Estado de Prioridad')
        @include('Mantenimiento.Prioridad.delete')
            
        @endcan
        @can('Editar Estado de Prioridad')
        @include('Mantenimiento.Prioridad.create')
            
        @endcan
        @can('Eliminar Estado de Prioridad')
        @include('Mantenimiento.Prioridad.edit')
            
        @endcan
    </div>
    <div wire:ignore class="row mb-4">
        <div class="input-group">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
            <button wire:click="limpiar()" class="btn bg-lightblue" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
            &nbsp;&nbsp;
            @can('Agregar Estado de Prioridad')
                
            <span data-toggle="modal" data-target="#storeprioridad">
                <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Estado de Prioridad"><i class="fas fa-plus-square"></i></button>
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
                    <th style="text-align: center"><a wire:click.prevent="sortBy('level')" role="button" href="#">
                        Nivel de Prioridad
                        @include('includes._sort-icon',['field'=>'level'])
                    </a></th>
                    <th>Color</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($priorities as $priority)
                <tr>
                    <td scope="row">{{$priority->id}}</td>
                    <td>{{$priority->description}}</td>
                    <td style="text-align: center">{{$priority->level}}</td>
                    <td>
                        <span style="font-size: 2em;color: {{$priority->color}}" >
                            <i class="fas fa-circle"></i>
                        </span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            @can('Editar Estado de Prioridad')
                            <button wire:click="edit({{$priority->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updateprioridad"><i class="fas fa-edit"></i></button>
                            @endcan                                
                            &nbsp;&nbsp;                        
                            @can('Eliminar Estado de Prioridad')
                            <button wire:click="delete({{$priority->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteprioridad"><i class="fas fa-trash-alt"></i></button>
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
            {{ $priorities->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $priorities->firstItem() }} al {{ $priorities->lastItem() }} de {{ $priorities->total() }} resultados
        </div>
    </div>
</div>
