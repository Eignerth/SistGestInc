<div>
    <div>
        @include('Administracion.Productos.Suboption.create')
        @include('Administracion.Productos.Suboption.edit')
        @include('Administracion.Productos.Suboption.delete')
    </div>
    <div class="row mb-4">
        <div class="col form-inline">
            <div class="input-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Sub-Opción">
                <button wire:click="limpiar()" class="btn bg-teal " data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i  class="fas fa-times"></i></button>
                &nbsp;
                <span data-toggle="modal" data-target="#storesuboption">
                    <button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Agregar Sub-Opción"><i class="fas fa-plus-square"></i></button>
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
                    <th><a wire:click.prevent="sortBy('idoptions')" role="button" href="#">
                        Opción
                        @include('includes._sort-icon',['field'=>'idoptions'])
                    </a></th>
                    <th ><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>                    
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suboptions as $suboption)
                    <tr>
                        <td scope="row">{{$suboption->id}}</td>
                        <td>{{$suboption->products}} | {{$suboption->menus}} | {{$suboption->submenus}}</td>
                        <td>{{$suboption->description}}</td>
                        <td>
                            <div class="d-flex justify-content-center"> 
                                <button wire:click="edit({{$suboption->id}})" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updatesuboption"><i class="fas fa-edit"></i></button>
                                &nbsp;&nbsp;                        
                                <button wire:click="delete({{$suboption->id}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletesuboption"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $suboptions->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $suboptions->firstItem() }} al {{ $suboptions->lastItem() }} de {{ $suboptions->total() }} resultados
        </div>
    </div>
</div>
