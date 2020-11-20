<div>
    <div>
        @can('Agregar Usuario')
        @include('Administracion.Usuario.create') 
        @endcan
        @can('Editar Usuario')
        @include('Administracion.Usuario.edit')
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
                <button wire:click="limpiar()" class="btn bg-warning" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
                @can('Agregar Usuario')
                    
                <span data-toggle="modal" data-target="#storeusuario">
                    <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Usuario"><i class="fas fa-plus-square"></i></button>
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
                    <th><a wire:click.prevent="sortBy('personals')" role="button" href="#">
                        Personal
                        @include('includes._sort-icon',['field'=>'personals'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Usuario
                        @include('includes._sort-icon',['field'=>'name'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('flgstatus')" role="button" href="#">
                        Estado
                        @include('includes._sort-icon',['field'=>'flgstatus'])
                    </a></th>                    
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{$user->id}}</td>
                    <td>{{$user->personal}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->flgstatus}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                                
                            @can('Editar Usuario')
                                <button wire:click="edit({{$user->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updateusuario"><i class="fas fa-edit"></i></button>
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
            {{ $users->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $users->firstItem() }} al {{ $users->lastItem() }} de {{ $users->total() }} resultados
        </div>
    </div>

</div>