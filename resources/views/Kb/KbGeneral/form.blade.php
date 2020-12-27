<div>
    @include('includes.obligatorio')
    <div class="form-row">        
        <div class="form-group col-md-6">
            <label for="producto">Producto</label><span id="productohelp" class="text-danger">*</span>
            <div class="input-group">
                <select class="custom-select" wire:model="product"  aria-describedby="productohelp">
                    <option>Elige...</option>
                    @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->description}}</option>
                    @endforeach
                </select>
                @can('Ver Producto')
                &nbsp;&nbsp;
                <a class="btn btn-success" href="{{route('productos.index')}}" target="_blank" rel="noopener"><i class="fas fa-plus-square"></i></a>
                @endcan
            </div>            
            @error('product')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="menus">Menus</label>
            <div class="input-group">
                <select class="custom-select" wire:model="menu">
                    <option>Elige...</option>
                    @foreach ($menus as $menu)
                    <option value="{{$menu->id}}">{{$menu->description}}</option>
                    @endforeach
                </select>
            </div>            
            @error('menu')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    </div>
    <div class="form-row">        
        <div class="form-group col-md-6">
            <label for="submenu">Sub-Menú</label>
            <div class="input-group">
                <select class="custom-select" wire:model="submenu">
                    <option>Elige...</option>
                    @foreach ($submenus as $submenu)
                    <option value="{{$submenu->id}}">{{$submenu->description}}</option>
                    @endforeach
                </select>
            </div>            
            @error('submenu')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="opcion">Opción</label>
            <div class="input-group">
                <select class="custom-select" wire:model="option">
                    <option>Elige...</option>
                    @foreach ($options as $option)
                    <option value="{{$option->id}}">{{$option->description}}</option>
                    @endforeach
                </select>
            </div>            
            @error('option')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="asunto">Asunto</label><span id="asuntohelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('subject')?'is-invalid':''}}" wire:model="subject" placeholder="Asunto" aria-describedby="asuntohelp">
        @error('subject')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="mensaje">Descripción o Mensaje</label><span id="mensajehelp" class="text-danger">*</span>
        <textarea class="form-control {{$errors->has('message')?'is-invalid':''}} overflow-auto" style="resize: none" wire:model="message" cols="30" rows="4" placeholder="Descripción o Mensaje" aria-describedby="mensajehelp"></textarea>
        @error('message')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>

    @if ($mode==='edit')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="archivo">Archivos</label>
            <div>
                <input type="file" class="form-control-file" wire:model="files" multiple accept="text/plain,image/jpeg,image/png,image/jpg,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">        
                @error('files.*') <div class="error text-danger">{{ $message }}</div> @enderror    
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
                        @foreach ($detfiles as $key=>$file)
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
        {{-- <div class="form-group col-md-6">
            <label for="asunto">Ticket</label><span id="asuntohelp" class="text-danger">*</span>
            <input type="text" class="form-control {{$errors->has('subject')?'is-invalid':''}}"  placeholder="Asunto" aria-describedby="asuntohelp">
        </div>   --}}     
    </div>
    @endif
</div>