<div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" id="description" wire:model="description" name="description" placeholder="Descripción">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>            
    <div>
        <label for="digits">Color</label>
        <input wire:model="color" type="color" name="color" class="form-control {{$errors->has('color')?'is-invalid':''}}">
        @error('color')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div> 