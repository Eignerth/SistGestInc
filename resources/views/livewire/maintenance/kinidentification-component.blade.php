<div>
    <div>
        @include('Mantenimiento.Tipoidentificacion.delete')
        @include('Mantenimiento.Tipoidentificacion.create')
        @include('Mantenimiento.Tipoidentificacion.edit')
    </div>
    <div wire:ignore class="row mb-4">
        <div class="input-group">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
            <button wire:click="limpiar()" class="btn bg-olive" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
            &nbsp;&nbsp;
            <span data-toggle="modal" data-target="#storeidentidad">
                <button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Agregar Doc. Identidad"><i class="fas fa-plus-square"></i></button>
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
                    <th><a wire:click.prevent="sortBy('abbreviation')" role="button" href="#">
                        Abreviatura
                        @include('includes._sort-icon',['field'=>'abbreviation'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('description')" role="button" href="#">
                        Descripción
                        @include('includes._sort-icon',['field'=>'description'])
                    </a></th>
                    <th>N° Dígitos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($identifications as $identification)
                <tr>
                    <td scope="row">{{$identification->id}}</td>
                    <td>{{$identification->abbreviation}}</td>
                    <td>{{$identification->description}}</td>
                    <td>{{$identification->ndigits}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                                
                            <button wire:click="edit({{$identification->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updateidentidad"><i class="fas fa-edit"></i></button>
                            &nbsp;&nbsp;                        
                            <button wire:click="delete({{$identification->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteidentidad"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $identifications->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $identifications->firstItem() }} al {{ $identifications->lastItem() }} de {{ $identifications->total() }} resultados
        </div>
    </div>
</div>
