<div>
    <div>
       
            @include('Kb.KbGeneral.create')
            @include('Kb.KbGeneral.edit')
            @include('Kb.KbGeneral.delete')
       
    
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
                <button wire:click="limpiar()" class="btn bg-lightblue" data-toggle="tooltip" data-placement="bottom" title="Limpiar"><i class="fas fa-times"></i></button>
                &nbsp;&nbsp;
              
                    <span data-toggle="modal" data-target="#storekb">
                        <button class="btn btn-success" data-placement="bottom" data-toggle="tooltip" title="Agregar Kb"><i class="fas fa-plus-square"></i></button>
                    </span>    
            
            </div>
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
                    <th><a wire:click.prevent="sortBy('subject')" role="button" href="#">
                        Asunto
                        @include('includes._sort-icon',['field'=>'subject'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('product')" role="button" href="#">
                        Producto
                        @include('includes._sort-icon',['field'=>'product'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('menu')" role="button" href="#">
                        Menú
                        @include('includes._sort-icon',['field'=>'menu'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                        Fec. Creación
                        @include('includes._sort-icon',['field'=>'created_at'])
                    </a></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kbs as $kb)
                <tr>
                    <td scope="row">{{$kb->id}}</td>
                    <td>{{$kb->subject}}</td>
                    <td>{{$kb->product}}</td>
                    <td>{{$kb->menu}}</td>
                    <td>{{date('d-m-Y',strtotime($kb->created_at))}}</td>
                    <td>
                        <div class="d-flex justify-content-center">                         
                            
                            
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                             
                              {{--   <a href="{{route('ReporteSoporte.ticket',$ticket->id)}}" class="btn btn-outline-danger"><span style="font-size: 20px; color: Red;"><i class="fas fa-file-pdf"></i></span></a>
                            --}}
                             
                                <a class="btn btn-primary btn-sm" href="{{route('base-conocimiento.show',$kb->id)}}" target="_blank" rel="noopener"><span class="text-center" style="vertical-align: sub"><i class="fas fa-eye"></i></span> </a>
                                                    
                           
                                <button wire:click="edit({{$kb->id}})" class="btn btn-warning" data-toggle="modal" data-target="#updatekb"><i class="fas fa-edit"></i></button>
                           
                               
                                <button wire:click="delete({{$kb->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deletekb"><i class="fas fa-trash-alt"></i></button>
                                
                              
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $kbs->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $kbs->firstItem() }} al {{ $kbs->lastItem() }} de {{ $kbs->total() }} resultados
        </div>
    </div>

</div>

