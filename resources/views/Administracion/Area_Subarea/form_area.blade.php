<div>
    <small class="text-danger">
        <strong>
            Campos Obligatorios (*)
        </strong>
    </small>                
    <div class="form-group">
        <label for="abbrev">Abreviatura</label><span id="abrevhelp" class="text-danger">*</span>
        <input type="text" size="3" class="form-control {{$errors->has('abbrev')?'is-invalid':''}}" id="abbrev" wire:model="abbrev" name="abbrev" placeholder="Abreviatura" aria-describedby="abrevhelp">
        @error('abbrev')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="descrip">Descripción</label><span id="descriptionhelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('descrip')?'is-invalid':''}}" id="descrip" wire:model="descrip" name="descrip" placeholder="Descripción" aria-describedby="descriptionhelp">
        @error('descrip')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div>

    



