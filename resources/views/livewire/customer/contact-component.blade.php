<div>
    <div>
        @include('Clientes.Contactos.create')
        @include('Clientes.Contactos.edit')
        @include('Clientes.Contactos.delete')
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
                <button wire:click="limpiar()" class="btn bg-purple" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
                <span data-toggle="modal" data-target="#storecontacto">
                    <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Contacto"><i class="fas fa-plus-square"></i></button>
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
                    <th><a wire:click.prevent="sortBy('customer')" role="button" href="#">
                        Empresa
                        @include('includes._sort-icon',['field'=>'customer'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nombre del Contacto
                        @include('includes._sort-icon',['field'=>'name'])
                    </a></th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td scope="row">{{$contact->id}}</td>
                    <td>{{$contact->customer}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->cel}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                                
                            <button wire:click="edit({{$contact->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatecontacto"><i class="fas fa-edit"></i></button>
                            &nbsp;&nbsp;                        
                            <button wire:click="delete({{$contact->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletecontacto"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $contacts->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $contacts->firstItem() }} al {{ $contacts->lastItem() }} de {{ $contacts->total() }} resultados
        </div>
    </div>
</div>
