<div>
    <div>
        @include('Mantenimiento.ClasificacionInc.create')
        @include('Mantenimiento.ClasificacionInc.edit')
        @include('Mantenimiento.ClasificacionInc.delete')
    </div>
    <div wire:ignore class="row mb-4">
        <div class="input-group">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
            <button wire:click="limpiar()" class="btn bg-navy" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
            &nbsp;&nbsp;
            <span data-toggle="modal" data-target="#storeclasificacion">
                <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Clasificación"><i class="fas fa-plus-square"></i></button>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classifications as $classification)
                <tr>
                    <td scope="row">{{$classification->id}}</td>
                    <td>{{$classification->abbreviation}}</td>
                    <td>{{$classification->description}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                                
                            <button wire:click="edit({{$classification->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updateclasificacion"><i class="fas fa-edit"></i></button>
                            &nbsp;&nbsp;                        
                            <button wire:click="delete({{$classification->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteclasificacion"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
