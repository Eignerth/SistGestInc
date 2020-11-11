<div>
    <div>
        @include('Administracion.Productos.Option.create')
        @include('Administracion.Productos.Option.edit')
        @include('Administracion.Productos.Option.delete')
    </div>
    <div class="row mb-4">
        <div class="col form-inline">
            <div class="input-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Opción">
                <button wire:click="limpiar()" class="btn bg-teal " data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i  class="fas fa-times"></i></button>
                &nbsp;
                <span data-toggle="modal" data-target="#storeoption">
                    <button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Agregar Opción"><i class="fas fa-plus-square"></i></button>
                </span>
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
                    <th><a wire:click.prevent="sortBy('idsubmenus')" role="button" href="#">
                        Sub-Menú
                        @include('includes._sort-icon',['field'=>'idsubmenus'])
                    </a></th>
                    <th ><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>                    
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($options as $option)
                    <tr>
                        <td scope="row">{{$option->id}}</td>
                        <td>{{$option->products}} | {{$option->menus}} | {{$option->submenus}}</td>
                        <td>{{$option->description}}</td>
                        <td>
                            <div class="d-flex justify-content-center"> 
                                <button wire:click="edit({{$option->id}})" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateoption"><i class="fas fa-edit"></i></button>
                                &nbsp;&nbsp;                        
                                <button wire:click="delete({{$option->id}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteoption"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $options->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $options->firstItem() }} al {{ $options->lastItem() }} de {{ $options->total() }} resultados
        </div>
    </div>
</div>
