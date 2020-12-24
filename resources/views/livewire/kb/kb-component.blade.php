<div>
    <div>
        @can('Agregar Personal')
            @include('Administracion.Personal.create')
        @endcan
        @can('Editar Personal')
            @include('Administracion.Personal.edit')
        @endcan
        @can('Eliminar Personal')
            @include('Administracion.Personal.delete')
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
                <button wire:click="limpiar()" class="btn bg-lightblue" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
                @can('Agregar Personal')
                    <span data-toggle="modal" data-target="#storepersonal">
                        <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Kb"><i class="fas fa-plus-square"></i></button>
                    </span>    
                @endcan
            </div>
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
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Producto
                        @include('includes._sort-icon',['field'=>'name'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('kindident')" role="button" href="#">
                        Asunto
                        @include('includes._sort-icon',['field'=>'kindident'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('cel')" role="button" href="#">
                        Fecha Creación
                        @include('includes._sort-icon',['field'=>'cel'])
                    </a></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kbs as $kb)
                <tr>
                    <td scope="row">{{$kb->id}}</td>
                    <td>{{$personal->name}}</td>
                    <td>{{$personal->kindidentifications}} | {{$personal->kindident}}</td>
                    <td>{{$personal->cel}}</td>
                    <td>{{$personal->ownemail}}</td>
                    <td>{{$personal->possitions}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            @can('Editar Personal')
                            <button wire:click="edit({{$personal->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatepersonal"><i class="fas fa-edit"></i></button>
                            @endcan
                            &nbsp;&nbsp;
                            @can('Eliminar Personal')
                            <button wire:click="delete({{$personal->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletepersonal"><i class="fas fa-trash-alt"></i></button>
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
            {{ $personals->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $personals->firstItem() }} al {{ $personals->lastItem() }} de {{ $personals->total() }} resultados
        </div>
    </div>

</div>

