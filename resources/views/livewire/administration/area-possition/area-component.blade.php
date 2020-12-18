<div>
    <div>
        @can('Agregar Área')
            @include('Administracion.Area_Subarea.edit_area')
        @endcan
        @can('Editar Área')
            @include('Administracion.Area_Subarea.create_area')
        @endcan
        @can('Eliminar Área', Model::class)
            @include('Administracion.Area_Subarea.delete_are')    
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
                <div class="input-group-append">
                    <button wire:click="limpiar()" class="btn bg-purple" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
        @can('Agregar Área')
            <span data-toggle="modal" data-target="#storearea">
                <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Área"><i class="fas fa-plus-square"></i></button>
            </span>
        @endcan
            
    </div>
    <div class="row">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'id'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('abbreviation')" role="button" href="#">
                        Abreviatura
                        @include('includes._sort-icon',['field'=>'abbreviation'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($areas as $area)
                    <tr>
                        <td>{{$area->id}}</td>                        
                        <td>{{$area->abbreviation}}</td>
                        <td>{{$area->description}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @can('Editar Área')
                                    <button wire:click="edit({{$area->id}})"  data-toggle="modal" data-target="#updatearea" class="btn btn-warning" ><i class="fas fa-edit"></i></button>                           
                                @endcan
                                &nbsp;&nbsp;
                                @can('Eliminar Área')
                                    <button wire:click="delete({{$area->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletearea"><i class="fas fa-trash-alt"></i></button>
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
            {{ $areas->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $areas->firstItem() }} al {{ $areas->lastItem() }} de {{ $areas->total() }} resultados
        </div>
    </div>
</div>

