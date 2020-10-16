<form>                
    <div class="form-group">
        <label for="abbrev">Abreviatura</label>
        <input type="text" size="3" class="form-control {{$errors->has('abbrev')?'is-invalid':''}}" id="abbrev" wire:model="abbrev" name="abbrev" placeholder="Abreviatura">
        @error('abbrev')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="descrip">Descripción</label>
        <input type="text" class="form-control {{$errors->has('descrip')?'is-invalid':''}}" id="descrip" wire:model="descrip" name="descrip" placeholder="Descripción">
        @error('descrip')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</form>