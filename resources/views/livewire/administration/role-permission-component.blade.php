<div>
    <div>
        @can('Agregar Rol')
            @include('Administracion.Roles_Permisos.create')
        @endcan
        @can('Editar Rol')
            @include('Administracion.Roles_Permisos.edit')
        @endcan
        @can('Eliminar Rol')
            @include('Administracion.Roles_Permisos.delete')
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
                @can('Agregar Rol')
                    <span data-toggle="modal" data-target="#storerole">
                        <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Rol"><i class="fas fa-plus-square"></i></button>
                    </span>    
                @endcan
            </div>
        </div>        
    </div>
    <div class="row table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'id'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Descrición
                        @include('includes._sort-icon',['field'=>'name'])
                    </a></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td scope="row">{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            @can('Editar Rol')
                            <button wire:click="edit({{$role->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updaterole"><i class="fas fa-edit"></i></button>
                            @endcan
                            &nbsp;&nbsp;
                            @can('Eliminar Rol')
                            <button wire:click="delete({{$role->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleterole"><i class="fas fa-trash-alt"></i></button>
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
            {{ $roles->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $roles->firstItem() }} al {{ $roles->lastItem() }} de {{ $roles->total() }} resultados
        </div>
    </div>
</div>
