<form>                
    <div class="form-group">
        <label for="abbreviation">Abreviatura</label>
        <input type="text" size="3" class="form-control {{$errors->has('abbreviation')?'is-invalid':''}}" id="abbreviation" wire:model="abbreviation" name="abbreviation" placeholder="Abreviatura">
        @error('abbreviation')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" id="description" wire:model="description" name="description" placeholder="Descripción">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
    <div>
        <label for="digits">N° Digitos</label>
        <input wire:model="digits" type="number" name="digits" id="digits" class="form-control {{$errors->has('digits')?'is-invalid':''}}">
        @error('digits')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</form>