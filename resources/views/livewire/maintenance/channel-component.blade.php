<div>
    <div>
        @include('Mantenimiento.Canal.create')
        @include('Mantenimiento.Canal.edit')
        @include('Mantenimiento.Canal.delete')
    </div>
    <div wire:ignore class="row mb-4">
        <div class="input-group">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
            <button wire:click="limpiar()" class="btn bg-purple" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
            &nbsp;&nbsp;
            <span data-toggle="modal" data-target="#storecanal">
                <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Canal de Atención"><i class="fas fa-plus-square"></i></button>
            </span>
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
                    <th><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($channels as $channel)
                <tr>
                    <td scope="row">{{$channel->id}}</td>
                    <td>{{$channel->description}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                                
                            <button wire:click="edit({{$channel->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatecanal"><i class="fas fa-edit"></i></button>
                            &nbsp;&nbsp;                        
                            <button wire:click="delete({{$channel->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletecanal"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
