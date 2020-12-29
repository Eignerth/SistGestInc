<div>
    @include('includes.obligatorio')
    <form>
        <div class="form-group">
            <label for="descriptions">Descripción</label><span id="descriphelp" class="text-danger">*</span>
            <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción" aria-describedby="descriphelp">
            @error('description')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
    </form>
</div>
