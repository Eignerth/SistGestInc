
<small class="text-muted">
    Campos Obligatorios (*)
</small>
<div class="form-row">
    <div class="form-group col-md-6">
        @if ($mode==='create')
            <label for="serie">Serie</label><span id="seriehelp" class="text-danger">*</span>
            <select class="custom-select" wire:model="serie" name="serie" aria-describedby="seriehelp">
                <option>Elige...</option>
                @foreach ($series as $serie)
                <option value="{{$serie->id}}">{{$serie->serie}}-{{$serie->area}}-######</option>
                @endforeach
            </select>
            @error('serie')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        @endif

        @if ($mode==='edit')
            <label for="serie">Serie</label>
            <input type="text" class="form-control" wire:model="serie" disabled>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label for="contacto">Contacto</label><span id="contactohelp" class="text-danger">*</span>
        <div class="input-group">
            <select class="custom-select" wire:model="contacto" name="contacto" aria-describedby="contactohelp">
                <option>Elige...</option>
                @foreach ($contacts as $contact)
                <option value="{{$contact->id}}">{{$contact->customers}}&nbsp;|&nbsp;{{$contact->name}}</option>
                @endforeach
            </select>
            &nbsp;&nbsp;
            <a class="btn btn-success" href="{{route('contactos.index')}}" target="_blank" rel="noopener"><i class="fas fa-plus-square"></i></a>
        </div>
        @error('contacto')
        <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div> 

<div class="form-row">
    
    <div class="form-group col-md-6">
        <label for="clasificacion">Clasificación</label><span id="clasifhelp" class="text-danger">*</span>
        <select class="custom-select" wire:model="clasificacion" name="clasificacion" aria-describedby="clasifhelp">
            <option>Elige...</option>
            @foreach ($classifications as $classification)
            <option value="{{$classification->id}}">{{$classification->description}}</option>
            @endforeach
        </select>
        @error('clasificacion')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="canal">Canal de Atención</label><span id="canalhelp" class="text-danger">*</span>
        <select class="custom-select" wire:model="canal" name="canal" aria-describedby="canalhelp">
            <option>Elige...</option>
            @foreach ($channels as $canal)
            <option value="{{$canal->id}}">{{$canal->description}}</option>
            @endforeach
        </select>
        @error('canal')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
</div>
<div class="form-row">
    
    <div class="form-group col-md-6">
        <label for="producto">Producto</label><span id="productohelp" class="text-danger">*</span>
        <select class="custom-select" wire:model="producto" name="producto" aria-describedby="productohelp">
            <option>Elige...</option>
            @foreach ($products as $product)
            <option value="{{$product->id}}">{{$product->description}}</option>
            @endforeach
        </select>
        @error('producto')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="prioridad">Prioridad</label><span id="prioridadhelp" class="text-danger">*</span>
        <select class="custom-select" wire:model="prioridad" name="prioridad" aria-describedby="prioridadhelp">
            <option>Elige...</option>
            @foreach ($priorities as $priority)
            <option value="{{$priority->id}}">{{$priority->description}}</option>
            @endforeach
        </select>
        @error('prioridad')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
</div>
<div class="form-group ">
    <label for="status">Status de Avance</label><span id="statushelp" class="text-danger">*</span>
    <select class="custom-select" wire:model="status" aria-describedby="statushelp">
        <option>Elige...</option>
        @foreach ($statuses as $status)
        <option value="{{$status->id}}">{{$status->description}}</option>
        @endforeach
    </select>
    @error('status')
        <div class="invalid-feedback"> {{$message}} </div>                        
    @enderror
</div>
<div class="form-group">
    <label for="asunto">Asunto</label><span id="asuntohelp" class="text-danger">*</span>
    <input type="text" class="form-control {{$errors->has('asunto')?'is-invalid':''}}" wire:model="asunto" placeholder="Asunto" aria-describedby="asuntohelp">
    @error('asunto')
        <div class="invalid-feedback"> {{$message}} </div>                        
    @enderror
</div>
<div class="form-group">
    <label for="mensaje">Descripción o Mensaje</label><span id="mensajehelp" class="text-danger">*</span>
    <textarea class="form-control {{$errors->has('mensaje')?'is-invalid':''}} overflow-auto" style="resize: none" wire:model="mensaje" cols="30" rows="4" placeholder="Descripción o Mensaje" aria-describedby="mensajehelp"></textarea>
    @error('mensaje')
        <div class="invalid-feedback"> {{$message}} </div>                        
    @enderror
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        <label for="dateregistro">Fecha de Registro</label><span id="fecregistro" class="text-danger">*</span>
        <input wire:model="dateregister" type="date" class="form-control"  aria-describedby="fecregistro">
        @error('dateregister')
        <div class="text-danger">{{ $message }}</div>                       
        @enderror
    </div>       
    <div class="form-group col-md-3">
        <label for="timeregister">Hora de Registro</label><span id="timeregsitro" class="text-danger">*</span>
        <input wire:model="timeregister" type="time" class="form-control"  aria-describedby="timeregsitro">
        @error('timeregister')
        <div class="text-danger">{{ $message }}</div>                        
        @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="datecierre">Fecha de Cierre</label>
        <div class="input-group">
            <input wire:model="dateexpire" type="date" class="form-control"  id="datecierre">
        </div>
    </div>       
    <div class="form-group col-md-3">
        <label for="timecierre">Hora de Cierre</label>
        <div class="input-group">
            <input wire:model="timeexpire" type="time" class="form-control" id="timecierre">
        </div>
    </div>
</div>
@if ($mode==='edit')

<div class="form-group">
    <label for="archivo">Archivos</label>
    <div>
        <input type="file" class="form-control-file" wire:model="archivos" multiple>        
        @error('archivos.*') <div class="error text-danger">{{ $message }}</div> @enderror    
    </div>
    <div>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del Archivo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $key=>$file)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$file->tittle}}</td>
                    <td><button class="btn btn-sm btn-danger" wire:click="deleteFile({{$file->id}})">Eliminar</button></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>        

@endif


    








