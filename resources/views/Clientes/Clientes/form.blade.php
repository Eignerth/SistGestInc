<form>                
    <div class="form-group">
        <label for="descripcion">Razón Social</label>
        <input type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" id="descripcion" wire:model="descripcion" name="descripcion" placeholder="Razón Social">
        @error('descripcion')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="ruc">Ruc</label>
        <input type="text" maxlength="11" class="form-control {{$errors->has('ruc')?'is-invalid':''}}" id="ruc" wire:model="ruc" name="ruc" placeholder="RUC">
        @error('ruc')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Dirección</label>
        <input type="text" class="form-control {{$errors->has('address')?'is-invalid':''}}" id="address" wire:model="address" name="address" placeholder="Dirección">
        @error('address')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="telf">Teléfono</label>
            <input type="text" class="form-control {{$errors->has('telf')?'is-invalid':''}}" id="telf" wire:model="telf" name="telf" placeholder="Teléfono">
            @error('telf')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="cel">Celular</label>
            <input type="text" class="form-control {{$errors->has('cel')?'is-invalid':''}}" id="cel" wire:model="cel" name="cel" placeholder="Celular">
            @error('cel')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" wire:model="email" name="email" placeholder="Email">
        @error('email')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="sector">Sector</label>
        <input type="text" class="form-control {{$errors->has('sector')?'is-invalid':''}}" id="sector" wire:model="sector" name="sector" placeholder="Sector">
        @error('sector')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="addnote">Datos Adicionales</label>
        <textarea name="addnote" class="form-control {{$errors->has('addnote')?'is-invalid':''}}" wire:model="addnote" id="addnote" cols="30" rows="4" placeholder="Datos Adicionales"></textarea>
        @error('addnote')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
</form>


