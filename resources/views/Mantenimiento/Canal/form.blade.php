<form>
    <div class="form-group">
        <label for="descriptions">Descripción</label>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</form>