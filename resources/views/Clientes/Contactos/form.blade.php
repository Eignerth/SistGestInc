<div>
    @include('includes.obligatorio')
    <form>                
        <div class="form-group">
            <label for="customer">Empresa</label><span id="emphelp" class="text-danger">*</span>
            <div class="input-group">
                <select class="form-control" wire:model="customer" aria-describedby="emphelp">
                    <option>Elige...</option>
                    @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->descripcion}}</option>
                    @endforeach
                </select>
                @can('Ver Soporte de Clientes')
                &nbsp;&nbsp;
                <a class="btn btn-success" href="{{route('soporte_de_clientes.index')}}" target="_blank" rel="noopener"><i class="fas fa-plus-square"></i></a>
                @endcan
            </div>
            
            @error('customer')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    
        <div class="form-group">
            <label for="ruc">Nombres y Apellidos</label><span id="nomhelp" class="text-danger">*</span>
            <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" wire:model="name" placeholder="Nombres y Apellidos" aria-describedby="nomhelp">
            @error('ruc')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label for="telf">Teléfono</label>
                <input type="text" class="form-control {{$errors->has('telf')?'is-invalid':''}}" id="telf" wire:model="telf" placeholder="Teléfono">
                @error('telf')
                    <div class="invalid-feedback"> {{$message}} </div>                        
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="cel">Celular</label>
                <input type="text" class="form-control {{$errors->has('cel')?'is-invalid':''}}" id="cel" wire:model="cel" placeholder="Celular">
                @error('cel')
                    <div class="invalid-feedback"> {{$message}} </div>                        
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" wire:model="email" placeholder="Correo Electrónico">
            @error('email')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group">
            <label for="sector">Cargo</label>
            <input type="text" class="form-control {{$errors->has('possition')?'is-invalid':''}}" wire:model="possition" placeholder="Cargo">
            @error('possition')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group">
            <label for="addnote">Datos Adicionales</label>
            <textarea class="form-control {{$errors->has('addnote')?'is-invalid':''}}" wire:model="addnote" id="addnote" cols="30" rows="4" placeholder="Datos Adicionales"></textarea>
            @error('addnote')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    </form>
</div>



