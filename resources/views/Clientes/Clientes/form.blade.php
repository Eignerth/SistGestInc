<div>
    @include('includes.obligatorio')
    <form>                
        <div class="form-group">
            <label for="descripcion">Razón Social</label><span id="razonhelp" class="text-danger">*</span>
            <input type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" id="descripcion" wire:model="descripcion" placeholder="Razón Social" aria-describedby="razonhelp">
            @error('descripcion')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group">
            <label for="ruc">Ruc</label><span id="ruchelp" class="text-danger">*</span>
            <input type="text" maxlength="11" class="form-control {{$errors->has('ruc')?'is-invalid':''}}" id="ruc" wire:model="ruc" placeholder="RUC" aria-describedby="ruchelp">
            @error('ruc')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" class="form-control {{$errors->has('address')?'is-invalid':''}}" id="address" wire:model="address" placeholder="Dirección">
            @error('address')
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
            <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" wire:model="email" placeholder="Email">
            @error('email')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group">
            <label for="sector">Sector</label>
            <input type="text" class="form-control {{$errors->has('sector')?'is-invalid':''}}" id="sector" wire:model="sector" placeholder="Sector">
            @error('sector')
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


