<div>
    <div>
        @include('Administracion.Productos.create')
        @include('Administracion.Productos.edit')
        @include('Administracion.Productos.delete')
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
                <button wire:click="limpiar()" class="btn bg-teal" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
                <span data-toggle="modal" data-target="#storeproducto">
                    <button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Agregar Producto"><i class="fas fa-plus-square"></i></button>
                </span>
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
                    <th><a wire:click.prevent="sortBy('abbreviation')" role="button" href="#">
                        Abreviatura
                        @include('includes._sort-icon',['field'=>'abbreviation'])
                    </a></th>
                    <th ><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>                    
                    <th style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="row">{{$product->id}}</td>
                    <td>{{$product->abbreviation}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                        
                            <button wire:click="edit({{$product->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updateproducto"><i class="fas fa-edit"></i></button>
                            &nbsp;&nbsp;                        
                            <button wire:click="delete({{$product->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteproducto"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $products->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $products->firstItem() }} al {{ $products->lastItem() }} de {{ $products->total() }} resultados
        </div>
    </div>

</div>


