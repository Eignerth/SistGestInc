<form>                
    <div class="form-group">
        <label for="name">Nombre y Apellidos</label>
        <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}"wire:model="name"placeholder="Nombre y Apellidos">
        @error('name')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="idkindident">Tipo de Doc. Identidad</label>
            <select wire:model="idkindident" class="custom-select">
                @foreach ($idkindidents as $idkindident)
                    <option value="{{$idkindident->id}}">{{$idkindident->description}}</option>                
                @endforeach
            </select>    
            @error('idkindident')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="kindident">Documento de Identidad</label>
            <input type="text" class="form-control {{$errors->has('kindident')?'is-invalid':''}}" wire:model="kindident" placeholder="Documento de Identidad">
            @error('kindident')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="ruc">RUC</label>
        <input type="text" max="11" class="form-control {{$errors->has('ruc')?'is-invalid':''}}" wire:model="ruc" placeholder="R.U.C.">
        @error('ruc')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telf">Teléfono</label>
            <input type="tel" max="11" class="form-control {{$errors->has('telf')?'is-invalid':''}}" wire:model="telf" placeholder="Teléfono">
            @error('telf')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="cel">Celular</label>
            <input type="tel" size="11" class="form-control {{$errors->has('cel')?'is-invalid':''}}" wire:model="cel" placeholder="Celular">
            @error('cel')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="ownemail">Email Personal</label>
        <input type="email" class="form-control {{$errors->has('ownemail')?'is-invalid':''}}" wire:model="ownemail" placeholder="Email Personal">
        @error('ownemail')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email Empresarial</label>
        <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" wire:model="email" placeholder="Email Empresarial">
        @error('email')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Dirección</label>
        <input type="text" class="form-control {{$errors->has('address')?'is-invalid':''}}" wire:model="address" placeholder="Dirección">
        @error('address')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="idpossitions">Cargo</label>
            <select wire:model="idpossitions" class="custom-select">
                @foreach ($possitions as $possition)
                    <option value="{{$possition->id}}">{{$possition->description}}</option>                
                @endforeach
            </select>    
            @error('idpossitions')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="dateborn">Fecha de Nacimiento</label>
            <input type="date" class="form-control {{$errors->has('dateborn')?'is-invalid':''}}" wire:model="dateborn" placeholder="Fecha de Nacimiento">
            @error('dateborn')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="addnote">Notas Adicionales</label>
        <textarea cols="30" rows="3" class="form-control {{$errors->has('addnote')?'is-invalid':''}}" wire:model="addnote" placeholder="Notas Adicionales"></textarea>
        @error('addnote')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>


    
</form>


