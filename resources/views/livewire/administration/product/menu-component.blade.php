<div>
    <div>
        @can('Agregar Producto')
            @include('Administracion.Productos.Menu.create') 
        @endcan
        @can('Editar Producto')
            @include('Administracion.Productos.Menu.edit')
        @endcan
        @can('Eliminar Producto')
            @include('Administracion.Productos.Menu.delete')
        @endcan
    </div>
    <div class="row mb-4">
        <div class="col form-inline">
            <div class="input-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Menú">
                <button wire:click="limpiar()" class="btn bg-teal " data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i  class="fas fa-times"></i></button>
                &nbsp;
                @can('Agregar Producto')
                    <span data-toggle="modal" data-target="#storemenu">
                        <button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Agregar Menú"><i class="fas fa-plus-square"></i></button>
                    </span>
                @endcan
            </div>
        </div>
    </div>

    <div class="row table-responsive">
        <table class="table table hover">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'id'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('idproducts')" role="button" href="#">
                        Producto
                        @include('includes._sort-icon',['field'=>'idproducts'])
                    </a></th>
                    <th ><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>                    
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td scope="row">{{$menu->id}}</td>
                        <td>{{$menu->product}}</td>
                        <td>{{$menu->description}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @can('Editar Producto')
                                    <button wire:click="edit({{$menu->id}})" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updatemenu"><i class="fas fa-edit"></i></button>
                                @endcan
                                &nbsp;&nbsp;                        
                                @can('Eliminar Producto')
                                    <button wire:click="delete({{$menu->id}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemenu"><i class="fas fa-trash-alt"></i></button>
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
            {{ $menus->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $menus->firstItem() }} al {{ $menus->lastItem() }} de {{ $menus->total() }} resultados
        </div>
    </div>
</div>
