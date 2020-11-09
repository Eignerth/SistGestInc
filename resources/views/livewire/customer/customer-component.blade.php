<div>
    <div>
        @include('Clientes.Clientes.create')
        @include('Clientes.Clientes.edit')
        @include('Clientes.Clientes.delete')
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
                <button wire:click="limpiar()" class="btn bg-navy" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
                <span data-toggle="modal" data-target="#storecliente">
                    <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Cliente"><i class="fas fa-plus-square"></i></button>
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
                    <th><a wire:click.prevent="sortBy('descripcion')" role="button" href="#">
                        Razón Social
                        @include('includes._sort-icon',['field'=>'descripcion'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('ruc')" role="button" href="#">
                        R.U.C.
                        @include('includes._sort-icon',['field'=>'ruc'])
                    </a></th>
                    <th>Email</th>
                    <th>Sector</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td scope="row">{{$customer->id}}</td>
                    <td>{{$customer->descripcion}}</td>
                    <td>{{$customer->ruc}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->sector}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                                
                            <button wire:click="edit({{$customer->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatecliente"><i class="fas fa-edit"></i></button>
                            &nbsp;&nbsp;                        
                            <button wire:click="delete({{$customer->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletecliente"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $customers->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $customers->firstItem() }} al {{ $customers->lastItem() }} de {{ $customers->total() }} resultados
        </div>
    </div>

</div>

