<div>
    <div>
        {{-- @can('Agregar Docs Identidad') --}}
        @include('Mantenimiento.ManejoSerie.delete')
            
        {{-- @endcan
        @can('Editar Docs Identidad') --}}
        @include('Mantenimiento.ManejoSerie.create')
            
        {{-- @endcan
        @can('Eliminar Docs Identidad') --}}
        @include('Mantenimiento.ManejoSerie.edit')
            
        {{-- @endcan --}}
    </div>
    <div wire:ignore class="row mb-4">
        <div class="input-group">
            <input wire:model="search" class="form-control" type="text" placeholder="Buscar...">
            <button wire:click="limpiar()" class="btn bg-orange" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
            &nbsp;&nbsp;
            {{-- @can('Agregar Docs Identidad') --}}
                
            <span data-toggle="modal" data-target="#storeserie">
                <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Nueva Serie"><i class="fas fa-plus-square"></i></button>
            </span>
            {{-- @endcan --}}
        </div>
    </div>
    <div class="row table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                        @include('includes._sort-icon',['field'=>'id'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('areas')" role="button" href="#">
                        Área
                        @include('includes._sort-icon',['field'=>'areas'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('serie')" role="button" href="#">
                        Serie
                        @include('includes._sort-icon',['field'=>'serie'])
                    </a></th>
                    <th>Numeración Actual</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($series as $serie)
                <tr>
                    <td scope="row">{{$serie->id}}</td>
                    <td>{{$serie->areas}}</td>
                    <td class="text-center">{{$serie->serie}}</td>
                    <td class="text-center">{{$serie->num}}</td>
                    <td>
                        @if ($serie->flgstatus === 1)
                        <span style="font-size: 1.5em; color: green">
                            <i class="fas fa-check"></i>
                        </span>
                        @else
                        <span style="font-size: 1.5em; color: red">
                            <i class="fas fa-times"></i>
                        </span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{-- @can('Editar Docs Identidad') --}}
                            <button wire:click="edit({{$serie->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updateserie"><i class="fas fa-edit"></i></button>
                            {{-- @endcan    --}}                             
                            &nbsp;&nbsp;                        
                            {{-- @can('Eliminar Docs Identidad') --}}
                            <button wire:click="delete({{$serie->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteserie"><i class="fas fa-trash-alt"></i></button>
                            {{-- @endcan --}}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $series->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $series->firstItem() }} al {{ $series->lastItem() }} de {{ $series->total() }} resultados
        </div>
    </div>
</div>
