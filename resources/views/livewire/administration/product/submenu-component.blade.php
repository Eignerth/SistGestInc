<div>
    <div>
        @include('Administracion.Productos.Submenu.create')
        @include('Administracion.Productos.Submenu.edit')
        @include('Administracion.Productos.Submenu.delete')
    </div>
    <div class="row mb-4">
        <div class="col form-inline">
            <div class="input-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Sub-Menú">
                <button wire:click="limpiar()" class="btn bg-teal " data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i  class="fas fa-times"></i></button>
                &nbsp;
                <span data-toggle="modal" data-target="#storesubmenu">
                    <button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Agregar Sub-Menú"><i class="fas fa-plus-square"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="row table-responsive">
        <table class="table table hover">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('submenus.id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'submenus.id'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('idmenus')" role="button" href="#">
                        Menú
                        @include('includes._sort-icon',['field'=>'idmenus'])
                    </a></th>
                    <th ><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>                    
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submenus as $submenu)
                    <tr>
                        <td scope="row">{{$submenu->id}}</td>
                        <td>{{$submenu->products}} | {{$submenu->menus}}</td>
                        <td>{{$submenu->description}}</td>
                        <td>
                            <div class="d-flex justify-content-center"> 
                                <button wire:click="edit({{$submenu->id}})" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updatesubmenu"><i class="fas fa-edit"></i></button>
                                &nbsp;&nbsp;                        
                                <button wire:click="delete({{$submenu->id}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletesubmenu"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $submenus->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $submenus->firstItem() }} al {{ $submenus->lastItem() }} de {{ $submenus->total() }} resultados
        </div>
    </div>
</div>
