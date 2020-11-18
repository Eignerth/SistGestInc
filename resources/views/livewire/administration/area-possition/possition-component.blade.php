<div>
    <div>
        @can('Agregar Cargo')
            @include('Administracion.Area_Subarea.create_cargo')
        @endcan
        @can('Editar Cargo')
            @include('Administracion.Area_Subarea.edit_cargo')
        @endcan
        @can('Eliminar Cargo')
            @include('Administracion.Area_Subarea.delete_cargo')
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
        @can('Agregar Cargo')
            <button class="btn btn-success" data-placement="bottom" data-toggle="modal" data-target="#storecargo" title="Agregar Cargo"><i class="fas fa-plus-square"></i></button>
        @endcan
            
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'id'])
                    </a>
                    </th>
                    <th><a wire:click.prevent="sortBy('idareas')" role="button" href="#">
                        Área
                        @include('includes._sort-icon',['field'=>'idareas'])
                    </a>
                    </th>
                    <th><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a>
                    </th>                    
                    <th>Nivel</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($possitions as $possition)
                    <tr>
                        <td>{{$possition->id}}</td>
                        <td>{{$possition->area}}</td>
                        <td>{{$possition->description}}</td>
                        <td>{{$possition->level}}</td>
                        <td>
                            <div>
                                @can('Editar Cargo')
                                    <button wire:click="edit({{$possition->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatecargo"><i class="fas fa-edit"></i></button>
                                @endcan
                                @can('Eliminar Cargo')
                                   <button wire:click="delete({{$possition->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletecargo"><i class="fas fa-trash-alt"></i></button>
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
            {{ $possitions->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $possitions->firstItem() }} al {{ $possitions->lastItem() }} de {{ $possitions->total() }} resultados
        </div>
    </div>
</div>
